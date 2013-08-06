  <?php if ($is_front): ?>
    <div id="scenery">
      <p class="credit">This photo was taken by Fir0002/Flagstaffotos and is licenesed under CC BY-NC. Thanks!</p>
    </div>
  <?php endif; ?>

    <div id="wrapper" <?php if ($is_front): ?>class="front"<?php endif; ?>">

    <div>
      <header id="header-wrapper">
        <div id="menus">

          <nav id="main-menu">
            <ul>
            <?php foreach ($main_menu as $item): ?>
              <li><?php echo l($item['title'], $item['href']); ?></li>
            <?php endforeach; ?>
            </ul>
          </nav>

          <?php if ($secondary_menu): ?>
          <nav id="secondary-menu">
            <ul>
            <?php foreach ($secondary_menu as $item): ?>
              <li><?php echo l($item['title'], $item['href']); ?></li>
            <?php endforeach; ?>
            </ul>
          </nav>
          <?php endif; ?>

        </div> <!-- menus -->

        <div id="topbar">
          <?php echo render($page['topbar']); ?>
        </div>


      </header>
    </div>

    <div id="middle-content" class="grid-container<?php if ($is_front): ?> front<?php endif; ?>">

        <div id="header" class="grid-container">
          <?php echo render($page['header']); ?>
        </div>

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
        <div id="content" class="<?php if ($is_front): ?>class-100<?php else: ?>grid-70<?php endif; ?>">
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

        <div id="sidebar" class="grid-30">
          <?php echo render($page['sidebar']); ?>
        </div>

      </section> <!-- main -->
    </div>

    <footer>
      <?php echo render($page['footer']); ?>
    </footer>

  </div> <!-- wrapper -->
