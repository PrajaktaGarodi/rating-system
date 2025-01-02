@extends('layouts.user')

@section('content')

<h1 class="mt-4">User Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"> Dashboard</li>
</ol>
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Primary Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Warning Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Success Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Danger Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <h4>Rating Today</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Vendor Name</th>
                            <th> Food Court Name</th>
                            <th> Food Types</th>
                            <th> Rating Descriptions</th>
                            <th> Rating</th>

                        </tr>

                    </thead>
                    <tbody>
                        @if ($ratings->isEmpty())
                        <tr>
                            <td colspan="5" style="text-align:center">No Ratings Today</td>

                        </tr>

                        
                        @endif
                        @foreach($ratings as $rating)
                        @php
                        $court = $court_data->firstWhere('id', $rating->court_id);
                        $user = $user_data->firstWhere('id', $rating->vendor_id);
                        @endphp

                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $court->court_name }}</td>
                            <td>{{ $court->food_type }}</td>
                            <td>{{ $rating->descriptions }}</td>
                            <td>{{ $rating->rating }}</td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection