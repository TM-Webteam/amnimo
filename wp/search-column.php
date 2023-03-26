<?php
global $body_class;
$body_class = '';
$allsearch = new WP_Query("s=$s&posts_per_page=-1");
$key = wp_specialchars($s, 1);
?>
<?php get_header(); ?>

<div id="container" class="tax-column">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="<?php echo esc_url(home_url()); ?>">産業用IoTのことならamnimo</a></li>
      <li><a href="<?php echo esc_url(home_url()); ?>/column/">コラム</a></li>
      <li>検索結果一覧2</li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="">
    <div class="containers flex">

      <!-- タクソノミー -->
      <section class="main-conts article">

        <h1 class="article__ttl">「<span><?php echo $key; ?></span>」で検索した結果：<span><?php echo $wp_query->found_posts; ?></span> 件</h1>

        <div class="article__wrap">

          <a href="#" class="flex item">
            <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img05.jpg" alt=""></figure>
            <summary class="item__box">
              <h2 class="item__box--ttl">導入する方必見。4Gゲートウェイの「4G」とは一体どんなもの？</h2>
              <div class="flex fS aiC gap10 item__box--row">
                <span class="time">2021.3.8</span>
                <span class="cat">カテゴリ名</span>
                <span class="cat">カテゴリ名</span>
              </div>
            </summary>
          </a>
          <a href="#" class="flex item">
            <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img05.jpg" alt=""></figure>
            <summary class="item__box">
              <h2 class="item__box--ttl">導入する方必見。4Gゲートウェイの「4G」とは一体どんなもの？</h2>
              <div class="flex fS aiC gap10 item__box--row">
                <span class="time">2021.3.8</span>
                <span class="cat">カテゴリ名</span>
                <span class="cat">カテゴリ名</span>
              </div>
            </summary>
          </a>
          <a href="#" class="flex item">
            <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img05.jpg" alt=""></figure>
            <summary class="item__box">
              <h2 class="item__box--ttl">導入する方必見。4Gゲートウェイの「4G」とは一体どんなもの？</h2>
              <div class="flex fS aiC gap10 item__box--row">
                <span class="time">2021.3.8</span>
                <span class="cat">カテゴリ名</span>
                <span class="cat">カテゴリ名</span>
              </div>
            </summary>
          </a>
          <a href="#" class="flex item">
            <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img05.jpg" alt=""></figure>
            <summary class="item__box">
              <h2 class="item__box--ttl">導入する方必見。4Gゲートウェイの「4G」とは一体どんなもの？</h2>
              <div class="flex fS aiC gap10 item__box--row">
                <span class="time">2021.3.8</span>
                <span class="cat">カテゴリ名</span>
                <span class="cat">カテゴリ名</span>
              </div>
            </summary>
          </a>
          <a href="#" class="flex item">
            <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img05.jpg" alt=""></figure>
            <summary class="item__box">
              <h2 class="item__box--ttl">導入する方必見。4Gゲートウェイの「4G」とは一体どんなもの？</h2>
              <div class="flex fS aiC gap10 item__box--row">
                <span class="time">2021.3.8</span>
                <span class="cat">カテゴリ名</span>
                <span class="cat">カテゴリ名</span>
              </div>
            </summary>
          </a>
          <a href="#" class="flex item">
            <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img05.jpg" alt=""></figure>
            <summary class="item__box">
              <h2 class="item__box--ttl">導入する方必見。4Gゲートウェイの「4G」とは一体どんなもの？</h2>
              <div class="flex fS aiC gap10 item__box--row">
                <span class="time">2021.3.8</span>
                <span class="cat">カテゴリ名</span>
                <span class="cat">カテゴリ名</span>
              </div>
            </summary>
          </a>
          <a href="#" class="flex item">
            <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img05.jpg" alt=""></figure>
            <summary class="item__box">
              <h2 class="item__box--ttl">導入する方必見。4Gゲートウェイの「4G」とは一体どんなもの？</h2>
              <div class="flex fS aiC gap10 item__box--row">
                <span class="time">2021.3.8</span>
                <span class="cat">カテゴリ名</span>
                <span class="cat">カテゴリ名</span>
              </div>
            </summary>
          </a>
          <a href="#" class="flex item">
            <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img05.jpg" alt=""></figure>
            <summary class="item__box">
              <h2 class="item__box--ttl">導入する方必見。4Gゲートウェイの「4G」とは一体どんなもの？</h2>
              <div class="flex fS aiC gap10 item__box--row">
                <span class="time">2021.3.8</span>
                <span class="cat">カテゴリ名</span>
                <span class="cat">カテゴリ名</span>
              </div>
            </summary>
          </a>
          <a href="#" class="flex item">
            <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img05.jpg" alt=""></figure>
            <summary class="item__box">
              <h2 class="item__box--ttl">導入する方必見。4Gゲートウェイの「4G」とは一体どんなもの？</h2>
              <div class="flex fS aiC gap10 item__box--row">
                <span class="time">2021.3.8</span>
                <span class="cat">カテゴリ名</span>
                <span class="cat">カテゴリ名</span>
              </div>
            </summary>
          </a>

        </div>

        <nav class="pagination">
          <div class="nav-links">
            <a class="prev page-numbers" href="#"><span></span></a>
            <a class="page-numbers" href="#">1</a>
            <span class="page-numbers current">2</span>
            <a class="page-numbers" href="#">3</a>
            <a class="page-numbers" href="#">4</a>
            <a class="page-numbers" href="#">5</a>
            <a class="next page-numbers" href="#"><span></span></a>
          </div>
        </nav>

      </section>

      <?php get_sidebar('column'); ?>
    </div>
  </section>

  <div class="contact-block" id="contact-block">
    <h3 class="ttl-secondary"><span>お問い合わせ</span></h3>
    <ul>
      <li class="btn green"><a href="https://support.amnimo.com/hc/ja/requests/new" class="form" target="_blank">お問い合わせ<span class="ib">フォーム</span></a></li>
      <li class="btn green"><a href="/contact/#doc" class="doc">資料ダウンロード<span class="f80">（無料）</span></a></li>
      <li class="btn green"><a href="https://amo.amnimo.com/form/estimate" target="_blank" class="quotation">お見積もり依頼</a></li>
    </ul>
  </div>

</div>
<!--container-->

<?php get_footer(); ?>