@extends('layouts.vendor')

@section('content')

<h1 class="mt-4"> Food Court's Rating's</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered" >

               <thead>
                <tr>
                    <th>Food Court Name</th>
                    <th>Rating</th>
                    <th>User</th>
                    <th>Description</th>
                    
                </tr>
               </thead>
                <tbody> 
                    @foreach($ratings as $rate)
                    @php
                    $user = $user_data->firstWhere('id', $rate->user_id);
                    $foodcourt = $court_data->firstWhere('id', $rate->court_id);
                    @endphp
                    <tr>
                        <td>{{$foodcourt->court_name}}</td>
                        <td>{{$rate->rating}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$rate->descriptions}}</td>
                    </tr>
                    @endforeach

                    @if(count($ratings) == 0)
                    <tr>
                        <td colspan="4" class="text-center">No Rating Found</td>
                    </tr>
                    @endif

                </tbody>
            

            </table>
        </div>
    </div>
</div>


@endsection