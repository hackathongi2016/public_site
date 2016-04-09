

<!-- Sidebar Footer Section Starts -->
<div class="s-footer">
  <div class="container">
    <div class="row">


      <div class="col-md-3">

        <!-- First Footer Widget-->
        <div class="sfooter-box first wow fadeInUp" data-wow-duration="1s">
			<?php if (is_active_sidebar('sidebar-2')) : ?>
				<?php dynamic_sidebar('sidebar-2'); ?>
			<?php else : ?>
			<?php endif; ?>
        </div>
        <!-- First Footer Widget Ends-->

      </div><!-- col-md-3 -->


      <div class="col-md-3">

        <!-- Second Footer Widget-->
        <div class="sfooter-box second wow fadeInUp" data-wow-duration="1.5s">
			<?php if (is_active_sidebar('sidebar-3')) : ?>
				<?php dynamic_sidebar('sidebar-3'); ?>
			<?php else : ?>
			<?php endif; ?>
        </div><!-- sfooter-box second-->
        <!-- Second Footer Widget Ends-->

      </div><!-- col-md-3-->


      <div class="col-md-3">

        <!-- Third Footer Widget-->
        <div class="sfooter-box third wow fadeInUp" data-wow-duration="2s">
          <?php if (is_active_sidebar('sidebar-4')) : ?>
                        <?php dynamic_sidebar('sidebar-4'); ?>
                    <?php else : ?> 
                    <?php endif; ?>
        </div><!-- sfooter-box third-->
        <!-- Third Footer Widget Ends-->

      </div><!-- col-md-3 -->


      <div class="col-md-3">

        <!-- Fourth Footer Widget-->
        <div class="sfooter-box fourth wow fadeInUp" data-wow-duration="2.5s">
			<?php if (is_active_sidebar('sidebar-5')) : ?>
				<?php dynamic_sidebar('sidebar-5'); ?>
			<?php else : ?>
			<?php endif; ?>
        </div><!-- sfooter-box fourth-->
        <!-- Fourth Footer Widget Ends-->

      </div><!-- col-md-3 -->


    </div><!-- row -->
  </div><!-- container -->
</div><!-- s-footer -->
<!-- Sidebar Footer Section Ends -->
