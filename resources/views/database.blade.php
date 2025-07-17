<!-- resources/views/database.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Database Page</title>
</head>
<body>
    <h1>This is the Database View</h1>

    {{-- {{ 
        // print_r($users)
    
    }} --}}
    <table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Email Verified</th>
            <th>Password</th>
            <th>Remember Token</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->email_verified_at ?? 'Not Verified' }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->remember_token }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
