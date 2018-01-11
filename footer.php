</main><!--closing fluid container of background image -->

<!-- Footer -->


<?php wp_footer(); ?>
<footer class="blog-footer">
  <?php
   $theme_opts = get_option('tap_opts');
   echo $theme_opts['footer'];
  ?>
<!--<p>All right reserved -  <a href="http://tanita.webedge.com">Anita Tapaji</a> &copy 2017.</p>
  <p><a href="#">Back to top</a></p>-->
</footer>
</body>
</html>




<!--Footer for front page -->
<!--<footer>
    <small>All right reserved - Anita Tapaji &copy 2017</small>
</footer>-->
