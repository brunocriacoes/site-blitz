	<?php if (empty($_POST)) { ?>
	<img class="top_header" src="<?= URL ?>img/hader-produtos.jpg" width="100%"> <br><br>

	<div class="container">
		<div class="row">

			<div class="col-md-9">
				<h1>Contato</h1>
				<p class="help-block">preencha os campos abaixo para entrar em contato conosco, responderemos em breve seu email.</p>
				<form action="https://formspree.io/contato@blitzbolsas.com.br" method="post" accept-charset="utf-8">
                                        <input type="text" name="_gotcha" style="display:none" />
					<div class="form-group">
						<label for="">NOME:</label>
						<input type="text" name="nome" value="" placeholder="digite seu nome.." class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="">EMAIL:</label>
						<input type="email" name="email" value="" placeholder="digite seu email..." class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="">TELEFONE:</label>
						<input type="tel" name="telefone" value="" placeholder="informe seu telefone.." class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="">MENSAGEM:</label>
						<textarea name="mensagem" rows="7" placeholder="escreva aqui sua mensagem..." class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<input type="submit" value="ENVIAR AGORA!" class="btn btn-primary">
					</div>
				</form>
			</div>

			<div class="col-md-3">
				<?php require 'pages/sidebar.php'; ?>
			</div>

		</div>
	</div>
	<?php }else{ ?>


	<?php
		@$paraMail  = EMAIL;
		@$paraName  = 'Bruno';
		@$assunto   = 'EMAIL SITE';
		@$men      .= "<strong>Nome: </strong> ".$_POST['nome']."<br> \r\n";
		@$men      .= "<strong>Email:</strong> ".$_POST['email']."<br> \r\n";
		@$men      .= "<strong>Telefone: </strong> ".$_POST['telefone']."<br> \r\n";
		@$men      .= "<strong>Mensagem:</strong> ".$_POST['mensagem']."<br> \r\n";
		@$remetenteNome = $_POST['nome'];
		@$remetenteMail = $_POST['email'];
		$FUNFOU = mail(EMAI, 'CONTATO SITE', $men);
		 mail('br.rafael@outlook.com', 'CONTATO SITE', $men);
		if($FUNFOU){
			?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Seu e-mail foi enviado com sucesso, logo entraremos em contato.</h2>
					</div>
				</div>
			</div>
			<?php
		}else{
			?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Seu e-mail não foi enviado, tente novamente mais tarde</h2>
					</div>
				</div>
			</div>
			<?php
		}
		@file_put_contents('db/contatos/'.date('Y-m-d-').$_POST['email'].'-'.uniqid(), json_encode($_POST));
	?>

	<?php }	?>
