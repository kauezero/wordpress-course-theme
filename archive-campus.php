<?php
get_header();
page_banner(array(
    'title' => 'Our Campuses',
    'subtitle' => 'We have several campuses.'
));
?>

<div class="container container--narrow page-section">
    <ul class="link-list min-list">
        <?php
        while (have_posts()) {
            the_post();
            $mapLocation = get_field('map_location');
        ?>
            <li><a href="<?php the_permalink(); ?>"> <?php the_title(); echo $mapLocation['lat']; echo $mapLocation['lgn']; ?> </a></li>
        <?php }
        echo paginate_links();
        ?>
    </ul>
</div>

<?php
get_footer();
?>