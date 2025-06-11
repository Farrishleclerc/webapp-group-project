@extends('layouts.adminlayout')

@section('content')
    <h2>Contact Messages</h2>

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
            background-color: #f1f1f1;
            transform: scale(1.01);
            transition: 0.2s;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-reply {
            background-color: #4CAF50;
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
                <th>Matric</th>
                <th>Email</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->matric }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                        <!-- Reply Button -->
                        <a href="mailto:{{ $contact->email }}?subject=Reply to your message" class="btn btn-reply">
                            Reply
                        </a>

                        <!-- Delete Button -->
                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
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
