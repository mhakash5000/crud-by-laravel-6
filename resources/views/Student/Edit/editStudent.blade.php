@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center ">
                   <h5>Edit Student </h5>
                   <a href="{{url('student')}} " class="btn btn-warning">Student List</a>
                </div>
                @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                <div class="card-body">
                    <form action="{{ url('/update/'.$student->id)}} " method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-6 offset-3">
                            @if(Session::has('success'))
                            <div class="btn btn-success">{{Session::get('success')}} </div>
                            @endif
                           <div class="form-group ">
                             <label for="">Student Name</label>
                             <input type="text" class="form-control" name="name" id="" value="{{$student->name}} ">
                            </div>
                            <div class="form-group ">
                                <label for="">Student Phone</label>
                                <input type="tel" class="form-control" name="phone" id="" value="{{$student->phone}} ">
                            </div>
                            <div class="form-group ">
                                <label for="">Student Email</label>
                                <input type="email" class="form-control" name="email" id="" value="{{$student->email}} ">
                            </div>
                            <div class="form-group text-center">
                               <button type="submit" class="btn btn-primary">Update</button>

                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
