<?php require_once 'header.php'; ?>
	<!DOCTYPE html>
		<html lang="pt-BR">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, user-scalable=no">
			<title>Página não encontrada</title>
			<link rel="stylesheet" href="wp-content/themes/dakhia/assets/css/reset.css">
			<link rel="stylesheet" href="wp-content/themes/dakhia/assets/css/404.css">
		</head>
		<body>
		<!-- section -->
			<section>
			    <img src="wp-content/themes/dakhia/assets/imgs/logo_colorido.svg" alt="" class="logo">
			    <h1 class="titulo">404</h1>
			    <p class="aviso">Essa página não pode ser encontrada.</p>
			    <a href="<?php echo home_url(); ?>"><button class="home">IR PARA HOME</button></a>
			</section>
		<!-- /section -->
		</body>
	</html>
<?php require_once 'footer.php';