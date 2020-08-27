<div id="post-0" class="post not-found post-listing">
	<h1 class="post-title"><?php _eti( 'Nada por aquí' ); ?></h1>
	<div class="entry">
		<p><?php _eti( 'Disculpas, pero la página solicitada no se pudo encontrar. Puede que la búsqueda le ayudará.' ); ?></p>

		<div class="search-block-large">
			<form method="get" action="<?php echo home_url(); ?>/">
				<button class="search-button" type="submit" value="<?php if( !$is_IE ) _eti( 'Search' , 'tie' ) ?>"><i class="fa fa-search"></i></button>	
				<input type="text" id="s" name="s" value="<?php _eti( 'Buscar' ) ?>" onfocus="if (this.value == '<?php _eti( 'Buscar' ) ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _eti( 'Buscar' ) ?>';}"  />
			</form>
		</div><!-- .search-block /-->
	</div>
</div>