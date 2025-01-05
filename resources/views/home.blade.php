{{-- @php
    use App\Models\City;
@endphp --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">


</head>

<body>
    @include('messages')

    <div class="container mt-3" id="center">
        <div class="card" style="width:400px">
            <img class="card-img-top" src="{{ $user->image }}" alt="User image" style="width:100%" height="450">
            <div class="card-body">
                <h4 class="card-title">{{ 'First Name : '.' '.$user->first_name }}</h4>
                <h4 class="card-title">{{ 'Last Name : '.' '.$user->last_name }}</h4>
                <h4 class="card-title">{{ 'Email : '.' '.$user->email }}</h4>
                <h4 class="card-title">{{ 'Phone : '.' '.$user->phone }}</h4>
                {{-- @php
                    $city = City::find($user->city_id);
                @endphp --}}

                <h4 class="card-title">{{ 'City : '.' '.$user->city_name }}</h4>
                <a href="{{ route('contact.create') }}" class="btn btn-success">Add Contact</a>
                <a href="{{ route('contact.list') }}" class="btn btn-primary">See Contact</a>
                <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </div>
        <br>


</body>
</html>
