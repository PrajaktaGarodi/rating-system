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
                    $foodcourt = 
                    @endphp
                                      
                    @endforeach
                <tbody>
                    
                </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection