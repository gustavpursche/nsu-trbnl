<header class="header">
  <?php if (!is_front_page()): ?>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
  <?php else: ?>
    <span class="header__logo">
  <?php endif; ?>

    <span class="header__logo-site-name">
      <?php bloginfo('name'); ?>
    </span>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 481.9 91.1">
      <path d="M311.9 22.8v-3.9h-10.3V.2h-4.4v22.6h14.7zm-26.5-7.7h-5.6l2.9-8.2 2.7 8.2zm7.2 7.7L284.3.1h-3.5l-8.3 22.7h4.6l1.4-4h8l1.3 4h4.8zm-25 0V.2h-4.4V14l-9-13.9h-4v22.6h4.4V8.9l9 13.9h4zm-24-7.8V.1h-4.4v14.8c0 2.6-1.6 4.2-3.9 4.2s-3.9-1.6-3.9-4.2V.2H227v14.9c0 4.8 3.7 8 8.4 8s8.2-3.2 8.2-8.1m-27.9-8.3c0 1.6-1 2.6-2.9 2.6h-4.3V4.1h4.3c1.9 0 2.9 1 2.9 2.6m.4 9.4a2.7 2.7 0 0 1-2.5 2.8h-5.1v-5.6h4.6c1.5-.2 2.8.9 3 2.3v.5m4.4.2a5.3 5.3 0 0 0-3.1-5.1 5.3 5.3 0 0 0 2.8-4.7c0-3.9-2.6-6.4-7-6.4H204v22.6h9.5c4 .1 6.9-2.2 7-6.4M196.2.1h-4.4v22.7h4.4V.1zm-15.7 7a3 3 0 0 1-3 3h-4.4v-6h4.2a3 3 0 0 1 3.2 2.8v.2m5.3 15.7l-5.1-9.8a6 6 0 0 0 4.1-6c0-3.8-2.7-6.9-7.4-6.9h-8.9v22.7h4.4v-9h3.2l4.4 9h5.3zM163.7 4.1v-4h-16.3V4h5.9v18.7h4.4V4.1h6zM289.8 56.8l-7-11.6 6.6-11h-3.9l-4.5 8.1-4.5-8.1h-4l6.5 11-7 11.6h4l4.9-8.7 4.9 8.7h4zm-22.9 0v-3.1h-11V47h9.4v-3.1h-9.4v-6.6H267v-3.1h-14.5v22.7l14.4-.1zm-19.4 0v-3.1h-10.9V34.2h-3.4v22.7l14.3-.1zm-23-15.7c0 2.4-1.6 3.8-4 3.8h-5v-7.5h5c2.4-.1 4 1.3 4 3.7m3.4 0c0-4-2.8-6.9-7.3-6.9H212v22.7h3.4V48h5.2c4.4-.1 7.3-3 7.3-6.9m-23.7 15.7V34.2h-3.4l-6.5 14.1-6.6-14.1h-3.4v22.7h3.4V41.7l5.3 11.1h2.5l5.2-11V57l3.5-.2zm-29.6-11.3c0 4.5-.2 5.8-1.3 7a4.6 4.6 0 0 1-6.7 0c-1.1-1.2-1.3-2.5-1.3-7s.2-5.8 1.3-7a4.6 4.6 0 0 1 6.7 0c1.1 1.2 1.3 2.5 1.3 7m3.5 0c0-4.4.1-6.9-2.2-9.1a8 8 0 0 0-6-2.4c-2.2 0-4.4.8-6 2.4-2.2 2.2-2.2 4.7-2.2 9.1s0 6.9 2.2 9.1a8 8 0 0 0 6 2.4 8 8 0 0 0 6-2.4c2.2-2.2 2.2-4.7 2.2-9.1M158 56.8L149.9 43l7.4-8.9H153l-9.3 11.4V34.2h-3.4v22.7h3.4v-6.6l3.8-4.6 6.4 11.2h4.1v-.1zm-24.7-11.4H124v3h9.3v-3zm-15.9 3.8v-15H114v14.9c0 3-1.9 4.9-4.7 4.9s-4.7-1.9-4.7-4.9V34.2h-3.4v15c0 4.7 3.5 7.8 8.1 7.8s8.1-3.1 8.1-7.8m-21.8 1.2c.1-1.7-.6-3.4-1.9-4.6a7.4 7.4 0 0 0-4.2-1.7l-2.6-.4c-.9-.1-1.8-.5-2.5-1-.6-.5-.9-1.3-.9-2.1 0-2 1.5-3.5 4.1-3.5 1.8-.1 3.6.5 4.9 1.8l2.2-2.2a9.6 9.6 0 0 0-7-2.6c-4.7 0-7.6 2.7-7.6 6.6-.1 1.6.5 3.2 1.6 4.3 1.2 1 2.7 1.7 4.3 1.8l2.7.4a4 4 0 0 1 2.5 1c.6.6.9 1.5.9 2.4 0 2.2-1.7 3.5-4.7 3.5a7 7 0 0 1-5.8-2.2l-2.3 2.3c2.2 2.2 4.6 3 8 3 4.9-.1 8.3-2.6 8.3-6.8m-21.7 6.5V34.2h-3.4v15.9L59.9 34.2h-3.1v22.7h3.4v-16l10.5 16h3.2zM357.2 90.9V68.2h-3.4v15.9l-10.5-15.9h-3.2v22.7h3.4v-16l10.5 16h3.2zm-23.3 0v-3.1h-11V81h9.4v-3.1h-9.4v-6.6h11v-3.1h-14.5v22.7h14.5zm-19.6-6.5c.1-1.7-.6-3.4-1.9-4.6a7.4 7.4 0 0 0-4.2-1.7l-2.6-.4c-.9-.1-1.8-.5-2.5-1.1-.6-.5-.9-1.3-.9-2.1 0-2 1.5-3.5 4.1-3.5 1.8-.1 3.6.5 4.9 1.8l2.2-2.2a9.6 9.6 0 0 0-7-2.6c-4.7 0-7.6 2.7-7.6 6.7-.1 1.6.5 3.2 1.6 4.3 1.2 1 2.7 1.7 4.3 1.8l2.7.4a4 4 0 0 1 2.5 1c.6.6 1 1.5.9 2.4 0 2.2-1.7 3.5-4.7 3.5-2.2.1-4.3-.6-5.8-2.2l-2.3 2.3c2.2 2.2 4.6 3 8 3 4.9-.1 8.3-2.6 8.3-6.8m-31.2-22h-2.9v3.4h2.9v-3.4zm6.8 0H287v3.4h2.9v-3.4zm-.2 17.1c0 4.6-.2 5.8-1.3 7a4.6 4.6 0 0 1-6.7 0c-1.1-1.2-1.3-2.5-1.3-7s.2-5.8 1.3-7a4.6 4.6 0 0 1 6.7 0c1.1 1.2 1.3 2.5 1.3 7m3.5 0c0-4.4.1-6.9-2.2-9.1a8.6 8.6 0 0 0-11.9 0c-2.2 2.2-2.2 4.8-2.2 9.1s0 6.9 2.2 9.1a8.6 8.6 0 0 0 11.9 0c2.2-2.2 2.2-4.7 2.2-9.1m-20.4 11.4v-3.1h-10.9V68.2h-3.4v22.7h14.3zm-20.1-19.6v-3.1h-14.5v22.7h3.4v-9.6h9.4v-3.1h-9.4v-6.9h11.1zm-20.9 11.9v-15h-3.4v14.9c0 3-1.9 4.9-4.7 4.9s-4.7-1.9-4.7-4.9V68.2h-3.4v15c0 4.7 3.5 7.8 8.1 7.8s8.1-3.1 8.1-7.8m-26.1.2h-7l3.5-10.1 3.5 10.1zm6.2 7.4l-8.3-22.7h-2.8l-8.3 22.7h3.7l1.6-4.6h8.9l1.6 4.6h3.6zM0 .2h136.1v22.7H0zM300.5 34.2h130.4v22.7H300.5zM368.5 68.2h62.4v22.7h-62.4zM323.1 0h107.7v22.7H323.1zM0 68.2h181.4v22.7H0zM0 34.2h45.3v22.7H0z" />
      <path fill="none" d="M440.5-3h44.4v94.8h-44.4z" />
      <path d="M441.9 83c0-3.4.9-6 2.8-8 1.9-1.9 4.4-2.9 7.7-2.9s5.8 1 7.6 2.9c1.8 1.9 2.7 4.6 2.7 8v6.6h-20.8V83zm18.7 3.9V83c0-2.6-.7-4.6-2.2-6-1.4-1.4-3.5-2.1-6-2.1s-4.6.7-6 2.1a8.2 8.2 0 0 0-2.2 6v3.8h16.4zM462.9 56.2c0 3-1 5.5-3 7.5s-4.5 3.1-7.6 3.1-5.6-1-7.6-3.1c-2-2-3-4.5-3-7.5s1-5.5 3-7.5 4.5-3 7.6-3a10.2 10.2 0 0 1 10.6 10.5zm-4.7-5.6c-1.5-1.5-3.5-2.2-5.9-2.2s-4.4.7-5.9 2.2a7.5 7.5 0 0 0-2.2 5.6c0 2.3.7 4.1 2.2 5.6 1.5 1.5 3.5 2.2 5.9 2.2s4.4-.7 5.9-2.2c1.5-1.5 2.2-3.3 2.2-5.6s-.7-4.1-2.2-5.6zM462.7 36.5v2.7h-20.8v-2.7h9.6l-9.6-8.5v-3.6l10.5 9.7 10.3-9.7V28l-9.3 8.5h9.3zM455.4 18.3h-13.5v-2.8h13.5c1.7 0 3-.5 3.9-1.4.8-.9 1.3-2.2 1.3-3.8s-.4-2.9-1.3-3.8c-.9-.9-2.1-1.4-3.9-1.4h-13.5V2.6h13.5c2.4 0 4.3.7 5.6 2.2a8.4 8.4 0 0 1 1.9 5.7c0 2.3-.6 4.2-1.9 5.7-1.3 1.4-3.1 2.1-5.6 2.1z" />
    </svg>

  <?php if (!is_front_page()): ?>
    </a>
  <?php else: ?>
    </span>
  <?php endif; ?>

  <div class="header__menu-container js-menu">
    <input type="checkbox" name="navigation-toggle" id="navigation-toggle" class="header__toggle-checkbox" />

    <div class="menu-container">
      <?php
        wp_nav_menu([
          'theme_location' => 'navigation',
          'container' => false,
          'item_spacing' => 'discard',
          'walker' => new Navigation_Walker
        ]);
      ?>
    </div>

    <label for="navigation-toggle" class="header__toggle js-navigation-toggle">

      <svg aria-hidden="true" focusable="false" class="header__toggle-times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
        <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
      </svg>

      <svg aria-hidden="true" focusable="false" class="header__toggle-bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
      </svg>

      <span class="header__toggle-label">Menü</span>
    </label>
  </div>
</header>
