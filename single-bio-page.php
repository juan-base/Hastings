<section id="page-<?=$post->ID?>" class="listing-page">

	<p class="nxt-btn" onClick="nxtBtnClicked(this)"><span>Next Profile</span></p>

	<div class="profile-container">

		<div class="profile-title">

			<div class="name"><?= get_field('first_name') . " " . get_field('last_name'); ?></div>
			<div class="sub-name"><?php $hastings->get_bio_credentials($post, false) ?></div>

		</div>
	   
		<div class="flex">
		
			<div class="profile-margin-left"></div>

			<div class="profile-center">

				<div class="profile-inner-container">

					<div class="profile-img add_loading">

						<?php 
							$profile_img = get_field('profile_image');
						
							if ($profile_img != "") { ?>
								<img src="<?= $profile_img['url'] ?>" alt="<?= $profile_img['alt'] ?>"> 
							<?php }
						?>
					
					</div>

					<?php
						$bio = get_field('content');
						if (!empty($bio)) {
							?>
							<div class="profile-bio">
								<div class="bio-content-p"><?= $bio ?></div>
							</div>
							<?php
						}
					?>

					
					<div class="profile-subcontent-container flex">
					
						<div class="profile-subcontent-left">

							<?php
							
								$which = 1;

								include 'modules_tm/module-tm.php';
							?>

						</div>

						<div class="profile-subcontent-right">
							
							<?php
							
								$which = 2;

								include 'modules_tm/module-tm.php'; 
							?>

						</div>
					
					</div>

				</div>

			</div>

			<div class="profile-margin-right"></div>

		</div>

		<div class="nxt-hover" onClick="nxtBtnClicked(this)"><div>

	</div>

</section>
