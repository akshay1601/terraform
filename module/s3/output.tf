output "s3_bucket_id" {
  value = aws_s3_bucket.aws_s3_bucket_build.id
}

output "codepipeline_bucket" {
  value = aws_s3_bucket.codepipeline_bucket.bucket
}