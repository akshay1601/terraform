
resource "aws_codepipeline" "codepipeline" {
  name     = "tf-test-pipeline"
  role_arn = var.role_arn_pipeline


  artifact_store {
    location = var.location_s3_pipeline
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
        OAuthToken   = var.secret_github
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
        ProjectName = var.build_project_name
      }
    }
  }


  stage {
    name = "Deploy"

    action {
      name            = "Deploy"
      category        = "Deploy"
      owner           = "AWS"
      provider        = "ECS"
      input_artifacts = ["build_output"]
      version         = "1"

      configuration = {
        ClusterName = "my-ecs-cluster"
        ServiceName  = "my-ecs-service"
        FileName = imagedefinitions.json
        
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
    secret_token = var.secret_github
  }

  filter {
    json_path    = "$.ref"
    match_equals = "refs/heads/{main}"
  }
}
