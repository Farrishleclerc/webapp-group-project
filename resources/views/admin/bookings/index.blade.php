@extends('layouts.adminlayout')

@section('content')
<h2>Booking List</h2>

<table>
    <tr>
        <th>Name</th><th>Email</th><th>Package</th><th>Date</th><th>Actions</th>
    </tr>
    @foreach ($bookings as $booking)
        <tr>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->email }}</td>
            <td>{{ $booking->package }}</td>
            <td>{{ $booking->date }}</td>
            <td>
                <a href="{{ route('admin.bookings.edit', $booking->id) }}">Edit</a> |
                <form method="POST" action="{{ route('admin.bookings.destroy', $booking->id) }}" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
