<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>login</title>
</head>

<style>
    body {

        background: #eef7fdd9;
        background-image: url(img/bg1.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
    }

    * {
        font-family: 'Mulish', sans-serif;
    }
</style>

<body>


    <div class="row">
        <div class="col s12 m1 l1"></div>
        <div class="col s12 m10 l10">
            <div class="card z-depth-5" style="
background: -webkit-linear-gradient(to left, rgba(172,182,229,0.5), rgba(116,235,213,0.40));  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left,  rgba(172,182,229,0.5), rgba(116,235,213,0.40)); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
             backdrop-filter: blur(15px) ;  border: 1px solid transparent; margin-top: 3%; border-radius: 20px;">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12 m7 l7 ">
                            <p class="show-on-small" style="font-weight: 400;display: none; color: white;font-size: 1.5em;">Hello !</p>
                            <p class="show-on-small" style="font-weight: bold; display: none; color: white;font-size: 1.8em;">Welcome Back </p>

                            <p>
                                <img src="img/login6.svg" style=" margin-bottom: 0px; margin-top: 10vh;" class="responsive-img" alt="">

                            </p>
                        </div>
                        <div class="col s12 m5 l5 " style="margin-top: -3vh;">
                            <div class="card" style="background-color: transparent; box-shadow: none;">
                                <div class="card-content">
                                    <p class="hide-on-med-and-down" style="font-weight: 400; color: white;font-size: 1.5em;">Hello !</p>
                                    <p class="hide-on-med-and-down" style="font-weight: bold; color: white;font-size: 1.8em;">Welcome Back </p>

                                    <!-- <p style="margin-top: 2em; text-align: center; color: white; font-weight: bold;">Login <span style="font-weight: lighter; color: #ff387e;">to Your Account</span> </p> -->
                                    <!-- <h5 style="font-weight: bolder; text-align: center; color: white;">Login</h5> -->
                                    <!-- <hr style="background-color: white; width: 10em; margin-top: 1em; margin-left: 0px;"> -->
                                    <form action="login_process.php" method="POST"  style="margin-top: 3em;">
                                        <p style="color: white; margin-bottom: 0px; margin-top: 2em;">Email</p>
                                        <input required type="email" name="username" style="color: white; text-align: left; border-bottom: 1px solid white;">
                                        <p style="color: white; margin-bottom: 0px; margin-top: 1em; margin-bottom: 0px;">Password</p>
                                        <input required type="password" name="pass" style="color: white; text-align: left; border-bottom: 1px solid white;">

                                        <p style="margin-top: 1.5em;">
                                            <select required name="role">
                                                <option value="" disabled selected> Role</option>
                                                <option value="staff">Staff</option>
                                                <option value="doctor">Doctor</option>
                                            </select>
                                        </p>


                                        <p style="margin-top: 2em; text-align: center;">

                                            <button name="login_submit" type="submit" class="waves-effect waves-light  button_main" style="background-color: transparent;
                text-transform: capitalize; margin-top: 3vh; padding: 13px;  font-size: 1em; border: 1px solid #458FF6; 
                font-weight: 400; width:100%; border-radius: 8px; color:white; background-color: #BA68C8; 
                font-family: Rubik;font-style: normal; box-shadow: none;">
                                                login</button>
                                        </p>
                                        <p style="margin-top:  1em; text-align: center;"><a href="#" style="color: white;  color: #eef7fdd9;">forgot your password?</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- <div class="col s12 m1 l1"></div> -->

    </div>

    <?php
    include_once 'partial/scripts.php';
    ?>
</body>

</html>
<script>
    $(document).ready(function() {
        $('select').formSelect();
    });
</script>
<style>
    body::-webkit-scrollbar {
        width: 0px;
    }

    .dropdown-content li {
        clear: both;
        color: white;
        cursor: pointer;
        min-height: 50px;
        line-height: 1.5rem;
        width: 100%;
        text-align: left;
    }

    .select-wrapper input.select-dropdown {
        border-bottom: 1px solid white;
    }

    .dropdown-content li>span {

        color: white;
    }

    .dropdown-content {
        background-color: rgba(86, 186, 225, 0.99);
        backdrop-filter: blur(20px);
        border-radius: 10px;

    }

    .select-wrapper input.select-dropdown {
        color: white;
    }
</style>