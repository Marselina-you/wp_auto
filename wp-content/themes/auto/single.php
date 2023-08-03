<?php get_header('private'); ?>
<?php the_post(); ?>
<div class="container">
    <h2>
        <p>
        <?php the_title(); ?>
        </p>
    </h2>

<?php the_content(); ?>
</div>


<?php get_footer(); ?>
