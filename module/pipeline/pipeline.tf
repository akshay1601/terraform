resource "aws_codepipeline" "codepipeline" {
  name     = "tf-test-pipeline"
  role_arn = module.iam-role.codepipeline_role.arn


  artifact_store {
    location = module.s3.aws_s3_bucket.codepipeline_bucket.bucket
    type     = "S3"

  }
  stage {
    name = "Source"

    action {
      name             = "Source"
      category         = "Source"
      owner            = "ThirdParty"
      provider         = "GitHub"
      version          = "1"
      output_artifacts = ["source_output"]

      configuration = {
        Owner = "akshay1601"
        Repo = "userwebpage"
        OAuthToken   = jsondecode(data.aws_secretsmanager_secret_version.codebuild_token_secret_version.secret_string)["Token"]
        Branch      = "main"
      }
    }
 
  }
 
  


  stage {
    name = "Build"

    action {
      name             = "Build"
      category         = "Build"
      owner            = "AWS"
      provider         = "CodeBuild"
      input_artifacts  = ["source_output"]
      output_artifacts = ["build_output"]
      version          = "1"

      configuration = {
        ProjectName = module.build.aws_codebuild_project.codebuild_project.id
      }
    }
  }

#   stage {
#     name = "Deploy"

#     action {
#       name            = "Deploy"
#       category        = "Deploy"
#       owner           = "AWS"
#       provider        = "CodeDeployToECS"
#       input_artifacts = ["build_output"]
#       version         = "1"

#       configuration = {
#         AppSpecTemplateArtifact  = "build_output"
#         ApplicationName =  aws_codedeploy_app.deploy_ecs.name
#         DeploymentGroupName = aws_codedeploy_deployment_group.example.deployment_group_name
#         TaskDefinitionTemplatePath  =  "taskdef.json"
#         AppSpecTemplatePath =  "appspec.yaml"
#         TaskDefinitionTemplateArtifact  =  "build_output"

#   }
#   }
# }
}

resource "aws_codepipeline_webhook" "bar" {
  name            = "moneyuncle-webhook-github-bar"
  authentication  = "GITHUB_HMAC"
  target_action   = "Source"
  target_pipeline = aws_codepipeline.codepipeline.name

  authentication_configuration {
    secret_token = jsondecode(data.aws_secretsmanager_secret_version.codebuild_token_secret_version.secret_string)["Token"]
  }

  filter {
    json_path    = "$.ref"
    match_equals = "refs/heads/{main}"
  }
}
