resource "aws_lb" "service_alb" {
  name               = "service-lb-tf"
  internal           = false
  load_balancer_type = "application"
  security_groups    = [aws_security_group.alb-sg.id]
  subnets            = var.public_subnet_id


  tags = {
    Environment = "production"
  }
}

resource "aws_lb_target_group" "ip-service" {
  name        = "tf-service-lb-tg"
  port        = 80
  protocol    = "HTTP"
  target_type = "ip"
  vpc_id      = var.vpc_id
}

# resource "aws_lb_target_group" "ip-example-new" {
#   name        = "tf-service-lb-tg-new"
#   port        = 80
#   protocol    = "HTTP"
#   target_type = "ip"
#   vpc_id      = aws_vpc.main.id
# }




resource "aws_lb_listener" "front_end" {
  load_balancer_arn = aws_lb.service_alb.id
  port              = 80
  protocol          = "HTTP"

  default_action {
    type             = "forward"
    target_group_arn = aws_lb_target_group.ip-service.arn
  }
}
