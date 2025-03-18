@extends('layouts.default')
@section('title','register')



@section('content')

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow-lg p-4" style="width: 400px;">
    	@if(session()->has("success"))
    	<div class="alert alert-success">
    		{{session()->get("success")}}
    	</div>
    	@endif
    	@if(session()->has("error"))
    	<div class="alert alert-success">
    		{{session()->get("error")}}
    	</div>
    	@endif

        <h3 class="text-center mb-4">Register</h3>

        <form method="POST" action="">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" placeholder="fullname" class="form-control" id="name" name="name" required>
                @if($errors->has('fullname'))
                <span class="text-danger">
                	{{errors->first('fullname')}}
                	
                </span>
                @endif
                	
            </div>

            <!-- Email Input -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!-- Password Input -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>

            </div>

            <!-- Login Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>

@endsection
