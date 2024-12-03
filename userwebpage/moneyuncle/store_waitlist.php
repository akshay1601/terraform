<?php
$databaseHost = 'moneyuncle-serverless.cluster-cejmaivmyhxu.ap-south-1.rds.amazonaws.com';   //your db host 
$databaseName = 'moneyuncle_prod';  //your db name 
$databaseUsername = 'postgres';    //your db username 
$databasePassword = 'SX623LQX6xPFrPzc';//   db password

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (isset($_REQUEST['email']) && isset($_REQUEST['mobile']) && $_REQUEST['email']!="" && $_REQUEST['mobile']!=""){
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['mobile'];

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    $sql = "SELECT * FROM `waitlist_access` WHERE `email` = '".$email."' OR `mobile`= '".$phone."'";

    $mysqliCheck = $mysqli->query($sql);

    $rows_count_value = mysqli_num_rows($mysqliCheck);
    
    if ($rows_count_value > 0){
        echo "0";        
    }
    else{
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['mobile'];
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `waitlist_access` (`email`, `mobile`, `created`) VALUES ('".$email."', '".$phone."', '".$date."')";
        $mysqliInsert = $mysqli->query($sql);

        /*
        * Email Functionality start
        */
        
        $get_template_select = "SELECT * FROM `email_templates` WHERE `id` = '12'";
        $get_template_query = $mysqli->query($get_template_select);
        $fetch_template = mysqli_fetch_array($get_template_query);
        
        //$body  = $fetch_template['body'];

        $name = explode('@',$email);
        $searches = array(
            '{user_name}',
        );
        $replacements = array(
            $name[0],
        );

        $message_new = str_replace($searches, $replacements, $fetch_template['body']);
        
        $subject  = $fetch_template['subject'];
        $from_email  = $fetch_template['from_email'];
        $format  = 'html';
        $email_status = 0;
        
        $sql_email_queue = "INSERT INTO `email_queues` (`to_email`, `subject`, `body_message`,`from_email`,`email_format`,`email_status`) VALUES 
        ('".$email."', '".$subject."', '".$message_new."', '".$from_email."','".$format."','".$email_status."')";
        $mysqliemailInsert = $mysqli->query($sql_email_queue);
        
        /*
        * Mail functionality Ends
        */
        
        echo "1";
        
    }
}
else{
    echo "500";
}

?>
