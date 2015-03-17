<?php

	$pattern = $this->uri->segment(1);

	function menu($menu,$pattern) {
		
		if( $menu == $pattern ) echo "active";
		
	}

?>

<div class="head">
	
	<div class="center">
	
		<a href="/">
		
			<img class="logo" src="/images/logo.png">
		
		</a>
		
		<a class="menu <?php menu('offert',$pattern)?>" href="/offert">Oferta</a>
		<a class="menu <?php menu('gallery',$pattern)?>" href="/gallery">Galeria</a>
		<a class="menu <?php menu('contact',$pattern)?>" href="/contact">Kontakt</a>
	
	</div>
	
</div>
