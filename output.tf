output "secret_value" {
  value     =  module.build.secret_value
  sensitive = true # Mark as sensitive to prevent logging in plain text

}

output "github_secret" {
  value = module.build.github_secret
  sensitive = true
}

# output "codepipeline_webhook_url" {
#   value = module.pipeline.codepipeline_webhook_url
# }