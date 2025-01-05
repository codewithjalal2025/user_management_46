<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
</head>

<body class="bg-secondary">

    <div class="container mt-3 col-3">
        <h2>Update Contact</h2>
        <form action="{{ route('contact.update',$contact->id) }}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="email">first_name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your name" value="{{ ($contact->first_name) }}"  name="first_name">
                @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last_name">last_name:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter last_name" value="{{ ($contact->last_name) }}"  name="last_name">
                @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" id="phone" placeholder="Enter your phone" value="{{ ($contact->phone) }}"  name="phone">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">update</button>
        </form>

    </div>
    <script src="{{ asset('JS/bootstrap.min.js') }}"></script>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap5/tryit.asp?filename=trybs_form&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 18:00:31 GMT -->

</html>
