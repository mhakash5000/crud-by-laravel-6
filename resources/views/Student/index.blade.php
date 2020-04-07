@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if(Session::has('success'))
        <div class='alert alert-success'>{{Session::get('success')}} </div>
        @endif
        
            <div class="card">
                <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center ">
                    <h5 class="mb-0">Student List</h5>
                    <a href="{{url('create')}} " class="btn btn-danger">Create Student</a>
                </div>

                <div class="card-body text-center">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>E-mail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item)
                            <tr>
                                <td>{{($item->id)}}</td>
                                <td>{{($item->name)}}</td>
                                <td>{{($item->phone)}}</td>
                                <td>{{($item->email)}}</td>
                                <td>
                                    <a href="{{url('/edit/'.$item->id)}} " class="btn btn-primary">Edit</a>
                                    <a href="{{url('/destroy/'.$item->id)}} " class="btn btn-danger">Delete</a>
                                    <a href="" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
