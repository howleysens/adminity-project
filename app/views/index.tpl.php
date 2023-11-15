<?php require_once VIEWS . '/incs/header.tpl.php' ?>
    <main class="main mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <table>
                        <thead>
                        <tr>
                            <th>Lead Team</th>
                            <th>Photo</th>
                            <th>Nickname</th>
                            <th>LVL</th>
                            <th>Rebuke</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($adminsList as $admin): ?>
                            <tr class="admin-card" style="cursor: pointer" on onclick="location.href='admin?id=<?=$admin['id']?>'">
                                <td>
                                    <?= $admin['admin_lvl'] >= 5
                                        ? "<img src='https://www.svgrepo.com/show/13695/star.svg' alt='&star;' style='width: 30px; height: 30px;'>"
                                        : ""
                                    ?>
                                </td>
                                <td>
                                    <?= !empty($admin['avatar'])
                                        ? "<img src={$admin['avatar']} alt='https://w7.pngwing.com/pngs/89/405/png-transparent-computer-icons-user-organization-user-svg-black-avatar-user-thumbnail.png' style='width: 30px; height: 30px;'>"
                                        : "<img src='https://cdn-icons-png.flaticon.com/512/266/266134.png' alt='' style='width: 30px;height: 30px;'>"
                                    ?>
                                </td>
                                <td><?= $admin['nickname'] ?></td>
                                <td><?= $admin['admin_lvl'] ?></td>
                                <td><?= $admin['rebuke'] ?>/5</td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php require VIEWS . '/incs/sidebar.tpl.php' ?>
            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.tpl.php' ?>