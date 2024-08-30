<!-- resources/views/designations/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Designation</h1>

    <form action="{{ route('designations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="designation">Designation:</label>
            <input type="text" name="designation" id="designation" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="justification_id">Justification:</label>
            <select name="justification_id" id="justification_id" class="form-control" required>
                @foreach($justifications as $justification)
                    <option value="{{ $justification->id }}">{{ $justification->justification }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Create Designation</button>
    </form>
</div>
@endsection
