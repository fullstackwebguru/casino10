<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
        </div>

        <?= backend\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Admin', 'options' => ['class' => 'header']],
                    ['label' => 'Users', 'icon' => 'fa fa-dashboard', 'url' => ['/user']],
                    ['label' => 'Catalogs', 'options' => ['class' => 'header']],
                    ['label' => 'Categories', 'icon' => 'fa fa-file-code-o', 'url' => ['/catalog/category'],],
                    ['label' => 'Comapnies', 'icon' => 'fa fa-file-code-o', 'url' => ['/catalog/company'],],
                    ['label' => 'Guides', 'icon' => 'fa fa-file-code-o', 'url' => ['/catalog/guide'],],
                    ['label' => 'Theme', 'options' => ['class' => 'header']],
                    ['label' => 'Setting', 'icon' => 'fa fa-gear', 'url' => ['/theme/index']],
                    [
                        'label' => 'Pages',
                        'icon' => 'fa fa-book',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Home', 'icon' => 'fa fa-file-code-o', 'url' => ['/page/home'],],
                            ['label' => 'About', 'icon' => 'fa fa-file-code-o', 'url' => ['/page/view','id'=>'about'],],
                            ['label' => 'Privacy', 'icon' => 'fa fa-file-code-o', 'url' => ['/page/view','id'=>'privacy'],],
                            ['label' => 'Tos', 'icon' => 'fa fa-file-code-o', 'url' => ['/page/view','id'=>'tos'],],
                            ['label' => 'Disclaimer', 'icon' => 'fa fa-file-code-o', 'url' => ['/page/view','id'=>'disclaimer'],],
                            ['label' => 'Contact', 'icon' => 'fa fa-file-code-o', 'url' => ['/page/view','id'=>'contact'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>