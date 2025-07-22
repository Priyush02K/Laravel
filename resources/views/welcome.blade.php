<h1 style="text-align: center;">Hello Laravel</h1>


<hr>
<h2>Routing </h2>
<a href="/">welcome</a>;
<a href="/home">Home</a>;
<a href="/about/priyush">About</a>;

<hr>



<h2>Blade Template Ex</h2>

    <h2>My name is {{ $name }}</h2>

 <h2>Conditional Check (Age)</h2>
    @if ($age >= 18)
        <p>You are an adult.</p>
    @else
        <p>You are a minor.</p>
    @endif

    <h2>Looping Over Users</h2>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>

    <h2>Switch Role</h2>
    @switch($role)
        @case('admin')
            <p>Welcome, Admin!</p>
            @break
        @case('editor')
            <p>Welcome, Editor!</p>
            @break
        @default
            <p>Welcome, User!</p>
    @endswitch

<hr>

    <h2> Subview | include view in laravel </h2>

    @include('partials.header')
    @include('partials.user', ['name' => 'John'])


    <main>
        <p>Main content goes here...</p>
    </main>

<hr>
    <!-- //reuse component  -->

    <x-message-banner/>

    <x-message-banner type="success" message="Operation successful!" />
    <x-message-banner type="danger" message="error Message" />


    <hr>

    <h2>From Handling + Validation </h2>
    <li><a href="/user-from">user-from</a></li>
    <li><a href="/user-from-two">user-from-two</a></li>
    <li><a href="/user-from-three">user-from-three</a></li>    

    
    <hr>

    <h2>customs Rule </h2>
    <li><a href="/uppercase-form">Rule</a></li>

    <hr>
     <h2> URL generation  </h2>
     <div>
        {{URL::current()}}
     </div>


    <hr>
    <h2>Named Routes </h2>
     <li><a href="user">user-from</a></li>

    
    
    <hr>
    <h2>Route Group  </h2>
    <li><a href="admin/dashboard">Dashboard</a></li>
    <li><a href="admin/dashboard">Settings</a></li>
    <hr>

    <h2> Group Controller </h2>
    <li><a href="index">index</a></li>
    <li><a href="add">add</a></li>
    <li><a href="settings">settings</a></li>
    <li><a href="about/{name}">about</a></li>
    <hr>



    <h2>Middleware </h2>

     <li><a href="office">office</a></li>
 


<hr>
     <h2>Database </h2>
     <li><a href="mysql-conn">MYSQL</a></li>
     <li><a href="database">Database</a></li>


<hr>
     <h2>API-HTTP </h2>
     <li><a href="userhttp">HTTP</a></li>


<hr>
     <h2>Eloquent Model </h2>
     <li><a href="/students">Eloquent Model</a></li>

<hr>
     <h2>HTTP request Method </h2>
     <li><a href="/request-example">HTTP request Method</a></li>