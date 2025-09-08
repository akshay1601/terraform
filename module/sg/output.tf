output "service_sg" {
  value = aws_security_group.service-sg.id
}

output "alb_sg" {
  value = aws_security_group.alb-sg.id
}