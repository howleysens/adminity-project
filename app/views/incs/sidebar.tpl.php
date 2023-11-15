<div class="col-md-4">
    <h3 class="text-center text-white mb-3" style="background:#393E41; padding: 15px;">New Admins</h3>
    <ul class="list-group">
        <?php foreach ($newAdmins as $newAdmin):?>
        <a href="admin?id=<?=$newAdmin['id']?>">
            <li class="list-group-item mb-2">
                <?=$newAdmin['nickname']?> (<?=$newAdmin['admin_lvl']?> LVL)
            </li>
        </a>
        <?php endforeach;?>
    </ul>
</div>