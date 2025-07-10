<head>
    <link href="/pages/top/top_add.css" rel="stylesheet" type="text/css" media="all">
    <link href="/pages/top/top_custom.css" rel="stylesheet" type="text/css" media="all">
</head>
<style>
</style>
<main id="l-main" class="l-main">
    <header class="l-headline l-headline--visual">
        <figure class="l-headline__visual">
            <img src="{=path.img=}/usr/top/index_headline_pi01_lg.jpg" alt="" class="u-fit u-only--lg">
            <img src="{=path.img=}/usr/top/index_headline_pi01_sm.jpg" alt="" class="u-fit u-only--sm">
        </figure>
        <h1 class="l-headline__title" data-subtitle="製品情報">PROFESSIONAL<br>PRODUCTS</h1>
        <div class="l-headline__lead">
            <p>毎日のメイクアップで誰もが<br>美しい眉を再現できるように開発された<br>プロフェッショナルプロダクツです。
            </p>
        </div>
    </header>

    <section class="l-section u-mt60">
        <div class="inner inner-padding--sm">
            <div class="p-products-list">
                <div class="p-products-list__list">
                    <article class="p-products-list__item">
                        <a href="{=path.root=}/pages/brow_powder.aspx">
                            <figure class="image"><img src="{=path.img=}/usr/top/index_powder_pi01.jpg" alt=""></figure>
                            <p class="name"><i>アナスタシア ミアレ</i><em>ブロウパウダー</em></p>
                        </a>
                    </article>
                    <article class="p-products-list__item">
                        <a href="{=path.root=}/pages/brow_pencil.aspx">
                            <figure class="image"><img src="{=path.img=}/usr/top/index_pencil01_pi01.jpg" alt=""></figure>
                            <p class="name"><i>アナスタシア ミアレ</i><em>ブロウペンシル</em></p>
                        </a>
                    </article>
                    <article class="p-products-list__item">
                        <a href="{=path.root=}/pages/brow_pencil_02.aspx">
                            <figure class="image"><img src="{=path.img=}/usr/top/index_pencil02_pi01.jpg" alt=""></figure>
                            <p class="name"><i>アナスタシア ミアレ</i><em>ラスティング<br>ブロウライナー</em></p>
                        </a>
                    </article>
                    <article class="p-products-list__item">
                        <a href="{=path.root=}/pages/color_brow_gel.aspx">
                            <figure class="image"><img src="{=path.img=}/usr/top/index_colorgel_pi01.jpg" alt=""></figure>
                            <p class="name"><i>アナスタシア ミアレ</i><em>カラー<br>ブロウジェル</em></p>
                        </a>
                    </article>
                    <article class="p-products-list__item">
                        <a href="{=path.root=}/pages/clear_brow_gel.aspx">
                            <figure class="image"><img src="{=path.img=}/usr/top/index_cleargel_pi01.jpg" alt=""></figure>
                            <p class="name"><i>アナスタシア ミアレ</i><em>クリアブロウ<br class="u-only--sm">ジェル</em></p>
                        </a>
                    </article>
                    <article class="p-products-list__item">
                        <a href="{=path.root=}/pages/brow_pomade.aspx">
                            <figure class="image"><img src="{=path.img=}/usr/top/index_pomade_pi01.jpg" alt=""></figure>
                            <p class="name"><i>アナスタシア ミアレ</i><em>ブロウポマード</em></p>
                        </a>
                    </article>
                    <article class="p-products-list__item">
                        <a href="{=path.root=}/pages/brow_highlighter.aspx">
                            <figure class="image"><img src="{=path.img=}/usr/top/index_highlight_pi01.jpg" alt=""></figure>
                            <p class="name"><i>アナスタシア ミアレ</i><em>ブロウ<br class="u-only--sm">ハイライター</em></p>
                        </a>
                    </article>
                    <article class="p-products-list__item">
                        <a href="{=path.root=}/pages/tools.aspx">
                            <figure class="image"><img src="{=path.img=}/usr/top/index_tools_pi01.jpg" alt=""></figure>
                            <p class="name name--multiple"><em>TOOLS</em><i>ツィザー / シザー / ブラシ</i></p>
                        </a>
                    </article>
                    <article class="p-products-list__item">
                        <a href="https://www.anastasiamiaray.jp/video/">
                            <figure class="image"><img src="{=path.img=}/usr/top/index_howtouse_video_a.png" alt=""></figure>
                            <p class="name"><i>プロフェッショナル</i><em>プロダクツ</em></p>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
<script>
    window.addEventListener("load", function() {
        const grid = document.querySelector('.p-products-list__list');
        new Masonry(grid, {
            // options
            itemSelector: '.p-products-list__item',
            horizontalOrder: true
            // columnWidth: 200
        });
    });
</script>