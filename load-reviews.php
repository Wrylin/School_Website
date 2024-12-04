<?php
    require "connect.php";

    // Get the current offset from the request
    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
    $limit = 3; 
    
    // SQL query to retrieve data from the review_table with limit and offset
    $sql = "SELECT * FROM review_table ORDER BY reviewID OFFSET ? ROWS FETCH NEXT ? ROWS ONLY";
    $params = array($offset, $limit);
    
    // Execute the query
    $stmt = sqlsrv_query($conn, $sql, $params);
    
    if ($stmt === false) {
        die(json_encode(array("error" => "Query failed")));
    }
    
    $reviewlist = array();
    
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $reviewlist[] = array(
            "name" => $row["review_name"],
            "email" => $row["review_email"],
            "text" => $row["review_text"]
        );
    }
    
    $jsonData = $reviewlist;
    
    echo json_encode($jsonData);
?>