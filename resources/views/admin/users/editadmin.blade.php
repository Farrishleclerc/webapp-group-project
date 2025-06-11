@extends('layouts.adminlayout')

@section('content')
    <h2>Edit User</h2>

    <style>
        form {
            max-width: 400px;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #2196F3;
            outline: none;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        @method('PUT')

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="New password (optional)">

        <button type="submit">Update</button>
    </form>
@endsection
