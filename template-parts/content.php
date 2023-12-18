<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Machupicchu_Lama
 */
    $lg = ('es'==pll_current_language())? true: false;
?>

<article id="post-<?php the_ID(); ?>" class="card-tour container-grid-item">


    <?php
    $imagen_webp = get_field('img-thumbnail-webp'); // Obtén el campo personalizado de la imagen WebP
    $entrada_url = get_permalink(); // Obtiene el enlace de la entrada
    $imagen_destacada_id = get_post_thumbnail_id();
    $imagen_destacada_alt = get_post_meta($imagen_destacada_id, '_wp_attachment_image_alt', true); // Obtiene el atributo "alt"
    $imagen_fallback = get_the_post_thumbnail_url(); // Obtén el campo personalizado de la imagen de respaldo (JPEG o PNG)

    if ($entrada_url && $imagen_webp) {
        $imagen_url_webp = $imagen_webp['url'];

        echo '<a class="post-thumbnail" href="' . esc_url($entrada_url) . '">';
        echo '<picture>';
        echo '<source srcset="' . esc_url($imagen_url_webp) . '" type="image/webp">';
        echo '<img src="' . esc_url($imagen_fallback) . '" alt="' . esc_attr($imagen_destacada_alt) . '">';
        echo '</picture>';
        echo '</a>';
    }else{
        echo '<a class="post-thumbnail" href="' . esc_url($entrada_url) . '">';
        echo '<img src="' . esc_url($imagen_fallback) . '" alt="' . esc_attr($imagen_destacada_alt) . '">';
        echo '</a>';
    }
    ?>
    <?php 
        $tipo_de_tour = get_field('tipo-de-tour');
        if (!empty($tipo_de_tour)) {
            echo '<div class="card-tour-type">';
            echo $tipo_de_tour;
            echo '</div>';
        }
    ?>
    <span class="card-duracion">
        <?php get_template_part('images/iconos/dias-icon'); ?>
        <?php 
                    $dias = get_field('dias');
                    if ($dias >= 2) {
                        $noches = $dias - 1;
                        echo '<span >' . $dias .'</span>  Días & <span >' . $noches . '</span> Noches';
                    } else {
                        echo 'Full Day';
                    }
                    
                    ?>
    </span>
    <div class="card-tour-header">
        <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
        <div class="entry-meta">
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </div><!-- .entry-header -->

    <div class="card-tour-footer">
        <p class="card-tour-footer-precio"><?php echo ($lg)? "Desde": "From";?>
            <span>US$<?php  echo get_post_meta(get_the_ID(), 'precio', true)  ?></span><?php echo ($lg)? "por Persona": "per Person";?>
        </p>
        <a href="<?php the_permalink()?> " class="button button-hover"><?php echo ($lg)? "Reservar Ahora": "Book Now";?></a>
    </div>




</article><!-- #post-<?php the_ID(); ?> -->