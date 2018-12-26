	<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-speed="300">
		<?php
			$banner = glob('disc/banner/*.jpg*');
			$banner = array_chunk($banner, 3);
			foreach ($banner[0] as $key => $value) {
		?>
		 <img src="<?= URL ?><?= $value?>" width="100%">
		<?php } ?>
	</div>
