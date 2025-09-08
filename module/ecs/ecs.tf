#Creating ECS cluster
resource "aws_ecs_cluster" "ecs_cluster" {
  name = var.aws_ecs_cluster_name
}

#Creating ecs task defination
resource "aws_ecs_task_definition" "ecs_task_definition" {
  family                   = var.task_definition_family_name
  requires_compatibilities = ["FARGATE"]
  network_mode             = "awsvpc"
  cpu                      = var.task_definition_cpu
  memory                   = var.task_definition_memory
  execution_role_arn       = var.execution_role_arn
  container_definitions = jsonencode([
    {
      name      = var.container_definitions_name
      image     = var.container_image
      cpu       = var.container_definitions_cpu
      memory    = var.container_definitions_memory
      essential = true
      portMappings = [
        {
          containerPort = var.containerPort
          hostPort      = var.hostPort
        }
      ]
    }
  ])
runtime_platform {
    operating_system_family = "LINUX"
    cpu_architecture        = "X86_64"
  }

}

#Creating ecs service
resource "aws_ecs_service" "ecs_service" {
  name            = var.aws_ecs_service_name
  cluster         = aws_ecs_cluster.ecs_cluster.id
  task_definition = aws_ecs_task_definition.ecs_task_definition.arn
  desired_count   = var.desired_count
  launch_type     = "FARGATE"
  
  network_configuration {
    security_groups = [aws_security_group.task-sg.id]
    subnets         = aws_subnet.private.*.id
  
  }

  deployment_controller {
    type = "CODE_DEPLOY"
  }

  load_balancer {
    target_group_arn = aws_lb_target_group.ip-example.arn
    container_name   = var.container_definitions_name
    container_port   = var.containerPort
  }
}
