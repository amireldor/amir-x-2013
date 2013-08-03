<!DOCTYPE html>
<html lang="<?php echo $language->language; ?>" dir="<?php echo $language->dir; ?>" <?php echo $rdf_namespaces; ?>>
<head profile="<?php echo $grddl_profile; ?>">
  <?php echo $head; ?>
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <title><?php echo $head_title; ?></title>
  <?php echo $styles; ?>
  <?php echo $scripts; ?>
</head>
<body>
  <?php echo $page_top; ?>
  <?php echo $page; ?>
  <?php echo $page_bottom; ?>
</body>
</html>
