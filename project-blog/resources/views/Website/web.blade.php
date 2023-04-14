<html>
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
</style>
<header>
    <div class="header1">
        <video autoplay loop muted playsinline class="back" >
            <source src="https://player.vimeo.com/external/492700392.hd.mp4?s=883ea309186659011919274ea7100690f1364589&profile_id=174" type="video/mp4">
        </video>
        <nav>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Giới thiệu</a>
                </li>
                <li>
                    <a href="#">Liên hệ</a>
                </li>
            </ul>
        </nav>
        <div class="head">
            <h1>Next Dimension Coding</h1>
            <a href="#">like</a>
        </div>
    </div>
</header>
</html>
