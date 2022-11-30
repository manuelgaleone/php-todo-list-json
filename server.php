<?php

/* $tasks = [
    "HTML",
    "CSS",
    "JS",
    "VUE"
]; */
$tasks_string = file_get_contents("tasks.json");
/* $_POST["newTask"] = file_put_contents("tasks.json"); */
$tasks = json_decode($tasks_string);

/* $newTask = $_POST['newTask']; */

header("content-Type: application/json");
echo json_encode($tasks);
