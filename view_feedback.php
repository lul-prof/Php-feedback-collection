<!DOCTYPE html>
<html lang="en">
<head>
        <title>View Feedback</title>
</head>
<body>
    <?php
        $con=new mysqli("localhost","root","","campaign__feedback");
        if(!$con)
        {
            echo "Could Not Connect too Database";
        }
        $sql="SELECT*FROM feedback";
        $result=$con->query($sql);
        echo"<table border=1>";
        echo"<th>";
        echo"ID";
        echo"</th>";

        echo"<th>";
        echo"Name";
        echo"</th>";

        echo"<th>";
        echo"email";
        echo"</th>";

        echo"<th>";
        echo"FeedBack";
        echo"</th>";

        echo"<th>";
        echo"Rating";
        echo"</th>";

        echo"<th>";
        echo"Submission Date";
        echo"</th>";
        while($row=$result->fetch_array())
        {
            echo"<tr>";
            echo"<td>".$row['id']."</td>";
            echo"<td>".$row['name']."</td>";
            echo"<td>".$row['email']."</td>";
            echo"<td>".$row['feedback']."</td>";
            echo"<td>".$row['rating']."</td>";
            echo"<td>".$row['submission_date']."</td>";
            echo"<tr>";
        }
        echo "</table>";

    ?>
    
</body>
</html>