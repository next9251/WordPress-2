<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WordPress ใในใ</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Noto+Serif+JP:wght@500&family=Shippori+Mincho&display=swap"
    rel="stylesheet">
</head>

<body>
      <header class="header">
        <a href="index.html" class="header__logo">Tecool</a>
        <nav class="header-nav pc">
          <ul class="header-nav__ul">
            <li class="header-nav__list"><a href="archive.html">HTML</a></li>
            <li class="header-nav__list"><a href="archive-styles.html">CSS</a></li>
            <li class="header-nav__list"><a href="page-about.html">JavaScript</a></li>
            <li class="header-nav__list"><a href="archive.html">PHP</a></li>
            <li class="header-nav__list"><a href="archive-styles.html">MySQL</a></li>
         </ul>
       </nav>
      </header>
      <div class="menu tab" id="menu">
        <span class="menu__line--top"></span>
        <span class="menu__line--middle"></span>
        <span class="menu__line--bottom"></span>
      </div>
      <nav class="header__nav--sp tab" id="header__nav--sp">
        <ul class="header-nav__ul--sp">
          <li class="header-nav__list--sp"><a href="archive.html">HTML</a></li>
          <li class="header-nav__list--sp"><a href="archive-styles.html">CSS</a></li>
          <li class="header-nav__list--sp"><a href="page-about.html">JavaScript</a></li>
          <li class="header-nav__list--sp"><a href="archive-styles.html">PHP</a></li>
          <li class="header-nav__list--sp"><a href="page-about.html">MySQL</a></li>
          <li class="header-nav__list--sp header__logo"><a href="page-about.html">Tecool</a></li>
        </ul>
      </nav>

      <div class="top-eyecatch"></div>
      <main>
        <div class="flex">
          <div class="container-top">
            <div class="new-articles">
              <img src="img 10/media__firstview.png" alt="">
              <div class="flex">
                <a href="" class="magazine-colum">
                  <img src="./img/article_article.jpeg" alt="no-img" />
                  <p class="category-tag">
                    ใซใใดใชใผ
                  </p>
                  <div class="text-content">
                    <p class="article__date">2020/01/01</p>
                    <h3 class="article__title">
                      ่จไบใฎใฟใคใใซใๅฅใใพใใ่จไบใฎใฟใคใใซใๅฅใใพใใ่จไบใฎใฟใคใใซใๅฅใใพใใ
                    </h3>
                    <div class="article-tags">
                      <p class="article-tags__inner">
                        <span class="tag">ใฟใฐๅ</span>
                      </p>
                    </div>
                  </div>
                </a>
                <a href="" class="magazine-colum">
                  <img src="./img/article_article.jpeg" alt="no-img" />
                  <p class="category-tag">
                    ใซใใดใชใผ
                  </p>
                  <div class="text-content">
                    <p class="article__date">2020/01/01</p>
                    <h3 class="article__title">
                      ่จไบใฎใฟใคใใซใๅฅใใพใใ่จไบใฎใฟใคใใซใๅฅใใพใใ่จไบใฎใฟใคใใซใๅฅใใพใใ
                    </h3>
                    <div class="article-tags">
                      <p class="article-tags__inner">
                        <span class="tag">ใฟใฐๅ</span>
                      </p>
                    </div>
                  </div>
                </a>
                <a href="" class="magazine-colum">
                  <img src="./img/article_article.jpeg" alt="no-img" />
                  <p class="category-tag">
                    ใซใใดใชใผ
                  </p>
                  <div class="text-content">
                    <p class="article__date">2020/01/01</p>
                    <h3 class="article__title">
                      ่จไบใฎใฟใคใใซใๅฅใใพใใ่จไบใฎใฟใคใใซใๅฅใใพใใ่จไบใฎใฟใคใใซใๅฅใใพใใ
                    </h3>
                    <div class="article-tags">
                      <p class="article-tags__inner">
                        <span class="tag">ใฟใฐๅ</span>
                      </p>
                    </div>
                  </div>
                </a>
       ใใ   </div>
         ใ </div>
       ใ </div>
       <?php get_sidebar(); ?>
      ใ</div>
      </main>
    <?php get_footer(); ?>