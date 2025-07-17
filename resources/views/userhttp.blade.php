<!DOCTYPE html>
<html>
<head>
    <title>data Info</title>
</head>
<body>
    <h2>Data Profile</h2>


    <ul>
        <li><strong>id:</strong> {{ $data->id }}</li>
        <li><strong>name:</strong> {{ $data->name }}</li>
        <li><strong>Email:</strong> {{ $data->email }}</li>
        <li><strong>Website:</strong> {{ $data->website }}</li>
        {{-- <li><strong>Address:</strong> {{ $data->address }}</li> --}}

        <li><strong>Phone:</strong> {{ $data->phone }}</li>

    
        

    </ul>


</body>
</html>
