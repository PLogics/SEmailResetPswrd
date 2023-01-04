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
                        <p>Login Here</p>
                        <div class="user-info">
                            <form action="{{url('/login')}}" method="post">
                                {{csrf_field()}}
                                <table class="login-1">
                                    <tr class="inpt">
                                        <td><span>Username</span></td>
                                        <td><input type="text" name="email"></td>
                                    </tr><br>
                                    <tr class="inpt">
                                        <td><span>Password</span></td>
                                        <td><input type="password" name="password"></td>
                                    </tr>
                                    <tr class="logn-btn">
                                        <td></td>
                                        <td><input class="log" type="submit" name="login" value="Login"></td>
                                    </tr>
                                    <tr class="logn-btn">
                                        <td></td>
                                        <td><a href="{{ url('/forgotPassword') }}">Forgot Password?</a></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sign-up">
                <div class="sign">
                    <p>New to Register? <a href="{{url('/loginRegister')}}"> Sign up</a></p>
                    <div class="user-info">
                        <form action="{{url('/signUp')}}" method="post">
                            {{csrf_field()}}
                            <table class="login-1">
                                <tr class="inpt-1">
                                    <td><span>Full Name</span></td>
                                    <td><input type="text" name="fullname"></td>
                                </tr><br>
                                <tr class="inpt-1">
                                    <td><span>Email</span></td>
                                    <td><input type="text" name="email"></td>
                                </tr>
                                <tr class="inpt-1">
                                    <td><span>Password</span></td>
                                    <td><input type="password" name="password"></td>
                                </tr>
                                <tr class="logn-btn">
                                    <td></td>
                                    <td><input class="log" type="submit" name="save" value="Sign up"></td>
                                </tr>
                            </table>
                        </form>
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
