<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        nav {
            background-color: #333;
            padding: 10px;
            color: #fff;
        }
        nav a {
            color: #fff;
            margin-right: 15px;
            text-decoration: none;
        }
        .container {
            margin-top: 20px;
        }
        .logout {
            float: right;
        }
    </style>
</head>
<body>

<nav>
    <span>Admin Dashboard</span>
    <a href="{{ route('admin.dashboard') }}">Home</a>
    <a href="{{ route('admin.users.indexadmin') }}">Users</a>
    <a href="{{ route('admin.contacts.index') }}">Messages</a>
    <form class="logout" action="{{ route('admin.logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" style="background:none;border:none;color:white;cursor:pointer;">Logout</button>
    </form>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
