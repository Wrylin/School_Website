<?php
    include 'connect.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try{
            //Your SQL query here
            $name = $_POST["rname"];
            $email = $_POST["remail"];
            $text = $_POST["rtext"];

            $sql = "INSERT INTO review_table (review_name, review_email, review_text)
                    VALUES ('".$name."', '".$email."', '".$text."')";

            $stmt = sqlsrv_query( $conn, $sql);
            if( $stmt === false ) {
                die(print_r(sqlsrv_errors(), true));
            }
            
            sqlsrv_close($conn);
        }
        catch(Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }
?>