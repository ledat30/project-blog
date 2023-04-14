<style>
    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: arilal;
    }
    .header1{
        width: 100%;
        height: 100vh;
        background-image:  linear-gradient(rgba(13,3,51,0.3),rgba(12,3,51,0.3));
        position: relative;
        padding: 0 10%;
        align-items: center;
        justify-content: center;
    }
    .nav{
        width: 100%;
        position: absolute;
        top : 0;
        left: 0;
        padding: 20px 8%;
        display: flex;
        align-items: center;
        justify-content: end;
    }
    nav ul li{
        list-style: none;
        display: inline-block;
        margin-left: 40px;
    }
    nav ul li a{
        text-decoration: none;
        color: #fff;
        font-size: 25px;

    }
    .head{
        text-align: center;
    }
    .head h1{
        font-size: 50px;
        color: #fff;
        font-weight: 600;
        transition: 1s;
    }
    .head h1:hover{
        -webkit-text-stroke: 2px  #fff;
        color: transparent;
    }
    .head a{
        text-decoration:none ;
        display: inline-block;
        color: #fff;
        font-size: 25px;
        border: 2px solid #fff;
        border-radius: 50px;
        padding: 14px 70px;
        margin-top: 25px;
    }
    .back{
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: -1;
    }
    @media (min-aspect-ratio:16/9) {
        .back{
            width: 100%;
            height: auto;

        }
    }
    @media (max-aspect-ratio:16/9) {
        .back{
            width: auto;
            height: 100%;
        }
    }
    .search-wrapper {
        transform: translate(-5%, -4%);
        top:50%;
        left:50%;
    }
    .search-wrapper.active {}

    .search-wrapper .input-holder {
        height: 56px;
        width:50px;
        overflow: hidden;
        background: rgba(255,255,255,0);
        border-radius:6px;
        position: relative;
        transition: all 0.3s ease-in-out;
    }
    .search-wrapper.active .input-holder {
        width:200px;
        border-radius: 50px;
        background: whitesmoke;
        transition: all .5s cubic-bezier(0.000, 0.105, 0.035, 1.570);
    }
    .search-wrapper .input-holder .search-input {
        width:100%;
        height: 50px;
        padding:0px 70px 12px 20px;
        opacity: 0;
        position: absolute;
        top:0px;
        left:0px;
        background: transparent;
        box-sizing: border-box;
        border:none;
        outline:none;
        font-family:"Open Sans", Arial, Verdana;
        font-size: 16px;
        font-weight: 400;
        line-height: 20px;
        color:black;
        transform: translate(0, 60px);
        transition: all .3s cubic-bezier(0.000, 0.105, 0.035, 1.570);
        transition-delay: 0.3s;
    }
    .search-wrapper.active .input-holder .search-input {
        opacity: 1;
        transform: translate(0, 10px);
    }
    .search-wrapper .input-holder .search-icon {
        width:50px;
        height:50px;
        border:none;
        border-radius:6px;
        background: #FFF;
        padding:0px;
        outline:none;
        position: relative;
        z-index: 2;
        float:right;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }
    .search-wrapper.active .input-holder .search-icon {
        width: 50px;
        height:50px;
        margin: 3px;
        border-radius: 30px;
    }
    .search-wrapper .input-holder .search-icon span {
        width:22px;
        height:22px;
        display: inline-block;
        vertical-align: middle;
        position:relative;
        transform: rotate(45deg);
        transition: all .4s cubic-bezier(0.650, -0.600, 0.240, 1.650);
    }
    .search-wrapper.active .input-holder .search-icon span {
        transform: rotate(-45deg);
    }
    .search-wrapper .input-holder .search-icon span::before, .search-wrapper .input-holder .search-icon span::after {
        position: absolute;
        content:'';
    }
    .search-wrapper .input-holder .search-icon span::before {
        width: 4px;
        height: 11px;
        left: 9px;
        top: 18px;
        border-radius: 2px;
        background: #FE5F55;
    }
    .search-wrapper .input-holder .search-icon span::after {
        width: 14px;
        height: 14px;
        left: 0px;
        top: 0px;
        border-radius: 16px;
        border: 4px solid #FE5F55;
    }
    .search-wrapper .close {
        position: absolute;
        z-index: 1;
        top:14px;
        right:20px;
        width:25px;
        height:25px;
        cursor: pointer;
        transform: rotate(-180deg);
        transition: all .3s cubic-bezier(0.285, -0.450, 0.935, 0.110);
        transition-delay: 0.2s;
    }
    .search-wrapper.active .close {
        right:-40px;
        transform: rotate(45deg);
        transition: all .6s cubic-bezier(0.000, 0.105, 0.035, 1.570);
        transition-delay: 0.5s;
    }
    .search-wrapper .close::before, .search-wrapper .close::after {
        position:absolute;
        content:'';
        background: #FE5F55;
        border-radius: 2px;
    }
    .search-wrapper .close::before {
        width: 5px;
        height: 25px;
        left: 10px;
        top: 0px;
    }
    .search-wrapper .close::after {
        width: 25px;
        height: 5px;
        left: 0px;
        top: 10px;
    }
</style>
<header>
    <div class="header1">
        <video autoplay loop muted playsinline class="back" >
            <source src="https://player.vimeo.com/external/492700392.hd.mp4?s=883ea309186659011919274ea7100690f1364589&profile_id=174" type="video/mp4">
        </video>
        <nav class="main-menu">
            <ul class="menu-area-main">
                <li>
                    <a href="{{route('home.web')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('category.web')}}">Blog</a>
                </li>
                <li>
                    <a href="#">Giới thiệu</a>
                </li>
                <li>
                    <a href="{{route('contact.web')}}">Liên hệ</a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user())
                    <li>
                        <a href='{{route('web.profile')}}'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>&nbsp; <span class="glyphicon glyphicon-user"></span>
                            {{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                        <ul>
                            <li>
                                <a href='{{route('web.logout')}}'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                    </svg> &nbsp; Logout</a>
                            </li>
                        </ul>
                    </li>

                @else
                    <li> <a href='{{route('web.auth.login')}}'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>&nbsp; Login</a>
                    </li>
                @endif
                <li>
                    <form action="search" method="GET" class="navbar-form navbar-left" role="search">
                        @csrf
                        <div class="search-wrapper">
                            <div class="input-holder">
                                <input type="text" name="key" class="search-input" placeholder="search..." />
                                <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                            </div>
                            <span class="close" onclick="searchToggle(this, event);"></span>
                        </div>
                    </form>
                </li>
            </ul>
        </nav>
        <div class="head">
            <h1>Next Dimension Coding</h1>
            <a href="#">like</a>
        </div>
    </div>
</header>
