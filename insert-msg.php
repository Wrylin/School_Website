<?php
    include 'connect.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            $name = $_POST["mname"];
            $email = $_POST["memail"];
            $number = $_POST["mnumber"];
            $text = $_POST["mtext"];
    
            $sql = "INSERT INTO msg_table (contact_name, contact_email, contact_no, contact_msg)
                    VALUES ('".$name."', '".$email."', '".$number."', '".$text."')";
    
            $stmt = sqlsrv_query($conn, $sql);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
    
            sqlsrv_close($conn);
            echo "success"; // Return success message
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage(); // Return error message
        }
    }
?>