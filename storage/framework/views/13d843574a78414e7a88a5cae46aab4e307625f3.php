<div id="goalkeeper" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'goal_keeper__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'goal_keeper__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'goal_keeper__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="goal_keeper__title_ru" contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'goal_keeper__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'goal_keeper__title_ru')->content; ?>

            </h4>
            <p id="goal_keeper__content_ru" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'goal_keeper__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'goal_keeper__content_ru')->content; ?>

            </p>
            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'goal_keeper__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'goal_keeper__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e($textItems->firstWhere('element_id', 'goal_keeper__content_ru')->video_id != null ? $textItems->firstWhere('element_id', 'goal_keeper__content_ru')->video->filename : $textItems->firstWhere('element_id', 'goal_keeper__content_ru')->video_id); ?>"
                    >

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'goal_keeper__title_kk')->element_id); ?>"
             <?php echo e($textItems->firstWhere('element_id', 'goal_keeper__content_kk')); ?>

             class="tab-pane fade">
            <h4 id="goal_keeper__title_kk" contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'goal_keeper__title_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'goal_keeper__title_kk')->content; ?>

            </h4>
            <p id="goal_keeper__content_kk" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'goal_keeper__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'goal_keeper__content_kk')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'goal_keeper__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'goal_keeper__content_kk')->id)); ?>"
                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e($textItems->firstWhere('element_id', 'goal_keeper__content_kk')->video_id  != null ? $textItems->firstWhere('element_id', 'goal_keeper__content_kk')->video->filename : $textItems->firstWhere('element_id', 'goal_keeper__content_kk')->video_id); ?>">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="forward" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'forwarder__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'forwarder__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'forwarder__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'forwarder__title_ru')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'forwarder__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'forwarder__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'forwarder__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'forwarder__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'forwarder__content_ru')->content; ?>

            </p>

            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'forwarder__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'forwarder__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e($textItems->firstWhere('element_id', 'forwarder__content_ru')->video_id != null ? $textItems->firstWhere('element_id', 'forwarder__content_ru')->video->filename : $textItems->firstWhere('element_id', 'forwarder__content_ru')->video_id); ?>"
                    >

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'forwarder__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'forwarder__title_kk')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'forwarder__title_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'forwarder__title_kk')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'forwarder__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'forwarder__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'forwarder__content_kk')->content; ?>

            </p>

            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'forwarder__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'forwarder__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'forwarder__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'forwarder__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'forwarder__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="defender" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'defender__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'defender__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'defender__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'defender__title_ru')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'defender__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'defender__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'defender__content_ru')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'defender__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'defender__content_ru')->content; ?>

            </p>

            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'defender__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'defender__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'defender__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'defender__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'defender__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'defender__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'defender__title_kk')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'defender__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'defender__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'defender__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'defender__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'defender__content_kk')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'defender__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'defender__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'defender__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'defender__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'defender__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>


<div id="equipment_bib" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_bib__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_bib__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_bib__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_bib__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_bib__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_bib__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_bib__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_bib__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_bib__content_ru')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_bib__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_bib__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_bib__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_bib__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_bib__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_bib__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_bib__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_bib__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'equipment_bib__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_bib__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_bib__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_bib__content_kk')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_bib__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_bib__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_bib__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_bib__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_bib__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="equipment_pads" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_pads__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_pads__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_pads__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_pads__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_pads__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_pads__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_pads__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_pads__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_pads__content_ru')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_pads__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_pads__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_pads__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_pads__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_pads__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_pads__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_pads__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_pads__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'equipment_pads__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_pads__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_pads__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_pads__content_kk')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_pads__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_pads__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_pads__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_pads__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_pads__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>


<div id="equipment_shields" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_shields__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_shields__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_shields__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_shields__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_shields__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_shields__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_shields__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_shields__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_shields__content_ru')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_shields__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_shields__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_shields__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_shields__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_shields__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_shields__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_shields__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_shields__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'equipment_shields__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_shields__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_shields__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_shields__content_kk')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_shields__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_shields__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_shields__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_shields__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_shields__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="neck_protection" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'neck_protection__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'neck_protection__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'neck_protection__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'neck_protection__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'neck_protection__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'neck_protection__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'neck_protection__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'neck_protection__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'neck_protection__content_ru')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'neck_protection__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'neck_protection__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'neck_protection__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'neck_protection__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'neck_protection__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'neck_protection__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'neck_protection__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'neck_protection__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'neck_protection__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'neck_protection__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'neck_protection__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'neck_protection__content_kk')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'neck_protection__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'neck_protection__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'neck_protection__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'neck_protection__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'neck_protection__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="equipment_jersey" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_jersey__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_jersey__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_jersey__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_jersey__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_jersey__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_jersey__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_jersey__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_jersey__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_jersey__content_ru')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_jersey__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_jersey__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_jersey__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_jersey__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_jersey__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_jersey__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_jersey__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_jersey__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'equipment_jersey__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_jersey__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_jersey__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_jersey__content_kk')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_jersey__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_jersey__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_jersey__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_jersey__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_jersey__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>


<div id="equipment_gaiters" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_gaiters__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_gaiters__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_gaiters__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_gaiters__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_gaiters__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_gaiters__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_gaiters__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_gaiters__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_gaiters__content_ru')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_gaiters__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_gaiters__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_gaiters__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_gaiters__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_gaiters__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_gaiters__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_gaiters__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_gaiters__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'equipment_gaiters__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_gaiters__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_gaiters__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_gaiters__content_kk')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_gaiters__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_gaiters__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_gaiters__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_gaiters__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_gaiters__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="equipment_helmet" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_helmet__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_helmet__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_helmet__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_helmet__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_helmet__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_helmet__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_helmet__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_helmet__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_helmet__content_ru')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_helmet__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_helmet__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_helmet__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_helmet__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_helmet__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_helmet__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_helmet__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_helmet__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'equipment_helmet__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_helmet__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_helmet__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_helmet__content_kk')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_helmet__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_helmet__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_helmet__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_helmet__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_helmet__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>


<div id="equipment_gloves" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_gloves__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_gloves__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_gloves__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_gloves__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_gloves__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_gloves__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_gloves__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_gloves__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_gloves__content_ru')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_gloves__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_gloves__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_gloves__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_gloves__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_gloves__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_gloves__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_gloves__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_gloves__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'equipment_gloves__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_gloves__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_gloves__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_gloves__content_kk')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_gloves__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_gloves__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_gloves__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_gloves__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_gloves__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>


<div id="equipment_stick" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_stick__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_stick__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_stick__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_stick__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_stick__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_stick__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_stick__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_stick__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_stick__content_ru')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_stick__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_stick__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_stick__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_stick__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_stick__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_stick__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_stick__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_stick__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'equipment_stick__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_stick__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_stick__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_stick__content_kk')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_stick__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_stick__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_stick__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_stick__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_stick__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>


<div id="equipment_shorts" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_shorts__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_shorts__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_shorts__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_shorts__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_shorts__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_shorts__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_shorts__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_shorts__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_shorts__content_ru')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_shorts__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_shorts__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_shorts__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_shorts__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_shorts__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_shorts__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_shorts__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_shorts__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'equipment_shorts__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_shorts__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_shorts__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_shorts__content_kk')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_shorts__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_shorts__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_shorts__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_shorts__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_shorts__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="equipment_skates" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_skates__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_skates__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'equipment_skates__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_skates__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_skates__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_skates__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_skates__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_skates__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_skates__content_ru')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_skates__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_skates__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_skates__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_skates__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_skates__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'equipment_skates__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'equipment_skates__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_skates__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'equipment_skates__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'equipment_skates__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_skates__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'equipment_skates__content_kk')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'equipment_skates__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'equipment_skates__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'equipment_skates__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'equipment_skates__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'equipment_skates__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="hockey_goal" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'hockey_goal__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'hockey_goal__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'hockey_goal__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'hockey_goal__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'hockey_goal__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'hockey_goal__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'hockey_goal__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'hockey_goal__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'hockey_goal__content_ru')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'hockey_goal__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'hockey_goal__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'hockey_goal__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'hockey_goal__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'hockey_goal__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'hockey_goal__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'hockey_goal__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'hockey_goal__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'hockey_goal__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'hockey_goal__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'hockey_goal__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'hockey_goal__content_kk')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'hockey_goal__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'hockey_goal__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'hockey_goal__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'hockey_goal__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'hockey_goal__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="referee_field" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'referee_field__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'referee_field__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'referee_field__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'referee_field__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'referee_field__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'referee_field__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'referee_field__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'referee_field__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'referee_field__content_ru')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'referee_field__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'referee_field__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'referee_field__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'referee_field__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'referee_field__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'referee_field__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'referee_field__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'referee_field__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'referee_field__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'referee_field__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'referee_field__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'referee_field__content_kk')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'referee_field__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'referee_field__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'referee_field__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'referee_field__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'referee_field__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="washer_field" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'washer_field__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'washer_field__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'washer_field__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'washer_field__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'washer_field__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'washer_field__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'washer_field__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'washer_field__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'washer_field__content_ru')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'washer_field__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'washer_field__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'washer_field__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'washer_field__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'washer_field__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'washer_field__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'washer_field__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'washer_field__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'washer_field__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'washer_field__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'washer_field__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'washer_field__content_kk')->content; ?>

            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'washer_field__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'washer_field__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'washer_field__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'washer_field__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'washer_field__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>


<div id="scoreboard" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'scoreboard__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'scoreboard__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'scoreboard__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'scoreboard__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'scoreboard__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'scoreboard__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'scoreboard__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'scoreboard__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'scoreboard__content_ru')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'scoreboard__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'scoreboard__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'scoreboard__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'scoreboard__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'scoreboard__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'scoreboard__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'scoreboard__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'scoreboard__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'scoreboard__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'scoreboard__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'scoreboard__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'scoreboard__content_kk')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'scoreboard__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'scoreboard__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'scoreboard__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'scoreboard__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'scoreboard__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="ice_machine" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'ice_machine__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'ice_machine__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'ice_machine__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'ice_machine__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'ice_machine__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'ice_machine__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'ice_machine__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'ice_machine__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'ice_machine__content_ru')->content; ?>

            </p>




            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'ice_machine__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'ice_machine__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'ice_machine__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'ice_machine__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'ice_machine__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'ice_machine__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'ice_machine__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'ice_machine__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'ice_machine__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'ice_machine__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'ice_machine__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'ice_machine__content_kk')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'ice_machine__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'ice_machine__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'ice_machine__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'ice_machine__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'ice_machine__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="tribune" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'tribune__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'tribune__title_kk')->element_id); ?>">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'tribune__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'tribune__title_ru')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'tribune__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'tribune__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'tribune__content_ru')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'tribune__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'tribune__content_ru')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'tribune__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'tribune__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'tribune__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'tribune__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'tribune__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'tribune__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'tribune__title_kk')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'tribune__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'tribune__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'tribune__content_kk')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'tribune__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'tribune__content_kk')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'tribune__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'tribune__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'tribune__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'tribune__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'tribune__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="bench" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'bench__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab" href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'bench__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'bench__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'bench__title_ru')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'bench__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'bench__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'bench__content_ru')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'bench__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'bench__content_ru')->content; ?>

            </p>




            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'bench__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'bench__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'bench__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'bench__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'bench__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'bench__title_kk')->element_id); ?>" class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'bench__title_kk')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'bench__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'bench__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'bench__content_kk')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'bench__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'bench__content_kk')->content; ?>

            </p>




            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'bench__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'bench__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'bench__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'bench__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'bench__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="penalty_box" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'penalty_box__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'penalty_box__title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'penalty_box__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'penalty_box__title_ru')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'penalty_box__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'penalty_box__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'penalty_box__content_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'penalty_box__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'penalty_box__content_ru')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'penalty_box__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'penalty_box__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'penalty_box__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'penalty_box__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'penalty_box__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'penalty_box__title_kk')->element_id); ?>"
             class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'penalty_box__title_kk')->element_id); ?>"
                contenteditable="false" class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'penalty_box__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'penalty_box__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'penalty_box__content_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'penalty_box__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'penalty_box__content_kk')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'penalty_box__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'penalty_box__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'penalty_box__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'penalty_box__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'penalty_box__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="zone_a" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'zone_a__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'zone_a__title_kk')->element_id); ?>">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'zone_a__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'zone_a__title_ru')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_a__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'zone_a__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'zone_a__content_ru')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_a__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'zone_a__content_ru')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'zone_a__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_a__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'zone_a__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'zone_a__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'zone_a__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'zone_a__title_kk')->element_id); ?>" class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'zone_a__title_kk')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_a__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'zone_a__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'zone_a__content_kk')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_a__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'zone_a__content_kk')->content; ?>

            </p>




            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'zone_a__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_a__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'zone_a__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'zone_a__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'zone_a__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="zone_c" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'zone_c__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'zone_c__title_kk')->element_id); ?>">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'zone_c__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'zone_c__title_ru')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_c__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'zone_c__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'zone_c__content_ru')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_c__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'zone_c__content_ru')->content; ?>

            </p>




            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'zone_c__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_c__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'zone_c__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'zone_c__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'zone_c__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'zone_c__title_kk')->element_id); ?>" class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'zone_c__title_kk')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_c__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'zone_c__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'zone_c__content_kk')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_c__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'zone_c__content_kk')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'zone_c__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_c__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'zone_c__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'zone_c__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'zone_c__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="zone_b" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'zone_b__title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'zone_b__title_kk')->element_id); ?>">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'zone_b__title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'zone_b__title_ru')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_b__title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'zone_b__title_ru')->content; ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'zone_b__content_ru')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_b__content_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'zone_b__content_ru')->content; ?>

            </p>



            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'zone_b__content_ru')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_b__content_ru')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'zone_b__content_ru')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'zone_b__content_ru')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'zone_b__content_ru')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'zone_b__title_kk')->element_id); ?>" class="tab-pane fade">
            <h4 id="<?php echo e($textItems->firstWhere('element_id', 'zone_b__title_kk')->element_id); ?>" contenteditable="false"
                class="title-primary text-center"
                data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_b__title_kk')->id )); ?>"
            >
                <?php echo e($textItems->firstWhere('element_id', 'zone_b__title_kk')->content); ?>

            </h4>
            <p id="<?php echo e($textItems->firstWhere('element_id', 'zone_b__content_kk')->element_id); ?>" contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_b__content_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'zone_b__content_kk')->content; ?>

            </p>




            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="<?php echo e($textItems->firstWhere('element_id', 'zone_b__content_kk')->video_id); ?>"
                               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'zone_b__content_kk')->id )); ?>"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="<?php echo e(($textItems->firstWhere('element_id', 'zone_b__content_kk')->video_id != null)
                                        ? ($textItems->firstWhere('element_id', 'zone_b__content_kk')->video->filename)
                                        : ($textItems->firstWhere('element_id', 'zone_b__content_kk')->video_id)); ?>

                               ">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>


<div id="hockey_block_desc_4" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'hockey_block_desc_4_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'hockey_block_desc_4_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'hockey_block_desc_4_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <p id="<?php echo e($textItems->firstWhere('element_id', 'hockey_block_desc_4_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'hockey_block_desc_4_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'hockey_block_desc_4_ru')->content; ?>

            </p>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'hockey_block_desc_4_kk')->element_id); ?>"
             class="tab-pane fade">
            <p id="<?php echo e($textItems->firstWhere('element_id', 'hockey_block_desc_4_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'hockey_block_desc_4_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'hockey_block_desc_4_kk')->content; ?>

            </p>
        </div>

    </div>
</div>


<div id="hockey_infrastructure_title" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-<?php echo e($textItems->firstWhere('element_id', 'hockey_infrastructure_title_ru')->element_id); ?>">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-<?php echo e($textItems->firstWhere('element_id', 'hockey_infrastructure_title_kk')->element_id); ?>">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-<?php echo e($textItems->firstWhere('element_id', 'hockey_infrastructure_title_ru')->element_id); ?>"
             class="tab-pane fade in active">
            <p id="<?php echo e($textItems->firstWhere('element_id', 'hockey_infrastructure_title_ru')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'hockey_infrastructure_title_ru')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'hockey_infrastructure_title_ru')->content; ?>

            </p>
        </div>
        <div id="kazakh-<?php echo e($textItems->firstWhere('element_id', 'hockey_infrastructure_title_kk')->element_id); ?>"
             class="tab-pane fade">
            <p id="<?php echo e($textItems->firstWhere('element_id', 'hockey_infrastructure_title_kk')->element_id); ?>"
               contenteditable="false"
               data-url="<?php echo e(route('text.update', $textItems->firstWhere('element_id', 'hockey_infrastructure_title_kk')->id )); ?>"
            >
                <?php echo $textItems->firstWhere('element_id', 'hockey_infrastructure_title_kk')->content; ?>

            </p>

        </div>

    </div>
</div>

<?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/admin/components/modals/hockey.blade.php ENDPATH**/ ?>