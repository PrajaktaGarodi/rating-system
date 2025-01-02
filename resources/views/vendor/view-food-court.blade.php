@extends('layouts.vendor')

@section('content')

<h1 class="mt-4">Foood Courts</h1>


<div class="row">
    <div class="col-md-12">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
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
                @foreach($courts as $court)
                    <tr>
                        <td>{{ $court->court_name }}</td>
                        <td>{{ $court->address }}</td>
                        <td>{{ $court->email }}</td>
                        <td>{{ $court->contact }}</td>
                        <td>{{ $court->food_type }}</td>
                        <td>{{ $court->open_time }}</td>
                        <td>{{ $court->close_time }}</td>
                        <td>
                            <a href="{{ route('vendor.food-court-edit',$court->id) }}"><i class="fas fa-edit"></i></a>
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