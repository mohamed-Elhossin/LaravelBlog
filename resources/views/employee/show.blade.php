<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>


    <h1 class="text-center text-primary b display-3">Show Employee {{ $emp->name }} </h1>

    <div class="container col-4">

        <div class="card">
            <img src="{{ asset("imgs/$emp->img") }}" alt="">
            <div class="card-body">
                <h1>Name : {{ $emp->name }} </h1>
                <h2> Salary : {{ $emp->salary }} </h2>
            </div>
            <a href="{{ route('employee.edit', $emp->id) }}" class="btn btn-info">Edit</a>
        </div>
    </div>


    <script src="{{ asset('js/app.js') }}"> </script>
</body>

</html>
