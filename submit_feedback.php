<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];
    $rating=$_POST['rating'];

    $con=new mysqli("localhost","root","","campaign__feedback");
    if($con->connect_error)
    {
        die("Connection failed:".$con->connect_error);
    }
    $sql="INSERT INTO feedback (name,email,feedback,rating) VALUES ('$name','$email','$feedback','$rating')";
    $submit=$con->query($sql);
    if($submit){
        echo"<script> alert('Feedback Uploaded Successfully'); window.location.href='view_feedback.php'</script>";
    }else{
        echo"Error:".$sql."<br>".$con->close();
    }
    $con->close();
?>



