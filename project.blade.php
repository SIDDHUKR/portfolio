<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</head>

<body>
    {{ View::make('header') }}

    <div class="big">
        <div class="box">
            <div class="box1">
                <h1>welcome to my project with sourse file !</h1>
            </div>
            <div class="add">
                <a href="/addproject"><button class="btn btn-primary">Add Projects
           </button></a>
            </div>
        </div>
        <hr>
        <div class="table">
            <table class="table">
                <thead>
                     <tr>
                        <th>Sr.no</th>
                        <th>Project-Name</th>
                        <th>Project-Description</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{ $count=0 }}
                    @foreach ($listname as $listname)
                        {{ $count= $count+1 }}
                      <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $listname ['name'] }}</td>
                        <td>{{ $listname ['discription'] }}</td>
                        <td>{{ $listname ['link'] }}</td>
                        <td><a href={{ "/delete/".$listname['id']}}><button>Delete</button></a></td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
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
    .box{
        background-color: #ffffff;
        color: #090808;
        width: 100vw;
        height: 9vh;
        display: inline-flex;
        text-align: center;
    }
    .box1{
        background-color: #ffffff;
        color: #090808;
        width: 80vw;
        height: 9vh;
        text-align: center;
        margin-left: 10vw;
    }
    .add{
        background-color: #ffffff;
        width: 10vw;
        height: 9vh;
    }
    .add button{
        margin-top: 1.5vh;
    }
    .table button{
        background-color:red; color: rgb(23, 22, 24);
        widows: 8vw; height: 5vh;
        border: none;
        border-radius: 2vw;
    }
    /* .addproject{
        background-color: #b77c7c;
        color: #090808;
        width: 50vw;
        height: 50vh;
        text-align: center;
        display: none;
        margin-right: 70vw;

    }
    .add a button:hover .addproject{
        display: block;
    } */


    @media (max-width:650px){
        .big {
            height: 92vh;
        }
        .table table{
            width: 50%;
        }
    }

</style>

</html>
