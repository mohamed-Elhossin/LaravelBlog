@extends('layouts.app')

@section('content')
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


@endsection
