<!-- Hämtar headern från header.php -->
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12">
                    <?php
                    // Ser om det finns inlägg i databasen och hämtar dessa
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <h2 class="title">
                                <!-- Hämtar titeln från inlägget -->
                                <?php the_title(); ?>
                            </h2>
                            <!-- hämtar inläggsinnehållet -->
                            <?php the_content(); ?>
                    <?php
                        endwhile;
                    else :
                        _e('Sorry, no posts matched your criteria.', 'textdomain');
                    endif;
                    ?>
                </div>
            </div>
    </section>
</main>
<!-- hämtar footern från footer.php -->
<?php get_footer(); ?>