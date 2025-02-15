resource "aws_instance" "ec2_instance" {
    ami = var.ami
    instance_type = var.instance_type
    key_name = var.key_name
    count = var.instance_count
    user_data  = <<-EOF
            #!/bin/bash
            sudo apt-get update -y
            cd /home/ubuntu
            touch test.txt 
            sudo apt-get install openjdk-17-jdk -y
            sudo echo "JAVA_HOME=/usr/lib/jvm/java-17-openjdk-amd64" >> /etc/environment
            sudo source /etc/environment
            sudo echo "PasswordAuthentication yes" > /etc/ssh/sshd_config.d/60-cloudimg-settings.conf
    EOF
    
    root_block_device {
      volume_size = var.volume_size
      volume_type = var.volume_type
    }

    tags = {
        Name =  var.instance_name[count.index]
    }
}   