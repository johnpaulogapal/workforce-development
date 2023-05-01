@extends('layouts.main.app')

@section('content')

@if(session()->has('message'))
    <div class="d-flex justify-content-center " x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" >
        <div class="alert alert-success text-2xl align-middle" role="alert">
            <i class='bx bx-check-circle'></i> {{session('message')}}
        </div>
    </div>
@endif 

<div class="mx-4 my-3 d-flex justify-content-between align-items-center">
    <h3 class="tracking-wider text-workforce"><i class='bx bx-collection' ></i>Programs</h3>
    <a href="{{route('programs.create')}}" class="btn btn-workforce btn-sm d-flex align-items-center">
        <i class='bx bx-plus-circle text-2xl mr-1'></i>
        <span class="text-lg">Add Program</span>
    </a>
</div>

<div class="mx-4">
    <table id="programs" class="table rounded shadow">
        <thead class="text-workforce">
            <tr>
                <th scope="col" class="tracking-wider text-center">PROGRAM'S NAME</th>
                <th scope="col" class="tracking-wider text-center">FROM</th>
                <th scope="col" class="tracking-wider text-center">TO</th>
                <th scope="col" class="tracking-wider text-center">DURATION</th>
                <th scope="col" class="tracking-wider text-center">CREATED BY</th>
                <th scope="col" class="tracking-wider text-center">CREATED ON</th>
                <th scope="col" class="tracking-wider text-center">OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programs as $program)
            <tr>
                <td class="align-middle text-center">{{$program->name}}</td>
                <td class="align-middle text-center">{{date('M d, Y', strtotime($program->from))}}</td>
                <td class="align-middle text-center">{{date('M d, Y', strtotime($program->to))}}</td>
                <td class="align-middle text-center">{{$program->duration}} Days</td>
                <td class="align-middle text-center">{{$program->created_by}}</td>
                <td class="align-middle text-center">{{date('M d, Y', strtotime($program->created_at))}}</td>
                <td class="align-middle text-center">
                    <a href="{{route('subjects.index', $program->id)}}" class="btn btn-primary btn-sm tracking-wider mr-2">
                        <i class='bx bx-search-alt-2'></i> View Subjects
                    </a>
                    <a href="{{route('programs.edit', $program->id)}}" class="btn btn-warning btn-sm tracking-wider mr-2">
                        <i class='bx bxs-edit'></i> Edit
                    </a>
                    <button class="btn btn-danger btn-sm tracking-wider" data-toggle="modal" data-target="#deleteModal{{$program->id}}">
                        <i class='bx bx-trash-alt'></i> Delete
                    </button>
                </td>
            </tr>

            {{-- [Start] - Delete Modal --}}
            <div class="modal fade" id="deleteModal{{$program->id}}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title text-danger " id="deleteModalLabel">Deleting Program</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete {{$program->name}} program?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form method="POST" action="{{route('programs.destroy', $program->id)}}">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-success">Confirm</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            {{-- [End] - Delete Modal --}}

            @endforeach
        </tbody>
    </table>
</div>



@endsection





