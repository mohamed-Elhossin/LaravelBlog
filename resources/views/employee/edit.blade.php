
@extends('layouts.app')

@section('content')
    <h1 class="text-center text-primary b display-3">Edit Employee {{ $emp->name }} </h1>

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
                <form action="{{ route('employee.update', $emp->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label> Employee Name</label>
                        <input type="text" value="{{ $emp->name }}" name="empName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Employee Salary</label>
                        <input type="text" value="{{ $emp->salary }}" name="empSalary" class="form-control">
                    </div>
                    {{ method_field('PUT') }}
                    <button type="submit" class="btn btn-info btn-block"> Update Data </button>
                </form>
            </div>
        </div>
    </div>



    @endsection
