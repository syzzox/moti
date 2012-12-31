<?php echo $this->start('head') ?>
	<script type="text/javascript" src="http://api.webshell.io/sdk/js?key=e8afc0ea52ad5895a206567b1552a546"></script>
<?php echo $this-> end() ?>

<script type="text/javascript">
	(function() {
	    wsh.exec({
	        hash: 'NzVjY',
	        args: { 
	        	zoom: '14', center: 'Avenida Paulista', markers:'{"markers": [{"address": "Avenida Paulista","title": "Titulo"}]}', qtd: 1  },
	        version: 7,
	        process: function(json, meta) {
	            $('#content').append(meta.view)
	        }
	    });
	}());
	</script>