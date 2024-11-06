@extends('layout.app')
@section('title', 'Computers')

@section('main')
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper" style="width: 100%; margin: 30px auto;">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2> Computer <b>Details</b></h2></div>
                    <div class="col-sm-4">
                            <a href="{{route('computers.create')}}" class="btn btn-info add-new">
                                <i class="fa fa-plus"></i> Add
                            </a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 100px">Computer ID</th>
                        <th style="width: 100px">Computer Name</th>
                        <th style="width: 200px">Model</th>
                        <th style="width: 100px">Operating System</th>
                        <th style="width: 200px">Processor</th>
                        <th style="width: 100px">Memory</th>
                        <th style="width: 200px">Available</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($computers as $computer)
                    <tr>
                        <td>{{$computer->id}}</td>
                        <td>{{$computer->computer_name}}</td>
                        <td>{{$computer->model}}</td>
                        <td>{{$computer->operating_system}}</td>
                        <td>{{$computer->processor}}</td>
                        <td>{{$computer->memory}}</td>
                        <td>{{$computer->available}}</td>

                        <td>
                            <a class="edit" title="Edit" data-toggle="tooltip" href="{{route('computers.edit', $computer->id)}}"><i class="fas-pen fa-solid">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip" href="{{route('computers.delete', $computer->id)}}"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
        		{{ $computers->links('pagination::bootstrap-4') }}
    		</div>
        </div>
    </div>
</div>
@endsection
