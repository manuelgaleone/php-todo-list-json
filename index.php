<!DOCTYPE html>
<html lang="en">

<style>
    body {
        background-color: #ededed !important;
    }

    .todo_wrapper {
        background-color: white;
        border-radius: 15px;
    }

    .inserisci_button {
        background-color: white;
        border: 0;
        padding: 15px;
        border-radius: 5px;
        margin-left: 15px;
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
            <h1 class="todo_title text-center m-0 py-4">
                To do List
            </h1>
            <div class="todo_wrapper p-3">
                <div class="todo_head">
                </div>
                <div class="todo_elements">
                    <ul class="list-group">
                        <li v-for="task in tasks" class="list-group-item">{{task}}</li>
                    </ul>
                </div>
            </div>
            <div class="search_box p-0 my-3">
                <form action="server.php" method="post" onsubmit="return putNewTasks()">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="newTask" id="newTask">
                        <button class="inserisci_button" type="submit">Inserisci</button>
                    </div>
                </form>
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