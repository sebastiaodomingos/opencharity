/* 
*
*This would be the page.tpl.php (just an example)
*
*/

 
        <header>
			<div class="topBar">
				<?php if ($logo): ?>
				<div class="logo">
				  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				  </a>
				</div>
				<?php endif; ?>
                <?php if($top_menu || $joinus):?>
				<div class="navbar">
				    
					<ul>
					    <li><a href="#" class="button joinus last"><?php print $joinus; //variable not defined yet?></a></li>
						<?php print $top_menu; //variable not defined yet ?>
					</ul>
					
				</div>
				<? end; ?>
			</div>
		</header>

	  <?php if ($hero): ?>
	  <div id="Hero" class="hero">
		<div  class="hero_img">
			<img src="<?php print $hero; ?>" alt="<?php print t('Home'); ?>" />
			<?php if ($hero_description){ print $hero_description; //variable not defined yet} ?>
	  </div>
     </div> <!-- /.section, /#hero -->
     <?php endif; ?>
 
 
 <!--start content-->
 
 <div  class="content">
 
    <?php if ($page['banner']): ?>
      <div id="banner" class="banner">
        <?php print render($page['banner']); ?>
      </div> <!-- /.section, /#banner -->
    <?php endif; ?>
	
    <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
    <?php endif; ?>
   
    
    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
      
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
	  
	 <?php if ($page['content_top']): ?>
		<div class="content_top">
			<?php print render($page['content_top']); ?>
		</div>
	<?php endif; ?>
	<?php if ($page['content_center']): ?>
		<div class="content_top">
			<?php print render($page['content_center']); ?>
		</div>
	<?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
	  
	 <?php if ($page['content_bottom']): ?>
		<div class="content_bottom">
			<?php print render($page['content_bottom']); ?>
		</div>
	<?php endif; ?>

    
</div> <!-- /.section, /#content -->

 


  <footer>
			<?php if ($page['footer_top'] || $page['footer_bottom']): ?>
			  <div class="social" id="footer_social">
				<?php print render($page['footer_social']); ?>
			  </div> <!-- /#footer-social -->
			  <div id="footer_bottom">
				<?php print render($page['footer_bottom']); ?>              
			  </div> <!-- /#footer-bottom -->
			<?php endif; ?>
  </footer>