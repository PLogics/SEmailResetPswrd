<!DOCTYPE html>
<html>

<head>
    <title>Reset Password Verification</title>
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
                        <p>Reset Password</p>
                        <div class="user-info">
                            <form action="{{url('/updatePassword')}}" method="post">
                                {{csrf_field()}}
                            {{-- <form action="{{url('/resetpassword')}}" method="post">
                                {{csrf_field()}} --}}
                                <table class="login-1">
                                    <tr class="inpt">
                                        <td><span>Email</span></td>
                                        <td><input type="text" name="email"></td>
                                    </tr><br>
                                    <tr class="inpt">
                                        <td><span>New Password</span></td>
                                        <td><input type="password" name="newpassword"></td>
                                    </tr>
                                    <tr class="inpt">
                                        <td><span>Confirm New Password</span></td>
                                        <td><input type="password" name="confirmnewpassword" /></td>
                                    </tr>
                                    <tr class="logn-btn">
                                        <td></td>
                                        <td><input class="log" type="submit" name="resetpassword" value="Reset Password"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
