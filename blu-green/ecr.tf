resource "aws_ecr_repository" "image_repo" {
  name                 = "moneyuncle"
  image_tag_mutability = "MUTABLE"

  #  image_scanning_configuration {
  #    scan_on_push = true
  #  }
}

output "image_repo_url" {
  value = aws_ecr_repository.image_repo.repository_url
}
