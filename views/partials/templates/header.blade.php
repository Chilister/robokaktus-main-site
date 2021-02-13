<header class="site-header mo-left header-transparent">
    <div class="sticky-header main-bar-wraper navbar-expand-lg is-fixed">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <div class="logo-header mostion">
                    <a href="/"><img class="logo-2 w-50" src="/logo.png" alt="logo"></a>
                </div>
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                        data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="extra-nav">
                    <div class="extra-cell">
                        <a href="#contact-form" title="Замовити сайт" class="btn btn-light contact-form rounded-xl shadow">Замовити сайт</a>
                    </div>
                </div>
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header">
                        <a href="index.html"><img src="/logo.png" alt="logo"></a>
                    </div>
                    {!! $modx->runSnippet('DLMenu',[
                        'parents'=>0,
                        'outerTpl'=>'@B_FILE: partials/menu/outerTpl',
                        'rowTpl'=>'@B_FILE: partials/menu/rowTpl',
                        'maxDepth'=>2
                    ]) !!}
                </div>
            </div>
        </div>
    </div>
</header>