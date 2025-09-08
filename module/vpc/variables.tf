# ---------------------------------------------------------------------------------------------------------------------
# VARIABLES

variable "stack" {
  description = "Name of the stack."
  default     = "GameDay"
}

variable "vpc_cidr" {
  description = "CIDR for the VPC"
  default     = "172.17.0.0/16"
}

variable "az_count" {
  description = "Number of AZs to cover in a given AWS region"
  default     = "2"
}





