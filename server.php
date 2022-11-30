<?php

$tasks = [
    "HTML",
    "CSS",
    "JS",
    "VUE"
];

header("content-Type: application/json");
echo json_encode($tasks);
