<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
</head>

<body >

    <div class="container mt-3 col-3">
        <h2>Register new account</h2>
        <form action="{{ url('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
                <label for="email">first_name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your name" value="{{ old('first_name') }}"  name="first_name">
                @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last_name">last_name:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter last_name" value="{{ old('last_name') }}"  name="last_name">
                @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}"  name="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" value="{{ old('password') }}"  name="password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" id="phone" placeholder="Enter your phone" value="{{ old('phone') }}"  name="phone">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 form-outline" data-mdb-input-init>
                <label for="phone">City:</label>
                <select name="city_id" class="form-control" id="">
                    <option value="1">Kabul</option>
                    <option value="2">Jalalabad</option>
                    <option value="3">Parwan</option>
                    <option value="4">Logar</option>
                    <option value="5">paktia</option>
                    <option value="7">Mazar-e-Sharif</option>
                    <option value="8">Kandahar</option>
                    <option value="9">Helmand</option>
                    <option value="10">Herat</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Gender:</label>
                <input type="radio" value="male" name="gender" checked>Male
                <input type="radio" value="female" name="gender">female
            </div>
            <div class="mb-3">
                <label for="hobby">Hobby:</label>
                <input type="checkbox" name="hobby[]" value="traveling">Traveling
                <input type="checkbox" name="hobby[]" value="sporting">Sporting
                <input type="checkbox" name="hobby[]" value="reading">Reading
            </div>
            <div class="mb-3">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <p>Already have an account

            <a href="{{ url('/') }}" class="btn btn-success">Login</a>
        </p>

    </div>
    <script src="{{ asset('JS/bootstrap.min.js') }}"></script>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap5/tryit.asp?filename=trybs_form&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 18:00:31 GMT -->

</html>
