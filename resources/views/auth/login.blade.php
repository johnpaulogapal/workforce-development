@extends('layouts.auth.app')

@section('content')
    
@if(session()->has('message'))
    <div class="fixed-top mt-5 d-flex justify-content-center " x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" >
        <div class="alert alert-success text-2xl align-middle" role="alert">
            <i class='bx bx-power-off' ></i> {{session('message')}}
        </div>
    </div>
@endif 

    <div class="login-container d-flex justify-content-center align-items-center">
    

        <div class="d-flex bg-workforce rounded shadow w-50">
          
            <div class="p-5 w-50 my-auto text-center text-light">
                <h1 class="mb-3">
                    <i class="fa-solid fa-right-to-bracket mr-3"></i>SIGN IN
                </h1>
                <h6 class="mb-3">
                    TO ACCESS THE WEBSITE
                </h6>
                <h4>
                    WORKFORCE DEVELOPMENT
                </h4>
            </div>

            <form method="POST" action="/authenticate" class="p-5 w-50 bg-light">
            @csrf

                <div class="mb-5 d-flex justify-content-center">
                    <img src="{{asset('images/logo.png')}}" alt="" class="w-100">
                </div>
               
                <div class="form-group text-workforce">
                    <label for="exampleInputEmail1"><i class="fa-solid fa-user-lock mr-2"></i>Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
                    @error('email')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group text-workforce">
                    <label for="exampleInputPassword1"><i class="fa-solid fa-key mr-2"></i>Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mt-3 text-center text-workforce">
                    <small>by logging in to our site. <br> You agree to our Terms and Conditions <br> and Privacy Policy.</small>
                </div>
                <div class="mt-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-workforce text-light">SIGN IN</button>
                </div>
            
            </form>
        </div>
    </div>
  
    <div class="custom-shape-divider-bottom-1682492827">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>

@endsection