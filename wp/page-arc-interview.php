<?php get_header(); ?>

<div id="container" class="arc-interview">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="/">産業用IoTのことならamnimo</a></li>
      <li>パートナー紹介</li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="hero03 core">
    <div class="containers">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower cW">パートナー紹介</h1>
      </div>
    </div>
  </section>

  <div class="cate-nav">
    <ul>
      <li><a href="/partners/">パートナー紹介</a></li>
      <li class="current"><a href="/interview/">パートナーの声</a></li>
    </ul>
  </div>

  <div class="partner-block">
    <h3 class="block-title"><span>パートナーの声</span></h3>
    <div class="wrap">
      <ul class="partners-wrapper interview">
        <li>
          <a href="/partners/interview/001/">
            <picture class="ph-box">
              <img src="<?php echo assets_path() ?>img/sources/partners/interview/001/thumb.jpg" alt="">
            </picture>
            <div class="txt-box">
              <h4 class="ttl">ビデオテクニカ様</h4>
              <p class="txt">顧客からのフィードバックを開発に活かした設計思想に感動しました。</p>
            </div>
          </a>
        </li>
        <li>
          <a href="/partners/interview/002/">
            <picture class="ph-box">
              <img src="<?php echo assets_path() ?>img/sources/partners/interview/002/thumb.jpg" alt="">
            </picture>
            <div class="txt-box">
              <h4 class="ttl">トーノーセキュリティ様</h4>
              <p class="txt">開発のコンセプトからよく理解できているので、信頼性の高い機器を使えることに安心しています。</p>
            </div>
          </a>
        </li>
      </ul>
    </div><!-- .wrap -->
    <div class="link-btn"><a href="/partners/">パートナートップ</a></div>
  </div><!-- .service-block -->  

  <div class="contact-block" id="contact-block">
    <h3 class="ttl-secondary"><span>お問い合わせ</span></h3>
    <ul>
      <li class="btn green"><a href="https://support.amnimo.com/hc/ja/requests/new" class="form" target="_blank">お問い合わせ<span class="ib">フォーム</span></a></li>
      <li class="btn green"><a href="/contact/#doc" class="doc">資料ダウンロード<span class="f80">（無料）</span></a></li>
      <li class="btn green"><a href="https://amo.amnimo.com/form/estimate" target="_blank" class="quotation">お見積もり依頼</a></li>
    </ul>
  </div>

  <section class="relation">
    <div class="containers">
      <h2 class="ttl-secondary">関連サービス</h2>
      <div class="flex gap20">
        <a href="#" class="item">
          <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img-relation01.jpg" alt=""></figure>
          <h3 class="item__ttl">エッジゲートウェイ（屋内版）</h3>
          <div class="item__txt">厳しい環境下でも安定稼働。様々な産業で利用可能なLTE通信機能搭載</div>
        </a>
        <a href="#" class="item">
          <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img-relation02.jpg" alt=""></figure>
          <h3 class="item__ttl">IoT Router（屋内版）</h3>
          <div class="item__txt">IoT機器からのインターネット通信を可能にするルーター。汎用性が高く、設置場所を選ばない小型軽量タイプ</div>
        </a>
        <a href="#" class="item">
          <figure class="item__img"><img src="<?php echo assets_path() ?>img/common/img-relation03.jpg" alt=""></figure>
          <h3 class="item__ttl">デバイス管理システム</h3>
          <div class="item__txt">エッジゲートウェイ及びIoTルーターとクラウドアプリケーションを連携させるシステム</div>
        </a>
      </div>
    </div>
  </section>


</div>
<!--container-->

<?php get_footer(); ?>