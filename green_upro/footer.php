</main>

<footer>
  <div class="content-width">
    <div class="logo-wrap">

      <?php if ($field = get_field('logo_f', 'option')): ?>
        <div class="logo">
          <a href="<?= get_home_url() ?>">
            <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
              <img class="img-svg" src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
            <?php else: ?>
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            <?php endif ?>
          </a>
        </div>
      <?php endif ?>

      <?php if(have_rows('app_links_f', 'option')): ?>

        <ul>

          <?php while(have_rows('app_links_f', 'option')): the_row() ?>

            <?php if ($image = get_sub_field('image')): ?>
              <li>
                <a href="<?php the_sub_field('url') ?>" target="_blank">

                  <?php if (pathinfo($image['url'])['extension'] == 'svg'): ?>
                    <img class="img-svg" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                  <?php else: ?>
                    <?= wp_get_attachment_image($image['ID'], 'full') ?>
                  <?php endif ?>

                </a>
              </li>
            <?php endif ?>

          <?php endwhile ?>

        </ul>

      <?php endif ?>

    </div>
    <nav class="footer-menu-wrap">

      <?php if ($locations = get_nav_menu_locations()): ?>

        <?php 
        $counter = 1;
        foreach ($locations as $index => $menu): 
          ?>

          <?php if (str_contains($index, 'footer') && has_nav_menu($index)): ?>

          <div class="item item-<?= $counter ?>">
            <ul>

              <?php wp_nav_menu( array(
                'theme_location'  => $index,
                'container'       => '',
                'items_wrap'      => '<ul>%3$s</ul>'
              ) ); ?>

            </ul>

            <?php if ($counter == 3): ?>

              <?php if(have_rows('app_links_f', 'option')): ?>

                <div class="play-market">

                  <?php while(have_rows('app_links_f', 'option')): the_row() ?>

                    <?php if ($image = get_sub_field('image_mobile')): ?>
                      <div>
                        <a href="<?php the_sub_field('url') ?>" target="_blank">

                          <?php if (pathinfo($image['url'])['extension'] == 'svg'): ?>
                            <img class="img-svg" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                          <?php else: ?>
                            <?= wp_get_attachment_image($image['ID'], 'full') ?>
                          <?php endif ?>

                        </a>
                      </div>
                    <?php endif ?>

                  <?php endwhile ?>

                </div>

              <?php endif ?>

            <?php endif ?>

          </div>

          <?php 
          $counter++;
        endif;
      endforeach; 
      ?>

    <?php endif ?>

    <?php if (($items = get_field('socials_f', 'option')['items']) && is_array($items) && checkArrayForValues($items)): ?>
    <div class="item item-4">

      <?php if ($field = get_field('socials_f', 'option')['title']): ?>
        <h6><?= $field ?></h6>
      <?php endif ?>
      
      <ul class="soc">

        <?php foreach ($items as $item): ?>
          <?php if ($item['icon'] && $item['link']): ?>
            <li>
              <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
                <i class="<?= $item['icon'] ?>"></i>
              </a>
            </li>
          <?php endif ?>
        <?php endforeach ?>
        
      </ul>
    </div>
  <?php endif ?>

</nav>

</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>