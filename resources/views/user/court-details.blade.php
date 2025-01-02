@extends('layouts.user')

@section('content')

<h1 class="mt-4">Court Details</h1>


<!-- <h1>{{$court->court_name}}</h1> -->
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
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
        <form  action="{{ route('rating')  }}" method="post">
        @csrf
            <div class="card mt-4">
                <div class="card-header rounded-top-3" style="background-color: lightgray;">
                    <h3>Give Ratings</h3>
                </div>
                <div class="card-body">
                    <div class="row">

                        <input type="text" value="{{$court->id }}" class="d-none" name="court_id">
                        <input type="text" value="{{$court->vendor_id}}" class="d-none" name="vendor_id">


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="form-label">Description :</label>
                                <textarea name="descriptions" id="" class="form-control"></textarea>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group mb-3 mt-3">
                                <label for="rating">Rating</label>

                                <div class="rating mt-3" style="width: 10rem">
                                    <input id="rating-5" type="radio" name="rating" value="5" /><label for="rating-5"><i
                                            class="fas fa-3x fa-star"></i></label>
                                    <input id="rating-4" type="radio" name="rating" value="4" /><label for="rating-4"><i
                                            class="fas fa-3x fa-star"></i></label>
                                    <input id="rating-3" type="radio" name="rating" value="3" /><label for="rating-3"><i
                                            class="fas fa-3x fa-star"></i></label>
                                    <input id="rating-2" type="radio" name="rating" value="2" /><label for="rating-2"><i
                                            class="fas fa-3x fa-star"></i></label>
                                    <input id="rating-1" type="radio" name="rating" value="1" /><label for="rating-1"><i
                                            class="fas fa-3x fa-star"></i></label>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection