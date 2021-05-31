<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui" name="viewport">

		<title>Bogor Airport</title>

		<!-- CSS -->
		<link href="./css/jquery.datetimepicker.css" rel="stylesheet">
		<link href="./css/project.css" rel="stylesheet">

		<link rel="shortcut icon" type="image/png" href="">
	</head>
	
	<body id="home">
		<div id="proj-headertop">
			<div class="container">
				<div class="proj-relative">
					<div id="proj-header-btn" class="proj-inlinecontainer">
						<div class="proj-inlineblock"><a href="index.html"> Visitors</a></div>
						<div class="proj-inlineblock"><a href="admin.php" class="active">Admin</a></div>
					</div>
					<div id="proj-header-widget">
						<div id="proj-header-place">Bogor, <span id="proj-header-date">27 Jan 2021</span></div>
						<div id="proj-header-weather">
							<div id="proj-header-time">23:59</div>
							<div id="proj-header-temperature"><span>25°C</span></div>
							<div id="proj-header-weather-icon"><img src="./js/weather-sun.svg" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="proj-content">
			<section class="proj-section-image" style="background-image: url(&quot;https://soekarnohatta-airport.co.id/userdata/menu_images/ads5ddbac7864a14.png&quot;); padding-top: 80px;">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-8 col-md-offset-2">
							<div class="proj-title proj-nomargin center">
								<div class="proj-title-text"><h1>Bogor Airport</h1></div>
								<div class="proj-title-subtext"> Airline Departure and Arrival Flight Schedule</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section style="padding-top: 80px;">
				<div class="container">

                    <?php 
                        if (isset($_GET['pesan'])){
                            if ($_GET['pesan'] == "failed")
                            {
                                echo "Login FAILED";
                            } else if ($_GET['pesan'] == "logout")
                            {
                                echo "Successfully LOGGED OUT";
                            } else if ($_GET['pesan'] == "belum_login")
                            {
                                echo "You have to LOG IN first";
                            }
                        }
                    ?>

                    <form method="POST" action="process_login.php">
                        <table>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td><input type="text" name="username" placeholder="Username"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><input type="password" name="password" placeholder="Password"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input type="submit" value="LOGIN"></td>
                            </tr>
                        </table>			
                    </form>
				</div>
			</section>
		</div>

		<div id="proj-footer">
			<div id="proj-footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
							<div id="proj-footer-copy" class="proj-paragraphxxsmall">
								<p>© PT Sky Temple II - Bogor Airport 2021. All Rights Reserved.</p>
							</div>
						</div>
						<div id="proj-footer-socmed" class="col-xs-12 col-sm-4 col-md-6">
							<ul>
								<li class="hidden-sm hidden-xs">
									<div class="proj-paragraphxxsmall">
										<p>Connect With Us </p>
									</div>
								</li>
								<li><a href="https://twitter.com/ccit_ftui" target="_blank"><img src="./files/twitter-icon.jpg"></a></li>
								<li><a href="https://web.facebook.com/ccitftuiofficial" target="_blank"><img src="./files/facebook-icon.jpg"></a></li>
								<li><a href="https://www.instagram.com/ccit_ftui" target="_blank"><img src="./files/instagram-icon.jpg"></a></li>
								<li><a href="mailto:ccit@eng.ui.ac.id" target="_blank"><img src="./files/email-icon.jpg"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>	

		<!-- Script -->
		<script type="text/javascript" src="./js/jquery.min.js.download"></script>
		<script type="text/javascript" src="./js/bootstrap.min.js.download"></script>
		<script type="text/javascript" src="./js/swiper.min.js.download"></script>
		<script type="text/javascript" src="./js/select2.min.js.download"></script>
		<script type="text/javascript" src="./js/jquery.mmenu.min.js.download"></script>
		<script type="text/javascript" src="./js/jquery.fancybox.min.js.download"></script>
		<script type="text/javascript" src="./js/jquery.mapbox.js.download"></script>
		<script type="text/javascript" src="./js/jquery.datetimepicker.full.js.download"></script>
		<script type="text/javascript" src="./js/project.js.download"></script>
		
		<script>
			var Global = {
				'title': 'Bogor, 28 Jan 2021'
			};
			$(function() {
				$('.datetimepicker').datetimepicker({
					format: 'Y-m-d H:i',
					step: 5,
					minDate: '2021-01-27', // yesterday is minimum date
				});
				$('.datepicker').datetimepicker({
					timepicker: false,
					format: 'Y-m-d',
					formatDate: 'Y-m-d',
					minDate: '2021-01-27', // yesterday is minimum date
				});
				$('.timepicker').datetimepicker({
					timepicker: true,
					datepicker: false,
					format: 'H:i',
					formatTime: 'H:i',
					step: 10 // yesterday is minimum date
				});
				$("img").lazyload();
			});
		</script>
	</body>
</html>