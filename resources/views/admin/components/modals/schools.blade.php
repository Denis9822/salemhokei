
<div id="schools_page__desc" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'schools_page__desc_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'schools_page__desc_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'schools_page__desc_ru')->element_id}}" class="tab-pane fade in active">
            <p id="{{$textItems->firstWhere('element_id', 'schools_page__desc_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'schools_page__desc_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'schools_page__desc_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'schools_page__desc_kk')->element_id}}" class="tab-pane fade">
            <p id="{{$textItems->firstWhere('element_id', 'schools_page__desc_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'schools_page__desc_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'schools_page__desc_kk')->content !!}
            </p>
        </div>

    </div>
</div>



<div id="schools_count" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'schools_count_title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'schools_count_title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'schools_count_title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'schools_count_ru')->element_id}}" contenteditable="false"
                class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'schools_count_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'schools_count_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'schools_count_title_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'schools_count_title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'schools_count_title_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'schools_count_title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'schools_count_kk')->element_id}}" contenteditable="false"
                class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'schools_count_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'schools_count_kk')->content !!}
            </h4>

            <p id="{{$textItems->firstWhere('element_id', 'schools_count_title_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'schools_count_title_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'schools_count_title_kk')->content !!}
            </p>
        </div>
    </div>
</div>


<div id="children_count" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'children_count_title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'children_count_title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'children_count_title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'children_count_ru')->element_id}}" contenteditable="false"
                class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'children_count_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'children_count_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'children_count_title_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'children_count_title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'children_count_title_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'children_count_title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'children_count_kk')->element_id}}" contenteditable="false"
                class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'children_count_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'children_count_kk')->content !!}
            </h4>

            <p id="{{$textItems->firstWhere('element_id', 'children_count_title_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'children_count_title_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'children_count_title_kk')->content !!}
            </p>
        </div>
    </div>
</div>


<div id="children_teams_count" class="form-modal" style="display:none">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#russian-{{$textItems->firstWhere('element_id', 'children_teams_count_title_ru')->element_id}}">Русский</a></li>
        <li><a data-toggle="tab" href="#kazakh-{{$textItems->firstWhere('element_id', 'children_teams_count_title_kk')->element_id}}">Қазақша</a></li>
    </ul>

    <div class="tab-content">
        <div id="russian-{{$textItems->firstWhere('element_id', 'children_teams_count_title_ru')->element_id}}" class="tab-pane fade in active">
            <h4 id="{{$textItems->firstWhere('element_id', 'children_teams_count_ru')->element_id}}" contenteditable="false"
                class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'children_teams_count_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'children_teams_count_ru')->content !!}
            </h4>
            <p id="{{$textItems->firstWhere('element_id', 'children_teams_count_title_ru')->element_id}}" contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'children_teams_count_title_ru')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'children_teams_count_title_ru')->content !!}
            </p>
        </div>
        <div id="kazakh-{{$textItems->firstWhere('element_id', 'children_teams_count_title_kk')->element_id}}" class="tab-pane fade">
            <h4 id="{{$textItems->firstWhere('element_id', 'children_teams_count_kk')->element_id}}" contenteditable="false"
                class="title-primary text-center"
                data-url="{{route('text.update', $textItems->firstWhere('element_id', 'children_teams_count_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'children_teams_count_kk')->content !!}
            </h4>

            <p id="{{$textItems->firstWhere('element_id', 'children_teams_count_title_kk')->element_id }}"  contenteditable="false"
               data-url="{{route('text.update', $textItems->firstWhere('element_id', 'children_teams_count_title_kk')->id )}}"
            >
                {!! $textItems->firstWhere('element_id', 'children_teams_count_title_kk')->content !!}
            </p>
        </div>
    </div>
</div>


