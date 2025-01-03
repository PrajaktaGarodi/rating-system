@extends('layouts.user')

@section('content')

<h1 class="mt-4">Your Rating's</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"> Dashboard</li>
</ol>
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
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



@endsection