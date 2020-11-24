<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<title>Ireland - Live Covid-19 update</title>
</head>
<header class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="col-lg-12 text-center">
			<h2 class="display-header" href="#">Ireland live COVID-19 Update</h2>
			<?php 
				date_default_timezone_set("Europe/Dublin");
				echo "<div style = font-size:'1'>Last Updated: " . date("Y-m-d H:i:s"). " - Dublin Time</div>";
			?>
		</div>
	</div>
</header>

<section>
<div class="container">
	<?php
		require 'simple_html_dom.php';
		
		$url = 'https://www.worldometers.info/coronavirus/country/ireland/';
		$html = str_get_html(file_get_contents($url));
		
		//foreach($html->find('.maincounter-number', 0) as $postConfirmed){
			
		//}
		$confirmed = $html->find('.maincounter-number', 0);
		$recovered = $html->find('.maincounter-number', 2);
		$deaths = $html->find('.maincounter-number', 1);
		$updates = $html->find('#news_block', 0);
		
		$graph = $html->find('#graph-active-cases-total', 0);
		
			
	?>
	
		<div class="row mbr-justify-content-center">

            <div class="col-lg-4 mbr-col-md-12">
                <div class="wrap confirmed">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-check fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Confirmed Cases</h2>
                        <p class="mbr-fonts-style mbr-bold text1 mbr-text display-6 text-center"><?php echo $confirmed->plaintext; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mbr-col-md-12">
                <div class="wrap recovered">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-heart-o fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                       <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Recovered
                        </h2>
                        <p class="mbr-fonts-style c text1 mbr-text display-6 text-center"><?php echo $recovered->plaintext; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mbr-col-md-12">
                <div class="wrap death">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-times fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Deaths</h2>
                        <p class="mbr-fonts-style mbr-bold text1 mbr-text display-6 text-center"><?php echo $deaths->plaintext; ?></p>
                        
                    </div>
                </div>
            </div>
			
		</div>
		<div class="col-lg-12 mbr-col-md-12">
			<div class ="wrap-update">
			  <?php echo $updates; 
			  ?>
			  
			  
			</div>
		</div>
	</div>

</section>
<footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Sources</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="text-center" href="https://www.worldometers.info/" target="_blank">
                   <h4>worldodometers.info </h4>
                </a>
              </li><br>
			  <li class="list-inline-item">
                <a class="text-center" href="https://www.rte.ie/" target="_blank">
                   <h4>rte.ie </h4>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <h4 class="text-uppercase mb-4">About Developer</h4>
            <ul class="list-inline mb-0">
				<li class="list-inline-item">
				 <a href="https://www.linkedin.com/in/eljeenbanta/" target="_blank">
					<span class="fa-linkedin-square fa"></span> Eljeen Banta
				</a>	
				</li>
			</ul> 
          </div>
        </div>
      </div>
    </footer>
	<script>
		$(document).ready(function(){
			$("button").hide();	
		});
		
</script>