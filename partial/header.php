<?php
require_once 'head.php';
?>

<nav style="background-color: transparent; box-shadow: none;  ">
    <div class="row main_nav">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo left"><img class=" responsive-img logo-main" src="img/logo3.png" style="margin-top: 0px; height: 7.3vh;margin: 1vh;" alt=""></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i style="color: #0B132A;" class="material-icons">menu</i></a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">

                <li><a class="link" href="#" style="font-weight: bold; ">Home</a></li>
                <li><a class="link" href="#features">Find a doctor</a></li>
                <li><a class="link" href="#features">Testimonials</a></li>
                <li><a class="link" href="#features">About Us</a></li>
                <li><a class="waves-effect waves-blue  btn button_signin" href="login.php" style="background-color: transparent;
                text-transform: capitalize; margin-top: 0px;  font-size: 16px; border: 1px solid #458FF6; font-weight: bolder; width: 8em; border-radius: 20px; color: #458FF6; font-family: Rubik;font-style: normal; box-shadow: none;">Sign In</a></li>

            </ul>
        </div>
    </div>
</nav>
<ul class="sidenav" id="mobile-demo">

</ul>
<style>
    .main_nav {
        margin-left: 5vw;
        margin-right: 5vw;
    }

    .waves-effect.waves-blue .waves-ripple {
        /* The alpha value allows the text and background color
   of the button to still show through. */
        background-color: rgba(24, 160, 251, 0.29);
    }


    .link:hover {
        background-color: #ffffff;
        color: #458FF6;
    }

    .link {
        font-size: 16px;
        color: #1f1534;
        font-family: 'Mulish', sans-serif;
        font-style: normal;
        font-weight: 500;
        letter-spacing: 0em;
        text-align: left;

    }

    .li_s {
        margin-right: 14vw;
    }

    @media only screen and (max-width: 1024px) {
        .main_nav {
            margin-left: 0px;
            margin-right: 0px;
        }

        .logo-main {
            /* margin-top: 5px !important; */
        }

        .li_s {
            margin-right: 10vw;
        }
    }

    @media only screen and (max-width: 600px) {
        .main_nav {
            margin-left: 0px;
            margin-right: 0px;
        }

        .logo-main {
            /* margin-top: 5px !important; */
            height: 7vh !important;
        }
    }
</style>