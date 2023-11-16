<?php require_once VIEWS . '/incs/header.tpl.php' ?>
    <main class="main mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Add new admin</h1>
                    <form action="" method="post">

                        <div class="mb-3">
                            <label for="nickname" class="form-label">Nickname</label>
                            <input name="nickname" type="text" class="form-control" id="nickname"
                                   placeholder="Nickname">
                        </div>

                        <div class="mb-3">
                            <label for="avatar" class="form-label">Avatar</label>
                            <input name="avatar" class="form-control" id="avatar" placeholder="Avatar"/>
                        </div>

                        <div class="mb-3">
                            <label for="admin_lvl" class="form-label">Admin LVL</label>
                            <input name="admin_lvl" class="form-control" id="admin_lvl" placeholder="Admin LVL"/>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.tpl.php' ?>