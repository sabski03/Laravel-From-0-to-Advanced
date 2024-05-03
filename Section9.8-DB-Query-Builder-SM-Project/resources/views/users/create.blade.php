@extends('layouts.master')

@section('title')
    Create User
@endsection

@section('content')

@if($errors->any())

    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach

@endif


    <div class="row mb-4">

        <div class="col-6 offset-3">
            <h1 class="text-center">Create User</h1>
            <form action="{{route('users.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{old('name')}}" name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameInput">
                    @error('name')
                    <div id="nameInput" class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{old('email')}}" name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailInput">
                    @error('email')
                    <div id="emailInput" class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" aria-describedby="passwordInput">
                    @error('password')
                    <div id="passwordnput" class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="passwordConfirm" class="form-label">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control @error('password_comfirmation') is-invalid @enderror" id="passwordConfirm" aria-describedby="passwordConfirmInput">
                    @error('password_confirmation')
                    <div id="passwordConfirmInput" class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>




                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>

@endsection


