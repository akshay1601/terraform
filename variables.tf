#EC2
variable "ami" {}
variable "instance_type" {}
variable "key_name" {}
variable "instance_count" {}
variable "instance_name" {}
variable "volume_size" {}
variable "volume_type" {}


#ECS Cluster
variable "aws_ecs_cluster_name" {}

#ECS Task defination
variable "task_definition_cpu" {}
variable "task_definition_memory" {}
variable "task_definition_family_name" {}

#ECS container_definitions
variable "container_definitions_name" {}
variable "container_definitions_cpu" {}
variable "container_definitions_memory" {}
variable "containerPort" {}
variable "hostPort" {}

#ECS Service
variable "aws_ecs_service_name" {}
variable "desired_count" {}

