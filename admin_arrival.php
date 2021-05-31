<?php 
	include("config.php");
	
	session_start();
	if($_SESSION['status']!="login")
	{
		header("Location: login.php?pesan=belum_login");
	}
?>

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

			<section>
				<div class="container">
				<a href="logout.php">Log Out</a>
					<div class="row">
						<div class="col-sm-9">
							<div id="proj-fids-sort" class="tab">
								<div id="proj-fids-sort-title" class="proj-fids-sort">Select Flight</div>
								<div class="proj-fids-sort-btn proj-fids-sort"><a href="admin_departure.php" class="proj-btn full b-grey nocorner">Departure</a></div>
								<div class="proj-fids-sort-btn proj-fids-sort"><a href="admin_arrival.php" class="proj-btn full b-primary nocorner">Arrival</a></div>
							</div>
							
							<div class="proj-table-style proj-table-striped">
								<div class="table-responsive">
									<div id="tablefids_wrapper" class="dataTables_wrapper no-footer">
									<a href="create_arrival.php">[+]	Add Arrival Flight</a>
                                        <div class="dataTables_length" id="tablefids_length"></div>
                                        <table id="tablefids" class="dataTable no-footer" role="grid" aria-describedby="tablefids_info" style="width: 847px;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 30px;">Time</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 85px;">Origin</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 85px;">Airlines</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 34px;">Flight</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 50px;"> Terminal</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 68px;">Information</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 75px;">EDIT</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                    $sql = "SELECT * FROM kedatangan";
                                                    $query = mysqli_query($db, $sql);
                                                    
                                                    while($flight = mysqli_fetch_array($query)){
                                                        echo "<tr role='row' class='odd'>";

                                                        echo "<td>".$flight['waktu']."</td>";
                                                        echo "<td>".$flight['asal']."</td>";
                                                        echo "<td>".$flight['maskapai']."</td>";
                                                        echo "<td>".$flight['kode_penerbangan']."</td>";
                                                        echo "<td>".$flight['terminal']."</td>";
                                                        echo "<td>".$flight['keterangan']."</td>";
                                                        echo "<td>";
                                                        echo "<a href='update_arrival.php?kode_penerbangan=".$flight['kode_penerbangan']."'>Update</a> | ";
                                                        echo "<a href='delete_arrival.php?kode_penerbangan=".$flight['kode_penerbangan']."'>Delete</a>";
                                                        echo "</td>";
                                                        
                                                        echo "</tr>";
                                                    }		
                                                ?>
                                            </tbody>
                                        </table>
									</div>
								</div>
							</div>
						</div>
                    </div>
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