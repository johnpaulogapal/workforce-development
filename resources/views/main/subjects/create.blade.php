@extends('layouts.main.app')

@section('content')
    
    <div class="container p-4 w-75 d-flex justify-content-center align-items-center bg-light rounded shadow header-workforce">
        <form method="POST" action="{{route('subjects.store')}}">
        @csrf
            <h3 class="text-center text-workforce"><i class='bx bx-plus-circle'></i> Add Subject</h3>
            <div class="mt-4 row">
                <div class="form-row justify-content-center">
                    <input type="text" name="program_id" value="{{$program->id}}" hidden>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Subject's Name</label>
                            <input name="name" type="text" class="form-control" value="{{old('name')}}">
                            @error('name')
                                <small class="text-danger text-sm">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="code">Subject's Code</label>
                            <input name="code" type="text" class="form-control" value="{{old('code')}}">
                            @error('code')
                                <small class="text-danger text-sm">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="venue">Subject's Venue</label>
                            <input name="venue" type="text" class="form-control" value="{{old('venue')}}">
                            @error('venue')
                                <small class="text-danger text-sm">{{ $message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="description">Subject's Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" value="{{old('description')}}"></textarea>
                        @error('description')
                            <small class="text-danger text-sm">{{ $message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="inputPassword4">From</label>
                        <input name="from" type="date" class="form-control" value="{{old('from')}}">
                    </div>
                    <div class="form-group col-6">
                        <label for="inputPassword4">To</label>
                        <input name="to" type="date" class="form-control" value="{{old('to')}}">
                    </div>
                </div>
            </div>
            <div class="mt-4 d-flex justify-content-center align-items-center">
                <a href="{{route('subjects.index', $program->id)}}" class="btn btn-secondary tracking-wider mr-3"><i class='bx bx-arrow-back'></i> Go Back</a>
                <button class="btn btn-success tracking-wider"><i class='bx bx-check'></i> Confirm</button>
            </div>
        </form>
    </div>

@endsection





