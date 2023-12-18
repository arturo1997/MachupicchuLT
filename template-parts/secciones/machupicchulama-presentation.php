<?php
    $lg = ('es'==pll_current_language())? true: false;
    $parrafo_presentacion_es = "Bienvenido a Machu Picchu Luna Tours, tu puerta de entrada a la maravillosa experiencia de descubrir Machu Picchu. Sumérgete en la historia, la belleza natural y la cultura única de este antiguo sitio arqueológico mientras nuestros expertos guías te llevan en un viaje inolvidable. En Machu Picchu Luna Tours, cada paso es una aventura, cada rincón cuenta una historia. Únete a nosotros y deja que Machu Picchu te revele sus secretos.";
    $parrafo_presentacion_en = "Welcome to Machu Picchu Luna Tours, your gateway to the wonderful experience of discovering Machu Picchu. Immerse yourself in the history, natural beauty, and unique culture of this ancient archaeological site as our expert guides take you on an unforgettable journey. At Machu Picchu Luna Tours, every step is an adventure, every corner tells a story. Join us and let Machu Picchu reveal its secrets to you.";
?>
<section class="machupicchulama-section color-bg p-top-bottom">
    <div class="container-section ">
        <div class="container-section-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logotipo.png" class="logo-footer" />
        </div>
        <h2 class="container-section-title">Machupicchu Luna Tours <br />
            <span class="title-color">¡<?php echo ($lg)? 'EXPLORA LA MAGIA DE MACHU PICCHU': 'EXPLORE THE MAGIC OF MACHU PICCHU';?>!</span>
        </h2>
        <p class="container-section-parrafo">
            <?php echo ($lg)? $parrafo_presentacion_es: $parrafo_presentacion_en;?>
        </p>

    </div>
    <div class="porque-elegirnos container-section owl-carousel owl-carousel-3">
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="experiencia-local-icon">
                    <?php get_template_part('images/iconos/experiencia-local-icon'); ?>
                </div>
                <h3>EXPERIENCIA LOCAL <?php echo $lg ?></h3>
            </div>
            <p>Nuestros guías son lugareños apasionados por su cultura y patrimonio. Te llevarán más allá de los lugares
                turísticos habituales,
                compartiendo historias y conocimientos auténticos.
            </p>
        </div>
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="flexibilidad-personalizada-icon">
                    <?php get_template_part('images/iconos/flexibilidad-personalizada-icon'); ?>
                </div>
                <h3>FLEXIBILIDAD PERSONALIZADA</h3>
            </div>
            <p>Entendemos que cada viajero es único. Ofrecemos opciones de tours personalizables para adaptarnos a tus
                intereses y preferencias.
            </p>
        </div>
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="servicio-calidad-icon">
                    <?php get_template_part('images/iconos/servicio-calidad-icon'); ?>
                </div>
                <h3>SERVICIO DE CALIDAD</h3>
            </div>
            <p>Nos enorgullece brindar un servicio de primera clase. Desde la reserva inicial hasta el final de tu
                viaje, estamos comprometidos en ofrecerte
                una experiencia sin complicaciones y placentera.
            </p>
        </div>
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="servicio-calidad-icon">
                    <?php get_template_part('images/iconos/servicio-calidad-icon'); ?>
                </div>
                <h3>Experiencia Personalizada</h3>
            </div>
            <p>Ofrecemos tours personalizados para satisfacer las necesidades individuales de nuestros clientes.
            </p>
        </div>
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="servicio-calidad-icon">
                    <?php get_template_part('images/iconos/servicio-calidad-icon'); ?>
                </div>
                <h3>Seguridad y Confiabilidad</h3>
            </div>
            <p>Priorizamos la seguridad y el bienestar de nuestros clientes en todas nuestras excursiones.
            </p>
        </div>
    </div>
</section>