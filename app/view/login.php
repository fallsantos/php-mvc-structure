<?php
/**
 * User: Fall
 * Date: 19/07/2018
 * Time: 21:51
 *
 * Layout padrão, todas as páginas seguirão essa base.
 * Só mudará o que for especificado nos métodos da ClassRender.php
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="icon" href="https://via.placeholder.com/16"/>

    <link rel="stylesheet" href="<?php echo SITE['assets']; ?>/css/main.css"/>
    <link rel="stylesheet" href="<?php echo RESOURSE['css']; ?>/style.css"/>
    <link rel="stylesheet" href="<?php echo RESOURSE['lib']; ?>/bootstrap-4.4.1/css/bootstrap.css"/>
    <?php echo $this->addHead($p); ?>
    <style>
        #content-login {
            /*border: 1px solid red;*/
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        #content-login form {
            background: rgba(221, 221, 221, 0.61);
            width: 90%;
            max-width: 300px;
            display: flex;
            flex-direction: column;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #000;
        }

        #content-login form h1 {
            margin: auto;
            margin-bottom: 30px;
        }
        
        #content-login form input {
            border: 0;
            background: #fff;
            font-size: 20px;
            padding: 10px;
            border-radius: 8px;
        }
        
        #content-login form input + input{
            margin-top: 20px;
        }

        #content-login form .btn-login {
            border-radius: 8px;
            background: #98ffb3;
            border: 1px solid #000;
            margin-top: 20px;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body id="content-login">
    <form action="" method="post" id="form">
        <h1><?= SITE['name']; ?></h1>
        <input type="email" name="email" />
        <input type="password" name="password" />
        <button type="submit" class="btn-login" id="btn-login">Login</button>
    </form>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo SITE['assets']; ?>/js/main.js"></script>
<script src="<?php echo RESOURSE['lib']; ?>/bootstrap-4.4.1/js/bootstrap.js"></script>
<script src="<?php echo RESOURSE['js']; ?>/script.js"></script>
</html>
