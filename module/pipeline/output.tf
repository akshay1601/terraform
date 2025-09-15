# output "pipeline_role" {
#   value =  module.iam-role.pipeline_role
# }

output "codepipeline_webhook_url" {
  description = "The URL of the AWS CodePipeline webhook."
  value       = aws_codepipeline_webhook.bar.url
}
