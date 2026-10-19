@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
    <h1>User Accounts</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection