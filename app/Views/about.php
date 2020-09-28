<?php  
function get_CURL($url)
{
	$curl= curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	curl_close($curl);

	return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCtG41d75lnXxdT8Z2_x3dYA&key=AIzaSyAZqmHI48ZR9A8hqk7cAZrcyDMtUhCO_yc');

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];
// KEY = AIzaSyAZqmHI48ZR9A8hqk7cAZrcyDMtUhCO_yc
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style {csp-style-nonce}>
		body {
			background: url('http://www.ghibli.jp/gallery/ged007.jpg') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			background-size: cover;
			-o-background-size: cover;
		}
		#sticky-footer {
			flex-shrink: 0;

		}
		#utama {
			height: 850px;
		}
	</style>

	<?= $this->include('layout/navbar') ?>

	<!-- Page Content -->
	<div class="container">
		<div class="card border-0 shadow my-5">
			<!-- Page Content -->
			<div class="container" id="utama">

				<!-- Page Heading -->
				<h1 class="my-4 mx-4">About us</h1>
				
				<section class="social" id="social">
					<div class="container">
						<div class="row pl-2 pt-4 mb-4">
							<div class="col text-center">
								<h4>
									Social Media
								</h4>
							</div>
						</div>
													
						<div class="row justify-content-center">
							<!-- Youtube -->
							<div class="col-md-5">
								<div class="row">
									<div class="col-md-4">
										<img src="<?= $youtubeProfilePic ;?>" width="200" class="rounded-circle img-thumbnail">
									</div>
									<div class="col-md-8">
										<h5><?= $channelName; ?></h5>
										<p><?= $subscriber; ?> Subscribers.</p>
									</div>
								</div>
							</div>
							<!-- Instagram -->
							<div class="col-md-5">
							<div class="row">
									<div class="col-md-4">
										<img src="/" width="200" class="rounded-circle img-thumbnail">
									</div>
									<div class="col-md-8">
										<h5> Haafidz </h5>
										<p>1000</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>


			</div>
			<!-- /.container -->
		</div>
	</div>

	<?= $this->include('layout/footer') ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>

</html>