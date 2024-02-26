<div class="left-side-bar">
    <div class="brand-logo">
        <a href="<?= route_to('admin.home'); ?>">
            <h2>Lybrain</h2>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="<?= route_to('admin.home'); ?>" class="dropdown-toggle no-arrow <?= $tabTitle === "Dashboard" ? 'active' : '' ?>">
                        <span class="micon dw dw-home"></span><span class="mtext">Home</span>
                    </a>
                </li>
                <?php if (get_user()->level === "admin") : ?>
                    <li>
                        <a href="<?= route_to('users'); ?>" class="dropdown-toggle no-arrow <?= $tabTitle === "Users" ? 'active' : '' ?>">
                            <span class="micon dw dw-user2"></span><span class="mtext">Users</span>
                        </a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="<?= route_to('publishers'); ?>" class="dropdown-toggle no-arrow <?= $tabTitle === "Publishers" ? 'active' : '' ?>">
                        <span class="micon dw dw-list"></span><span class="mtext">Publishers</span>
                    </a>
                </li>
                <li>
                    <a href="<?= route_to('categories'); ?>" class="dropdown-toggle no-arrow <?= $tabTitle === "Categories" ? 'active' : '' ?>">
                        <span class="micon dw dw-list"></span><span class="mtext">Categories</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-newspaper"></span><span class="mtext">Books</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= route_to('all-books') ?>" class="dropdown-toggle no-arrow <?= $tabTitle === "All Books" ? 'active' : '' ?>">All Books</a></li>
                        <li><a href=" <?= route_to('new-book') ?>" class="dropdown-toggle no-arrow <?= $tabTitle === "Add New Book" ? 'active' : '' ?>">Add New</a></li>
                    </ul>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
            </ul>
        </div>
    </div>
</div>