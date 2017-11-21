<!--.page -->
<div role="document" class="page">
  <div class="wrap-main">
    <!--.l-header -->
    <header role="banner" class="l-header">
      <!-- Title, slogan and menu -->
        <section class="row <?php print $alt_header_classes; ?>">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img class="float-center" src="<?php print base_path() . path_to_theme() . '/logo.jpg'; ?>" alt="<?php print t('Home'); ?>" style="width: 400px" />
          </a>
          <div class="center">
            <nav id="main-menu" class="navigation" role="navigation">
              <?php print ($alt_main_menu); ?>
            </nav> <!-- /#main-menu -->
          </div>
        </section>
      <!-- End title, slogan and menu -->
    </header>
    <!--/.l-header -->

    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
      <!--.l-messages -->
      <section class="l-messages row">
        <div class="columns">
          <?php if ($messages): print $messages; endif; ?>
        </div>
      </section>
      <!--/.l-messages -->
    <?php endif; ?>

    <?php if (!empty($page['help'])): ?>
      <!--.l-help -->
      <section class="l-help row">
        <div class="columns">
          <?php print render($page['help']); ?>
        </div>
      </section>
      <!--/.l-help -->
    <?php endif; ?>

    <!--.l-main -->
    <main role="main" class="row">
      <!-- .l-main region -->
      <div class="<?php print $main_grid; ?> main columns">
        <a id="main-content"></a>

        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
          <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
        <?php endif; ?>

        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
      </div>
      <!--/.l-main region -->

    </main>
    <!--/.l-main -->

    <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
      <!--.triptych-->
      <section class="l-triptych row">
        <div class="triptych-first medium-4 columns">
          <?php print render($page['triptych_first']); ?>
        </div>
        <div class="triptych-middle medium-4 columns">
          <?php print render($page['triptych_middle']); ?>
        </div>
        <div class="triptych-last medium-4 columns">
          <?php print render($page['triptych_last']); ?>
        </div>
      </section>
      <!--/.triptych -->
    <?php endif; ?>
  </div>
  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->

<!--.l-footer -->
<footer role="contentinfo">
  <hr />
  <div class="row contact">
    <div class="large-12 columns">
      <h4>Контакты</h4>
      <div class="medium-3 columns">
        <a href="mailto:me@tizengauz.com">
        <i class="icon-Email  large"></i><br>
        me@tizengauz.com</a>
      </div>
      <div class="medium-3 columns">
        <a href="http://vk.com/lolijul">
        <i class="icon-VK large"></i><br>
        vk.com/lolijul</a>
      </div>
      <div class="medium-3 columns">
        <a href="http://instagram.com/tizengauz_julia/">
        <i class="fi-social-instagram large"></i><br>
        @tizengauz_julia</a>
      </div>
      <div class="medium-3 columns">
        <a href="tel:+79265621275">
        <i class="fi-telephone large"></i><br>
        +7 (926) 562-12-75</a>
      </div>
    </div>
      <?php if (!empty($page['footer'])): ?>
        <div class="footer columns">
          <?php print render($page['footer']); ?>
        </div>
      <?php endif; ?>

      <?php if ($site_name) : ?>
        <div class="row">
          <div class="copyright large-6 medium-7 small-12 columns">
            &copy; 2010 &mdash; <?php print date('Y') . ' ' . $site_name . ' ' . t('All rights reserved.'); ?>
          </div>
          <div class="copyright large-6 medium-5 small-12 columns">
            <div class="right">
              <i class="fi-wrench"></i>
              Разработка сайта:
              <a href="http://kossoff.ru">Kossoff.ru</a>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
</footer>
<!--/.l-footer -->
