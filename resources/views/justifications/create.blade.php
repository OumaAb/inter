<!-- resources/views/justifications/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Justification</h1>

    <form action="{{ route('justifications.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="justification">Justification:</label>
            <textarea name="justification" id="justification" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Create Justification</button>
    </form>
</div>
@endsection
