@extends("admin.layout")

@section('head')
    <link rel="stylesheet"
          href="/assets/admin/vendors/plupload-2.3.6/js/jquery.plupload.queue/css/jquery.plupload.queue.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="/assets/admin/css/main.css"/>
    <link rel="stylesheet" href="/assets/admin/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/assets/css/video.css" type="text/css" media="screen">
    <style>
        .daterangepicker.single.ltr .ranges,
        .daterangepicker.single.ltr .calendar {
            float: none;
        }
    </style>

    <link rel="stylesheet" href="/assets/libs/fancybox/dist/jquery.fancybox.min.css" type="text/css" media="screen"/>

@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        <li><a href="/admin/pages/">Все страницы</a></li>
                        <li class="active">{{ $item->name_ru }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/pages/" method="get">
                            <div class="input-group">
                                <input type="text" name="term" class="form-control" placeholder="Поиск">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Найти</button>
                            </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                @if (session('status'))
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="alert alert-success" role="alert">
                            <strong>{{ session('status') }}</strong>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>

    @include("admin.components.modals.faq")
@endsection


@section('scripts')

    <script src="/assets/libs/maskedinput/maskedinput.js"></script>
    <script src="/assets/libs/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/assets/libs/slick-carousel/slick/slick.js"></script>
    <script src="/assets/libs/chosen/chosen.jquery.js"></script>
    <script src="/assets/admin/js/upload.js"></script>
    <script src="/assets/libs/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/assets/admin/js/scripts.js"></script>

    <script>
        $(document).ready(function () {
            // $(".video-upload-input").select2({
            //     tags: true
            // });

            // We can attach the `fileselect` event to all file inputs on the page
            $(document).on('change', ':file', function (e) {
                var inputTarget = e.target;
                var input = $(this),
                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [numFiles, label]);

                var file = $(this)[0].files[0];
                var upload = new Upload(file, '{{route('video.store')}}', input);

                // maby check size or type here with upload.getSize() and upload.getType()

                // execute upload
                upload.doUpload();


            });

            $(':file').on('fileselect', function (event, numFiles, label) {
                console.log(event, numFiles, label)
                $(".progress-wrp").css({visibility: 'visible'});
            });

        });
        var saveText = function (e) {
            console.log(e.target);
            if (e.target.getAttribute('contenteditable') == "false") {
                e.target.setAttribute('contenteditable', true);
            } else {

                var contextText = e.target.textContent;
                // send request
                $.ajax({
                    dataType: 'json',
                    type: 'PUT',
                    url: e.target.getAttribute('data-url'),
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                    data: JSON.stringify({content: contextText}),
                    contentType: 'application/json; charset=utf-8',
                    success: function (data) { //change spelling here
                        console.log(data);
                        e.target.setAttribute('contenteditable', false);
                    },
                    error: function () {
                        console.log("error again!");
                        alert('Пожалуйста, введите только текст!');
                    }

                });
            }
        }

    </script>
@endsection
