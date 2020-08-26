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
    <link rel="stylesheet" href="<?php echo SITE['assets']; ?>/lib/bootstrap-4.4.1/css/bootstrap.css"/>

    <?php echo $this->addHead($p); ?>

</head>
<body>

<main class="main">
    <?php echo $this->addMain($p); ?>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo  SITE['assets']; ?>/lib/bootstrap-4.4.1/js/bootstrap.js"></script>
<script src="<?php echo  SITE['assets']; ?>/js/main.js"></script>
<script src="<?php echo  SITE['assets']; ?>/js/ajax.js"></script>
</body>
</html>
