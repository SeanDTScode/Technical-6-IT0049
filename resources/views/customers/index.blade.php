@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
    <h1>Customer Accounts</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->full_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection