output "secret_value" {
  value     =  module.build.github_secret
  sensitive = true # Mark as sensitive to prevent logging in plain text

}

output "github_secret" {
  value = module.build.github_secret
  sensitive = true
}