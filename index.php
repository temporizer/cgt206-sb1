<?php include 'includes/header.inc.php'; ?>
			<h1>Welcome to T.A.T.</h1>
			<img class="img img-center" src="images/tat24_thumb.jpg" alt="">

			<p>This is Truth About Tattoos. We give you the facts, and you decide if tattoos are up your alley.</p>
			<p>We have a several pages here including: 
			<ul>
				<li>
					<a href="responsibility.php" title="Responsibilities">Responsibilities</a> that you as a consumer as well as being an artist should be aware of. 
				</li>
				<li>
					<a href="resources.php" title="Resources">Resources</a> that we have gathered our information from.
				</li>
				<li>
					An <a href="addiction.php" title="Addiction?">Addiction?</a> page that discusses whether tattooing is addictive or not.
				</li>
			</ul>
				Plus more.
			</p>
			<p>
				Enjoy your stay, and if you have any questions, please feel free to <a href="contact.php">contact</a> us
			</p>

			<section id="masonry" class="js-masonry"
  data-masonry-options='{ "columnWidth": 200, "itemSelector": ".items" }'>
				<?php 
					for ($i = 1; $i <= 30; $i++ ) {
						?>
							<a href="images/tat<?php echo $i; ?>.png" data-lightbox="image-1" data-title="My caption"><img class="items" src="images/thumbs/tat<?php echo $i; ?>.jpg" alt=""></a>
							
						<?php
					}
				 ?>


			</section>

<?php include 'includes/footer.inc.php'; ?>