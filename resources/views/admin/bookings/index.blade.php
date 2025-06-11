@extends('layouts.adminlayout')

@section('content')
    <h2>Booking & Payment List</h2>

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
                <th>Booking ID</th>
                <th>User ID</th>
                <th>Package</th>
                <th>Sport</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Start Time</th>
                <th>Duration</th>
                <th>Court</th>
                <th>Payment Status</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->user_id }}</td>
                    <td>{{ $booking->package ?? 'N/A' }}</td>
                    <td>{{ $booking->sport ?? 'N/A' }}</td>
                    <td>{{ $booking->start_date ?? 'N/A' }}</td>
                    <td>{{ $booking->end_date ?? 'N/A' }}</td>
                    <td>{{ $booking->start_time ?? 'N/A' }}</td>
                    <td>{{ $booking->duration ?? 'N/A' }}</td>
                    <td>{{ $booking->court ?? 'N/A' }}</td>
                    <td>{{ $booking->payment->payment_status ?? 'N/A' }}</td>
                    <td>{{ $booking->payment->amount ?? 'N/A' }}</td>
                    <td>
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
