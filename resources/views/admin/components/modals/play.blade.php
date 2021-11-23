<div id="video1" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian_video1">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh_video1">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian_video1"
             class="tab-pane fade in active">

            <form class="col-lg-12">

                <div class="col-lg-12 d-flex">

                        <span>Постер:</span>
                    <div class="input-group">
                        <label class="input-group-btn">
                            <span class="btn btn-primary">
                                Выбрать &hellip; <input type="file" style="display: none;">
                                <input value="{{ $textItems->firstWhere('element_id', 'play_video_content_ru')->image_id}}"
                                       data-url="{{route('text.update', $textItems->firstWhere('element_id', 'play_video_content_ru')->id)}}"
                                       type="text" name="image_id" style="display: none;">
                            </span>
                        </label>
                        <input type="text" name="filename" class="form-control"
                               value="{{$textItems->firstWhere('element_id', 'play_video_content_ru')->image_id != null ? $textItems->firstWhere('element_id', 'play_video_content_ru')->image->filename : $textItems->firstWhere('element_id', 'play_video_content_ru')->image_id}}">
                    </div>
                </div>
                <div class="col-lg-12 d-flex">
                    <span>Видео:</span>
                    <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $textItems->firstWhere('element_id', 'play_video_content_ru')->video_id}}"
                               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'play_video_content_ru')->id ) }}"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$textItems->firstWhere('element_id', 'play_video_content_ru')->video_id != null ? $textItems->firstWhere('element_id', 'play_video_content_ru')->video->filename : $textItems->firstWhere('element_id', 'play_video_content_ru')->video_id}}"
                    >
                    </div>
                </div>

                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

        <div id="kazakh_video1"
             {{$textItems->firstWhere('element_id', 'play_video_content_kk')}}
             class="tab-pane fade">

            <div class="col-lg-12 d-flex">

                <span>Постер:</span>
                <div class="input-group">
                    <label class="input-group-btn">
                            <span class="btn btn-primary">
                                Выбрать &hellip; <input type="file" style="display: none;">
                                <input value="{{ $textItems->firstWhere('element_id', 'play_video_content_kk')->image_id}}"
                                       data-url="{{route('text.update', $textItems->firstWhere('element_id', 'play_video_content_kk')->id)}}"
                                       type="text" name="image_id" style="display: none;">
                            </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$textItems->firstWhere('element_id', 'play_video_content_kk')->image_id != null ? $textItems->firstWhere('element_id', 'play_video_content_kk')->image->filename : $textItems->firstWhere('element_id', 'play_video_content_kk')->image_id}}">
                </div>
            </div>
            <div class="col-lg-12 d-flex">
                <span>Видео:</span>
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $textItems->firstWhere('element_id', 'play_video_content_kk')->video_id}}"
                               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'play_video_content_kk')->id ) }}"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$textItems->firstWhere('element_id', 'play_video_content_kk')->video_id != null ? $textItems->firstWhere('element_id', 'play_video_content_kk')->video->filename : $textItems->firstWhere('element_id', 'play_video_content_kk')->video_id}}"
                    >
                </div>
            </div>

            <div class="progress-wrp">
                <div class="progress-bar"></div>
                <div class="status">0%</div>
            </div>

        </div>

    </div>
</div>
