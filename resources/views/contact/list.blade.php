<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact List</title>
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
</head>

<body>
    <div class="container mt-3">
        <div class="mt-3 col-6">
            <div class="col-6">
                <a href="{{ route('home') }}" class="btn btn-success">Home</a>
                <a href="{{ route('contact.create') }}" class="btn btn-success">Add Contact</a>
            </div>

        </div>
        <div class="col-6 mt-3" >
            <form action="{{ url('contact/list') }}"  >
                @csrf
                <input type="text" name="search" id="" placeholder="Search" class="form-control">

                <div class="col-4">
                    <button type="submit" class="btn btn-primary mt-3">Search</button>
                </div>
            </form>
        </div>

        <table class="table  table-hover">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Action</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($contacts as $key => $contact)

                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $contact->first_name }}</td>
                    <td>{{ $contact->phone }}</td>

                    <td>
                        <a href="{{ route('contact.show',$contact->id) }}" class="btn btn-success">show</a>
                        <a href="{{ route('contact.edit',$contact->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('contact.delete',$contact->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach



            </tbody>

        </table>
        {{  $contacts->appends($search)->links()  }}
    </div>

</body>''

</html>
