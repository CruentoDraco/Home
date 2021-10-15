<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#343a40" />
  <meta
          name="description"
          content="My Homepage | Developed By - CruentoDraco"
  />  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
  <script type="text/javascript" src="scripts/script.js"></script>
  	<title>Home | CruentoDraco</title>
	<link rel="icon" href="images/logo.svg">
	<link id="stylesheet" rel="stylesheet" href="main.css">
<?php
	$request = $_SERVER['REQUEST_URI'];
	switch ($request) {
		case '/' :
			require __DIR__ . '/includes/home.html';
			break;
		case '' :
			require __DIR__ . '/includes/home.html';
			break;
		case '/linktree' :
			require __DIR__ . '/includes/linktree.html';
			break;
		default:
			http_response_code(404);
			require __DIR__ . '/views/404.php';
			break;
	}

?>
</head>
<body class="body">
	<div class="container">
  		<div id="footer" class="card footer mt-5">
			<span>
				<h6>
					<span>Made With</span> 
					<span class="cd-love">♥</span>
					<a id="cd-email" href="mailto:links@cruentodraco.de" title="Schick mir gerne eine Mail bei Bugs oder Fragen"> <i class="fa fa-envelope"> </i> </a>
				</h6>
			</span>
			<span class="copyright"> 
				<h6>
					<a href="https://twitter.com/CruentoDraco" class="cd-name" target="_blank">CruentoDraco</a> © 2021
				</h6> 
			</span>
  		</div>
	</div>
</body>
</html>