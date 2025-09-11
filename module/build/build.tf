resource "aws_codebuild_project" "codebuild_project" {
  name          = "aws-code-build-project"
  description   = "aws-code-build-project"
  build_timeout = "5"
  service_role  = var.service_role_arn

  artifacts {
    type = "NO_ARTIFACTS"
  }

  environment {
    compute_type                = "BUILD_GENERAL1_SMALL"
    image                       = "aws/codebuild/standard:5.0"
    type                        = "LINUX_CONTAINER"
    privileged_mode             = true
    image_pull_credentials_type = "CODEBUILD"
    environment_variable {
      name  = "AWS_ACCOUNT"
      value = "565314625672"
    }

    environment_variable {
      name  = "AWS_REGION"
      value = "us-east-1"
    }
       
  }

  logs_config {
    cloudwatch_logs {
      group_name  = "log-group"
      stream_name = "log-stream"
    }

    s3_logs {
      status   = "ENABLED"
      location = "${var.s3_bucket_id}/build-log"
    }
  }

  source {
    type            = "GITHUB"
    location        = "https://github.com/akshay1601/userwebpage.git"
    git_clone_depth = 1
    buildspec = <<BUILDSPEC
version: 0.2
phases:
  pre_build:
    commands:
      - echo Logging in to Amazon ECR...
      - account_no=$(aws sts get-caller-identity --query "Account" --output text)
      - aws ecr get-login-password --region us-east-1 | docker login --username AWS --password-stdin $account_no.dkr.ecr.us-east-1.amazonaws.com
      - REPOSITORY_URI=$account_no.dkr.ecr.us-east-1.amazonaws.com/moneyuncle
      - CONTAINER_NAME=first
      - COMMIT_HASH=$(echo $CODEBUILD_RESOLVED_SOURCE_VERSION | cut -c 1-7)
      - IMAGE_TAG=$${COMMIT_HASH:=latest}         
  build:
    commands:
      - echo Building the Docker image...
      - docker build -t moneyuncle:latest .
      - docker tag moneyuncle:latest $REPOSITORY_URI:latest
  post_build:
    commands:
      - echo Build completed on `date`
      - echo Pushing the Docker image...
      - docker push $REPOSITORY_URI:latest
      - printf '[{"name":"%s","imageUri":"%s"}]' $CONTAINER_NAME $REPOSITORY_URI:latest > imageDetail.json
      - pwd
artifacts:
  files: 
    - 'image*.json'
    - 'appspec.yaml'
    - 'taskdef.json'
  secondary-artifacts:
    DefinitionArtifact:
      files:
        - appspec.yaml
        - taskdef.json
    ImageArtifact:
      files:
        - imageDetail.json  
BUILDSPEC

  }

  tags = {
    Environment = "Test"
  }
}
