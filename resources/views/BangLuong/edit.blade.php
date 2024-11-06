@extends('layout.app')
@section('title', 'Edit Computer')
@section('main')
<div class="container mt-5">
    <h2><b>Edit</b> Computer</h2>
    <form action="{{ route('computers.update', $computer_info->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="computer_id">Computer ID</label>
            <input type="text" class="form-control" id="computer_id" name="computer_id" value="{{$computer_info->id}}" required>
        </div>
        <div class="form-group">
            <label for="computer_name">Computer Name</label>
            <input type="text" class="form-control" id="computer_name" name="computer_name" value="{{$computer_info->computer_name}}" required>
        </div>

        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" id="model" name="model" value="{{$computer_info->model}}" required>
        </div>
        <div class="form-group">
            <label for="operating_system">Operating System</label>
            <input type="text" class="form-control" id="operating_system" name="operating_system" value="{{$computer_info->operating_system}}" required>
        </div>
        <div class="form-group">
            <label for="processor">Processor</label>
            <input type="text" class="form-control" id="processor" name="processor" value="{{$computer_info->processor}}" required>
        </div>
        <div class="form-group">
            <label for="memory">Memory</label>
            <input type="number" class="form-control" id="memory" name="memory" value="{{$computer_info->memory}}" required>
        </div>
        <div class="form-group">
            <label for="available">Available</label>
            <select class="form-control" id="available" name="available" required>
                    <option value="1"> Available </option>
                    <option value="0"> Not Available </option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
