@extends('layouts.admin')


@section('content')

<h1 class="mt-4">Users </h1>
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
                        
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    @foreach ($data as $user)
                        <tr>

                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            

                        </tr>
                    @endforeach
                </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection