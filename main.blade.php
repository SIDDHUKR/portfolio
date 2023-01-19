<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My-Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="bigbox">
        {{-- {{ View('header') }} --}}
        <div class="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/project">Projects</a></li>
                {{-- <li>CV --}}
                    {{-- <div class="folder">
                        <a href="/invoice">Download</a>
                    </div> --}}
                {{-- </li> --}}
            </ul>
        </div>
        <div class="box1">
            <div class="intro">
                <h2>Fullstak Developer</h2>
            <h1>Hi I'm <span>Siddhu</span><br>Kumar from India</h1>
            </div>

        </div>
        <div class="box">

        </div>
    </div>
</body>

<style>

    .nav{
        background-color:transparent; color:#383737;
        width:70vw; height:10vh;
        text-align:center;
        margin-left:30vw;
    }
    .nav ul{
        display: inline-flex; list-style: none;
        margin-left: 15vw;
    }
    .nav ul li{
        margin-left: 5vw; padding: 1vw;
    }
    .nav ul li a{
        text-decoration: none; color:#383737 ;
    }
    .nav ul li a:hover{
        color: red;
        border-bottom: 3px solid red;
    }
    .bigbox {
        /* background-image: url("image/img1.jpeg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat; */
        background-color: rgb(115, 113, 113);
        width: 100vw;
        height: 100vh;
        text-align: center;
        margin:0vw; padding: 0vw;
    }
    .box{
        background-image: url("image/mypic.JPG");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 40vw; width: 70vw;
        margin-left:30vw;
    }
    .box1{
        background-color: transparent;
        width: 50vw;
        height: 80vh;
        text-align: center;
        position:absolute;
    }
    .intro{
        background-color: transparent;
        color: white;
        width: 50vw;
        height: 50vh;
        text-align: center;
        margin-top:30vh;
    }
    span{
        color: rgb(148, 242, 165);
    }

    @media (max-width:650px) {
        .bigbox {
        height: 92vh;
    }
    }
</style>

</html>
