<?php echo $this->start('head') ?>
	<script type="text/javascript" src="http://api.webshell.io/sdk/js?key=e8afc0ea52ad5895a206567b1552a546"></script>
<?php echo $this-> end() ?>

<script type="text/javascript">
	(function() {
	    wsh.exec({
	        hash: 'NzVjY',
	        args: { 
	        	width: '780px', height: '500px', zoom: '14', center: 'Avenida Paulista', markers:'{"markers": [{"address": "Avenida Paulista","title": "Titulo"}]}', qtd: 1  },
	        version: 9,
	        process: function(json, meta) {
	            $('#mapa').append(meta.view)
	        }
	    });
	}());
	</script>

	<div class="grid_12">
		<h1>Onde?</h1>

		Será realizado na Avenida Paulista inteira da cidade de São Paulo. 20 Prédios da avenida mais famosa da capital serão mapeados com projeções interativas. 

		<div id="mapa" class="grid_10 prefix_1 suffix_1 omega alpha"></div>
	</div>