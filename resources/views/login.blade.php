<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
</head>

<body class="bg-secondary">
    @include('messages')

    <div class="container mt-3 col-3">
        <h2><strong>Login</strong></h2>
        <form action="{{ url('login') }}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>

                @enderror
            </div>
            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>

                @enderror
            </div>

            <button type="submit" class="btn btn-primary form-control">Login</button>
            <div class="mt-3">

                <p>Don't have an Account Click here to
                    <a href="{{ url('register') }}">Register</a>
                </p>

            </div>
        </form>
    </div>

    <script src="{{ asset('JS/bootstrap.min.js') }}"></script>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap5/tryit.asp?filename=trybs_form&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 18:00:31 GMT -->

</html>
