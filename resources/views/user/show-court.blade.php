@extends('layouts.user')

@section('content')

<h1 class="mt-4">User Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"> Dashboard</li>
</ol>

<div class="row">
    <div class="col-md-12">
        <div class="row d-flex justify-content-between">

        @foreach 
            <div class="col-md-4">
                <div class="card">
                    <h2 class="card-header">
                        User Profile
                    </h2>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKBm5dOkjrPbRakjg_MHs0dmkoWnRzViGgqg&s"
                        class="card-img-top p-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            
            <!-- <div class="col-md-4">
                <div class="card">
                    <h2 class="card-header">
                        User Profile
                    </h2>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKBm5dOkjrPbRakjg_MHs0dmkoWnRzViGgqg&s"
                        class="card-img-top p-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h2 class="card-header">
                        User Profile
                    </h2>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKBm5dOkjrPbRakjg_MHs0dmkoWnRzViGgqg&s"
                        class="card-img-top p-4 rouneded rounded-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> -->
        </div>

    </div>
</div>
@endsection