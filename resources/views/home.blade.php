<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <title>laravel frst project</title>
</head>
<body>
    <div class="container d-flex flex-column bg-dark">
        <h1 class="mb-5 text-light text-center">TODO WEB APP</h1>
        @foreach ($dbdatas as $data)
        <div class="d-flex flex-column justify-content-between align-items-center">
            <li>
                <p class="text-capitalize bg-dark text-light text-start ps-2">{{$data['todo']}}</p>
                <button class="btn btn-success edit-trigger" id="trigger"><a class="text-light" href="edit-todo/{{$data['id']}}">Edit</a></button>
                <button class="btn btn-danger sm"><a class="text-light" href="delete-todo/{{$data['id']}}" >Delete</a></button>
            </li>
        </div>
       
        @endforeach

        <form action="/" method="POST" class="d-flex flex-column justify-content-between align-items-center">
            @csrf
            <input type="text" name="todo" id="" placeholder="Add A Todo" class="w-100 p-2 mt-3 text-center" required>
            <button type="submit" class="btn btn-secondary w-50 mt-2">Add</button>
        </form>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>