{{-- <h1>Welcome to Forget Password Page</h1> --}}

@extends('frontend.layout.app')

@section('title')

Forget Password

@endsection

@section('content')

<div class="container">

    <h1>Welcome to Forget Password page.</h1><br>

    <form id="forgetPasswordForm" onsubmit="return validateForm()">

        <div class="input-group">

            <label for="email">Email Address</label><br>

            <input type="email" id="email" required><br><br>

        </div>

        <button type="submit" class="btn">Submit</button>

        <div id="error-message" class="error-message"></div>

    </form>

</div>

@endsection