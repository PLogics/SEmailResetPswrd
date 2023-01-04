<!DOCTYPE html>
<html>

<head>
    <title>Email Verification</title>
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
                        <p></p>
                        <div class="user-info">
                            <table class="login-1">
                                <p>{{ ('Welcome To Home page') }}</p>
                                <tr class="inpt">
                                    {{-- <td><a href="{{url('/logoutUser')}}"><input type="submit" name="logout" value="Logout" /></td> --}}
                                </tr><br>
                                <tr class="logn-btn">
                                    <td></td>
                                    <td><a href="{{url('/logoutUser')}}"><input class="log" type="submit" name="logout" value="Logout" /></td>
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
