@extends('layouts.adminlayout')

@section('content')
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="{{ route('admin.users.indexadmin') }}">Manage Users</a></li>
        <li><a href="{{ route('admin.contacts.index') }}">Manage Contact Messages</a></li>
    </ul>
@endsection
