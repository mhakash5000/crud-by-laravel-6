@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center ">
                   <h5>All Student</h5>
                   <a href="{{url('student')}} " class="btn btn-warning">Student List</a>
                </div>

                <div class="card-body">
                    <form action="{{url('store')}} " method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-6 offset-3">
                            @if(Session::has('success'))
                            <div class="btn btn-success">{{Session::get('success')}} </div>
                            @endif
                           <div class="form-group ">
                             <label for="">Student Name</label>
                             <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Student Name">
                            </div>
                            <div class="form-group ">
                                <label for="">Student Phone</label>
                                <input type="tel" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="Student Phone">
                            </div>
                            <div class="form-group ">
                                <label for="">Student Email</label>
                                <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Student E-mail">
                            </div>
                            <div class="form-group text-center">
                               <button type="submit" class="btn btn-primary">Submit</button>

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
