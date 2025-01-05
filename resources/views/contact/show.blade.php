<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
</head>

<body>
    <div class="container mt-3">
        <div class="card" style="width:400px">
            <div class="card-body">
                <h4 class="card-title">{{ 'First Name : '.' '.$contacts->first_name }}</h4>
                <h4 class="card-title">{{ 'Last Name : '.' '.$contacts->last_name }}</h4>
                <h4 class="card-title">{{ 'Phone : '.' '.$contacts->phone }}</h4>
                <a href="{{ route('contact.delete',$contacts->id) }}" class="btn btn-success">Delete</a>
            </div>
        </div>
        <br>

</body>

</html>
