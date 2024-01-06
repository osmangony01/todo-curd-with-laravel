<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ asset('css/todo.css') }}" rel="stylesheet">

    <title>Add todo</title>
</head>

<body>


    <div class="todo-container">
        <h2 class='todo-heading' style="text-align:center">Add Todo</h2>
       

        <div class="add-form">
            <form method="post" action="">
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control" id="" placeholder="title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Date</label>
                    <input type="date" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <textarea class="form-control" id="" rows="3" placeholder="description"></textarea>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary">Save Todo</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
