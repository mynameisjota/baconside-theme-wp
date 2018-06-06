<footer class= "mt-3 preto-principal" style="border-top:4px solid #dd1f46;">

    <div class="container">
        <div class="row">
            <?php dynamic_sidebar('footer1'); ?>

            <div class="col-sm-12 text-center">
                <div class="logo-mascote-footer pb-3 pt-3">
                    <a href="<?php echo esc_url( home_url('/') ); ?>">
                        <img src="<?php bloginfo('template_directory'); ?> /logo-mascote-baconside.png" border="0" alt="baconsideoficial@gmail.com">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-2 vermelho-principal pt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-light"><p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p></div>

                <div class="col-md-6 text-light text-right">
                    Feito por:
                </div>
            </div>
        </div>
    </div>

</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>