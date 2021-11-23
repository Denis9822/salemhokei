


<div id="goalkeeper" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'goal_keeper__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'goal_keeper__content_' . app()->getLocale())->content; ?>


    <?php if($textItems->firstWhere('element_id', 'goal_keeper__content_' . app()->getLocale())->video_id != null): ?>
       <div class="video-player">
           <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'goal_keeper__content_' . app()->getLocale())->getVideoFileName())); ?>"
                  class="player"></video>
       </div>
    <?php endif; ?>

</div>


<div id="defender" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'defender__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'defender__content_' . app()->getLocale())->content; ?>

    <?php if($textItems->firstWhere('element_id', 'defender__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'defender__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="forward" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'forwarder__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'forwarder__content_' . app()->getLocale())->content; ?>

    <?php if($textItems->firstWhere('element_id', 'forwarder__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'forwarder__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="equipment_bib" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'equipment_bib__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'equipment_bib__content_' . app()->getLocale())->content; ?>


    <?php if($textItems->firstWhere('element_id', 'equipment_bib__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'equipment_bib__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>


<div id="equipment_pads" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'equipment_pads__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'equipment_pads__content_' . app()->getLocale())->content; ?>


    <?php if($textItems->firstWhere('element_id', 'equipment_pads__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'equipment_pads__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="equipment_gaiters" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'equipment_gaiters__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'equipment_gaiters__content_' . app()->getLocale())->content; ?>



    <?php if($textItems->firstWhere('element_id', 'equipment_gaiters__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'equipment_gaiters__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="neck_protection" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'neck_protection__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'neck_protection__content_' . app()->getLocale())->content; ?>


    <?php if($textItems->firstWhere('element_id', 'neck_protection__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'neck_protection__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="equipment_shields" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'equipment_shields__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'equipment_shields__content_' . app()->getLocale())->content; ?>


    <?php if($textItems->firstWhere('element_id', 'equipment_shields__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'equipment_shields__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="equipment_helmet" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'equipment_helmet__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'equipment_helmet__content_' . app()->getLocale())->content; ?>



    <?php if($textItems->firstWhere('element_id', 'equipment_helmet__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'equipment_helmet__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="equipment_gloves" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'equipment_gloves__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'equipment_gloves__content_' . app()->getLocale())->content; ?>


    <?php if($textItems->firstWhere('element_id', 'equipment_gloves__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'equipment_gloves__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="hockey_goal" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'hockey_goal__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'hockey_goal__content_' . app()->getLocale())->content; ?>



    <?php if($textItems->firstWhere('element_id', 'hockey_goal__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'hockey_goal__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="referee_field" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'referee_field__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'referee_field__content_' . app()->getLocale())->content; ?>


    <?php if($textItems->firstWhere('element_id', 'referee_field__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'referee_field__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="washer_field" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'washer_field__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'washer_field__content_' . app()->getLocale())->content; ?>



    <?php if($textItems->firstWhere('element_id', 'washer_field__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'washer_field__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>
            <div class="player-controls">
                <button class="play-button" title="Play">►</button>
                <div class='fullscreen'>
                    <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z" transform="translate(2 2)" fill="white"/>
                    </svg>
                </div>
                <div class='fullscreen'>
                    <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z" transform="translate(2 2)" fill="white"/>
                    </svg>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<div id="scoreboard" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'scoreboard__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'scoreboard__content_' . app()->getLocale())->content; ?>


    <?php if($textItems->firstWhere('element_id', 'scoreboard__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'scoreboard__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="ice_machine" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'ice_machine__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'ice_machine__content_' . app()->getLocale())->content; ?>



    <?php if($textItems->firstWhere('element_id', 'ice_machine__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'ice_machine__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="tribune" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'tribune__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'tribune__content_' . app()->getLocale())->content; ?>


    <?php if($textItems->firstWhere('element_id', 'tribune__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'tribune__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="bench" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'bench__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'bench__content_' . app()->getLocale())->content; ?>



    <?php if($textItems->firstWhere('element_id', 'bench__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'bench__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="penalty_box" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'penalty_box__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'penalty_box__content_' . app()->getLocale())->content; ?>


    <?php if($textItems->firstWhere('element_id', 'penalty_box__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'penalty_box__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="zone_a" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'zone_a__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'zone_a__content_' . app()->getLocale())->content; ?>


    <?php if($textItems->firstWhere('element_id', 'zone_a__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'zone_a__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="zone_b" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'zone_b__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'zone_b__content_' . app()->getLocale())->content; ?>


    <?php if($textItems->firstWhere('element_id', 'zone_b__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'zone_b__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>

<div id="zone_c" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">
        <?php echo $textItems->firstWhere('element_id', 'zone_c__title_' . app()->getLocale())->content; ?>

    </h4>
    <?php echo $textItems->firstWhere('element_id', 'zone_c__content_' . app()->getLocale())->content; ?>



    <?php if($textItems->firstWhere('element_id', 'zone_c__content_' . app()->getLocale())->video_id != null): ?>
        <div class="video-player">
            <video src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'zone_c__content_' . app()->getLocale())->getVideoFileName())); ?>"
                   class="player"></video>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/app/partials/modals/hockey.blade.php ENDPATH**/ ?>