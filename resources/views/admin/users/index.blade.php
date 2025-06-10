@extends('layouts.admin')

@section('content')
    <h2>User List</h2>
    @foreach ($users as $user)
        <div>
            <p>{{ $user->name }} ({{ $user->email }})</p>
            <a href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
