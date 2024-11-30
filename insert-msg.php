<?php
    include 'connect.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try{
            //Your SQL query here
            $name = $_POST["mname"];
            $email = $_POST["memail"];
            $number = $_POST["mnumber"];
            $text = $_POST["mtext"];

            $sql = "INSERT INTO msg_table (contact_name, contact_email, contact_no, contact_msg)
                    VALUES ('".$name."', '".$email."', '".$number."', '".$text."')";

            $stmt = sqlsrv_query( $conn, $sql);
            if( $stmt === false ) {
                die( print_r(sqlsrv_errors(), true));
            }
            
            sqlsrv_close($conn);
        }
        catch(Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }
?>