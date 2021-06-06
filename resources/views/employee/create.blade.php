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


    <h1 class="text-center text-primary b display-3">Add Employee </h1>

    <div class="container col-7">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label> Employee Name</label>
                        <input type="text" name="empName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Employee Salary</label>
                        <input type="text" name="empSalary" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Employee Image</label>
                        <input type="file" name="image_data" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info btn-block"> Send Data </button>
                </form>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/app.js') }}"> </script>
</body>

</html>
