<div class="nav">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/project">Projects</a></li>
        {{-- <li>CV
            <div class="folder">
                <a href="/invoice">Download</a>
            </div>
        </li> --}}
        {{-- <a href="/download">down</a> --}}
    </ul>
</div>
<div class="sidenav">
{{-- <div class="sidenav sidenavGo"> --}}
    {{-- <div class="hamburger">
        <button class="ham">=</button>
        <button class="cross">*</button>
    </div> --}}
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/project">Projects</a></li>
        {{-- <li>CV
            <div class="folder">
                <a href="/invoice">Download</a>
            </div>
        </li> --}}
    </ul>
    </div>

<style>
    .nav{
        background-color:transparent; color:#383737;
        width:100vw; height:10vh;
        text-align:center;
    }
    .nav ul{
        display: inline-flex; list-style: none;
    }
    .nav ul li{
        margin-right: 5vw; padding: 1vw;
    }
    .nav ul li a{
        text-decoration: none; color:#383737 ;
    }
    .nav ul li a:hover{
        color: red;
        border-top: 3px solid red;
    }

    .sidenav{
        background-color:#B6B6B6; color:#383737;
        width:30vw; height:40vh;
        position: absolute;
        display: none;
    }
    .sidenav ul{
         list-style: none;
    }
    .sidenav ul li{
         padding: 1vw;
    }
    .sidenav ul li:hover{
        color: red;
    }
    .folder{
         background-color: #ffffff; color: green;
         box-shadow: .2vw .2vw .2vw .2vw rgb(102, 98, 132);
        display: none; position: absolute;
        margin-top: 4vh; margin-left: -4.5vw;
    }
    .nav ul li:hover .folder{
        display: inline-block;
    }
    .sidenav ul li:hover .folder{
        display: inline-block;
    }
    .ham{
        float: left; padding: 1vw;
    }
    .cross{
        float: right; padding: 1vw;
    }


    @media (max-width:650px){
        .nav{
            display: none;
        }
        .sidenav{
            display: inline-block;
        }
    }

</style>
