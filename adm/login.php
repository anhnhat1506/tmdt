<?php
    //Khoi dong session
    session_start();
    if(isset($_SESSION['user'])){
        header("Location: index.php");
    }
    //include config
    $root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
    $root_adm=  $root_dir."/adm";
    include $root_dir."/mysqli/config.php";
    function fn_login($ketnoi,$email, $password){
        $rs = null;
        $sql_rs_login = mysqli_query($ketnoi, "select * from user where email='$email' and tmdt_password='$password'");
        if(mysqli_num_rows($sql_rs_login)==1){
            return mysqli_fetch_assoc($sql_rs_login);
        }
        return $rs;
    }
    //xu ly dang nhap
    $msg_login="";
    if(isset($_POST['btn_login'])){ //bấm vào button login
        var_dump($_POST);
        //null hoac 1 user dang nhap thanh cong
        $login_rs = fn_login($con,$_POST['email'],$_POST['password']);

        var_dump($login_rs);
        if($login_rs!=null){
            //1. set session user da dang nhap
            $_SESSION['user'] = $login_rs;
            header("Location: index.php");
        }else{
            $msg_login="Tài khoản, mật khẩu không đúng";
        }

    }

    define( 'SITE_ROOT', 'http://localhost:81/tmdt'); //website
    define( 'SITE_IMG_ROOT', 'http://localhost:81/tmdt/img'); //website image
    define( 'THEME_ROOT', 'http://localhost:81/tmdt/adm'); //website adm




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?=THEME_ROOT?>/theme/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=THEME_ROOT?>/theme/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=THEME_ROOT?>/theme/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=THEME_ROOT?>/theme/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=THEME_ROOT?>/theme/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="login.php" method="post">
                    <h1>Login Form</h1>
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <h1 style="color: red"><?=$msg_login?></h1>
                        <input type="submit" name="btn_login" class="btn btn-default submit" value="login" />
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="#signup" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form action="register.php" method="post">
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <input type="submit" class="btn btn-default submit" value="registry" />
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
