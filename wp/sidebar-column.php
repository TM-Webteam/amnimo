<!-- サイドメニュー -->
<aside class="side-nav">

  <div class="search">
    <form action="" class="search__form">
      <input class="search__input" type="search" placeholder="キーワードから探す">
      <button class="search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search.svg"></button>
    </form>
  </div>
  <?php
  $args = array(
    'taxonomy' => 'column_category',
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

  <div class="blogList">
    <h3 class="ttl-tertiary">よく読まれている記事</h3>
    <a href="#" class="flex aiC inherit item">
      <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog01.jpg" alt=""></div>
      <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
    </a>
    <a href="#" class="flex aiC inherit item">
      <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog02.jpg" alt=""></div>
      <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
    </a>
    <a href="#" class="flex aiC inherit item">
      <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog03.jpg" alt=""></div>
      <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
    </a>
    <a href="#" class="flex aiC inherit item">
      <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog04.jpg" alt=""></div>
      <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
    </a>
    <a href="#" class="flex aiC inherit item">
      <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog01.jpg" alt=""></div>
      <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
    </a>
  </div>

  <a href="/contact/" class="bnr-contact"><img src="<?php echo assets_path() ?>img/common/bnr-contact.png" alt=""></a>

  <a href="/catalog/" class="bnr-catalog"><img src="<?php echo assets_path() ?>img/common/bnr-catalog.png" alt=""></a>

</aside>