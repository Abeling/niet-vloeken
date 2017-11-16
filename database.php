<?php
//$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
//
//if ($mysqli->connect_errno) {
//    echo "Failed to connect to MySQL:
//    (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}

//$sqlN = "SELECT * FROM berichten";
//$resultN = $mysqli->query($sqlN);
//
//$total_nr_messages = $resultN->num_rows;

    $stmt = $dbc->prepare("SELECT * FROM berichten");
//$sql = "SELECT * FROM berichten";

    $stmt->execute() or die('error querying after pdo');
//$result = $mysqli->query($sql);

//$result = convertResultToArray($result);
