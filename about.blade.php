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
    {{ View::make('header') }}

    <div class="big">
        {{-- <h1>Hi this is My-Potfolio</h1> --}}
        <div class="box">
            <div class="box1">
                <h1><b><span>Introduction</span></b></h1>
                <p>
                    Hello ! This is Siddhu Kumar. I am from Bihar. I done my schooling from Devi Dayal High School. I done
                    my Intermideate(+2) from Patna Colligeate School. I done my BCA from Collage of Commerce Arts and
                    Science.
                    I have some knowlodge in HTML, CSS, PHP, Laravel and Angular. I have alredy done projects through this
                    knowloge which i have learned in between this i learned about tag in html, stylings in css, and to
                    develop somthing with
                    PHP, Laravel and Angular. I am comfortable in VS Code for developing my projects. I love too solve the
                    problems with the help of coding. My favourite hobbies are coding and playing cricket.</p>
            </div>
            <div class="box2">
                <img src="image/mypic.JPG" alt="error!">
            </div>

        </div>

    </div>


    {{ View::make('footer') }}
</body>

<style>
    .big {
        background-color: #ffffff;
        color: #090808;
        width: 100vw;
        height: 81.9vh;
        text-align: center;
        margin: 0%;
        padding: 0%;
    }

    .box {
        background-color: #ffffff;
        color: #090808;
        width: 99vw;
        height: 70vh;
        /* display: flex; */
    }

    .box1 {
        background-color: #ffffff;
        color: #090808;
        width: 42vw;
        float: left;
        height: 75vh;
        margin-left: 5vw;
        font-size: 1.4vw;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .box2 {
        background-color: #ffffff;
        color: #090808;
        width: 40vw;
        float: right;
        height: 70vh;
        margin-right: 5vw;
        font-size: 1.5vw;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .box2 img {
        width: 40vw;
        height: 70vh;
    }




    @media (max-width:650px) {
        .big {
            height: 92vh;
        }

        .box {}

        .box1 {
            width: 98vw;
            height: 30vh;
            float: none;
            font-size: 2vw;
        }

        .box2 {
            margin-left: 29vw;
            height: 30vh;
            float: none;
        }

        .box2 img {
            height: 30vh;
        }
    }
</style>

</html>
