<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "My Name is : " . $name;
    }
    echo "<br>";
    $gender = $_REQUEST['gender'];
    if (empty($gender)) {
        echo "Gender is empty";
    } else {
        echo "Gender : " . $gender;
    }
    echo "<br>";
    $subject1 = $_REQUEST['subject1'];
    if (isset($subject1)) {
        echo "Subject 1 is : " . $subject1;
    } else {
        echo "Subject 1 is empty";
    }
    echo "<br>";
    $subject2 = $_REQUEST['subject2'];
    if (isset($subject2)) {
        echo "Subject 2 is : " . $subject2;
    } else {
        echo "Subject 2 is empty";
    }
    echo "<br>";
    $subject3 = $_REQUEST['subject3'];
    if (isset($subject3)) {
        echo "Subject 3 is : " . $subject3;
    } else {
        echo "Subject 3 is empty";
    }
    echo "<br>";
    $education = $_REQUEST['education'];
    if (empty($education)) {
        echo "Education is empty";
    } else {
        echo "Education : " . $education;
    }
    echo "<br>";
    $message = $_REQUEST['message'];
    if (empty($message)) {
        echo "Message is empty";
    } else {
        echo "Message : " . $message;
    }
}
