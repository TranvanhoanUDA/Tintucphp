<header class="mb-md-3 fixed-top bg-white site-header shadow">
    <nav class="navbar navbar-expand-sm navbar-light bg-white navbar-has-logo py-0 d-md-none" id="site-navbar">
    <div class="container">
        <a class="navbar-brand navbar-logo py-0" href="<?= e_attr(base_uri()); ?>">
            <img src="<?= e_attr(sp_logo_uri(get_option('site_logo'))); ?>" alt="<?= e_attr(get_option('site_name')); ?>" class="navbar-logo">
        </a>
        <button class="navbar-toggler" type="button" data-action="offcanvas-open" data-target="#topnavbar" aria-controls="topnavbar" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
</div>
</nav>

<div class="py-md-2 py-0">
    <div class="container px-md-3 px-0">
        <div class="row no-gutters">
            <div class="col-md-2 d-none d-md-block"><a class="navbar-brand navbar-logo py-0" href="<?= e_attr(base_uri()); ?>">
                            <img src="<?= e_attr(sp_logo_uri()); ?>" class="site-logo"></a>
            </div>
            <div class="col-md-7">
                <form method="get" action="<?= e_attr(url_for('site.search')); ?>" id="searchForm" class="home-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="<?= __('search-box-placeholder', _T); ?>" name="q" id="q" autocomplete="off" value="<?= e_attr($t['search_value']); ?>">
                        <div class="input-group-append">
                            <button class="btn btn-dark" type="submit"><?= svg_icon('search', 'svg-md'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 text-right d-none d-md-block px-1">
                <?php if (is_logged()) : ?>
                    <?php if (current_user_can('access_dashboard')) : ?>
                        <a href="<?= e_attr(url_for('dashboard')); ?>" target="_blank" class="btn btn-outline-primary">
                         <?= svg_icon('analytics'); ?> <?= __('dashboard', _T); ?>
                     </a>
                    <?php endif; ?>
                <?php else : ?>
                    <?php if ((int) get_option('enable_registration', 0)) : ?>
                        <a href="<?= e_attr(url_for('dashboard.account.signin')); ?>" class="btn btn-outline-primary">
                            <?= svg_icon('person'); ?> <?= __('sign-in', _T); ?>
                        </a>
                        <a href="<?= e_attr(url_for('dashboard.account.register')); ?>" class="btn btn-primary">
                            <?= svg_icon('add'); ?> <?= __('register', _T); ?>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
</header>
