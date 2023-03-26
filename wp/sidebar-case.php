<!-- サイドメニュー -->
<aside class="side-nav">

  <?php
  $args = array(
    'taxonomy' => 'case_category',
  );
  $taxonomy = get_terms($args);
  ?>
  <?php if (!empty($taxonomy)) : ?>
    <div class="catSearch">
      <h3 class="ttl-tertiary">カテゴリで探す</h3>
      <ul class="catSearch__list">
        <?php
        foreach ($taxonomy as $category) :
        ?>
          <li><a href="<?php echo esc_url(get_term_link($category)); ?>"><?php echo esc_html($category->name); ?></a></li>
        <?php
        endforeach;
        ?>
      </ul>
    </div>
  <?php endif; ?>

  <a href="/contact/" class="bnr-contact"><img src="<?php echo assets_path() ?>img/common/bnr-contact.png" alt=""></a>

  <a href="/catalog/" class="bnr-catalog"><img src="<?php echo assets_path() ?>img/common/bnr-catalog.png" alt=""></a>

</aside>