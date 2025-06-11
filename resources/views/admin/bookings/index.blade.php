@extends('layouts.adminlayout')

@section('content')
    <h2>Booking List</h2>

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
                <th>User ID</th>
                <th>Package</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Court</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->user_id }}</td>
                    <td>{{ $booking->package }}</td>
                    <td>{{ $booking->start_date }}</td>
                    <td>{{ $booking->end_date }}</td>
                    <td>{{ $booking->court }}</td>
                    <td>
                        <a href="{{ route('admin.bookings.edit', $booking->id) }}" class="btn btn-edit">Edit</a>
                        <form method="POST" action="{{ route('admin.bookings.destroy', $booking->id) }}" style="display:inline;">
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
