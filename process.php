<?php

if (isset($_POST['datetime'], $_POST['duration'], $_POST['unit'])) {

    $input = $_POST['datetime'];
    $duration = intval($_POST['duration']);
    $unit = $_POST['unit'];

    // Validasi tanggal
    if (strtotime($input) === false) {
        header("Location: index.php?result=Invalid date format");
        exit;
    }

    // Format datetime-local ke format PHP
    $inputFormatted = date("Y-m-d H:i:s", strtotime($input));

    $modifier = "+$duration $unit";
    $result = date("Y-m-d H:i:s", strtotime($inputFormatted . " " . $modifier));

    // Redirect ke index dengan hasil
    header("Location: index.php?result=" . urlencode($result));
    exit;
}
