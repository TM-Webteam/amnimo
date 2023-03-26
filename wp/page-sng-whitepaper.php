<?php get_header(); ?>


<div id="container" class="sng-whitepaper">

  <div class="breadcrumb">
    <ul class="breadcrumb-list">
      <li><a href="/">産業用IoTのことならamnimo</a></li>
      <li><a href="/whitepaper/">お役立ち資料</a></li>
      <li>資料タイトルが入ります。</li>
    </ul>
  </div>
  <!-- .breadcrumb -->

  <section class="">
    <div class="containers flex">

      <!-- 資料紹介 -->
      <article class="sub-conts article">

        <div class="article__wrap">

          <h1 class="article__ttl">資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入(32文字程度)</h1>

          <!-- 資料のスライダー -->
          <div class="wp-slick">
            <div id="wp-slick">
              <figure><img src="<?php echo assets_path() ?>img/common/img-doc01.jpg" alt=""></figure>
            </div>
          </div>
          

          <h2 class="article__desc">
            <p>資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。</p>
            <p>資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。資料説明文が入ります。</p>
          </h2>

        </div>

        

        <div class="article__toc">
          <h2 class="article__toc--ttl">本資料の目次</h2>
          <div class="article__toc--list">
            <dl>
              <dt><h3>章タイトルが入ります。章タイトルが入ります。</h3></dt>
              <dd>
                <ul>
                  <li><h4>見出しが入ります。見出しが入ります。</h4></li>
                  <li><h4>見出しが入ります。見出しが入ります。</h4></li>
                </ul>
              </dd>
            </dl>
            <dl>
              <dt><h3>章タイトルが入ります。章タイトルが入ります。</h3></dt>
              <dd>
                <ul>
                  <li><h4>見出しが入ります。見出しが入ります。</h4></li>
                  <li><h4>見出しが入ります。見出しが入ります。</h4></li>
                </ul>
              </dd>
            </dl>
            <dl>
              <dt><h3>章タイトルが入ります。章タイトルが入ります。</h3></dt>
              <dd>
                <ul>
                  <li><h4>見出しが入ります。見出しが入ります。</h4></li>
                  <li><h4>見出しが入ります。見出しが入ります。</h4></li>
                </ul>
              </dd>
            </dl>
          </div>
        </div>

      </article>

      <!-- サイドメニュー -->
      <aside class="side-form">

        <!-- カイロスタグ挿入 -->
        <form action="" class="form">
          <div class="form__ttl">ダウンロード申込みフォーム</div>
          <div class="form__table">
            <table>
              <colgroup>
                <col>
                <col>
              </colgroup>
              <tbody><tr>
                <th class="flex aiC">
                  <span class="item">会社名</span>
                  <span class="required"></span>
                </th>
                <td><input type="text" placeholder="例）〇〇〇株式会社"></td>
              </tr>
              <tr>
                <th class="flex aiC">
                  <span class="item">部署名</span>
                  <span class="required"></span>
                </th>
                <td><input type="text" placeholder="例）〇〇〇部署"></td>
              </tr>
              <tr>
                <th class="flex aiC">
                  <span class="item">ご担当者名</span>
                  <span class="required"></span>
                </th>
                <td>
                  <div class="flex aiC">
                    <p class="flex fS aiC half"><span>氏：</span><input type="text" placeholder="例）佐藤"></p>
                    <p class="flex fS aiC half"><span>名：</span><input type="text" placeholder="例）太郎"></p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="flex aiC">
                  <span class="item">メールアドレス</span>
                  <span class="required"></span>
                </th>
                <td><input type="email" placeholder="例）sample@gmail.com.jp"></td>
              </tr>
              <tr>
                <th class="flex aiC">
                  <span class="item">電話番号</span>
                  <span class="required"></span>
                </th>
                <td><input type="tel" placeholder="例）090-1234-5678"></td>
              </tr>
              <tr>
                <th class="flex aiC">
                  <span class="item">お問合せ・相談事項がある方<br class="pc-only">はご記入ください。</span>
                  <span class="optional">任意</span>
                </th>
                <td><textarea placeholder="例）ダウンロード資料を見ながら説明もしてほしい。"></textarea></td>
              </tr>
              <tr>
                <th class="flex aiC">
                  <span class="item">個人情報の取扱いについて</span>
                  <span class="required"></span>
                </th>
                <td><div class="flex fS aiC"><input type="checkbox">同意する</div><p>弊社Webサイトの<a href="/privacy/">プライバシーポリシー</a>をご確認の上、ご同意いただき送信をお願いいたします。</p></td>
              </tr>
            </tbody></table>
            <button type="submit" class="btn01 small">確認画面へ進む</button>
          </div>
        </form>
        <!-- カイロスタグ挿入 end -->

      </aside>
      
    </div>
  </section>
  

  

  

  

</div>
<!--container-->

<?php get_footer(); ?>