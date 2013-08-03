<article>

  <header class="details">
    <?php if (!$page): ?>
      <?php echo render($title_prefix); ?>
      <h1><a href="<?php echo $node_url; ?>"><?php echo $title; ?></a></h1>
      <?php echo render($title_suffix); ?>
    <?php endif; ?>

    <?php if ($display_submitted): ?>
    <time datetime="<?php echo date('c', $created); ?>" pubdate="pubdate"><?php echo $date ?></time>
    <?php endif; ?>

    <?php if ($node->changed != $node->created and !$is_front): ?>
    <time datetime="<?php echo date('c', $changed); ?>">Updated - <?php echo format_date($node->changed); ?></time>
    <?php endif;?>
  </header> <!-- information -->

  <div class="content"<?php echo $content_attributes; ?>>
    <?php echo render($content); ?>
  </div> <!-- content -->

</article>
