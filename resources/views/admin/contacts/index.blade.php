@extends('layouts.adminlayout')

@section('content')
    <h2>Contact Messages</h2>
    @foreach ($contacts as $contact)
        <div>
            <strong>{{ $contact->name }}</strong> ({{ $contact->email }}) - {{ $contact->message }}
            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
