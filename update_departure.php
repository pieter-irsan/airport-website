<?php 

include("config.php");
	
session_start();
if($_SESSION['status']!="login")
{
	die;
}

if( !isset($_GET['kode_penerbangan']) )
{
	header('Location: admin_departure.php');
}

$kode_penerbangan = $_GET['kode_penerbangan'];
$sql = "SELECT * FROM keberangkatan WHERE kode_penerbangan='$kode_penerbangan'";
$query = mysqli_query($db, $sql);
$flight = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 )
{
	die("Data NOT FOUND");
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
								<div class="proj-fids-sort-btn proj-fids-sort"><a href="admin_departure.php" class="proj-btn full b-primary nocorner">Departure</a></div>
								<div class="proj-fids-sort-btn proj-fids-sort"><a href="admin_arrival.php" class="proj-btn full b-grey nocorner">Arrival</a></div>
							</div>
							
							<div class="proj-table-style proj-table-striped">
								<div class="table-responsive">
									<div id="tablefids_wrapper" class="dataTables_wrapper no-footer">
									<a href="admin_departure.php">Return<br><br></a>
                                    <form action="process_update_d.php" method="POST">
										<fieldset>
										<p>
											<label for="kode_penerbangan">Flight Code: </label>
											<input type="text" name="kode_penerbangan" value="<?php echo $flight['kode_penerbangan'] ?>"/>
										</p>
										<p>
											<label for="waktu">Time: </label>
											<input type="text" name="waktu" value="<?php echo $flight['waktu'] ?>"/>
										</p>
										<p>
											<label for="tujuan">Destination: </label>
											<?php $tujuan = $flight['tujuan']; ?>
											<select name="tujuan">
												<option disabled>Jawa</option>
												<option disabled>──────────</option>
												<option <?php echo ($tujuan == 'CGK - Banten') ? "selected": "" ?>>CGK - Banten</option>
												<option <?php echo ($tujuan == 'HLP - Jakarta') ? "selected": "" ?>>HLP - Jakarta</option>
												<option <?php echo ($tujuan == 'SUB - Surabaya') ? "selected": "" ?>>SUB - Surabaya</option>
												<option <?php echo ($tujuan == 'SOC - Solo') ? "selected": "" ?>>SOC - Solo</option>
												<option <?php echo ($tujuan == 'JOG - Yogyakarta') ? "selected": "" ?>>JOG - Yogyakarta</option>
												<option <?php echo ($tujuan == 'SRG - Semarang') ? "selected": "" ?>>SRG - Semarang</option>
												<option <?php echo ($tujuan == 'BDO - Bandung') ? "selected": "" ?>>BDO - Bandung</option>
												<option <?php echo ($tujuan == 'PCB - Pamulang') ? "selected": "" ?>>PCB - Pamulang</option>
												<option <?php echo ($tujuan == 'PPJ - Kepulauan Seribu') ? "selected": "" ?>>PPJ - Kepulauan Seribu</option>
												<option <?php echo ($tujuan == 'TSY - Tasikmalaya') ? "selected": "" ?>>TSY - Tasikmalaya</option>
												<option <?php echo ($tujuan == 'CBN - Cirebon') ? "selected": "" ?>>CBN - Cirebon</option>
												<option <?php echo ($tujuan == 'CXP - Cilacap') ? "selected": "" ?>>CXP - Cilacap</option>
												<option <?php echo ($tujuan == 'PWL - Purbalingga') ? "selected": "" ?>>PWL - Purbalingga</option>
												<option <?php echo ($tujuan == 'KWB - Karimunjawa') ? "selected": "" ?>>KWB - Karimunjawa</option>
												<option <?php echo ($tujuan == 'CPF - Cepu') ? "selected": "" ?>>CPF - Cepu</option>
												<option <?php echo ($tujuan == 'MLG - Malang') ? "selected": "" ?>>MLG - Malang</option>
												<option <?php echo ($tujuan == 'SUP - Sumenep') ? "selected": "" ?>>SUP - Sumenep</option>
												<option <?php echo ($tujuan == 'MSI - Masalembo') ? "selected": "" ?>>MSI - Masalembo</option>
												<option disabled>──────────</option>
												<option disabled>Bali & Nusa Tenggara</option>
												<option disabled>──────────</option>
												<option <?php echo ($tujuan == 'DPS - Denpasar') ? "selected": "" ?>>DPS - Denpasar</option>
												<option <?php echo ($tujuan == 'AMI - Mataram') ? "selected": "" ?>>AMI - Mataram</option>
												<option <?php echo ($tujuan == 'KOE - Kupang') ? "selected": "" ?>>KOE - Kupang</option>
											</select>
										</p>
										<p>
											<label for="maskapai">Airline: </label>
											<?php $maskapai = $flight['maskapai']; ?>
											<select name="maskapai">
												<option <?php echo ($maskapai == 'MV - Aviastar Mandiri') ? "selected": "" ?>>MV - Aviastar Mandiri</option>
												<option <?php echo ($maskapai == 'FS - Airfast Indonesia') ? "selected": "" ?>>FS - Airfast Indonesia</option>
												<option <?php echo ($maskapai == 'QZ - Air Asia Indonesia') ? "selected": "" ?>>QZ - Air Asia Indonesia</option>
												<option <?php echo ($maskapai == 'ID - Batik Air') ? "selected": "" ?>>ID - Batik Air</option>
												<option <?php echo ($maskapai == 'CG - Citilink') ? "selected": "" ?>>CG - Citilink</option>
												<option <?php echo ($maskapai == 'GA - Garuda Indonesia') ? "selected": "" ?>>GA - Garuda Indonesia</option>
												<option <?php echo ($maskapai == 'KD - Kal Star Aviation') ? "selected": "" ?>>KD - Kal Star Aviation</option>
												<option <?php echo ($maskapai == 'JT - Lion Air') ? "selected": "" ?>>JT - Lion Air</option>
												<option <?php echo ($maskapai == 'SJ - Sriwijaya Air') ? "selected": "" ?>>SJ - Sriwijaya Air</option>
												<option <?php echo ($maskapai == 'SI - Susi Air') ? "selected": "" ?>>SI - Susi Air</option>
												<option <?php echo ($maskapai == '8b - Trans Nusa') ? "selected": "" ?>>8b - Trans Nusa</option>
												<option <?php echo ($maskapai == 'TN - Trigana Air') ? "selected": "" ?>>TN - Trigana Air</option>
												<option <?php echo ($maskapai == 'IW - Wings Air') ? "selected": "" ?>>IW - Wings Air</option>
												<option <?php echo ($maskapai == 'XN - Xpress Air') ? "selected": "" ?>>XN - Xpress Air</option>					
											</select>
										</p>
										<p>
										<label for="terminal">Terminal: </label>
										<?php $terminal = $flight['terminal']; ?>
										<select name="terminal">
												<option disabled>Terminal 1</option>
												<option disabled>──────────</option>
												<option <?php echo ($terminal == '1A') ? "selected": "" ?>>1A</option>
												<option <?php echo ($terminal == '1B') ? "selected": "" ?>>1B</option>
												<option <?php echo ($terminal == '1C') ? "selected": "" ?>>1C</option>
												<option disabled>──────────</option>
												<option disabled>Terminal 2</option>
												<option disabled>──────────</option>
												<option <?php echo ($terminal == '2A') ? "selected": "" ?>>2A</option>
												<option <?php echo ($terminal == '2B') ? "selected": "" ?>>2B</option>
												<option <?php echo ($terminal == '2C') ? "selected": "" ?>>2C</option>
												<option <?php echo ($terminal == '2D') ? "selected": "" ?>>2D</option>
												<option <?php echo ($terminal == '2E') ? "selected": "" ?>>2E</option>
											</select>
										</p>
										<p>
											<label for="keterangan">Information: </label>
											<?php $keterangan = $flight['keterangan']; ?>
											<input type="text" name="keterangan" placeholder="Additional information" value="<?php echo $flight['keterangan'] ?>"/>
										</p>
										<p>
											<input type="submit" value="simpan" name="simpan"/>
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