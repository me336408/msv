<div<?php print $attributes; ?>>
  <header class="l-header" role="banner">
    <div class="l-constrained">
      <!-- <div class="l-branding site-branding"> -->
        <?php print render($page['branding']); ?>
      <!-- </div> -->

      <div class="l-navigation site-navigation">
        <!-- <?php print render($page['navigation']); ?> -->
      
        <?php print render($page['thumbnail_1']); ?>
        <?php print render($page['thumbnail_2']); ?>
        <?php print render($page['thumbnail_3']); ?>
        <?php print render($page['thumbnail_4']); ?>
      </div>


      <!-- <?php print render($page['header']); ?> -->
      <!-- </div> -->
      <?php print render($page['video']); ?>
      <?php print render($page['request']); ?>
    </div>
  </header>

  <?php print render($page['hero']); ?>

  <?php if (!empty($page['highlighted'])): ?>
    <div class="l-highlighted-wrapper">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <div class="l-main l-constrained">
    <a id="main-content"></a>
    <?php print render($tabs); ?>
    <?php print $breadcrumb; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div class="l-content" role="main">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

<!--     <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?> -->
  </div>

  <footer class="l-footer-wrapper" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>
