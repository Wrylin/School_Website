<?php
    require "connect.php";

    //SQL query to retrieve data from the products table
    $sql = "select * from review_table";

    //Execute the query
    $stmt = sqlsrv_query($conn, $sql);

    if($stmt === false) {
        die(json_encode(array("error" => "Query failed")));
    }

    $reviewlist = array();

    while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $reviewlist[] = array(
            "name" => $row["review_name"],
            "email" => $row["review_email"],
            "text" => $row["review_text"]
        );
    }

    $jsonData = $reviewlist;

    echo json_encode($jsonData);
?>