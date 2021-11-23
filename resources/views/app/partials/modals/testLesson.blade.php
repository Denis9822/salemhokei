<div id="testLesson" class="form-modal" style="display:none">
    <h3 class="title-primary text-center">Запись на пробное занятие</h3>
    <form class="form">
        <div class="input-group">
            <input type="text" name="name" placeholder="ФИО" class="input-regular" required>
        </div>
        <div class="input-group">
            <input type="tel" name="phone" placeholder="Номер телефона" onfocus="$(this).inputmask('+7 999 999 99 99')" class="input-regular" required>
        </div>
        <div class="input-group">
            <input type="email" name="email" placeholder="E-mail" class="input-regular" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn">Записаться</button>
        </div>
    </form>
</div>