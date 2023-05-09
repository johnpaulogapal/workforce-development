@extends('layouts.main.app')

@section('content')
    
@if(session()->has('message'))
    <div class="fixed-top ml-5 mt-5 d-flex justify-content-center " x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" >
        <div class="alert alert-success text-2xl align-middle" role="alert">
            <i class='bx bx-power-off' ></i> {{session('message')}}
        </div>
    </div>
@endif 


<div class="row justify-content-start">
    <div class="col-8">
        <h2 class="mb-3">Dashboard</h2>
        <div class="row mb-5">

            {{-- Total Applicants --}}
            <div class="col-3 mx-3 p-3 bg-info text-light rounded-lg shadow-lg">
                <h5>Total Applicants <i class='bx bxs-user-detail float-right'></i></h5>
                <h3>255 </h3>
            </div>

            {{-- Total Learners --}}
            <div class="col-3 mx-3 p-3 bg-info text-light rounded-lg shadow-lg">
                <h5>Total Learners <i class='bx bx-user float-right'></i></h5>
                <h3>100</h3>
            </div>

            {{-- Total Programs --}}
            <div class="col-3 mx-3 p-3 bg-info text-light rounded-lg shadow-lg">
                <h5>Total Programs <i class='bx bx-clipboard float-right'></i></h5>
                <h3>10 </h3>
            </div>
        </div>

        {{-- Analytics --}}
        <div class="row justify-content-center">
            <div class="col-10">
                <canvas id="myChart"></canvas>
              </div>
        </div>
    </div>

    <div class="col-4">
        <h2 class="mb-3">Summary</h2>

        {{-- Latest Applicants --}}
        <div class="mb-5 p-3 rounded shadow-lg">
            <h5 class="mb-3">Recent Applicants</h5>
            <div class="d-flex justify-content-between align-items-center mb-1">
                <h5><i class='bx bxs-user-detail p-1 bg-info text-light rounded align-center mr-3'></i>John Paulo Gapal</h5>
                <a href="" class="btn btn-primary btn-sm"><i class='bx bx-search-alt-2 mr-1' ></i>View</a>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-1">
                <h5><i class='bx bxs-user-detail p-1 bg-info text-light rounded align-center mr-3'></i>Richard Turla</h5>
                <a href="" class="btn btn-primary btn-sm"><i class='bx bx-search-alt-2 mr-1' ></i>View</a>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-1">
                <h5><i class='bx bxs-user-detail p-1 bg-info text-light rounded align-center mr-3'></i>Renmark Salalila</h5>
                <a href="" class="btn btn-primary btn-sm"><i class='bx bx-search-alt-2 mr-1' ></i>View</a>
            </div>
        </div>

        {{-- Latest Learners --}}
        <div class="mb-5 p-3 rounded shadow-lg">
            <h5 class="mb-3">Recent Learners</h5>
            <div class="d-flex justify-content-between align-items-center mb-1">
                <h5><i class='bx bx-user p-1 bg-info text-light rounded align-center mr-3'></i>Arjell Baun</h5>
                <a href="" class="btn btn-primary btn-sm"><i class='bx bx-search-alt-2 mr-1' ></i>View</a>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-1">
                <h5><i class='bx bx-user p-1 bg-info text-light rounded align-center mr-3'></i>Joseph Espanta</h5>
                <a href="" class="btn btn-primary btn-sm"><i class='bx bx-search-alt-2 mr-1' ></i>View</a>
            </div>
        </div>
    </div>
</div>
   



@endsection



