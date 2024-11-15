module "ec2" {
    source = "./module/ec2"
    ami = var.ami
    instance_type = var.instance_type
    key_name = var.key_name
    instance_count  = var.instance_count
    instance_name = var.instance_name
    }

module "sg" {
  source = "./module/sg"
}


