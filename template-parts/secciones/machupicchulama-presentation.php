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
            <span
                class="title-color">¡<?php echo ($lg)? 'EXPLORA LA MAGIA DE MACHU PICCHU': 'EXPLORE THE MAGIC OF MACHU PICCHU';?>!</span>
        </h2>
        <p class="container-section-parrafo">
            <?php echo ($lg)? $parrafo_presentacion_es: $parrafo_presentacion_en;?>
        </p>

    </div>
    <div class="container-presentation-grid container-section ">
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="experiencia-local-icon">
                    <?php get_template_part('images/iconos/experiencia-local-icon'); ?>
                </div>
                <h3>EXPERIENCIA</br>LOCAL <?php echo $lg ?></h3>
            </div>
            <p>Descubre Machu Picchu con guías locales, expertos en la historia y la cultura de la región, ofreciendo
                una autenticidad única.
            </p>
        </div>
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="flexibilidad-personalizada-icon">
                    <?php get_template_part('images/iconos/flexibilidad-personalizada-icon'); ?>
                </div>
                <h3>FLEXIBILIDAD</br>PERSONALIZADA</h3>
            </div>
            <p>Ajustamos cada experiencia según tus preferencias, brindando itinerarios flexibles y actividades
                adaptadas a tus necesidades individuales.
            </p>
        </div>
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="servicio-calidad-icon">
                    <?php get_template_part('images/iconos/servicio-calidad-icon'); ?>
                </div>
                <h3>SERVICIO DE</br>CALIDAD</h3>
            </div>
            <p>Comprometidos con la excelencia, garantizamos un servicio excepcional en todos los aspectos, asegurando
                una experiencia inolvidable y de calidad.
            </p>
        </div>
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="servicio-calidad-icon">
                    <?php get_template_part('images/iconos/servicio-calidad-icon'); ?>
                </div>
                <h3>Experiencia</br>Personalizada</h3>
            </div>
            <p>Cada tour se adapta a tus intereses, asegurando momentos significativos y memorables durante tu visita a
                Machu Picchu.
            </p>
        </div>
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="servicio-calidad-icon">
                    <?php get_template_part('images/iconos/servicio-calidad-icon'); ?>
                </div>
                <h3>Seguridad y</br>Confiabilidad</h3>
            </div>
            <p>Tu seguridad es nuestra prioridad. Con estándares rigurosos y personal capacitado, garantizamos un viaje
                seguro y confiable en cada detalle.
            </p>
        </div>
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="servicio-calidad-icon">
                    <?php get_template_part('images/iconos/servicio-calidad-icon'); ?>
                </div>
                <h3>asistencia permanente las 24 horas</h3>
            </div>
            <p>Estamos disponibles en todo momento. Con asistencia las 24 horas, disfruta de tu viaje con la
                tranquilidad de saber que estamos aquí para cualquier eventualidad.
            </p>
        </div>
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="servicio-calidad-icon">
                    <?php get_template_part('images/iconos/servicio-calidad-icon'); ?>
                </div>
                <h3>Tours Disponibles Diariamente</h3>
            </div>
            <p>Ofrecemos flexibilidad de fechas, con salidas diarias para todos nuestros tours, permitiéndote planificar
                tu visita a Machu Picchu según tu conveniencia.
            </p>
        </div>
        <div class="porque-elegirnos-item ">
            <div class="porque-elegirnos-item-header">
                <div class="servicio-calidad-icon">
                    <?php get_template_part('images/iconos/servicio-calidad-icon'); ?>
                </div>
                <h3>Sostenibilidad Garantizada</h3>
            </div>
            <p>Nos preocupamos por el entorno que exploramos. Nuestro compromiso con la sostenibilidad garantiza que
                cada experiencia contribuya positivamente al medio ambiente y a las comunidades locales.
            </p>
        </div>
    </div>
</section>