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
    <a href="{{route('programs.index')}}" class="btn btn-secondary btn-sm d-flex align-items-center">
        <i class='bx bx-arrow-back mr-1'></i>
        <span class="text-lg">Go Back</span>
    </a>
    <h3 class="tracking-wider text-workforce"><i class='bx bx-chalkboard' ></i> Subjects of {{$program->name}}</h3>
    <a href="{{route('subjects.create', $program->id)}}" class="btn btn-workforce btn-sm d-flex align-items-center">
        <i class='bx bx-plus-circle text-2xl mr-1'></i>
        <span class="text-lg">Add Subject</span>
    </a>
</div>

<div class="mx-4">
    <table id="subjects" class="table rounded shadow">
        <thead class="text-workforce">
            <tr>
                <th scope="col" class="tracking-wider text-center">SUBJECT'S NAME</th>
                <th scope="col" class="tracking-wider text-center">SUBJECT'S CODE</th>
                <th scope="col" class="tracking-wider text-center">SUBJECT'S DESCRIPTION</th>
                <th scope="col" class="tracking-wider text-center">VENUE</th>
                <th scope="col" class="tracking-wider text-center">OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
            <tr>
                <td class="align-middle text-center">{{$subject->name}}</td>
                <td class="align-middle text-center">{{$subject->code}}</td>
                <td class="align-middle text-center">{{$subject->description}}</td>
                <td class="align-middle text-center">{{$subject->venue}}</td>
                <td class="align-middle text-center">
                    {{-- <a href="{{route('programs.edit', $program->id)}}" class="btn btn-primary btn-sm tracking-wider mr-2">
                        <i class='bx bx-search-alt-2'></i> View Subject
                    </a> --}}
                    <a href="{{route('subjects.edit', $subject->id)}}" class="btn btn-warning btn-sm tracking-wider mr-2">
                        <i class='bx bxs-edit'></i> Edit
                    </a>
                    <button class="btn btn-danger btn-sm tracking-wider" data-toggle="modal" data-target="#deleteModal{{$subject->id}}">
                        <i class='bx bx-trash-alt'></i> Delete
                    </button>
                </td>
            </tr>

            {{-- [Start] - Delete Modal --}}
            <div class="modal fade" id="deleteModal{{$subject->id}}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title text-danger " id="deleteModalLabel">Deleting Subject</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete {{$subject->name}} subject?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form method="POST" action="{{route('subjects.destroy', $subject->id)}}">
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





