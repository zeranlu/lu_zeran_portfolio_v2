<?php
    // LIVE HEADER
    // header("Access-Control-Allow-Origin: https://zeranlu.ca");
    // LOCAL HEADER
    header("Access-Control-Allow-Origin: http://localhost:5173");
    header("Content-Type: application/json; charset=UTF-8");

    // LIVE DB CREDENTIALS
    // $db_host = 'localhost';
    // $db_user = 'zeran195_zeranlu';
    // $db_pass = 'databasepass';
    // $db_name = 'zeran195_db_portfolio_0225';

    // LOCAL DB CREDENTIALS
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'db_portfolio_local';

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$connection) {
        echo json_encode(array("error" => "Database connection failed."));
        exit;
    }

    if (!isset($_GET['id'])) {
        echo json_encode(array("error" => "No case studies found."));
        exit;
    }

    $id = intval($_GET['id']);

    $stmt = mysqli_prepare($connection, "SELECT * FROM tbl_case_studies WHERE case_study_id = ?");

    mysqli_stmt_bind_param($stmt, "i", $id);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    
    $case_study = mysqli_fetch_assoc($result);

    if (!$case_study) {
        echo json_encode(array("error" => "This case study was not found."));
        exit;
    }

    echo json_encode(array("case_study" => $case_study));

?>