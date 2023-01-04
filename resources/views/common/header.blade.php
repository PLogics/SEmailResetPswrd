{{-- @if(session()->has('user_session')) --}}
<div class="head-div">
    <div class="main">
        {{-- <div class="head">
            <span>My Shopping Project</span>
            <p>THE BIGGEST CHOICE OF THE WEB</p>
        </div> --}}
        <div class="btn">
            {{-- @if(Session::has ('user_session')){
                <a href="logoutUser"><input type="submit" name="logout" value="{{Session()->get('user_session')}} Log Out"  ></a>
            }
            @else{
                <a href="{{url('/loginRegister')}}"><input type="submit" name="login" value="Log In"></a>
            } --}}
            <a href="logoutUser"><input type="submit" name="logout" value="{{Session()->get('fullname')}} Log Out"  ></a>
        </div>
    </div>
</div>
{{-- <div class="home-page">
    <div class="pagnation">
        <div class="list">
            <ul>
                <li><a href="indexUser">HOME</a></li>
                <li>NEW PROJECT</a></li>
                <li>SPECIAL</li>
                <li><a href="Product">ALL PRODUCTS</a></li>
                <li>REVIEWS</a></li>
                <li><a href="contactUs">CONTACT</a></li>
                <li><a href="checkout">MY CART</a></li>
            </ul>
        </div>
        <div class="search">
            <div class="search-1">
                <div class="input">
                    <input type="text" name="">
                </div>
                <div class="btnn">
                    <input type="button" name="" value="Search">
                </div>
            </div>
        </div>
    </div>
</div> --}}
