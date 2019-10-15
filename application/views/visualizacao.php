<?php $this->load->view('commons/cabecalho'); ?>

<div class="container">
	<div class="page-header mb-5">
		<h1 class="text-center">Recortando imagens com as bibliotecas jCrop e Image Manipulation no CodeIgniter</h1>
	</div>
	<div class="row">
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">
			<h3>Imagem Recortada</h3>
			<hr />
				<div id="imagem-box">
					<img src="<?=$urlImagem?>" class="img-fluid"/>
				</div>
				<p><a href="<?=base_url()?>" class="btn btn-success">Nova Imagem</a></p>
		</div>
		<?php if($dadosImagem == TRUE): ?>
		<div class="col-12 col-sm-12 col-md-6 col-lg-6">
			<h3>Informações da Imagem</h3>
			<hr />
			<ul>
				<?php foreach($dadosImagem as $key => $value): ?>
					<li><strong><?=$key?></strong> => <?=$value?></li>
				<?php endforeach; ?>
			</ul>
			<hr/>
			<h3>Informações do Recorte</h3>
			<hr />
			<ul>
				<?php foreach($dadosCrop as $key => $value): ?>
					<li><strong><?=$key?></strong> => <?=$value?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php endif; ?>
	</div>
</div>

<?php $this->load->view('commons/rodape'); ?>
