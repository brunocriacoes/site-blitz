<img class="top_header" src="<?= URL ?>img/hader-produtos.jpg" width="100%"> <br><br>

<?php if (empty($_POST)) { ?>
<div class="container">

	<?php if(!empty($_SESSION['orcamento']['entry'])){ ?>
		<?php foreach ($_SESSION['orcamento']['entry'] as $key => $value) { ?>
			<div class="row cartItem <?= $key ?>">
				<div class="col-md-2">
					<img src="<?= @URL ?><?= @$value['foto'] ?>" width="100%">
				</div>
				<div class="col-md-4">
					<strong>Referencia: </strong><?= @$key ?> <br>
					<strong>Descrição: </strong><?= @$value['Descrição'] ?> <br>
					<strong>quantidade minima: </strong><?= @$value['quantidade minima'] ?> <br>
				</div>
				<div class="col-md-4">
					<input class="form-control" type="text" data-save-cart="<?= @$key ?>@quantidade" value="<?= @( empty($_SESSION['orcamento']['entry'][$key]['quantidade']))? $value['quantidade minima'] : $_SESSION['orcamento']['entry'][$key]['quantidade'] ?>" placeholder="quantidade">
					<textarea name="" rows="5" data-save-cart="<?= @$key ?>@descricao" placeholder="Descrição" class="form-control"><?= @$_SESSION['orcamento']['entry'][$key]['descricao'] ?></textarea>
				</div>
				<div class="col-md-2">
					<img class="trash" cart-dell="<?= $key ?>" src="<?= URL ?>img/delete.png" width="100%">
				</div>
			</div>
		<?php } ?>
	<?php } ?>


	<form class="row" method="post">
		<div class="col-md-6">
			<div class="form-group">
				<label>Nome</label>
				<input type="text" name="nome" data-save="form@name" value="<?= @$_SESSION['orcamento']['form']['name'] ?>" placeholder="" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" data-save="form@email" value="<?= @$_SESSION['orcamento']['form']['email'] ?>" placeholder="" class="form-control" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Empresa</label>
				<input type="text" name="empresa" data-save="form@empresa" value="<?= @$_SESSION['orcamento']['form']['empresa'] ?>" placeholder="" class="form-control">
			</div>
			<div class="form-group">
				<label>Telefone</label>
				<input type="tel" name="telefone" data-save="form@telefone" value="<?= @$_SESSION['orcamento']['form']['telefone'] ?>" placeholder="" class="form-control">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label>Mensagem</label>
				<textarea data-save="form@mensagem" name="mensagem" rows="7" class="form-control" required><?= @$_SESSION['orcamento']['form']['mensagem'] ?></textarea>
			</div>
			<div class="form-group">
				<a href="<?= URL ?>produto/HO/" class="btn btn-danger">
					<img src="<?= URL ?>img/shopping-bag.png">
					adicionar mais produtos
				</a>
				<input type="submit" value="enviar orçamento agora" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>
<?php var_dump($_SESSION['orcamento']['entry']); ?>
<?php }else{ ?>
	<?php
		@$headers  = 'MIME-Version: 1.0' . "\r\n";
		@$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		@$headers .= 'To: '.$paraName.' <'.$paraMail.'>' . "\r\n";
		@$headers .= 'From: '.$remetenteNome.' <'.$remetenteMail.'>' . "\r\n";
		@$paraMail  = EMAIL;
		@$paraName  = 'Bruno';
		@$assunto   = 'EMAIL SITE';
		if(!empty($_SESSION['orcamento']['entry'])){
			foreach ($_SESSION['orcamento']['entry'] as $key => $value) {
				@$men .= '<img src="'.URL.$value['foto'].'" width="70">'."<br> \r\n";
				@$men .= "<strong>Referencia: </strong> ".$key."<br> \r\n";
				@$men .= "<strong>Quantidade: </strong> ".((empty($value['quantidade']))? $value['quantidade minima'] : $value['quantidade']) ."<br> \r\n";
				@$men .= "<strong>OBS: </strong> ".$value['descricao']."<br> \r\n";
				@$men .= "<hr>";
			}
		}
		@$men      .= "<strong>Nome: </strong> ".$_POST['nome']."<br> \r\n";
		@$men      .= "<strong>Empresa: </strong> ".$_POST['empresa']."<br> \r\n";
		@$men      .= "<strong>Email:</strong> ".$_POST['email']."<br> \r\n";
		@$men      .= "<strong>Telefone: </strong> ".$_POST['telefone']."<br> \r\n";
		@$men      .= "<strong>Mensagem:</strong> ".$_POST['mensagem']."<br> \r\n";
		@$remetenteNome = $_POST['nome'];
		@$remetenteMail = $_POST['email'];
		$FUNFOU = mail(EMAI, 'CONTATO SITE', $men, $headers);
		 // mail('br.rafael@outlook.com', 'CONTATO SITE', $men, $headers);
		@file_put_contents('db/orcamentos/'.date('Y-m-d-').$_POST['email'].'-'.uniqid(), json_encode($_SESSION['orcamento']));
		unset($_SESSION['orcamento']);
		@$_SESSION['orcamento'] = '';
		if($FUNFOU){
			?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Seu orçamento foi enviado com sucesso, logo entraremos em contato.</h2>
					</div>
				</div>
			</div>
			<?php
		}else{
			?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Seu orçamento não foi enviado, tente novamente mais tarde</h2>
					</div>
				</div>
			</div>
			<?php
		}
	?>
<?php } ?>
