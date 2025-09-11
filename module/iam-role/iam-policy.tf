#ECS Service policy
data "aws_iam_policy_document" "tasks-service-assume-policy" {
  statement {
    actions = ["sts:AssumeRole"]

    principals {
      type        = "Service"
      identifiers = ["ecs-tasks.amazonaws.com"]
    }
  }
}

resource "aws_iam_role_policy_attachment" "tasks-service-role-attachment" {
  role       = aws_iam_role.tasks-service-role.name
  policy_arn = "arn:aws:iam::aws:policy/service-role/AmazonECSTaskExecutionRolePolicy"
}


















#AWS build policy
# data "aws_iam_policy_document" "tf-cicd-build-policies" {
#     statement{
#         sid = ""
#         actions = ["logs:*", "s3:*", "codebuild:*", "secretsmanager:*","iam:*","codecommit:GitPull"]
#         resources = ["*"]
#         effect = "Allow"
#     }
# }

resource "aws_iam_policy" "tf-cicd-build-policy" {
    name = "tf-cicd-build-policy"
    path = "/"
    description = "Codebuild policy"
    policy = <<EOF
{
    "Version": "2012-10-17",
    "Statement": [
        {
            "Effect": "Allow",
            "Resource": [
                "*"
            ],
            "Action": [
                "logs:CreateLogGroup",
                "logs:CreateLogStream",
                "logs:PutLogEvents",
                "ecr:GetAuthorizationToken",
                "ecr:*"

                
            ]
        },
        {
            "Effect": "Allow",
            "Resource": [
                "*"
            ],
            "Action": [
                "s3:PutObject",
                "s3:GetObject",
                "s3:GetObjectVersion",
                "s3:GetBucketAcl",
                "s3:GetBucketLocation"
            ]
        },
        {
            "Effect": "Allow",
            "Action": [
                "codebuild:CreateReportGroup",
                "codebuild:CreateReport",
                "codebuild:UpdateReport",
                "codebuild:BatchPutTestCases",
                "codebuild:BatchPutCodeCoverages"
                
            ],
            "Resource": [
                "*"
            ]
        }       
    ]
}
EOF
}

resource "aws_iam_role_policy_attachment" "tf-cicd-codebuild-attachment1" {
    policy_arn  = aws_iam_policy.tf-cicd-build-policy.arn
    role        = aws_iam_role.tf-codebuild-role.id
}

# resource "aws_iam_role_policy_attachment" "tf-cicd-codebuild-attachment2" {
#     policy_arn  = "arn:aws:iam::aws:policy/PowerUserAccess"
#     role        = aws_iam_role.tf-codebuild-role.id
# }
