<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My name</title>
    <link rel="stylesheet" href="style.css">
</head>
    <style>
        .modal{
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            opacity: 0;
            visibility: hidden;
            transform: scale(1.1);
            transition: visibility 0s, linear 0.25s, opacity 0.25s 0s, transform 0.25s;
        }
        .modal-content{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: red;
            padding: 2.1rem 3.5rem;
            width: 24rem;
            border-radius: 0.5rem;
            
        }
        .close-btn{
            float: right;
            font-size: 2em;
            font-weight: bolder;
            color: red;
            width: 1.5rem;
            line-height: 1.5rem;
            text-align: center;
            cursor: pointer;
            margin: 0 auto;
            border-radius: 0.25rem;
            background-color: white;
            
        }
        .close-btn:hover{
            background-color: darkgrey;
            
            }
        .show-modal{
            background-color: beige;
            opacity: 1;
            visibility: visible;
            transform: scale(1.0);
            transition: visibility 0s, linear 0s, opacity 0.27s 0s, transform 0.25s;
            margin:10% 10% 30% 30% ;
            width: 50%;
/*            margin-left: 30px;*/
            padding: 20px;
            height: 60%;
            border-radius: 30px;
            
        }
        body{
    transition: 1s;
}
        body:hover{
            background-color:black;
        }
</style>

<body>
    <button class="trigger">Click me</button>
    <div class="modal">
        <div class="model-content">
            <span class="close-btn">&times;</span>
            <h2>Helllo friend? Am Mismora</h2>
            <!--   the popup         -->
            <div id="popup" class="modal">
                <span onclick="document.getElementById('popup').style.display='none'" class="close" title="Close Modal">&times;</span>

            </div>

            <!--     The popup content       -->
            <form class="model-content animate" action="/action_page.php">
                <div class="imgcontainer">
                    <img src="#" alt="Avatar" class="avatar">
                </div>
                <div class="container">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="e.g Mismora" required>
                    <label for="pwd">Password</label>
                    <input type="password" name="pwd" placeholder="********* atleast 8 Characters" required>
                    <button type="submit">LOGIN</button><br>
                    <label><input type="checkbox" name="remember">Remember me</label>
                </div>
                <div class="container" style="bacckground-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('popup').style.display='none'" class="cancelbtn">Cancel</button><br>
                    <br>
                    <span class="pwd">Forgot<a href="#">Password?</a></span>
                </div>

            </form>

        </div>
    </div>

</body>
    <script>
        var modal=document.querySelector(".modal");
        var trigger=document.querySelector(".trigger");
        var closeBtn=document.querySelector(".close-btn");
        
        function toggleModal(){
            modal.classList.toggle("show-modal");
            }
        
        function windowOnClick(event) {
            if (event.target==modal){
                toggleModal();
                
            }
        }
        
        trigger.addEventListener("click",toggleModal);
        closeBtn.addEventListener("click",toggleModal);
        window.addEventListener("click",windowOnClick);
        
    </script>

</html>