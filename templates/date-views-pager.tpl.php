<?php
/**
 * @file
 * Template file for the example display.
 *
 * Variables available:
 *
 * $plugin: The pager plugin object. This contains the view.
 *
 * $plugin->view
 *   The view object for this navigation.
 *
 * $nav_title
 *   The formatted title for this view. In the case of block
 *   views, it will be a link to the full view, otherwise it will
 *   be the formatted name of the year, month, day, or week.
 *
 * $prev_url
 * $next_url
 *   Urls for the previous and next calendar pages. The links are
 *   composed in the template to make it easier to change the text,
 *   add images, etc.
 *
 * $prev_options
 * $next_options
 *   Query strings and other options for the links that need to
 *   be used in the l() function, including rel=nofollow.
 */
?>
<?php
  $month_name[1] = "Январь";
  $month_name[2] = "Февраль";
  $month_name[3] = "Март";
  $month_name[4] = "Апрель";
  $month_name[5] = "Май";
  $month_name[6] = "Июнь";
  $month_name[7] = "Июль";
  $month_name[8] = "Август";
  $month_name[9] = "Сентябрь";
  $month_name[10] = "Октябрь";
  $month_name[11] = "Ноябрь";
  $month_name[12] = "Декабрь";
  //$month_now = (int)substr($plugin->view->args[0],5,2); // берем аргумент из calendar views - текущая дата
  //$year_now = (int)substr($plugin->view->args[0],0,4);  // arg[0] = 2014-05-12, 0 и 4 - начиная с нулевого символа, 4 символа - 2014
  $month_now = $plugin->view->date_info->month;
  $year_now = $plugin->view->date_info->year;
  $name_page = $plugin->view->name;
?>
<?php if (!empty($pager_prefix)) print $pager_prefix; ?>
<div class="row">
  <div class="small-4 columns">
    <div class="text-left">
      <?php print l('&larr;' . ($mini ? '' : ' ' . t('Назад', array(), array('context' => 'date_nav'))), $prev_url, $prev_options); ?>
    </div>
  </div>
  <div class="small-4 columns">
    <div class="text-center"><?php print $month_name[$month_now]. ',&ensp;' . $year_now; ?></div>
  </div>
  <div class="small-4 columns">
    <div class="text-right">
      <?php print l(($mini ? '' : t('Вперед', array(), array('context' => 'date_nav')) . ' ') . '&rarr;', $next_url, $next_options); ?>
    </div>
  </div>
</div>

