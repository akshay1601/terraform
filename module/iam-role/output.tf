output "tasks-service-role-arn" {
  value = aws_iam_role.tasks-service-role.arn
}

output "service_role_arn" {
  value = aws_iam_role.tf-codebuild-role.arn
}

output "aws_iam_role_pipeline" {
  value = aws_iam_role.codepipeline_role.arn
}