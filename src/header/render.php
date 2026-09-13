<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<header class="site-header">
  <div class="site-header__brand">
    <a class="site-header__logo u-logo-height" href="index.html"> Logo Here </a>
  </div>
  <nav class="nav">
    <input type="checkbox" class="nav__input" id="nav-toggle" />
    <label for="nav-toggle" class="nav__icon"><span>&nbsp;</span></label>
    <div class="nav__display">
      <ul class="nav__menu">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li><a href="about.html">About</a></li>
        <li>
          <a href="work.html">Work</a>
        </li>
        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
      <div class="nav__social-links">
        <div class="socials">
          <a
            href="#"
            class="socials__link socials__link--facebook"
            aria-label="External link to the artist's Facebook page"
          >
          </a>
          <a
            href="#"
            class="socials__link socials__link--insta"
            aria-label="External link to the artist's Instagram page"
          >
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>
