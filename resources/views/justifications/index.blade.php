<!-- resources/views/justifications/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Justifications List</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Justification</th>
            </tr>
        </thead>
        <tbody>
            @foreach($justifications as $justification)
                <tr>
                    <td>{{ $justification->id }}</td>
                    <td>{{ $justification->justification }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
