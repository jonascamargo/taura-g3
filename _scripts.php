

    <!-- Javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <?php echo ( $page == 'contato' ) ? '<script type="text/javascript" src="js/jquery-validate.js"></script>' : ''; ?>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <?php echo ( $page == 'home' ) ? '<script type="text/javascript" src="js/drift.min.js"></script>' : ''; ?>
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/multiple-modal.js"></script>
    <?php if( $page == 'produtos' ): ?>
    <script type="text/javascript" src="js/nouislider.min.js"></script>
    <script type="text/javascript" src="js/shop.js"></script>
    <?php endif; ?>
    <script type="text/javascript" src="js/main.js"></script>

    <?php if( $page == 'home' ): ?>
    <script type="module" src="js/model-viewer.min.js"></script>
    <script type="module" src="js/zoom.js"></script>
    <?php endif; ?>

    <?php if( $page == 'contato' ): ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA"></script>
    <script type="text/javascript" src="js/map-contact.js"></script>
    <script type="text/javascript" src="js/marker.js"></script>
    <script type="text/javascript" src="js/infobox.min.js"></script>
    <?php endif; ?>
    </body>

</html>