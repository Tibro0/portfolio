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
    <title>{{ config('app.name') }} | Forgot Password</title>
</head>

<body class="bg-forgot">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-forgot d-flex align-items-center justify-content-center">
            <div class="card forgot-box shadow-none">
                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="p-4 rounded  border">
                            <div class="text-center">
                                <img src="{{ asset('admin/assets/images/icons/forgot-2.png') }}" width="120"
                                    alt="" />
                            </div>
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
                            <p class="text-muted">No problem. Just let us know your email address and we will email you
                                a password reset link that will allow you to choose a new one.</p>
                            <div class="my-4">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg"
                                    placeholder="example@user.com" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Send</button> <a
                                    href="{{ route('login') }}" class="btn btn-light btn-lg"><i
                                        class='bx bx-arrow-back me-1'></i>Back to Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
</body>

</html>
