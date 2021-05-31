<?php 
	include("config.php");
	
	session_start();
	if($_SESSION['status']!="login")
	{
		die;
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
					<div class="row">
						<div class="col-sm-9">
							<div id="proj-fids-sort" class="tab">
								<div id="proj-fids-sort-title" class="proj-fids-sort">Select Flight</div>
								<div class="proj-fids-sort-btn proj-fids-sort"><a href="admin_departure.php" class="proj-btn full b-primary nocorner">Departure</a></div>
								<div class="proj-fids-sort-btn proj-fids-sort"><a href="admoin_arrival.php" class="proj-btn full b-grey nocorner">Arrival</a></div>
							</div>
							
							<div class="proj-table-style proj-table-striped">
								<div class="table-responsive">
									<div id="tablefids_wrapper" class="dataTables_wrapper no-footer">
									<a href="admin_departure.php">Return<br><br></a>
                                    <form action="process_create_d.php" method="POST">
                                        <fieldset>
                                            <p>
                                                <label for="kode_penerbangan">Flight Code: </label>
                                                <input type="text" name="kode_penerbangan" placeholder="Ex: ID6196"/>
                                            </p>
                                            <p>
                                                <label for="waktu">Time: </label>
                                                <input type="datetime-local" name="waktu"/>
                                            </p>
                                            <p>
                                                <label for="tujuan">Destination: </label>
                                                <select name="tujuan">
                                                    <option value="" disabled selected hidden>Select Destination</option>
                                                    <option disabled>Jawa</option>
                                                    <option disabled>──────────</option>
                                                    <option>CGK - Banten</option>
                                                    <option>HLP - Jakarta</option>
                                                    <option>SUB - Surabaya</option>
                                                    <option>SOC - Solo</option>
                                                    <option>JOG - Yogyakarta</option>
                                                    <option>SRG - Semarang</option>
                                                    <option>BDO - Bandung</option>
                                                    <option>PCB - Pamulang</option>
                                                    <option>PPJ - Kepulauan Seribu</option>
                                                    <option>TSY - Tasikmalaya</option>
                                                    <option>CBN - Cirebon</option>
                                                    <option>CXP - Cilacap</option>
                                                    <option>PWL - Purbalingga</option>
                                                    <option>KWB - Karimunjawa</option>
                                                    <option>CPF - Cepu</option>
                                                    <option>MLG - Malang</option>
                                                    <option>SUP - Sumenep</option>
                                                    <option>MSI - Masalembo</option>
                                                    <option disabled>──────────</option>
                                                    <option disabled>Bali & Nusa Tenggara</option>
                                                    <option disabled>──────────</option>
                                                    <option>DPS - Denpasar</option>
                                                    <option>AMI - Mataram</option>
                                                    <option>KOE - Kupang</option>
                                                </select>
                                            </p>
                                            <p>
                                                <label for="maskapai">Airline: </label>
                                                <select name="maskapai">
                                                    <option value="" disabled selected hidden>Select Airline</option>
                                                    <option>MV - Aviastar Mandiri</option>
                                                    <option>FS - Airfast Indonesia</option>
                                                    <option>QZ - Air Asia Indonesia</option>
                                                    <option>ID - Batik Air</option>
                                                    <option>CG - Citilink</option>
                                                    <option>GA - Garuda Indonesia</option>
                                                    <option>KD - Kal Star Aviation</option>
                                                    <option>JT - Lion Air</option>
                                                    <option>SJ - Sriwijaya Air</option>
                                                    <option>SI - Susi Air</option>
                                                    <option>8b - Trans Nusa</option>
                                                    <option>TN - Trigana Air</option>
                                                    <option>IW - Wings Air</option>
                                                    <option>XN - Xpress Air</option>
                                                </select>
                                            </p>
                                            <p>
                                                <label for="terminal">Terminal: </label>
                                                <select name="terminal">
                                                    <option value="" disabled selected hidden>Select Terminal</option>
                                                    <option disabled>Terminal 1</option>
                                                    <option disabled>──────────</option>
                                                    <option>1A</option>
                                                    <option>1B</option>
                                                    <option>1C</option>
                                                    <option disabled>──────────</option>
                                                    <option disabled>Terminal 2</option>
                                                    <option disabled>──────────</option>
                                                    <option>2A</option>
                                                    <option>2B</option>
                                                    <option>2C</option>
                                                    <option>2D</option>
                                                    <option>2E</option>
                                                </select>
                                            </p>
                                            <p>
                                                <label for="keterangan">Information: </label>
                                                <input type="text" name="keterangan" placeholder="Additional information"/>
                                            </p>
                                            <p>
                                                <input type="submit" value="Add" name="tambah"/>
                                            </p>
                                        </fieldset>
                                    </form>
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