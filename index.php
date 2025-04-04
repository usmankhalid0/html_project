<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background: url('images/1.jpg');
        background-size: cover;
    }
    .container{
        width: 360px;
        height:400px;
        margin: 8% auto;
        background: white;
        position: relative;
        overflow: hidden;
    }
    h3{
        text-align: center;
        margin-bottom: 40px;
    }
    .container section{
        width:280px;
        position: absolute;
        top:100px;
        left:46px;
        transition: 1.5s;
    }
    section input{
        width:100%;
        padding: 10px 5px;
        margin: 5px 0;
        border-bottom: 1px solid black ;
        outline: none;
        background: transparent;
    }
    .btn-box{
        width: 100%;
        margin: 30px auto ;
        text-align: center;
    }
    section button{
        width:110px;
        height:35px;
        margin: 0 10px;
        background-color:yellow ;
        cursor: pointer;
    }
    #form2{
        left:450px;
    }
    #form3{
        left:-450px;
    }
</style>
<body>
    <div class="container">
        <form>
        <section id="form1"> 
            <h3>Create Account</h3>
        <input type="text" name="name1" placeholder="Enter Name">
        <input type="text" name="name2" placeholder="Enter Email">
        <input type="text" name="name3" placeholder="Enter Password">
        <div class="btn-box">
            <button type="button" id="next1">Next</button>
        </div>
        </section>

        <section id="form2"> 
            <h3>Social Links</h3>
        <input type="text" name="name4" placeholder="Enter Name">
        <input type="text" name="name5" placeholder="Enter Email">
        <input type="text" name="name6" placeholder="Enter Password">
        <div class="btn-box">
            <button type="button" id="back1">back</button>
            <button type="button" id="next2">Next</button>
        </div>
        </section>

        <section id="form3"> 
            <h3>Personal Info</h3>
        <input type="text" name="name7" placeholder="Enter Name">
        <input type="text" name="name8" placeholder="Enter Email">
        <input type="text" name="name9" placeholder="Enter Password">
        <div class="btn-box">
            <button type="button" id="back2">back</button>
            <button type="submit">Submit</button>
        </div>
        </section>
        </form>
    </div>
    <script>
        var form1 = document.getElementById('form1');
        var form2 = document.getElementById('form2');
        var form3 = document.getElementById('form3');

        var next1 = document.getElementById('next1');
        var next2 = document.getElementById('next2');
        var back1 = document.getElementById('back1');
        var back2 = document.getElementById('back2');

        next1.onclick = function (){
            form1.style.left ="-450px";
            form2.style.left ="40px";
        }
        back1.onclick = function (){
            form1.style.left ="40px";
            form2.style.left ="450px";
        }
        next2.onclick = function (){
            form2.style.left ="-450px";
            form3.style.left ="40px";
        }
        back2.onclick = function (){
            form2.style.left ="40px";
            form3.style.left ="450px";
        }
    </script>
</body>
</html>