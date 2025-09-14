output "secret_value" {
  value     = jsondecode(data.aws_secretsmanager_secret_version.codebuild_token_secret_version.secret_string)
  sensitive = true # Mark as sensitive to prevent logging in plain text
}
output "github_secret" {
      value = jsondecode(data.aws_secretsmanager_secret_version.codebuild_token_secret_version.secret_string).Token
      sensitive = true
    }
output "build_project_name" {
  value = aws_codebuild_project.codebuild_project.id
}