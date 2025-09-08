module "ec2" {
    source = "./module/ec2"
    ami = var.ami
    instance_type = var.instance_type
    key_name = var.key_name
    instance_count  = var.instance_count
    instance_name = var.instance_name
    volume_size = var.volume_size
    volume_type = var.volume_type

    }

module "sg" {
  source = "./module/sg"
  vpc_id = module.vpc.vpc_id
}

module "vpc" {
    source = "./module/vpc"
}

module "ecs" {
    source = "./module/ecs"
    aws_ecs_cluster_name = var.aws_ecs_cluster_name
    task_definition_family_name = var.task_definition_family_name
    task_definition_cpu = var.task_definition_cpu
    task_definition_memory = var.task_definition_memory
    container_definitions_name = var.container_definitions_name
    container_definitions_cpu = var.container_definitions_cpu
    container_definitions_memory = var.container_definitions_memory
    container_image = "akshayv1601/java_project"
    execution_role_arn = module.iam-role.tasks-service-role-arn
    containerPort = var.containerPort
    hostPort = var.hostPort
    aws_ecs_service_name = var.aws_ecs_service_name
    desired_count = var.desired_count
    service_sg = [module.sg.service_sg]
    subnet_id = module.vpc.subnet_id

}

module "iam-role" {
    source = "./module/iam-role"
    tasks-service-role = var.tasks-service-role
}