
resource "aws_s3_bucket" "aws_s3_bucket_build" {
  bucket = var.bucket_name
}

# resource "aws_s3_bucket_acl" "aws_s3_bucket_acl_build" {
#   bucket = aws_s3_bucket.aws_s3_bucket_build.id
#   acl    = var.acl
# }

#CodePipeline
resource "aws_s3_bucket" "codepipeline_bucket" {
  bucket = "akshayvirkhare1601qwerty12-v1"
}

resource "aws_s3_bucket_acl" "codepipeline_bucket_acl" {
  bucket = aws_s3_bucket.codepipeline_bucket.id
  acl    = "private"
}
