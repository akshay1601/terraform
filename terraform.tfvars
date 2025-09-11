ami = "ami-005fc0f236362e99f"
instance_type = "t2.medium"
key_name = "akshay"
instance_count =  5
instance_name = ["Master","Slave1","Slave2","Docker","Jenkins"]
volume_size = 20
volume_type = "gp2"


#ECS
  aws_ecs_cluster_name = "my-ecs-cluster"
  task_definition_family_name = "my-ecs-task"
  task_definition_cpu = 256
  task_definition_memory = 1024
  container_definitions_name = "first"
  container_definitions_cpu = 256
  container_definitions_memory = 1024
  containerPort = 80
  hostPort = 80
  aws_ecs_service_name = "my-ecs-service"
  desired_count = 2
  container_image = "227457566609.dkr.ecr.us-east-1.amazonaws.com/moneyuncle"
  tasks-service-role = "moneyuncleecsrole"


#build
 bucket_name= "code-build-aws-123-v1-latest"  
 acl = "private"