
@extends('layouts.app')

@section('content')
    @if (Session::has('done'))
     <div class="alert alert-success">
         <h2> {{ Session::get('done') }} </h2>
     </div>
    @endif

    <h1 class="text-center text-primary b display-3"> Welcome In Employee Index </h1>

    <div class="container col-7">
        <div class="card">
            <div class="card-body">
                <table class="table table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Salary </th>

                        <th colspan="3">Action </th>
                    </tr>
                    @foreach ($emps as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->salary }}</td>
                            <td> <a href="{{ route('employee.show',$data->id ) }}" class="btn btn-primary"> Show</a> </td>
                            </td>
                            {{-- <a href="{{ route('employee.destroy', $data->id) }}" class="btn btn-danger">  Delete</a> --}}
                            <td>
                                <form action="{{ route('employee.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE" id="">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection
