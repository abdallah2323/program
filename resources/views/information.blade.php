<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    section {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 170px;
    }
    form h1 {
        text-align: center;
    }
    form input[type="text"]{
        height: 30px;
        width: 300px; 
        padding: 30px
        outline: none;
    }
    form input[type="submit"]{
        padding: 10px;
        font-size: 20px;
        font-weight: 500;
        margin-left: 115px;
        cursor: pointer;
    }
</style>
<body>
    <section>
        <form action="" method="post">
            @csrf
            <h1>Enter Your Information</h1>
            <input required type="text" name="name" placeholder="Enter Your Name" id="">
            <br>
            <br>
            <input required type="text" name="age" placeholder="Enter Your Age" id="">
            <br>
            <br>
            <input required type="text" name="edu" placeholder="Enter Your Education" id="">
            <br>
            <br>
            <input type="submit" value="Send">
        </form>
    </section>
</body>
</html>