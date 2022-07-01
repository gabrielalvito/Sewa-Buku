@extends('layouts.login_layout')
@section('content')
    <div class="container" style="margin-top: 50px;">
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Email" name="Email">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="Password">
                </div>
            </div>
            <div>
                <button class="btn btn-success" type="submit">Login</button>
            </div>
        </form>
    </div>
@endsection