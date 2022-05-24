
<!DOCTYPE html>
<html>
<head>
	<?php
	require_once "../login/login.php";
	?>
<title>service pro</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Fast Service a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<header>
	<div class="header-w3l">
	
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php" style="color:#fff">Service Pro</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php" style="color:#fff">PROFILE </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="req.php" style="color:#fff">REQUEST</a>
      </li>
<!---************************************************-->
	  <li class="nav-item">
        <a class="nav-link" href="calendar.php" style="color:#fff">CALENDAR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="feedb.php"style="color:#fff">FEEDBACK</a>
      </li>

    </ul>
 
</nav>

	<div class="w3l_banner_info">
		<div class="slider1">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider1-img">
							<div class="slider_banner_info">
							
								
							</div>
						</div>
					</li>
					
					
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-slider -->
</div>
</header>

<section class="about py-lg-5 py-md-4 py-md-3 py-2" id="about">
<div class="about py-lg-5 py-md-4 py-md-3 py-2">
<h3 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">FEEDBACKS</h3>
<div class="container">
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<?php
					require_once "db.php";
				

					
					$t_id=$_SESSION['t_id']; 
					$result = mysqli_query($conn,"SELECT * FROM feedback where t_id= $t_id ");
					?>
					<?php
					
					if (mysqli_num_rows($result) > 0) {
					?>

					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">#</th>
								<th class="column2">NAME</th>
								<th class="column3">Feedback</th>
							</tr>
						</thead>
						<?php
							$i=0;
							$n=1;
							while($row = mysqli_fetch_array($result)) {
							?>
						<tbody>
								<tr>
									<td class="column1"><?php echo $n; ?></td>
									<td class="column2"><?php echo $row["cus_name"]; ?></td>
									<td class="column3"><?php echo $row["f_back"]; ?></td>
								</tr>
								<?php
								$i++;
								$n++;
								}
								?>
						</tbody>
					</table>
					<?php
						}
						else{ ?>
							<script>
            alert("0 FEEDBACKS");
            window.location.href="../web/index.php";
            </script>
						<?php }
						?>
				</div>
			</div>
		</div>
	</div>

</div>
</section>
<!-- /Conatct -->
	
<!-- Footer-->
<section class="footer">
<div class="container">
<h3>Service Pro</h3>
     <div class="wrapper">

</div>
<div class="copyright">
<p>© 2021 Service Pro. All Rights Reserved </p>
			
		</div>
	</div>
</section>
<!-- /Footer-->
    <!-- bootstrap-pop-up for login and register -->
   
    <!-- //bootstrap-pop-up for login and register-->

<script  src="js/jquery.min.v3.js"></script>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script> <!-- Team -->
<script  src="js/bootstrap.min.js"></script>
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script  src="js/SmoothScroll.min.js"></script>	

	<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
	<!--team-->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:4,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
					
<!--team-->

   <!-- sign in and signup pop up toggle script -->
    <script>
        $('.toggle').click(function () {
            // Switches the Icon
            $(this).children('i').toggleClass('fa-pencil');
            // Switches the forms  
            $('.form').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: "toggle"
            }, "slow");
        });
    </script>
    <!-- sign in and signup pop up toggle script -->
	
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script type="text/javascript">
	$(function () {
  $('[data-toggle="popover"]').popover()
})
</script> 
<!-- //scrolling script -->
<!--//start-smoth-scrolling -->

<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="main.js"></script>

</body>
</html>