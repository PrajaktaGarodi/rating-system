@extends('layouts.vendor')

@section('content')

<h1 class="mt-4">Vendor Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>

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
   
</div>


<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Court Name</th>
                    <th scope="col">Address</th>
                    <th scope="col"> Email</th>
                    <th scope="col"> Contact</th>
                    <th scope="col"> Food Type</th>
                    <th scope="col"> Open Time</th>
                    <th scope="col"> Close Time</th>
                    <th scope="col"> action</th>
                    
                </tr>
            </thead>

            <tbody>
                @foreach($data as $court)
                    <tr>
                        <td>{{ $court->court_name }}</td>
                        <td>{{ $court->address }}</td>
                        <td>{{ $court->email }}</td>
                        <td>{{ $court->contact }}</td>
                        <td>{{ $court->food_type }}</td>
                        <td>{{ $court->open_time }}</td>
                        <td>{{ $court->close_time }}</td>
                        <td>
                            <a href=""><i class="fas fa-edit"></i></a>
                            <a href=""><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection