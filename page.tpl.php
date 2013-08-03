  <div id="capybara-wrapper">
    <?php echo theme_image(array('path' => $directory . '/transparent-capybara.png', 'alt' => 'A nice capybara drawing', 'title' => 'A nice capybara drawing, isn\'t it?', 'attributes' => array('id' => 'capybara'))); ?>
  </div>

  <div id="wrapper" class="grid-container">

    <div class="grid-100">
      <header>
        <div class="grid-60">
          <?php if ($page['header']): ?>
            <?php echo render($page['header']); ?>
          <?php else: ?>
            <h1><a href="<?php echo $front_page; ?>"><?php echo $site_name ?></a></h1>
          <?php endif;?>
        </div>

        <div id="menus" class="grid-40">
          <nav id="main_menu">
            <ul>
            <?php foreach ($main_menu as $item): ?>
              <li><?php echo l($item['title'], $item['href']); ?></li>
            <?php endforeach; ?>
            </ul>
          </nav>

          <nav id="secondary_menu">
            <ul>
            <?php foreach ($secondary_menu as $item): ?>
              <li><?php echo l($item['title'], $item['href']); ?></li>
            <?php endforeach; ?>
            </ul>
          </nav>
        </div> <!-- menus -->

      </header>
    </div>

    <div id="middle-content" class="grid-100">

      <?php if ($messages): ?>
        <div id="messages">
          <?php echo $messages; ?>
        </div>
      <?php endif; ?>

      <?php if ($breadcrumb): ?>
        <nav class="breadcrumb">
          <?php echo $breadcrumb; ?>
        </nav>
      <?php endif; ?>

      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <section class="main">
        <div class="grid-70">
          <?php echo render($page['highlighted']); ?>
          <?php echo render($title_prefix); ?>
          <?php if ($title): ?><h1><?php echo $title; ?></h1><?php endif; ?>
          <?php echo render($title_suffix); ?>
          <?php echo render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php echo render($action_links); ?></ul>
          <?php endif; ?>
          <?php echo render($page['content']); ?>
          <div class="feed-icons"><?php echo $feed_icons; ?></div>
        </div>

        <div class="grid-30">
          <?php echo render($page['sidebar']); ?>
        </div>

      </section> <!-- main -->
    </div>

    <footer class="grid-100">
      <?php echo render($page['footer']); ?>
    </footer>

  </div> <!-- wrapper -->
