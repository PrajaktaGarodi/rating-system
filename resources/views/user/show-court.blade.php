@extends('layouts.user')

@section('content')

<h1 class="mt-4">User Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"> Dashboard</li>
</ol>

<div class="row">
    <div class="col-md-12">
        <div class="row d-flex justify-content-around">

        @foreach ($court as  $value)
            <div class="col-md-4">
                <div class="card">
                    <h2 class="card-header">
                        {{$value->court_name}}
                    </h2>
                    <img src="{{ asset('storage/images/' . $value->image) }}" alt="Image">

                    <div class="card-body">
                        <h5 class="card-title">{{$value->address}}</h5>
                        <p class="card-text">Food Type : {{$value->food_type}}</p>
                        <a href="{{route('user.court_details',$value->id)}}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>

    </div>
</div>
@endsection