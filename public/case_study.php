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

    function getRow($connection, $sql, $id) {
        $stmt = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        return mysqli_fetch_assoc($result);
    }

    function getRows($connection, $sql, $id) {
        $stmt = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    // QUERIES
    $case_study = getRow($connection, "SELECT * FROM tbl_case_studies WHERE case_study_id = ?", $id);

    if (!$case_study) {
        echo json_encode(array("error" => "This case study was not found."));
        exit;
    }

    // Project Beginning Queries
    $specs = getRows($connection, "SELECT * FROM tbl_proj_specs WHERE case_study_id = ?", $id);
    $goals = getRows($connection, "SELECT * FROM tbl_personal_goals WHERE case_study_id = ?", $id);
    $sketches = getRows($connection, "SELECT * FROM tbl_proj_sketches WHERE case_study_id = ?", $id);

    // Project Reference Queries
    $references = getRows($connection, "SELECT * FROM tbl_proj_references WHERE case_study_id = ?", $id);
    
    forEach ($references as &$reference) {
        // & symbol is used allow modifications to the original array directly

        // Fetch the details for each reference detail and add them to the reference array
        $reference['details'] = getRows($connection, "SELECT * FROM tbl_proj_references_details WHERE proj_reference_id = ?", $reference['proj_reference_id']);
    }

    unset($reference); // Break the reference by unsetting the reference variable

    // Project Limitation Queries
    $limitations = getRows($connection, "SELECT * FROM tbl_strategic_limitations WHERE case_study_id = ?", $id);

    forEach ($limitations as &$limitation) {
        $limitation['details'] = getRows($connection, "SELECT * FROM tbl_strategic_limitations_details WHERE strategic_limitation_id = ?", $limitation['strategic_limitation_id']);
    }

    unset($limitation);

    // Project Retrospective Queries
    $retrospective = getRow($connection, "SELECT * FROM tbl_proj_retrospective WHERE case_study_id = ?", $id);

    $metrics = array();
    
    if ($retrospective) {
        $metrics = getRows($connection, "SELECT * FROM tbl_proj_retrospective_metrics WHERE proj_retro_id = ?", $retrospective['proj_retro_id']);
    }


    // $stmt = mysqli_prepare($connection, "SELECT * FROM tbl_case_studies WHERE case_study_id = ?");

    // mysqli_stmt_bind_param($stmt, "i", $id);

    // mysqli_stmt_execute($stmt);

    // $result = mysqli_stmt_get_result($stmt);
    
    // $case_study = mysqli_fetch_assoc($result);

    echo json_encode(array(
        "case_study" => $case_study,
        "specs" => $specs,
        "goals" => $goals,
        "sketches" => $sketches,
        "references" => $references,
        "limitations" => $limitations,
        "retrospective" => $retrospective,
        "metrics" => $metrics
    ));

?>