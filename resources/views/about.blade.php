<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        font-family:system-ui,-apple-system;
    }
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        height: 100px;
        padding: 30px;
        background-color: rgba(0,0,0,0.06);
    }
    header .left a {
        text-decoration: none;
        color: #F05340;
        font-size: 50px;
        font-weight: 700;
    }
    header .right ul{
        display: flex;
        position: relative;
        list-style: none;
    }
    header .right ul li {
        padding: 20px
    }
    header .right ul li a {
        text-decoration: none;
        font-size: 25;
        text-transform: uppercase;
        font-weight: 500;
        color: #000;
    }
    section {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    section .left {
        text-align: center;
        margin-top: 150px;
    }
    section .left h2 {
        font-size: 35px;
    }
    section .left h2 span {
        text-transform: uppercase;
        color: #F05340;
    }
</style>

<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<body>
    {{-- <ul>
        @foreach ($tasks as $key => $task)
            <li><a href="/show/{{$key}}">{{$task}}</a></li>
        @endforeach
    </ul> --}}

    {{-- <form action="/about" method="post">
        @csrf
        <input type="text" name="name" id="">
        <input type="submit" value="send">
    </form>
    @if (isset($name))
    <h1>Hello {{$name}}</h1>
    @endif --}}
    <header>
        <div class="left">
            <a href="#">Laravel</a>
        </div>
        <div class="right">
            <ul>
                <li><a href="/information">Information</a></li>
                <li><a href="/aboutus">About Us</a></li>
            </ul>
        </div> 
    </header>

    <section>
        <div class="left">
            @if (isset($name))
                <h2>
                    Wellcome <span>{{$name;}}</span>
                </h2>
                <h2>
                    Your Age <span>{{$age;}}</span>
                </h2>
                <h2>
                    Your Education <span>{{$edu;}}</span> 
                </h2>
            @endif
        </div>
    </section>
</body>
</html>