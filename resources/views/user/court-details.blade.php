@extends('layouts.user')

@section('content')

<h1 class="mt-4">Court Details</h1>


<!-- <h1>{{$court->court_name}}</h1> -->

<div class="row d-flex justify-content-center">
    <div class="col-md-5 ">
        <div class="card">
            <div class="card-header rounded-top-3" style="background-color: lightgray;">
                <h3 class="card-title">Food Court Image</h3>
            </div>
            <div class="card-body">
                <img src="{{ asset('storage/images/' . $court->image) }}" class="img-fluid p-3" alt="Image">
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-header rounded-top-3" style="background-color: lightgray;">
                <h3 class="card-title">Food Court Details</h3>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <h5>Court Name :</h5>
                            <p>{{$court->court_name}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <h5>Court Email Address :</h5>
                            <p>{{$court->email}}</p>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="form-group">
                            <h5> Court Phone No :</h5>
                            <p>{{$court->contact}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <h5>Court Address :</h5>
                            <p>{{$court->address}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <h5>Court Food Type :</h5>
                            <p>{{$court->food_type}}</p>
                        </div>
                    </div>
                    <?php
// Assuming $court->open_time and $court->close_time are stored in 24-hour format (HH:mm:ss)
$openTime = date('h:i A', strtotime($court->open_time));
$closeTime = date('h:i A', strtotime($court->close_time));
                ?>

                    <!-- Replace the following lines -->
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <h5>Court Opening Time :</h5>
                            <p>{{ $openTime }}</p>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="form-group">
                            <h5>Court Closeing Time :</h5>
                            <p>{{ $closeTime }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="col-md-12">

        <div class="card mt-4">
            <div class="card-header rounded-top-3" style="background-color: lightgray;">
                <h3>Give Ratings</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Your Name :</label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>
                    </div>









                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Your Phone Number :</label>
                            <input type="text" name="number" id="" class="form-control">
                        </div>
                    </div>



                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name" class="form-label">Description :</label>
                            <textarea name="descriptions" id="" class="form-control"></textarea>
                        </div>
                    </div>
                   

                </div>
            </div>
        </div>
    </div>
</div>

@endsection