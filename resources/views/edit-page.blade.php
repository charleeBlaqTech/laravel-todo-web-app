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
    <div class="container h-75 mt-5  p-5 bg-light">
        <form action="/edit-todo" class="editing-place " id="editing-place" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$matchedTodo['id']}}">
            <textarea name="edited" id="textarea" class="text-capitalize bg-dark text-light text-center" required>{{$matchedTodo['todo']}}</textarea>
            <button type="submit" class="btn btn-secondary w-50 p-2 mt-2">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>