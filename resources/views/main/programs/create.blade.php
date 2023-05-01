@extends('layouts.main.app')

@section('content')
    
    <div class="container p-5 w-50 d-flex justify-content-center align-items-center bg-light rounded shadow header-workforce">
        <form method="POST" action="{{route('programs.store')}}">
        @csrf
            <h3 class="text-center text-workforce"><i class='bx bx-plus-circle'></i> Add Program</h3>
            <div class="mt-5 row">
                <div class="form-row justify-content-center">
                    <div class="form-group col-8">
                        <label for="name">Program's Name</label>
                        <input name="name" type="text" class="form-control" value="{{old('name')}}">
                        @error('name')
                            <small class="text-danger text-sm">{{ $message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-8">
                        <label for="inputPassword4">From</label>
                        <input name="from" type="date" class="form-control" value="{{old('from')}}">
                    </div>
                    <div class="form-group col-8">
                        <label for="inputPassword4">To</label>
                        <input name="to" type="date" class="form-control" value="{{old('to')}}">
                    </div>
                </div>
            </div>
            <div class="mt-5 d-flex justify-content-center align-items-center">
                <a href="{{route('programs.index')}}" class="btn btn-danger tracking-wider mr-3"><i class='bx bx-arrow-back'></i> Go Back</a>
                <button class="btn btn-success tracking-wider"><i class='bx bx-check'></i> Confirm</button>
            </div>
        </form>
    </div>

@endsection





