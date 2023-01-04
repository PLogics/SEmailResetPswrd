<!DOCTYPE html>
<html>

<head>
    <title>Email Password Verification</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/SEmailResetPswrd/public/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="app">
        @include('flash-message')

        @yield('content')
    </div>
    <div class="main-div">
        {{-- @include ('common/header') --}}
        <div class="null">
        </div>
        <div class="main-categorious">
            <div class="footer">
                <div class="login-here">
                    <div class="login">
                        <p>Forgot Password</p>
                        <div class="user-info">
                            <form action="{{url('/emailforgotpassword')}}" method="post">
                                {{csrf_field()}}
                                <table class="login-1">
                                    <p>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
                                    <tr class="inpt">
                                        <td><span>Email</span></td>
                                        <td><input type="text" name="email"></td>
                                    </tr><br>
                                    <tr class="logn-btn">
                                        <td></td>
                                        <td><input class="log" type="submit" name="login" value="Email Password Reset Link"></td>
                                    </tr>

                                    </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="footer-1">
                @include ('common/footer')
            </div> --}}
        </div>
    </div>
</body>

</html>
