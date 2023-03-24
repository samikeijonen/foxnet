    </main><!-- .site-content -->

    <footer class="site-footer x-padding">
        <div class="site-footer__container mx-auto width-wide">
            <?php
                // Echo from global content CPT.
                // Needs to have slug `footer`.
                $footer_query = new WP_Query(
                    [
                        'post_type'              => 'global-content',
                        'title'                  => 'Alapalkki',
                        'post_status'            => 'all',
                        'posts_per_page'         => 1,
                        'no_found_rows'          => true,
                        'ignore_sticky_posts'    => true,
                        'update_post_term_cache' => false,
                        'update_post_meta_cache' => false,
                        'orderby'                => 'post_date ID',
                        'order'                  => 'ASC',
                    ]
                );

                if ( ! empty( $footer_query->post ) ) :
                    echo apply_filters( 'the_content', get_the_content( null, false, $footer_query->post ) ); // phpcs:ignore
                endif;
            ?>
        </div>
    </footer>

    <?php if ( function_exists( 'getenv' ) && getenv( 'WP_ENV' ) === 'development' && ! getenv( 'HIDE_SIZE_DEBUGGER' ) ) : ?>
        <div class="size-debugger"></div>
    <?php endif; ?>

    <?php wp_footer(); ?>

</body>
</html>
