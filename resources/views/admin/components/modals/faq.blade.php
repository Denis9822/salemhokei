
<div id="what_to_from_page_description" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'what_to_from_page_description_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'what_to_from_page_description_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'what_to_from_page_description_ru')->element_id}}" class="tab-pane fade in active">
            <p id="{{$textItems->firstWhere('element_id', 'what_to_from_page_description_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'what_to_from_page_description_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'what_to_from_page_description_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'what_to_from_page_description_kk')->element_id}}" class="tab-pane fade">
            <p id="{{$textItems->firstWhere('element_id', 'what_to_from_page_description_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'what_to_from_page_description_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'what_to_from_page_description_kk')->content !!}
            </p>
        </div>

    </div>
</div>

<div id="how_register_a_child" class="form-modal" style="display:none">
    @php
        $title_ru =  $textItems->firstWhere('element_id', 'how_register_a_child_ru');
        $title_kk =  $textItems->firstWhere('element_id', 'how_register_a_child_kk');
        $text_ru =  $textItems->firstWhere('element_id', 'how_register_a_child_text_ru');
        $text_kk =  $textItems->firstWhere('element_id', 'how_register_a_child_text_kk');

    @endphp
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-{{$title_ru->element_id}}">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-{{$title_kk->element_id}}">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$title_ru->element_id}}"
             class="tab-pane fade in active">
            <h4 id="{{$title_ru->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_ru->id )}}"
            >
                {!! $title_ru->content !!}
            </h4>
            <p id="{{$text_ru->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_ru->id )}}"
            >
                {!! $text_ru->content !!}
            </p>
            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_ru->video_id}}"
                               data-url="{{route('text.update', $text_ru->id ) }}"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_ru->video_id != null ? $text_ru->video->filename : $text_ru->video_id}}"
                    >

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-{{$title_kk->element_id}}"
             class="tab-pane fade">
            <h4 id="{{$title_kk->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_kk->id )}}"
            >
                {!! $title_kk->content !!}
            </h4>
            <p id="{{$text_kk->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_kk->id )}}"
            >
                {!! $text_kk->content !!}
            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_kk->video_id}}"
                               data-url="{{route('text.update', $text_kk->id)}}"
                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_kk->video_id  != null ? $text_kk->video->filename : $text_kk->video_id}}">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="what_age_a_child_to_give" class="form-modal" style="display:none">
    @php
        $title_ru =  $textItems->firstWhere('element_id', 'what_age_a_child_to_give_ru');
        $title_kk =  $textItems->firstWhere('element_id', 'what_age_a_child_to_give_kk');
        $text_ru =  $textItems->firstWhere('element_id', 'what_age_a_child_to_give_text_ru');
        $text_kk =  $textItems->firstWhere('element_id', 'what_age_a_child_to_give_text_kk');
    @endphp
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-{{$title_ru->element_id}}">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-{{$title_kk->element_id}}">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$title_ru->element_id}}"
             class="tab-pane fade in active">
            <h4 id="{{$title_ru->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_ru->id )}}"
            >
                {!! $title_ru->content !!}
            </h4>
            <p id="{{$text_ru->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_ru->id )}}"
            >
                {!! $text_ru->content !!}
            </p>
            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_ru->video_id}}"
                               data-url="{{route('text.update', $text_ru->id ) }}"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_ru->video_id != null ? $text_ru->video->filename : $text_ru->video_id}}"
                    >

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-{{$title_kk->element_id}}"

             class="tab-pane fade">
            <h4 id="{{$title_kk->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_kk->id )}}"
            >
                {!! $title_kk->content !!}
            </h4>
            <p id="{{$text_kk->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_kk->id )}}"
            >
                {!! $text_kk->content !!}
            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_kk->video_id}}"
                               data-url="{{route('text.update', $text_kk->id)}}"
                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_kk->video_id  != null ? $text_kk->video->filename : $text_kk->video_id}}">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="how_to_determine_child_to_become_hockey_player" class="form-modal" style="display:none">
    @php
        $title_ru =  $textItems->firstWhere('element_id', 'how_to_determine_child_to_become_hockey_player_ru');
        $title_kk =  $textItems->firstWhere('element_id', 'how_to_determine_child_to_become_hockey_player_kk');
        $text_ru =  $textItems->firstWhere('element_id', 'how_to_determine_child_to_become_hockey_player_text_ru');
        $text_kk =  $textItems->firstWhere('element_id', 'how_to_determine_child_to_become_hockey_player_text_kk');
    @endphp
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-{{$title_ru->element_id}}">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-{{$title_kk->element_id}}">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$title_ru->element_id}}"
             class="tab-pane fade in active">
            <h4 id="{{$title_ru->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_ru->id )}}"
            >
                {!! $title_ru->content !!}
            </h4>
            <p id="{{$text_ru->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_ru->id )}}"
            >
                {!! $text_ru->content !!}
            </p>
            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_ru->video_id}}"
                               data-url="{{route('text.update', $text_ru->id ) }}"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_ru->video_id != null ? $text_ru->video->filename : $text_ru->video_id}}"
                    >

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-{{$title_kk->element_id}}"

             class="tab-pane fade">
            <h4 id="{{$title_kk->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_kk->id )}}"
            >
                {!! $title_kk->content !!}
            </h4>
            <p id="{{$text_kk->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_kk->id )}}"
            >
                {!! $text_kk->content !!}
            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_kk->video_id}}"
                               data-url="{{route('text.update', $text_kk->id)}}"
                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_kk->video_id  != null ? $text_kk->video->filename : $text_kk->video_id}}">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="who_conducts_classess" class="form-modal" style="display:none">
    @php
        $title_ru =  $textItems->firstWhere('element_id', 'who_conducts_classess_ru');
        $title_kk =  $textItems->firstWhere('element_id', 'who_conducts_classess_kk');
        $text_ru =  $textItems->firstWhere('element_id', 'who_conducts_classess_text_ru');
        $text_kk =  $textItems->firstWhere('element_id', 'who_conducts_classess_text_kk');
    @endphp
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-{{$title_ru->element_id}}">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-{{$title_kk->element_id}}">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$title_ru->element_id}}"
             class="tab-pane fade in active">
            <h4 id="{{$title_ru->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_ru->id )}}"
            >
                {!! $title_ru->content !!}
            </h4>
            <p id="{{$text_ru->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_ru->id )}}"
            >
                {!! $text_ru->content !!}
            </p>
            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_ru->video_id}}"
                               data-url="{{route('text.update', $text_ru->id ) }}"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_ru->video_id != null ? $text_ru->video->filename : $text_ru->video_id}}"
                    >

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-{{$title_kk->element_id}}"

             class="tab-pane fade">
            <h4 id="{{$title_kk->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_kk->id )}}"
            >
                {!! $title_kk->content !!}
            </h4>
            <p id="{{$text_kk->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_kk->id )}}"
            >
                {!! $text_kk->content !!}
            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_kk->video_id}}"
                               data-url="{{route('text.update', $text_kk->id)}}"
                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_kk->video_id  != null ? $text_kk->video->filename : $text_kk->video_id}}">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="what_documents_are_required" class="form-modal" style="display:none">
    @php
        $title_ru =  $textItems->firstWhere('element_id', 'what_documents_are_required_ru');
        $title_kk =  $textItems->firstWhere('element_id', 'what_documents_are_required_kk');
        $text_ru =  $textItems->firstWhere('element_id', 'what_documents_are_required_text_ru');
        $text_kk =  $textItems->firstWhere('element_id', 'what_documents_are_required_text_kk');
    @endphp
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-{{$title_ru->element_id}}">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-{{$title_kk->element_id}}">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$title_ru->element_id}}"
             class="tab-pane fade in active">
            <h4 id="{{$title_ru->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_ru->id )}}"
            >
                {!! $title_ru->content !!}
            </h4>
            <p id="{{$text_ru->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_ru->id )}}"
            >
                {!! $text_ru->content !!}
            </p>
            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_ru->video_id}}"
                               data-url="{{route('text.update', $text_ru->id ) }}"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_ru->video_id != null ? $text_ru->video->filename : $text_ru->video_id}}"
                    >

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-{{$title_kk->element_id}}"

             class="tab-pane fade">
            <h4 id="{{$title_kk->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_kk->id )}}"
            >
                {!! $title_kk->content !!}
            </h4>
            <p id="{{$text_kk->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_kk->id )}}"
            >
                {!! $text_kk->content !!}
            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_kk->video_id}}"
                               data-url="{{route('text.update', $text_kk->id)}}"
                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_kk->video_id  != null ? $text_kk->video->filename : $text_kk->video_id}}">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="where_to_buy_equipments" class="form-modal" style="display:none">
    @php
        $title_ru =  $textItems->firstWhere('element_id', 'where_to_buy_equipments_ru');
        $title_kk =  $textItems->firstWhere('element_id', 'where_to_buy_equipments_kk');
        $text_ru =  $textItems->firstWhere('element_id', 'where_to_buy_equipments_text_ru');
        $text_kk =  $textItems->firstWhere('element_id', 'where_to_buy_equipments_text_kk');
    @endphp
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-{{$title_ru->element_id}}">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-{{$title_kk->element_id}}">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$title_ru->element_id}}"
             class="tab-pane fade in active">
            <h4 id="{{$title_ru->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_ru->id )}}"
            >
                {!! $title_ru->content !!}
            </h4>
            <p id="{{$text_ru->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_ru->id )}}"
            >
                {!! $text_ru->content !!}
            </p>
            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_ru->video_id}}"
                               data-url="{{route('text.update', $text_ru->id ) }}"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_ru->video_id != null ? $text_ru->video->filename : $text_ru->video_id}}"
                    >

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-{{$title_kk->element_id}}"

             class="tab-pane fade">
            <h4 id="{{$title_kk->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_kk->id )}}"
            >
                {!! $title_kk->content !!}
            </h4>
            <p id="{{$text_kk->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_kk->id )}}"
            >
                {!! $text_kk->content !!}
            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_kk->video_id}}"
                               data-url="{{route('text.update', $text_kk->id)}}"
                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_kk->video_id  != null ? $text_kk->video->filename : $text_kk->video_id}}">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="where_to_buy_equipments" class="form-modal" style="display:none">
    @php
        $title_ru =  $textItems->firstWhere('element_id', 'where_to_buy_equipments_ru');
        $title_kk =  $textItems->firstWhere('element_id', 'where_to_buy_equipments_kk');
        $text_ru =  $textItems->firstWhere('element_id', 'where_to_buy_equipments_text_ru');
        $text_kk =  $textItems->firstWhere('element_id', 'where_to_buy_equipments_text_kk');
    @endphp
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-{{$title_ru->element_id}}">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-{{$title_kk->element_id}}">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$title_ru->element_id}}"
             class="tab-pane fade in active">
            <h4 id="{{$title_ru->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_ru->id )}}"
            >
                {!! $title_ru->content !!}
            </h4>
            <p id="{{$text_ru->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_ru->id )}}"
            >
                {!! $text_ru->content !!}
            </p>
            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_ru->video_id}}"
                               data-url="{{route('text.update', $text_ru->id ) }}"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_ru->video_id != null ? $text_ru->video->filename : $text_ru->video_id}}"
                    >

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-{{$title_kk->element_id}}"

             class="tab-pane fade">
            <h4 id="{{$title_kk->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_kk->id )}}"
            >
                {!! $title_kk->content !!}
            </h4>
            <p id="{{$text_kk->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_kk->id )}}"
            >
                {!! $text_kk->content !!}
            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_kk->video_id}}"
                               data-url="{{route('text.update', $text_kk->id)}}"
                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_kk->video_id  != null ? $text_kk->video->filename : $text_kk->video_id}}">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="not_found_answers" class="form-modal" style="display:none">
    @php
        $title_ru =  $textItems->firstWhere('element_id', 'not_found_answers_ru');
        $title_kk =  $textItems->firstWhere('element_id', 'not_found_answers_kk');
        $text_ru =  $textItems->firstWhere('element_id', 'not_found_answers_text_ru');
        $text_kk =  $textItems->firstWhere('element_id', 'not_found_answers_text_kk');
    @endphp
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"
                              href="#russian-{{$title_ru->element_id}}">Русский</a>
        </li>
        <li><a data-toggle="tab"
               href="#kazakh-{{$title_kk->element_id}}">Қазақша</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$title_ru->element_id}}"
             class="tab-pane fade in active">
            <h4 id="{{$title_ru->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_ru->id )}}"
            >
                {!! $title_ru->content !!}
            </h4>
            <p id="{{$text_ru->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_ru->id )}}"
            >
                {!! $text_ru->content !!}
            </p>
            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_ru->video_id}}"
                               data-url="{{route('text.update', $text_ru->id ) }}"

                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_ru->video_id != null ? $text_ru->video->filename : $text_ru->video_id}}"
                    >

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>
        <div id="kazakh-{{$title_kk->element_id}}"

             class="tab-pane fade">
            <h4 id="{{$title_kk->element_id}}" contenteditable="false" class="title-primary text-center"
                data-url="{{route('text.update', $title_kk->id )}}"
            >
                {!! $title_kk->content !!}
            </h4>
            <p id="{{$text_kk->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $text_kk->id )}}"
            >
                {!! $text_kk->content !!}
            </p>


            <form class="col-lg-12">
                <div class="input-group">
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Выбрать &hellip; <input type="file" style="display: none;">
                        <input value="{{ $text_kk->video_id}}"
                               data-url="{{route('text.update', $text_kk->id)}}"
                               type="text" name="upload_id" style="display: none;">
                    </span>
                    </label>
                    <input type="text" name="filename" class="form-control"
                           value="{{$text_kk->video_id  != null ? $text_kk->video->filename : $text_kk->video_id}}">

                </div>
                <div class="progress-wrp">
                    <div class="progress-bar"></div>
                    <div class="status">0%</div>
                </div>
            </form>
        </div>

    </div>
</div>
