<?php

$author_id = get_the_author_meta('ID');
$author_badge = get_field('author_badge', 'user_'. $author_id );
?>

<div class="fundo-autor" style="background-image: url(<?php echo $author_badge['url']; ?>);">

	<div class="box-shadow">
		<div class="avatar-autor">
			<?php echo get_avatar(  get_the_author_meta( 'ID' ), 100, array('title' => get_the_title()) ); ?>
		</div>

		<div class="autor-name">
			<span>Sobre o autor: <?php the_author_posts_link(); ?></span>
		</div>

		<div class="descricao">
			<i><?php the_author_description(); ?></i>
		</div>

		<div class="redesautor">

			<?php if ( get_the_author_meta( 'googleuser' ) ) { ?><a href="<?php the_author_meta( 'googleuser' ); ?>?rel=author" title="Acesse meu Google +" target="_blank">Google +</a><?php } ?>

			<?php if ( get_the_author_meta( 'twitteruser' ) ) { ?><a href="<?php the_author_meta( 'twitteruser' ); ?>" title="Acesse meu Twitter" target="_blank">Twitter</a><?php } ?>

			<?php if ( get_the_author_meta( 'facebookuser' ) ) { ?><a href="<?php the_author_meta( 'facebookuser' ); ?>" title="Acesse meu Facebook" target="_blank">Facebook</a><?php } ?>

		</div>
	</div>
	
</div>
