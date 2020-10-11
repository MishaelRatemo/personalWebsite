<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="maincontainer">
        <div id="header" ?>
            <?php include("header.php"); ?>
        </div>
        <div class="menu">

            <?php include("menu.php"); ?>

        </div>
        <!--   popup login form     -->
        <div class="">
            <button onclick="document.getElementById('popup').style.display='block'">Login</button>


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
                    <button type="button" onclick="document.getElementById('popup').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="pwd">Forgot<a href="#">Password?</a></span>
                </div>

            </form>



        </div>
    </div>
    <div>
        <?php include("footer.php") ?>

    </div>
</body>
<script>
    var modal = document.getElementById('popup');
    // when the user clicks anywhere outside of the popup close it.
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</html>