@extends('layouts.admin')


@section('content')

<h1 class="mt-4">Vendors </h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Vendor</li>
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tbody>
                        @foreach ($data as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>

                                <td><a href="{{route('admin.vendor-delete',$user->id)}}"><i class="fa-solid p-2 fa-trash text-danger"></i></a></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection