<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($content['field_portfolio_section']); ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>>
        <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
      </h2>
    <?php endif; ?>
  <?php else: ?>
    <h1 id="page-title" class="title"><?php print $title; ?></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <p class="text-center">
    <a href="//ru.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="white"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_white_20.png" /></a>
  </p>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);
  ?>

  <?php if (!empty($content['field_tags']) && !$is_front): ?>
    <?php print render($content['field_tags']) ?>
  <?php endif; ?>
</article>
