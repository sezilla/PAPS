<?php
   include "db_conn.php";
    if(isset($_POST['text'])){
        $text = $_POST['text'];

        $sql = "INSERT INTO student_attendance(Student_Id, name, time) VALUES('$text', NOW(), NOW())";
        if($conn->query($sql) === TRUE){
            ECHO "Successfully inserted";
        }else{
            echo "Error : " . $sql . "<br>" . $conn->error;

        }
        header("location: index.php");
    }
    $conn->close();

?>    