<?php
require('database.php');

$message = "";
$type = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dawg_name = mysqli_real_escape_string($conn, $_POST['dawg_name']);
    $dawg_breed = mysqli_real_escape_string($conn, $_POST['dawg_breed']);
    $dawg_age = mysqli_real_escape_string($conn, $_POST['dawg_age']);
    $dawg_address = mysqli_real_escape_string($conn, $_POST['dawg_address']);
    $dawg_color = mysqli_real_escape_string($conn, $_POST['dawg_color']);
    $dawg_height = mysqli_real_escape_string($conn, $_POST['dawg_height']);
    $dawg_weight = mysqli_real_escape_string($conn, $_POST['dawg_weight']);

    if (
        empty($dawg_name) ||
        empty($dawg_breed) ||
        empty($dawg_age) ||
        empty($dawg_address) ||
        empty($dawg_color) ||
        empty($dawg_height) ||
        empty($dawg_weight)
    ) {
        $message = "Please fill out all fields.";
        $type = "danger";
    } elseif (!is_numeric($dawg_age) || !is_numeric($dawg_height) || !is_numeric($dawg_weight)) {
        $message = "Age, height, and weight must be numbers only.";
        $type = "danger";
    } else {
        $sql = "INSERT INTO dawg_info
            (dawg_name, dawg_breed, dawg_age, dawg_address, dawg_color, dawg_height, dawg_weight)
            VALUES (
                '$dawg_name',
                '$dawg_breed',
                '$dawg_age',
                '$dawg_address',
                '$dawg_color',
                '$dawg_height',
                '$dawg_weight'
            )";

        if (mysqli_query($conn, $sql)) {
            $message = "Dog information saved successfully.";
            $type = "success";
        } else {
            $message = "Saving error: " . mysqli_error($conn);
            $type = "danger";
        }
    }
}


$sql = "SELECT * FROM dawg_info ORDER BY dawg_id ASC";
$result = mysqli_query($conn, $sql);
?>