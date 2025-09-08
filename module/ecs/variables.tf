#Cluster
variable "aws_ecs_cluster_name" {}

#Task defination
variable "execution_role_arn" {}
variable "task_definition_cpu" {}
variable "task_definition_memory" {}
variable "task_definition_family_name" {}

#container_definitions
variable "container_definitions_name" {}
variable "container_image" {}
variable "container_definitions_cpu" {}
variable "container_definitions_memory" {}
variable "containerPort" {}
variable "hostPort" {}

#Service
variable "aws_ecs_service_name" {}
variable "desired_count" {}
