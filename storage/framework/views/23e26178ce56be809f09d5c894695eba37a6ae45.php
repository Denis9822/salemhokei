<div id="request" class="form-modal" style="display:none">
    <h3 class="title-primary text-center"><?php echo e(__("default.pages.modals.write_us")); ?></h3>
    <form class="form" method="post" action="/contact_mail">
        <?php echo e(csrf_field()); ?>

        <div class="input-group">
            <input type="text" name="name" placeholder="<?php echo e(__("default.pages.modals.name")); ?>" class="input-regular" required>
        </div>
        <div class="input-group">
            <input type="tel" name="phone" placeholder="<?php echo e(__("default.pages.modals.phone")); ?>" onfocus="$(this).inputmask('+7 999 999 99 99')"
                   class="input-regular" required>
        </div>
        <div class="input-group">
            <input type="email" name="email" placeholder="<?php echo e(__("default.pages.modals.email")); ?>" class="input-regular" required>
        </div>
        <div class="input-group">
            <textarea name="message" placeholder="<?php echo e(__("default.pages.modals.message")); ?>" class="input-regular"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn"><?php echo e(__("default.pages.modals.send")); ?></button>
        </div>
    </form>
</div>

<div id="testLesson" class="form-modal" style="display:none">
    <h3 class="title-primary text-center"><?php echo e(__("default.pages.modals.try_lesson_title")); ?></h3>
    <form class="form" method="post" action="/record_to_school">
        <?php echo e(csrf_field()); ?>

        <div class="input-group">
            <input type="text" name="name" placeholder="<?php echo e(__("default.pages.modals.name")); ?>" class="input-regular" required>
        </div>
        <div class="input-group">
            <input type="tel" name="phone" placeholder="<?php echo e(__("default.pages.modals.phone")); ?>" onfocus="$(this).inputmask('+7 999 999 99 99')"
                   class="input-regular" required>
        </div>
        <div class="input-group">
            <input type="email" name="email" placeholder="<?php echo e(__("default.pages.modals.email")); ?>" class="input-regular" required>
        </div>
        <?php if(!empty($item->regions[0])): ?>
            <div class="input-group">
                <input type="hidden" name="region" class="input-regular"
                       value="<?php echo $item->regions[0]->getAttribute('name_'.$lang) ?? $item->regions[0]->getAttribute('name_ru'); ?>">
            </div>
        <?php endif; ?>
        <div class="text-center">
            <button type="submit" class="btn"><?php echo e(__("default.pages.modals.send_write")); ?></button>
        </div>
    </form>
</div>


<div id="equipment_sink" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.sink")); ?></h4>
    <p><?php echo e(__("default.pages.equipment.sink_content")); ?></p>
</div>

<div id="equipment_kneecap" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.kneecap")); ?></h4>
    <?php echo e(__("default.pages.equipment.kneecap_video")); ?>


</div>


<div id="hockey_field" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.hockey_field_title")); ?></h4>
    <?php echo __("default.pages.main.hockey_field_content"); ?>

</div>

<div id="equipment_player" class="form-modal" style="display:none">
    
    <?php echo __("default.pages.equipment.player_content"); ?>

</div>


<div id="equipment_shorts" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.shorts")); ?></h4>
    <?php echo __("default.pages.equipment.shorts_content"); ?>

    <?php echo __("default.pages.equipment.shorts_video"); ?>


</div>

<div id="equipment_stick" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.stick")); ?></h4>
    <?php echo __("default.pages.equipment.stick_content"); ?>

    <?php echo __("default.pages.equipment.stick_video"); ?>


</div>

<div id="equipment_skates" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.skates")); ?></h4>
    <?php echo __("default.pages.equipment.skates_content"); ?>

    <?php echo __("default.pages.equipment.skates_video"); ?>


</div>

<div id="equipment_jersey" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.jersey")); ?></h4>
    <?php echo __("default.pages.equipment.jersey_content"); ?>

    <?php echo __("default.pages.equipment.jersey_video"); ?>


</div>

<div id="messageSuccess" class="form-modal" style="display:none">
    <h3 class="title-primary text-center"><?php echo e(__("default.pages.modals.success_message")); ?></h3>

    
        
    
</div>









<?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/app/partials/modals/request.blade.php ENDPATH**/ ?>