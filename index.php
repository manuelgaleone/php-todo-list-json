<!DOCTYPE html>
<html lang="en">

<style>
    body {
        background-color: #ededed !important;
    }

    .todo_wrapper {
        background-color: white;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>To do List</title>
</head>

<body>

    <div id="app" class="container">
        <div class="row justify-content-center align-items-center">
            <div class="todo_wrapper p-3">
                <div class="todo_head">
                    <h1 class="todo_title text-center">
                        To do List
                    </h1>
                </div>
                <div class="todo_elements">
                    <ul class="list-group">
                        <li v-for="task in tasks" class="list-group-item">{{task}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Scripts-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!--//Scripts-->
</body>

</html>