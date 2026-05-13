<?php
    header("Access-Control-Allow-Origin: https://zeranlu.ca");
    header("Content-Type: application/json; charset=UTF-8");

    $db_host = 'localhost';
    $db_user = 'zeran195_zeranlu';
    $db_pass = 'databasepass';
    $db_name = 'zeran195_db_portfolio_0225';

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$connection) {
        echo json_encode(array("error" => "Database connection failed."));
        exit;
    }

    $stmt = mysqli_prepare($connection, "SELECT * FROM tbl_case_studies ORDER BY case_study_id DESC");

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    $case_studies = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $case_studies[] = $row;
    }

    echo json_encode(array("case_studies" => $case_studies));

?>

