<?php include 'includes/header.inc.php'; ?>

<h1>Gallery</h1>
<section id="masonry">
				<?php 
					for ($i = 1; $i <= 30; $i++ ) {
						?>
							<a href="images/tat<?php echo $i; ?>.png" data-lightbox="image-1" data-title="Tattoo <?php echo $i; ?>"><img class="items lb" src="images/thumbs/tat<?php echo $i; ?>.jpg" alt=""></a>
							
						<?php
					}
				 ?>


			</section>

<?php include 'includes/footer.inc.php'; ?>