<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
</head>
<body>
    @include('header')

    <div class="container1">
        <h1><b><span>Contact with Me</span></b></h1>
        <div class="box">
            <form action="/add">
                @csrf
    <x-input type="name" name="name" label="Name" placeholder="Name" />
    <x-input type="email" name="email" label="E-mail"  placeholder="E-mail" />
    <x-input type="number" name="number" label="Phone number"  placeholder="Number" />
    <x-input type="state" name="state" label="state" placeholder="state" />
    <x-input type="textarea" name="textarea" label="Write Here" placeholder="write your purpose" />
    <a href="#"><button class="btn btn-primary" value="items">Submit</button></a>
</form>
</div>

<div class="box1">
    <a href="http://www.facebook.com"> <img src="image/fbimg.jpg" alt="error!"></a>
    <a href="http://www.github.com"> <img src="image/github.jfif" alt="error!"></a>
    <a href="http://www.linkedin.com"> <img src="image/linkedin.jpg" alt="error!"></a>
</div>
    </div>



 @include('footer')
</body>

<style>

.container1 {
        background-color: #ffffff;
        color: #090808;
        width: 100vw;
        height: 81.9vh;
        text-align: center;
        margin: 0%;
        padding: 0%;

    }
    .box{
        background-color: #ffffff; color: #090808;
        width: 60vw; height: 60vh;
        margin-left: 20vw;
        font-size: 1.5vw;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .box form{
        padding: 3vw;
    }
    .box form label{
        float: left; margin-left: 10vw;
    }
    .box form input{
        float: right; margin-right: 10vw;
        border: none;background-color: transparent;
        border-bottom: .2vw solid black;
    }
    .box1{
        background-color: #ffffff; color: #090808;
        width: 50vw; height:10vh;
        margin-left: 20vw;
        margin-top: 5vh;
    }
    .box1 img{
        width: 4vw; height:4vh;
        /* border-radius: 5vw; */
    }


    @media (max-width:650px){
        .container{
            height: 92vh;
        }
        .box{
            width: 60vw;
            margin-left: 15vw;
        }
    }

</style>

</html>
