<?php 
require 'const.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Finish</title>
    <?php include VIEWS.'Utils/meta.php'; ?>
    <?php include VIEWS.'Utils/styles.php'; ?>  
</head>
<body>
	<div class="container">
		<sub><?php echo date('d/m/Y'); ?></sub>
		<div class="row">
			<div class="col-lg-12">
				<div class="card" style="background: #009966;margin:1vh;padding: 10px;">
					<center>
						<h1 class="text-white">
							Certificate of Course Completion
						</h1>
					</center>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<center>
					<p class="text-black" style="color: #000;padding: 5vh;">
						This Certificate has been awarded to:
					</p>
				</center>
			</div>
		</div>
	</div>
</body>
</html>