<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deepinsights
 */

?>

	</div><!-- #content -->

<footer class="footer gradbg pad">
  <nav class="nav">
    <a href="/" class="nav-item">Custom Analytics</a>
    <a href="/" class="nav-item">Data Warehousing</a>
    <a href="/team" class="nav-item">Team</a>
    <a href="#" class="nav-item">Careers</a>
    <a href="/blog" class="nav-item">Blog</a>
    <a href="/contact" class="nav-item">Contact</a>
  </nav>

  <div class="pad1">
    <h4 class="center light">Backed by</h4>
    <div class="center light base-font backer-list">
      <h3 class="backer">500 startups </h3>
      and
      <h3 class="backer">Microsoft Ventures</h3>
    </div>
  </div>

  <div class="pad1">
    <h3 class="center light">Know More</h3>
    <div class="icon-group">
      <a class="icon-facebook" href="https://www.facebook.com/pg/DeepInsights-1274379472594349/"></a>
      <a class="icon-twitter" href="https://twitter.com/deepinsightsio"></a>
      <a class="icon-google-plus" href="https://plus.google.com/u/0/b/105022942485143619989/105022942485143619989/about"></a>
      <a class="icon-linkedin" href="https://www.linkedin.com/company/deep-insights"></a>
    </div>
  </div>
  <?php
  if (get_theme_mod( 'footer_logo' )) :
  ?>
  <img class="auto" src="<?php echo get_theme_mod( 'footer_logo' ); ?>"/>
  <?php 
    else :
  ?>
  <h1 class="light center"><?php bloginfo( 'name' ); ?></h1>
  <?php endif ?>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
