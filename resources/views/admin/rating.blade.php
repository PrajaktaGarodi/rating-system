@extends('layouts.admin')


@section('content')

<h1 class="mt-4">Food Court's Rating's</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>


<div class="row">
    <div class="col-md-12">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        
                        <th>User Name</th>
                        <th>Vendor Name</th>
                        <th>Food Court Name</th>
                        <th> Food Court Email</th>
                        <th>Food Type</th>
                        <th>Rating Descriptions</th>
                        <th> Ratings</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $ratings as $rating)
                    @php
                    $foodcourt = $court_data->firstWhere('id', $rating->court_id);
                    $vendor = $user_data->firstWhere('id', $rating->vendor_id);
                    $user = $user_data->firstWhere('id', $rating->user_id);
                    @endphp
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$vendor->name}}</td>
                        <td>{{$foodcourt->court_name}}</td>
                        <td>{{$foodcourt->email}}</td>
                        <td>{{$foodcourt->food_type}}</td>
                        <td>{{$rating->descriptions}}</td>
                        <td>{{$rating->rating}}</td>
                    </tr>
                    @endforeach
                <tbody>
                    
                </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection