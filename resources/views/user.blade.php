<h1>View page</h1>

 <h1>Welcome to User Profile</h1>
    <p>User ID: {{ $id }}</p>

    <a href="{{ route('user.profile', ['id' => 2]) }}">Go to User 2's Profile</a>