@extends('layouts.adminlayout')

@section('content')
    <h2>Edit User</h2>
    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}" required>
        <input type="email" name="email" value="{{ $user->email }}" required>
        <input type="password" name="password" placeholder="New password (optional)">
        <button type="submit">Update</button>
    </form>
@endsection
