<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <?php
        $uri = new \CodeIgniter\HTTP\URI(current_url());
        $currentUri = '/admin/' . $uri->getSegment(2);
        $db = \Config\Database::connect();
        $builder = $db->table('menu');
        $activeMenu = $builder->getWhere(['link' => $currentUri])->getRow();
        ?>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php foreach ($menus as $m) : ?>
                    <?php if ($m['type'] == 'sidebar') : ?>
                        <?php if ($m['link'] == '#') : ?>
                            <li class="nav-item <?= ($activeMenu->parent == $m['id']) ? 'menu-open' : ''; ?>">
                                <a href="<?= $m['link']; ?>" class="nav-link <?= ($activeMenu->parent == $m['id']) ? 'active' : ''; ?>">
                                    <i class="nav-icon <?= $m['icon']; ?>"></i>
                                    <p>
                                        <?= $m['menu']; ?>
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <?php foreach ($menus as $mc) : ?>
                                        <?php if ($mc['parent'] == $m['id']) : ?>
                                            <li class="nav-item">
                                                <a href="<?= $mc['link']; ?>" class="nav-link <?= ($activeMenu->id == $mc['id']) ? 'active' : ''; ?>">
                                                    <i class="nav-icon <?= $mc['icon']; ?>"></i>
                                                    <p><?= $mc['menu']; ?></p>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php elseif ($m['parent'] == '' && $m['link'] != '#') : ?>
                            <li class="nav-item">
                                <a href="<?= $m['link']; ?>" class="nav-link <?= ($activeMenu->id == $m['id']) ? 'active' : ''; ?>">
                                    <i class="nav-icon <?= $m['icon']; ?>"></i>
                                    <p>
                                        <?= $m['menu']; ?>
                                    </p>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>