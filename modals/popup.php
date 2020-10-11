<!DOCTYPE html>
<html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Popup</title>
    </head>
    <style>
        .bg_popup {
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        align-items: center;
        display: none;
        justify-content:center;
        top:0;
        position: absolute;
        padding: 20px;      
        
    }
    .popup-content {
        width: 500px;
        background-color: white;
        border-radius: 10px;
        display: block;
        text-align: center;
        padding: 15px;
        position: relative;
    }
    .close-btn{
        position: absolute;
        top: 0;
        right: 10px;
        font-size: 2.2rem;
        cursor:pointer;
        font-weight: 800;
    }
    .close-btn:hover{
        color: red;
        background-color: #000;
        border-radius: 20px;
        padding:0 9px 0 9x;
    }
    button {
        background-color: limegreen;
        color: #111;
        padding: 15px 20px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        width: 30%;
        font-size: 1.2rem;
    }
    input[type=text],input[type=password] {
        width: 90%;
        padding: 8px 8px;
        margin: 5px 0;
        display: block;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
   form, div .container label{
        font-weight: 800;
        display: inline-block;
        left: 0;
    }     
    
    /*Adding zooom animation*/    
    .animate {
        -webkit-animation: animatezoom 1s;
        animation: animatezoom 1s;

    }

    @-webkit-keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }
        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }
        
</style>

    <body>
    <button class="trigger " id="button">Click here to Login </button>
    <div class="bg_popup animate">
        <div class="popup-content">
            <div class="close-btn">&times;</div>
            <img style="border-radius:50%; width:25%; height:25%;" src="IMG_20180817_070944.jpg" alt="photo" class="avatar" ;><br><br>

            <!--start>>>>the login form -->
            <form class="model-content animate" action="/action_page.php">
                <div class="container">
                    <label for="username" style="text-align:left;">Username:</label>
                    <input type="text" name="username" placeholder="e.g Mismora" required>
                    <label for="pwd">Password:</label>
                    <input type="password" name="pwd" placeholder="*********** " required>
                    <button type="submit">LOGIN</button><br><br>
                    <label><input type="checkbox" name="remember">Remember me</label>
                </div>
                <div class="container"> <br>
                    <span class="pwd">Forgot <a href="#">Password?</a>&nbsp;|| Create <a href="#sign-up.php">Account/ Signup</a> </span>
                </div>
            </form>
        </div>
    </div>
</body>
    <script>
    document.getElementById('button').addEventListener('click', function() {
        document.querySelector('.bg_popup').style.display = 'flex';
    });
    document.querySelector('.close-btn').addEventListener('click', function() {
        document.querySelector('.bg_popup').style.display = 'none';
    });
</script>

</html>


div 