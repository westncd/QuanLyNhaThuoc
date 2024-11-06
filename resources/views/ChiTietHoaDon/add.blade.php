@extends('layout.app')
@section('title', 'Add Computer')
@section('main')
<div class="container mt-5">
    <h2><b>Add</b> Computer</h2>
    <form action="{{ route('computers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="computer_name">Computer Name</label>
            <input type="text" class="form-control" id="computer_name" name="computer_name" value="" required>
        </div>

        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" id="model" name="model" value="" required>
        </div>
        <div class="form-group">
            <label for="operating_system">Operating System</label>
            <input type="text" class="form-control" id="operating_system" name="operating_system" value="" required>
        </div>
        <div class="form-group">
            <label for="processor">Processor</label>
            <input type="text" class="form-control" id="processor" name="processor" value="" required>
        </div>
        <div class="form-group">
            <label for="memory">Memory</label>
            <input type="number" class="form-control" id="memory" name="memory" value="" required>
        </div>
        <div class="form-group">
            <label for="available">Available</label>
            <select class="form-control" id="available" name="available" required>
                    <option value="1"> Available </option>
                    <option value="0"> Not Available </option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection
