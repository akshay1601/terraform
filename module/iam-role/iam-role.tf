#ECS Service role
resource "aws_iam_role" "tasks-service-role" {
  name               = var.tasks-service-role
  path               = "/"
  assume_role_policy = data.aws_iam_policy_document.tasks-service-assume-policy.json
}



#AWS build role
resource "aws_iam_role" "tf-codebuild-role" {
  name = "tf-codebuild-role"

  assume_role_policy = <<EOF
{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Action": "sts:AssumeRole",
      "Principal": {
        "Service": "codebuild.amazonaws.com"
      },
      "Effect": "Allow",
      "Sid": ""
    }
  ]
}
EOF

}
