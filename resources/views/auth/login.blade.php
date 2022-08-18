<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Main styles for this application-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<body class="c-app flex-row align-items-center auth-bg">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card-group">
                <div class="card p-4">
                    <form action="{{ url('auth/login') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            @if (session('failLogin'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ session('failLogin') }}</strong>
                                </div>
                            @endif
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text">
                                            <svg class="c-icon">
                                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user">
                                                </use>
                                            </svg></span></div>
                                <input class="form-control" type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend"><span class="input-group-text">
                                            <svg class="c-icon">
                                                <use
                                                        xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked">
                                                </use>
                                            </svg></span></div>
                                <input class="form-control" type="password" name="password" placeholder="Password" required>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" type="submit">Login</button>
                                </div>
                                {{-- <div class="col-6 text-right">
                                    <button class="btn btn-link px-0" type="button">Forgot password?</button>
                                </div> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js')}}"></script>
</body>

</html>
