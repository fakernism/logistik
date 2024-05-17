@extends('layout.template_login')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-4 pr-md-0">
                        <div class="auth-left-wrapper">

                        </div>
                    </div>
                    <div class="col-md-8 pl-md-0">
                        <div class="auth-form-wrapper px-4 py-5">
                            <a href="#" class="noble-ui-logo d-block mb-2">Logis<span>thing</span></a>
                            <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
                            <form class="forms-sample" action="/login/aksi" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" id="username" name="username" class="form-control" id="exampleInputEmail1"
                                        placeholder="Username" @if (isset($_COOKIE["username"])) @endif>
                                        @error('username') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" id="exampleInputPassword1"
                                        autocomplete="current-password" placeholder="Password" @if (isset($_COOKIE["password"])) @endif>
                                        @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-check form-check-flat form-check-primary">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" id="rememberme" class="form-check-input" @if (isset($_COOKIE["username"])) checked="" @endif>
                                        Remember me
                                    </label>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" name="login" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection