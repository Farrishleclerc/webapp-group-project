@extends('layouts.adminlayout')

@section('content')
    <h2>User List</h2>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            transition: all 0.3s ease-in-out;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        tr:hover {
            background-color: #f9f9f9;
            transform: scale(1.01);
            transition: 0.2s;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-edit {
            background-color: #2196F3;
            color: white;
            margin-right: 5px;
        }

        .btn-delete {
            background-color: #f44336;
            color: white;
        }
    </style>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>
                        <a href="{{ route('admin.users.editadmin', $user->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
