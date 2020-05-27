<?php
/**
 * footer Template.
 *
 * @package biztt
 */
?>
<!--footer-->
<?php if((is_active_sidebar('footer-1')) || (is_active_sidebar('footer-2')) || (is_active_sidebar('footer-3')) || (is_active_sidebar('footer-4'))) {?>
<?php get_template_part('skin/template/footer/template', 'footertop');?>
<!--footer-->
<?php }?>
<?php get_template_part('skin/template/footer/template', 'footerbottom');?>

    <!-- ################################################################################################ -->
    <div
      class="wrapper row4 bgded overlay"
      style="background-image:url('<?php echo get_theme_file_uri( 'images/backgrounds/circles_bottom.jpg' ); ?>');"
    >
    
      <footer id="footer" class="hoc clear">
        <div>
          <!--<h6 class="heading">Consequat suspendisse</h6>-->
          <nav>
            <ul class="nospace">
              <li>
                <a href="#"><i class="fa fa-lg fa-home"></i></a>
              </li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
          <ul class="faico clear">
            <li>
              <a target="_blank"
                class="faicon-facebook"
                href="https://www.facebook.com/CryoQuebec/"
                ><i class="fa fa-facebook"></i
              ></a>
            </li>
            <li>
              <a target="_blank" class="faicon-twitter" href="#"
                ><i class="fa fa-twitter"></i
              ></a>
            </li>
          </ul>
        </div>
      </footer>
    </div>
    <!-- ################################################################################################ -->
    <div class="wrapper row5">
      <div id="copyright" class="hoc clear">
        <p class="fl_left">2018-2020 - CryoQuébec</p>
        <p class="fl_right">
          Template by
          <a
            target="_blank"
            href="http://www.os-templates.com/"
            title="Free Website Templates"
            >OS Templates</a
          >
        </p>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<?php wp_footer(); ?>
</body>
</html>