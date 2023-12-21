<?php
// Obtén la categoría actual de la entrada
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;

// Configura los parámetros para la consulta
$args = array(
    'category__in' => array($category_id), // Filtra por la categoría actual
    'post__not_in' => array(get_the_ID()), // Excluye la entrada actual
    'posts_per_page' => 4, // Puedes ajustar esto según tus necesidades
);

// Realiza la consulta
$query = new WP_Query($args);

// Comprueba si hay entradas
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Aquí puedes mostrar el contenido de cada entrada
        get_template_part( 'template-parts/content', get_post_type() );
    endwhile;
else :
    echo 'No se encontraron entradas en esta categoría.';
endif;
?>