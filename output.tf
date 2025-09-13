output "secret_value" {
  value     =  module.build.secret_value
  sensitive = true # Mark as sensitive to prevent logging in plain text
  
}
