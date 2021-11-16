<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/pagina-pesquisa/dist/css/index.css">
    <script src="<?= get_template_directory_uri() ?>/pagina-pesquisa/dist/js/index.js" defer ></script>
    <script src="<?= get_template_directory_uri() ?>/pagina-pesquisa/dist/js/index-chunk.js" defer></script>
</head>
<body>
    <div id="app"></div>
</body>
<?php wp_footer(); ?>
</html>