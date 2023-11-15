<?php require VIEWS . '/incs/header.tpl.php' ?>
<main class="main">
    <div class="container">
        <div class="tab mb-2">
            <input type="checkbox" id="chck1">
            <label class="tab-label" for="chck1">Для чего нужно данное приложение?</label>
            <div class="tab-content">
                Данное приложение было написано для проект CS-ZONA52.RU.
                Оно используется для управления игровыми администраторами непосредственно через интерфейс.
                По возможности, в проект будут внедряться новые фичи.
            </div>
        </div>
        <div class="tab">
            <input type="checkbox" id="chck2">
            <label class="tab-label" for="chck2">Кто разработал данное приложение?</label>
            <div class="tab-content">
                Контакты создателя (кликабельно)<br>
                <a href="https://vk.com/meepv" target="_blank" style="color:cadetblue">&alefsym; vk</a><br>
                <a href="https://github.com/howleysens" target="_blank" style="color:cadetblue">&alefsym; github</a><br>
                <a href="https://telegram.me/sensgetsu" target="_blank" style="color:cadetblue">&alefsym; tg</a>
            </div>
        </div>
    </div>
</main>
<?php require VIEWS . '/incs/footer.tpl.php' ?>
