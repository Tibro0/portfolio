<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!-- loader-->
    <link href="{{ asset('admin/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">
    <title>{{ config('app.name') }} | Reset Password</title>
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-5 border-end">
                                <form method="POST" action="{{ route('password.store') }}">
                                    @csrf
                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div class="text-start">
                                                <img src="{{ asset('admin/assets/images/logo-img.png') }}"
                                                    width="180" alt="">
                                            </div>
                                            <h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
                                            <p class="text-muted">We received your reset password request. Please enter
                                                your new password!</p>
                                            <div class="mb-3 mt-5">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" id="email" name="email"
                                                    value="{{ old('email', $request->email) }}" class="form-control"
                                                    placeholder="Email" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" id="password" name="password"
                                                    class="form-control" placeholder="Password" />
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                                                    placeholder="Confirm password"/>
                                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary">Change Password</button>
                                                <a href="{{ route('login') }}" class="btn btn-light"><i
                                                        class='bx bx-arrow-back mr-1'></i>Back to Login</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-7">
                                <img src="{{ asset('admin/assets/images/login-images/forgot-password-frent-img.jpg') }}"
                                    class="card-img login-img h-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
</body>

</html>
