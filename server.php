<?php

$tasks = [
    "HTML",
    "CSS",
    "JS",
    "VUE"
];

$genre = $_POST['newTask'];

header("content-Type: application/json");
echo json_encode($tasks);
