
<div id="schools_page__desc" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-<?php echo e($textItems->firstWhere('element_id', 'schools_page__desc_ru')->element_id); ?>">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'schools_page__desc_kk')->element_id); ?>">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'schools_page__desc_ru')->element_id); ?>" class="tab-pane fade in active">
            <p id="<?php echo e($textItems->firstWhere('element_id', 'schools_page__desc_ru')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'schools_page__desc_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'schools_page__desc_ru')->content; ?>

            </p>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'schools_page__desc_kk')->element_id); ?>" class="tab-pane fade">
            <p id="<?php echo e($textItems->firstWhere('element_id', 'schools_page__desc_kk')->element_id); ?>"  contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'schools_page__desc_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'schools_page__desc_kk')->content; ?>

            </p>
        </div>

    </div>
</div>



<div id="schools_count" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-<?php echo e($textItems->firstWhere('element_id', 'schools_count_title_ru')->element_id); ?>">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'schools_count_title_kk')->element_id); ?>">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'schools_count_title_ru')->element_id); ?>" class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'schools_count_ru')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'schools_count_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'schools_count_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'schools_count_title_ru')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'schools_count_title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'schools_count_title_ru')->content; ?>

            </p>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'schools_count_title_kk')->element_id); ?>" class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'schools_count_kk')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'schools_count_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'schools_count_kk')->content; ?>

            </h4>

            <p id="<?php echo e($textItems->firstWhere('element_id', 'schools_count_title_kk')->element_id); ?>"  contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'schools_count_title_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'schools_count_title_kk')->content; ?>

            </p>
        </div>
    </div>
</div>


<div id="children_count" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-<?php echo e($textItems->firstWhere('element_id', 'children_count_title_ru')->element_id); ?>">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'children_count_title_kk')->element_id); ?>">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'children_count_title_ru')->element_id); ?>" class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'children_count_ru')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'children_count_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'children_count_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'children_count_title_ru')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'children_count_title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'children_count_title_ru')->content; ?>

            </p>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'children_count_title_kk')->element_id); ?>" class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'children_count_kk')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'children_count_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'children_count_kk')->content; ?>

            </h4>

            <p id="<?php echo e($textItems->firstWhere('element_id', 'children_count_title_kk')->element_id); ?>"  contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'children_count_title_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'children_count_title_kk')->content; ?>

            </p>
        </div>
    </div>
</div>


<div id="children_teams_count" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-<?php echo e($textItems->firstWhere('element_id', 'children_teams_count_title_ru')->element_id); ?>">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'children_teams_count_title_kk')->element_id); ?>">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'children_teams_count_title_ru')->element_id); ?>" class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'children_teams_count_ru')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'children_teams_count_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'children_teams_count_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'children_teams_count_title_ru')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'children_teams_count_title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'children_teams_count_title_ru')->content; ?>

            </p>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'children_teams_count_title_kk')->element_id); ?>" class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'children_teams_count_kk')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'children_teams_count_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'children_teams_count_kk')->content; ?>

            </h4>

            <p id="<?php echo e($textItems->firstWhere('element_id', 'children_teams_count_title_kk')->element_id); ?>"  contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'children_teams_count_title_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'children_teams_count_title_kk')->content; ?>

            </p>
        </div>
    </div>
</div>


<?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/admin/components/modals/schools.blade.php ENDPATH**/ ?>