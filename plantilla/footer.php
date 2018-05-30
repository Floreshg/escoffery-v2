<footer class="container footer">
        <div id="footer" class="row">
          <div class="footer-p fter-text1">
            <p>AGENCIAS ESCOFFERY, S.A | Calle 84 Este, Panamá, Panama | Phone: +507 302 2372 | E-mail: info@agenciasescoffery.com</p>
          </div>
          <div class="footer-p fter-text2">
          <p>AGENCIAS ESCOFFERY, S.A 2018 All Rights Reserved | Design by Klikealo</p>
          </div>
        </div>
</footer>


<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/active.js"></script>
<script type="text/javascript" src="assets/js/marcas.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.b5-slid').bxSlider({
            mode: 'vertical',
            auto: true,
            pause: '5000',
            speed: 1500,
            controls: false,
            pagerCustom: '#bx-pager'
        });
    });

    $(window).load(function() {
        $('.b1-titulo').addClass('active');
        $('.b1-txtinfo').addClass('active');
        $('.b1-img').addClass('active');
        $('.b1-enlace').addClass('active');

    });
</script>

<script>
    $(document).ready(function() {

        $(window).scroll(function() {
            if ($(this).scrollTop() > 0) {
                $('nav').addClass('nav2');
                $('.navbar-nav>li>a').addClass('ampl');
                $('.size-logo a>img').addClass('expand');
                
            } else {
                $('nav').removeClass('nav2');
                $('.navbar-nav>li>a').removeClass('ampl');
                 $('.size-logo a>img').removeClass('expand');
            }
        });

    });
</script>


<script>
$(document).ready(function() {
	$('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',

		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
});
</script>


</body>

</html>