
resource "aws_s3_bucket" "aws_s3_bucket_build" {
  bucket = var.bucket_name
}

# resource "aws_s3_bucket_acl" "aws_s3_bucket_acl_build" {
#   bucket = aws_s3_bucket.aws_s3_bucket_build.id
#   acl    = var.acl
# }
