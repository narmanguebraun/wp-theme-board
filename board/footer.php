  <div class="push"></div>
</div>

<section id="about" class="clear-self">
  <div class="wrapper">
    <header class="block">
      <h2>About</h2>
    </header>
    <div class="block">
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
        <p>If you’re interested in discussing a project, collaborating,<br/> or simply getting in touch, please send an email:</p><p><a href="mailto:photo@namelastname.com">photo@namelastname.com</a></p>
      </div>
    </div>
  </div>
</section>

<footer id="footer" class="footer clear-self">
  <div class="wrapper">
    <div class="block">
      <div class="content">
        <p>&copy; <?php bloginfo('name'); ?> &mdash; All rights reserved<br/>
        Site designed and built by <a href="http://github.com/narmanguebraun">N.A.B</a></p>
      </div>
    </div>
  </div>
</footer>

</div>
<?php wp_footer(); ?>

<script src="<?php bloginfo('template_url'); ?>/js/jquery-latest.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/masonry.pkgd.min.js"></script>
  <script type="text/javascript">
    $(window).load(function(){
      $('#board-item').masonry({
        itemSelector: '.box',
      });
    });
  </script>
<script src="<?php bloginfo('template_url'); ?>/js/smooth-scroll.js"></script>
  <script>
    smoothScroll.init({
      speed: 1000,
      easing: 'easeInOutCubic',
      offset: 0,
      updateURL: false,
      callbackBefore: function ( toggle, anchor ) {},
      callbackAfter: function ( toggle, anchor ) {}
    });
  </script>

</body>
</html>
