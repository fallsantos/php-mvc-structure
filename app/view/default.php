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
<html lang="pt_br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="<?php echo $this->getKeyworks(); ?>"/>
    <meta name="author" content="<?= SITE['title'] ?? 'Title'; ?>"/>
    <!--title><?php //echo $this->getTitle(); ?></title-->

    <!-- SEO -->
    <?= $p['seo'] ?? ''; ?> 
    
    <link rel="icon" href="https://via.placeholder.com/16"/>
    <link rel="stylesheet" href="<?php echo SITE['assets']; ?>/css/main.css"/>
    <link rel="stylesheet" href="<?php echo RESOURSE['css']; ?>/style.css"/>
    <link rel="stylesheet" href="<?php echo RESOURSE['lib']; ?>/bootstrap-4.4.1/css/bootstrap.css"/>

    <?php echo $this->addHead($p); ?>

</head>
<body>
    <header class="header">
        <?php echo $this->addHeader($p); ?>
    </header>

    <main class="main">
        <?php echo $this->addMain($p); ?>
    </main>

    <footer class="footer">
        <?php echo $this->addFooter($p); ?>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo RESOURSE['lib']; ?>/bootstrap-4.4.1/js/bootstrap.js"></script>
    <script src="<?php echo RESOURSE['js']; ?>/script.js"></script>
</body>
</html>
