<?php

require_once('connection.php');

// Get form inputs

$regno = trim(strtoupper($_POST['regno']));
$fname = trim(strtoupper($_POST['fname']));
$lname = trim(strtoupper($_POST['lname']));
$gender = trim(strtoupper($_POST['gender']));
$course = trim(strtoupper($_POST['course']));

// PDO FETCH METHOD
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

// Check if form submission is available
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $query = 'SELECT * FROM bitclass WHERE regno = :regno';
    $query_result = $pdo->prepare($query);
    $query_result->execute(['regno' => $regno]);
    $result = $query_result->fetch();
    
    if ($result) {
        echo 'Registration number is already taken';
    else {
        $sql = 'INSERT INTO bitclass(regno, fname, lname, gender, course) VALUES(:regno, :fname, :lname, :gender, :course)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['regno' => $regno, 'fname' => $fname, 'lname' => $lname, 'gender' => $gender, 'course' => $course]);
        echo 'Changes saved successfully';
    }
}
