{{-- <h1>Welcome to Register Page</h1> --}}

{{-- <h1>Welcome to Login Page</h1> --}}

{{-- <h1>Welcome to Forget Password Page</h1> --}}

@extends('frontend.layout.app')

@section('title')

Login Page

@endsection

@section('content')

<div class="container">

    <h1>Welcome to Register page.</h1>

    <form id="loginForm" onsubmit="return validateForm()">

        <div class="input-group">

            <label for="email">Email Address</label><br>

            <input type="email" id="email" required><br><br>

            <label for="password">Password</label><br>

            <input type="password" id="password" required><br><br>

            <label for="password">Confirm Password</label><br>

            <input type="password" id="password" required><br><br>

        </div>

        <button type="submit" class="btn">Submit</button>

        <div id="error-message" class="error-message"></div>

    </form>

</div>

@endsection