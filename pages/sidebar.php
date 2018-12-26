
	<div class="row">
		<div class="col-md-12">

			<div class="nav_side">
				<ul>
					<?php foreach (ler('db/cat.json') as $key => $value) { ?>
					<li><a href="<?= URL ?>produto/<?= $key ?>/"><?= $value ?></a></li>
					<?php } ?>
				</ul>
			</div>

			<img src="<?= URL ?>disc/img/500x500.jpg" width="100%">
			<br><br>
			<img src="<?= URL ?>disc/img/500x1000.jpg" width="100%">
			<br><br>

		</div>
	</div>