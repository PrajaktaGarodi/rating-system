@extends('layouts.vendor')

@section('content')

<h1 class="mt-4">Edit Food Court</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"></li>
</ol>

<div class="row">
    <div class="col-md-12 p-4">
        <form action="{{route('vendor.update-food-court',$court->id)}}" enctype="multipart/form-data" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <input type="number" name="vendor_id" value="{{ Auth::user()->id }}" class="d-none">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="name" class="form-label">Court Name</label>
                        <input  type="text" class="form-control" id="court_name" value="{{$court->court_name}}" name="court_name" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address"  value="{{$court->address}}"  name="address" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="number" class="form-control" id="contact"  value="{{$court->contact}}"  name="contact" required>
                    </div>


                    <div class="form-group mt-3">
                        <label for="contact" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" value="{{$court->email}}"  name="email" required>
                    </div>

                </div>

                <div class="col-md-6">

                <div class="form-group mt-3">
                        <label for="contact" class="form-label">Food Type</label>
                        <input type="text" class="form-control" id="food_type" value="{{$court->food_type}}"  name="food_type" required>
               </div>


               <div class="form-group mt-3">
                        <label for="contact" class="form-label">Open Time</label>
                        <input type="time" class="form-control" id="open_time" value="{{$court->open_time}}"  name="open_time" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="contact" class="form-label">Close Time</label>
                        <input type="time" class="form-control" id="close_time" value="{{$court->close_time}}"  name="close_time" required>
                    </div>


                   
                   
               
            </div>
            <div class="col-md-12 d-flex justify-content-center mt-3 mb-2" >
                    <button class="btn btn-primary ">
                        Submit
                    </button>
                </div>
        </form>
    </div>
</div>

@endsection