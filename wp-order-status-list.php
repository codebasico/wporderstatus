<?php

function wp_order_status_list() {
    ?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/wp-order-status/bootstrap.css" rel="stylesheet" />

	<script type="text/javascript" href="<?php echo WP_PLUGIN_URL; ?>/wp-order-status/bootstrap.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	
	
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Bienvenidos al Plugins <strong>WP Order Status</strong></h1>
    <p class="lead">Con este plugins tus clientes podran consultar el estado de sus pedidos por medio de su codigo de compras.</p>
  </div>
</div>
		

<div class="alert alert-warning alert-dismissible fade show" role="alert">
   Debes agregar a tu pagina y pegar el shortcode <strong>[wp_order_status]</strong> para que funcione el plugins
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



<p>
  <a class="btn btn-primary btn-lg " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Como agregar
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <p class="font-weight-bold">Crear nueva pagina</p>
	<p class="font-weight-normal">Copia y pega el ShortCode <strong>[wp_order_status]</strong></p>

  </div>
</div>




    </div>
	
	
    <?php
}