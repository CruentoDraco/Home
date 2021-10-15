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
			require __DIR__ . '/index.php';
			break;
		case '' :
			require __DIR__ . '/index.php';
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
	<div class="col-md-12">&nbsp;</div>
  		<div id="header" class="cold-md-12">
			  <div class="row">
				  <div class="col-md-2">&nbsp;</div>
					<div class="col-md-8">
						<div class="card header">
							<div class="card-body">
								<div class="col-md-12">
									<div class="row" style="text-align: center;">
										<div class="col-md-3">
											<img src="images/WebsiteLogos/logoBackground.svg" class="profileImage" alt="image">
										</div>
										<div class="col-md-9">
											<div class="col-md-12" style="margin-top: .85em">
												<h5 class="align-items-center mt-2 cd-title">CruentoDraco aka Rene</h5>
											</div>
											<div class="col-md-12">
												<p>
													Hi! Ich bin Rene oder eben auch als CruentoDraco bekannt. Ich bin Entwickler und Gamer mit Leidenschaft.
												</p>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
				  </div>
				  <div class="col-md-2">&nbsp;</div>
			  </div>
		</div>
        <div id="home" class="mt-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 col-xs-12  text-center">
                        <a href="https://www.stillalivethegame.de" class="card-a">
                            <div class="card still-alive hover-effect">
                                <div class="card-body">
                                    <h5 class="card-title"> <img src="images/WebsiteLogos/stillalive.svg" style="height: 60px; border-radius: 50%;"></h5>
                                    <h3> STILL ALIVE</h3>           
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12">&nbsp;</div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12  text-center">
                        <a href="?site=linktree" class="card-a">
                            <div class="card choice hover-effect">
                                <div class="card-body">
                                    <h5 class="card-title"> <img src="images/WebsiteLogos/LinktreeLogo.svg" style="height: 100px; border-radius: 50%;"></h5>
									<h3>Linktree</h3>           
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-xs-12  text-center">
                        <a href="?site=branding" class="card-a">
                            <div class="card choice hover-effect">
                                <div class="card-body">
                                    <h5 class="card-title"> <img src="images/WebsiteLogos/BrandingLogo.svg" style="height: 100px; border-radius: 50%;"></h5>
									<h3>Branding</h3>          
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12">&nbsp;</div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12  text-center">
                        <a href="?site=releases" class="card-a">
                            <div class="card choice hover-effect">
                                <div class="card-body">
                                    <h5 class="card-title"> <img src="images/WebsiteLogos/ReleasesLogo.svg" style="height: 100px; border-radius: 50%;"></h5>
									<h3>Releases</h3>          
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-xs-12  text-center">
                        <!--<a href="?site=releases" class="card-a">
                            <div class="card choice hover-effect">
                                <div class="card-body">
                                    <h5 class="card-title"> <img src="images/WebsiteLogos/ReleasesLogo.svg" style="height: 100px; border-radius: 50%;"></h5>
									<h3>Releases</h3>          
                                </div>
                            </div>
                        </a>-->
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
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