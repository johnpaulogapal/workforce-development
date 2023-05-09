@extends('layouts.main.app')

@section('content')
    
    <div class="container p-3 w-50 d-flex justify-content-center align-items-center bg-light rounded shadow header-workforce">
        <form method="POST" action="{{route('subjects.update', $subject->id)}}">
        @csrf
        @method('PUT')
            <h3 class="text-center text-workforce"><i class='bx bx-plus-circle'></i> Add Subject</h3>
            <div class="mt-1">
                <div class="form-row justify-content-center">
                    <div class="col-12 row">
                        <div class="form-group col-6">
                            <label for="name">Subject's Name</label>
                            <input name="name" type="text" class="form-control" value="{{$subject->name}}">
                            @error('name')
                                <small class="text-danger text-sm">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="code">Subject's Code</label>
                            <input name="code" type="text" class="form-control" value="{{$subject->code}}">
                            @error('code')
                                <small class="text-danger text-sm">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="schedule">Subject's Schedule</label>
                            <input name="schedule" type="text" class="form-control" value="{{$subject->schedule}}">
                            @error('schedule')
                                <small class="text-danger text-sm">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="venue">Subject's Venue</label>
                            <input name="venue" type="text" class="form-control" value="{{$subject->venue}}">
                            @error('venue')
                                <small class="text-danger text-sm">{{ $message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-11">
                        <label for="description">Subject's Description</label>
                        <textarea name="description" id="" cols="20" rows="5" class="form-control" style="resize: none;">{{$subject->description}}</textarea>
                        @error('description')
                            <small class="text-danger text-sm">{{ $message}}</small>
                        @enderror
                    </div>
                  
                </div>
            </div>
            <div class="mt-4 d-flex justify-content-center align-items-center">
                <a href="{{route('subjects.index', $subject->program_id)}}" class="btn btn-secondary tracking-wider mr-3"><i class='bx bx-arrow-back'></i> Go Back</a>
                <button class="btn btn-success tracking-wider"><i class='bx bx-check'></i> Confirm</button>
            </div>
        </form>
    </div>

@endsection





