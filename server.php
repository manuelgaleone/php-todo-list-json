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

if (isset($_POST['newTask'])) {

    $task = $_POST['newTask'];


    // pusho nell'array di tasks 
    array_push($tasks, $task);
    //var_dump($tasks_array);
    $json_tasks = json_encode($tasks);
    //var_dump($json_tasks);
    file_put_contents('tasks.json', $json_tasks);
}

header("content-Type: application/json");
echo json_encode($tasks);
