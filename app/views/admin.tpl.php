<?php require_once VIEWS . '/incs/header.tpl.php' ?>
    <main class="main mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="admin-profile">
                        <div class="admin_image">
                            <?= !empty($admin['avatar'])
                                ? "<img src={$admin['avatar']} alt='https://w7.pngwing.com/pngs/89/405/png-transparent-computer-icons-user-organization-user-svg-black-avatar-user-thumbnail.png' style='width: 250px; height: 250px;'>"
                                : "<img src='https://cdn-icons-png.flaticon.com/512/266/266134.png' alt='' style='width: 250px;height: 250px;'>"
                            ?>
                        </div>
                        <div class="admin-info">
                            <span><?= $admin['nickname'] ?></span>
                            <span><?= $admin['admin_lvl'] ?> LVL</span>
                            <span>Выговоры: <?= $admin['rebuke'] ?> / 5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.tpl.php' ?>