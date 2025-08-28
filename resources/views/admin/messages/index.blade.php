@extends('layouts.admin')

@section('title', 'Messages')

@section('content')
    <h1>Messages reçus</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Sujet</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($messages as $msg)
            <tr>
                <td>{{ $msg->name }}</td>
                <td>{{ $msg->email }}</td>
                <td>{{ $msg->subject }}</td>
                <td>{{ $msg->created_at->format('d/m/Y H:i') }}</td>
                <td>
                    <a href="{{ route('messages.show', $msg->id) }}" class="btn btn-info btn-sm">Voir</a>
                    <form action="{{ route('messages.destroy', $msg->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ce message ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
