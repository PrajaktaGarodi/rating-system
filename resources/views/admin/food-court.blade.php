@extends('layouts.admin')


@section('content')

<h1 class="mt-4">Food Court's</h1>
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
                        <th>Court Name</th>
                        <th>Vendor Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Food Type</th>
                        <th>Opening Time</th>
                        <th>Closing Time</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    @foreach($courts as $foodcourt)
                    @php
                    $vendor_name = $vendor->firstWhere('id',$foodcourt->vendor_id);
                    @endphp
                    <tr>
                        <td>{{$foodcourt->court_name}}</td>
                        <td>{{$vendor_name->name}}</td>
                        <td>{{$foodcourt->address}}</td>
                        <td>{{$foodcourt->contact}}</td>
                        <td>{{$foodcourt->email}}</td>
                        <td>{{$foodcourt->food_type}}</td>
                        <td>{{$foodcourt->open_time}}</td>
                        <td>{{$foodcourt->close_time}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection