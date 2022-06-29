<?php

include_once('connect.php');

// Get form inputs

$regno = trim(strtoupper($_POST['regno']));
$fname = trim(strtoupper($_POST['fname']));
$lname = trim(strtoupper($_POST['lname']));
$gender = trim(strtoupper($_POST['gender']));
$course = trim(strtoupper($_POST['course']));

// Check if form submission is available
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($regno) && !empty($fname) && !empty($lname) && !empty($email) && !empty($course)) {
        // Check if the registration number is not taken
        $query = "SELECT id FROM bitclass WHERE regno = '$regno'";
        $queryResult = $pdo->prepare($query);
        $queryResult->execute();

        // if the registration number is not taken the save information into the database
        if ($queryResult->fetch(PDO::FETCH_OBJ) === 0) {
            $sql = "INSERT INTO bitclass(regno, fname, lname, gender, course) VALUES('$regno', '$fname', '$lname', '$gender', '$course')";
            $sql_Result = $pdo->prepare($sql);
            $sql_Result->bindValue();
        }
    }

}
