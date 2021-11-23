@extends("app.layout.index")

@section("title",__("default.site_name").' | '.__("default.pages.header.about"))

@section("content")
    <div style="background-image: url(/assets/img/pattern1.png);
    background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>

    <section>
        <div class="container">

            <div class="about">
                <div class="about-item">
                    <div class="row row--multiline">
                        <div class="col-md-7 col-sm-6">
                            <div class="plain-text">
                                <h3>{!! __("default.pages.about.block_title_1") !!}</h3>
                                {!! __("default.pages.about.block_desc_1") !!}
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <a href="https://www.youtube.com/watch?v=cbe1x1Eh1Ds" data-fancybox="" title="" class="card__img video-cover">
                                <div class="video-cover__play"></div>
                                <img src="/assets/img/video_image.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="about-item">
                    <div class="row row--multiline">
                        <div class="col-md-7 col-sm-6">
                            <div class="plain-text">
                                <h3 style="
    text-align: right;
">{!! __("default.pages.about.block_title_2") !!}</h3>
                                {!! __("default.pages.about.block_desc_2") !!}
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <a href="https://www.youtube.com/watch?v=cbe1x1Eh1Ds" data-fancybox="" title="" class="card__img video-cover">
                                <div class="video-cover__play"></div>
                                <img src="/assets/img/articles/1.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="about-item">
                    <h3 style="
    display: flex;
    align-items: center;
    justify-content: center;
"><img src="/assets/img/human1.svg" alt="" style="
    width: 3.3em;
    transform: translateY(0.4em);
"> {!! __("default.pages.about.block_title_3") !!} </h3>
                    <div class="plain-text plain-text__20">
                        {!! __("default.pages.about.block_desc_3") !!}
                    </div>
                </div>
                <div class="about-item">
                    <h3 style="
    display: flex;
    align-items: center;
    position: relative;
"><span style="
    padding-left: 1.8em;
    padding-top: 1.4em;
">{!! __("default.pages.about.block_title_5") !!} <img src="/assets/img/girl-icon.svg" alt="" style="
						
    width: 2.6em;
    margin-left: 0.2em;
    /* transform: translateY(-1.3em); */
"></h3> 
																												 
                    <div class="plain-text plain-text__20">
                        {!! __("default.pages.about.block_desc_5") !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="field-plan">
        <div class="container">
            <h2 class="title-primary text-center">{!! __("default.pages.about.hockey_infrastructure_title") !!}</h2>
            <div class="row row--multiline">
                <div class="col-sm-6 col-md-3 col-xs-6">
                    <a href="#hockey_goal" title="{{ __("default.pages.main.hockey_goal_title") }}" data-fancybox="" class="field-item"><img src="/assets/img/field/field-item-1.svg" alt=""></a>
                    <a href="#referee_field" title="{{ __("default.pages.main.referee_field_title") }}" data-fancybox="" class="field-item"><img src="/assets/img/field/field-item-2.svg" alt=""></a>
                    <a href="#washer_field" title="{{ __("default.pages.main.washer_field_title") }}" data-fancybox="" class="field-item"><img src="/assets/img/field/field-item-3.svg" alt=""></a>
                </div>
                <div class="col-md-6">
                    <div class="field-item-main">
                        <svg xmlns="http://www.w3.org/2000/svg" width="247" height="322" viewBox="0 0 247 322" fill="none">
                            <g id="field-item-field">
                                <g id="Group">
                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M79.7813 10.8477H167.935C195.224 10.8477 217.551 33.1747 217.551 60.463V261.148C217.551 288.437 195.224 310.763 167.935 310.763H79.7813C52.4927 310.763 30.166 288.437 30.166 261.148V60.463C30.166 33.1747 52.4927 10.8477 79.7813 10.8477Z" fill="#BBE5FB"/>
                                </g>
                                <path id="Vector_2" fill-rule="evenodd" clip-rule="evenodd" d="M135.904 47.748V47.5956C135.904 47.2844 135.853 46.9922 135.771 46.6936C135.06 44.1026 131.338 42.1211 126.848 42.1211H120.808C115.804 42.1211 111.752 44.5726 111.752 47.5956V47.6334V47.9004H135.904V47.748V47.748Z" fill="#C7EAFB"/>
                                <path id="Vector_3" fill-rule="evenodd" clip-rule="evenodd" d="M127.09 47.8568L135.829 39.1182L135.67 38.9658L126.938 47.698L127.09 47.8568Z" fill="#E1F3FC"/>
                                <path id="Vector_4" fill-rule="evenodd" clip-rule="evenodd" d="M124.129 47.8448L134.354 37.6202L134.195 37.4678L123.971 47.6924L124.129 47.8448Z" fill="#E1F3FC"/>
                                <path id="Vector_5" fill-rule="evenodd" clip-rule="evenodd" d="M125.126 47.9391L134.831 38.2348L134.678 38.0825L124.968 47.7868L125.126 47.9391Z" fill="#E1F3FC"/>
                                <path id="Vector_6" fill-rule="evenodd" clip-rule="evenodd" d="M125.704 48.1556L134.957 38.9024L134.805 38.75L125.552 48.0033L125.704 48.1556Z" fill="#E1F3FC"/>
                                <path id="Vector_7" fill-rule="evenodd" clip-rule="evenodd" d="M128.671 48.0094L136.019 40.6676L135.866 40.5088L128.519 47.8567L128.671 48.0094Z" fill="#E1F3FC"/>
                                <path id="Vector_8" fill-rule="evenodd" clip-rule="evenodd" d="M127.707 48.0344L136.408 39.3403L136.249 39.188L127.555 47.882L127.707 48.0344Z" fill="#E1F3FC"/>
                                <path id="Vector_9" fill-rule="evenodd" clip-rule="evenodd" d="M121.279 47.6602L132.996 35.9493L132.844 35.7969L121.127 47.5078L121.279 47.6602Z" fill="#E1F3FC"/>
                                <path id="Vector_10" fill-rule="evenodd" clip-rule="evenodd" d="M118.211 47.8247L130.792 35.2437L130.639 35.0913L118.059 47.6723L118.211 47.8247Z" fill="#E1F3FC"/>
                                <path id="Vector_11" fill-rule="evenodd" clip-rule="evenodd" d="M119.277 47.781L131.719 35.3399L131.566 35.1875L119.125 47.6286L119.277 47.781Z" fill="#E1F3FC"/>
                                <path id="Vector_12" fill-rule="evenodd" clip-rule="evenodd" d="M120.027 47.8262L132.163 35.6962L132.011 35.5435L119.875 47.6738L120.027 47.8262Z" fill="#E1F3FC"/>
                                <path id="Vector_13" fill-rule="evenodd" clip-rule="evenodd" d="M123.17 47.7226L133.814 37.0851L133.655 36.9263L123.018 47.5702L123.17 47.7226Z" fill="#E1F3FC"/>
                                <path id="Vector_14" fill-rule="evenodd" clip-rule="evenodd" d="M122.447 47.5074L133.472 36.4825L133.313 36.3301L122.294 47.355L122.447 47.5074Z" fill="#E1F3FC"/>
                                <path id="Vector_15" fill-rule="evenodd" clip-rule="evenodd" d="M115.155 47.8498L128.015 34.9893L127.863 34.8369L115.003 47.6971L115.155 47.8498Z" fill="#E1F3FC"/>
                                <path id="Vector_16" fill-rule="evenodd" clip-rule="evenodd" d="M112.159 47.6669L124.74 35.086L124.588 34.9336L112.007 47.5146L112.159 47.6669Z" fill="#E1F3FC"/>
                                <path id="Vector_17" fill-rule="evenodd" clip-rule="evenodd" d="M113.295 47.698L126.086 34.9014L125.933 34.749L113.143 47.5392L113.295 47.698Z" fill="#E1F3FC"/>
                                <path id="Vector_18" fill-rule="evenodd" clip-rule="evenodd" d="M114.324 47.6021L127.115 34.8052L126.962 34.6528L114.172 47.4436L114.324 47.6021Z" fill="#E1F3FC"/>
                                <path id="Vector_19" fill-rule="evenodd" clip-rule="evenodd" d="M117.327 47.6342L129.629 35.3331L129.476 35.1743L117.175 47.4818L117.327 47.6342Z" fill="#E1F3FC"/>
                                <path id="Vector_20" fill-rule="evenodd" clip-rule="evenodd" d="M116.294 47.7291L129.186 34.837L129.034 34.6846L116.142 47.5768L116.294 47.7291Z" fill="#E1F3FC"/>
                                <path id="Vector_21" fill-rule="evenodd" clip-rule="evenodd" d="M111.498 45.5066L121.786 35.212L121.633 35.0596L111.339 45.3542L111.498 45.5066Z" fill="#E1F3FC"/>
                                <path id="Vector_22" fill-rule="evenodd" clip-rule="evenodd" d="M111.617 42.6356L119.689 34.5639L119.537 34.4116L111.465 42.4832L111.617 42.6356Z" fill="#E1F3FC"/>
                                <path id="Vector_23" fill-rule="evenodd" clip-rule="evenodd" d="M111.092 44.0332L120.345 34.7803L120.193 34.6279L110.934 43.8808L111.092 44.0332Z" fill="#E1F3FC"/>
                                <path id="Vector_24" fill-rule="evenodd" clip-rule="evenodd" d="M111.498 44.6308L121.125 34.9966L120.973 34.8442L111.339 44.4784L111.498 44.6308Z" fill="#E1F3FC"/>
                                <path id="Vector_25" fill-rule="evenodd" clip-rule="evenodd" d="M112.209 46.7512L124.028 34.9324L123.875 34.7739L112.057 46.5923L112.209 46.7512Z" fill="#E1F3FC"/>
                                <path id="Vector_26" fill-rule="evenodd" clip-rule="evenodd" d="M113.119 44.9032L123.166 34.85L123.013 34.6973L112.96 44.7505L113.119 44.9032Z" fill="#E1F3FC"/>
                                <path id="Vector_27" fill-rule="evenodd" clip-rule="evenodd" d="M111.735 41.5817L119.184 34.1321L119.032 33.9736L111.582 41.4294L111.735 41.5817Z" fill="#E1F3FC"/>
                                <path id="Vector_28" fill-rule="evenodd" clip-rule="evenodd" d="M111.783 40.1411L116.984 34.9464L116.832 34.7876L111.631 39.9887L111.783 40.1411Z" fill="#E1F3FC"/>
                                <path id="Vector_29" fill-rule="evenodd" clip-rule="evenodd" d="M111.665 40.998L118.321 34.3487L118.169 34.1963L111.513 40.8456L111.665 40.998Z" fill="#E1F3FC"/>
                                <path id="Vector_30" fill-rule="evenodd" clip-rule="evenodd" d="M132.185 48.0468L136.097 44.1348L135.945 43.9824L132.032 47.8945L132.185 48.0468Z" fill="#E1F3FC"/>
                                <path id="Vector_31" fill-rule="evenodd" clip-rule="evenodd" d="M129.737 47.7416L136.214 41.2637L136.062 41.1113L129.584 47.5892L129.737 47.7416Z" fill="#E1F3FC"/>
                                <path id="Vector_32" fill-rule="evenodd" clip-rule="evenodd" d="M130.626 47.716L136.139 42.2101L135.986 42.0513L130.474 47.5636L130.626 47.716Z" fill="#E1F3FC"/>
                                <path id="Vector_33" fill-rule="evenodd" clip-rule="evenodd" d="M131.314 48.0398L136.719 42.6353L136.567 42.4829L131.162 47.8813L131.314 48.0398Z" fill="#E1F3FC"/>
                                <path id="Vector_34" fill-rule="evenodd" clip-rule="evenodd" d="M133.828 48.1362L135.593 46.3707L135.441 46.2183L133.676 47.9838L133.828 48.1362Z" fill="#E1F3FC"/>
                                <path id="Vector_35" fill-rule="evenodd" clip-rule="evenodd" d="M133.105 47.9211L135.181 45.8443L135.029 45.6919L132.952 47.7622L133.105 47.9211Z" fill="#E1F3FC"/>
                                <path id="Vector_36" fill-rule="evenodd" clip-rule="evenodd" d="M29.4121 207.999H218.309V210.985H29.4121V207.999Z" fill="#0092D5"/>
                                <path id="Vector_37" fill-rule="evenodd" clip-rule="evenodd" d="M29.4121 110.626H218.309V113.612H29.4121V110.626Z" fill="#0092D5"/>
                                <path id="Vector_38" fill-rule="evenodd" clip-rule="evenodd" d="M29.7812 161.811H121.152C121.035 161.498 120.967 161.16 120.967 160.806C120.968 160.452 121.035 160.114 121.152 159.801H29.7812V161.811V161.811Z" fill="#ED3237"/>
                                <path id="Vector_39" fill-rule="evenodd" clip-rule="evenodd" d="M126.565 161.811H217.938V159.801H126.565C126.681 160.114 126.749 160.452 126.749 160.806C126.749 161.16 126.681 161.498 126.565 161.811V161.811Z" fill="#ED3237"/>
                                <path id="Vector_40" fill-rule="evenodd" clip-rule="evenodd" d="M121.574 161.653C121.919 162.58 122.81 163.242 123.857 163.242C124.905 163.242 125.796 162.58 126.141 161.653C126.239 161.388 126.296 161.103 126.296 160.804C126.296 160.506 126.239 160.22 126.141 159.956C125.795 159.028 124.905 158.367 123.857 158.367C122.81 158.367 121.919 159.028 121.575 159.956C121.476 160.22 121.42 160.506 121.42 160.804C121.42 161.103 121.476 161.388 121.574 161.653V161.653Z" fill="#ED3237"/>
                                <path id="Vector_41" fill-rule="evenodd" clip-rule="evenodd" d="M123.858 189.011C108.305 189.011 95.6517 176.357 95.6517 160.805C95.6517 145.253 108.305 132.601 123.858 132.601C139.412 132.601 152.066 145.253 152.066 160.805C152.066 176.357 139.412 189.011 123.858 189.011ZM153.082 160.805C153.082 144.691 139.972 131.583 123.858 131.583C107.745 131.583 94.6357 144.691 94.6357 160.805C94.6357 176.919 107.745 190.028 123.858 190.028C139.972 190.028 153.082 176.919 153.082 160.805Z" fill="#ED3237"/>
                                <path id="Vector_42" fill-rule="evenodd" clip-rule="evenodd" d="M168.812 245.271V245.179H168.72H164.124V245.365H168.625V251.482H168.812V245.271Z" fill="#ED3237"/>
                                <path id="Vector_43" fill-rule="evenodd" clip-rule="evenodd" d="M168.812 241.545V241.637H168.72H164.124V241.45H168.625V235.333H168.812V241.545Z" fill="#ED3237"/>
                                <path id="Vector_44" fill-rule="evenodd" clip-rule="evenodd" d="M171.205 245.271V245.179H171.297H175.893V245.365H171.39V251.482H171.205V245.271Z" fill="#ED3237"/>
                                <path id="Vector_45" fill-rule="evenodd" clip-rule="evenodd" d="M171.205 241.545V241.637H171.297H175.893V241.45H171.39V235.333H171.205V241.545Z" fill="#ED3237"/>
                                <path id="Vector_46" fill-rule="evenodd" clip-rule="evenodd" d="M170.01 259.384C161.2 259.384 154.034 252.218 154.034 243.408C154.034 234.6 161.2 227.432 170.01 227.432C178.818 227.432 185.984 234.6 185.984 243.408C185.984 252.218 178.818 259.384 170.01 259.384ZM186.561 243.408C186.561 234.282 179.135 226.858 170.01 226.858C160.883 226.858 153.459 234.282 153.459 243.408C153.459 252.536 160.883 259.96 170.01 259.96C179.135 259.96 186.56 252.536 186.561 243.408Z" fill="#ED3237"/>
                                <path id="Vector_47" fill-rule="evenodd" clip-rule="evenodd" d="M171.143 243.407C171.143 242.782 170.637 242.276 170.01 242.276C169.382 242.276 168.877 242.782 168.877 243.407C168.877 244.036 169.382 244.541 170.01 244.541C170.637 244.541 171.143 244.036 171.143 243.407Z" fill="#ED3237"/>
                                <path id="Vector_48" fill-rule="evenodd" clip-rule="evenodd" d="M147.846 244.991H153.748V245.423H147.846V244.991Z" fill="#ED3237"/>
                                <path id="Vector_49" fill-rule="evenodd" clip-rule="evenodd" d="M147.846 241.394H153.748V241.825H147.846V241.394Z" fill="#ED3237"/>
                                <path id="Vector_50" fill-rule="evenodd" clip-rule="evenodd" d="M186.271 244.991H192.174V245.423H186.271V244.991Z" fill="#ED3237"/>
                                <path id="Vector_51" fill-rule="evenodd" clip-rule="evenodd" d="M186.271 241.394H192.174V241.825H186.271V241.394Z" fill="#ED3237"/>
                                <path id="Vector_52" fill-rule="evenodd" clip-rule="evenodd" d="M76.5156 245.271V245.179H76.4231H71.8271V245.365H76.3272V251.482H76.5156V245.271Z" fill="#ED3237"/>
                                <path id="Vector_53" fill-rule="evenodd" clip-rule="evenodd" d="M76.5156 241.545V241.637H76.4231H71.8271V241.45H76.3272V235.333H76.5156V241.545Z" fill="#ED3237"/>
                                <path id="Vector_54" fill-rule="evenodd" clip-rule="evenodd" d="M78.9043 245.271V245.179H78.9972H83.5922V245.365H79.0887V251.482H78.9043V245.271Z" fill="#ED3237"/>
                                <path id="Vector_55" fill-rule="evenodd" clip-rule="evenodd" d="M78.9043 241.545V241.637H78.9972H83.5922V241.45H79.0887V235.333H78.9043V241.545Z" fill="#ED3237"/>
                                <path id="Vector_56" fill-rule="evenodd" clip-rule="evenodd" d="M77.7107 259.384C68.8999 259.384 61.735 252.218 61.735 243.408C61.735 234.6 68.8999 227.432 77.7107 227.432C86.5201 227.432 93.6857 234.6 93.6857 243.408C93.6861 252.218 86.5201 259.384 77.7107 259.384ZM94.2609 243.408C94.2609 234.282 86.836 226.858 77.7107 226.858C68.584 226.858 61.1592 234.282 61.1592 243.408C61.1592 252.536 68.584 259.96 77.7107 259.96C86.836 259.96 94.2609 252.536 94.2609 243.408Z" fill="#ED3237"/>
                                <path id="Vector_57" fill-rule="evenodd" clip-rule="evenodd" d="M78.8437 243.407C78.8437 242.782 78.3362 242.276 77.7104 242.276C77.0833 242.276 76.5771 242.782 76.5771 243.407C76.5775 244.036 77.0833 244.541 77.7104 244.541C78.3362 244.541 78.8437 244.036 78.8437 243.407Z" fill="#ED3237"/>
                                <path id="Vector_58" fill-rule="evenodd" clip-rule="evenodd" d="M55.5459 244.991H61.4473V245.423H55.5459V244.991Z" fill="#ED3237"/>
                                <path id="Vector_59" fill-rule="evenodd" clip-rule="evenodd" d="M55.5459 241.394H61.4473V241.825H55.5459V241.394Z" fill="#ED3237"/>
                                <path id="Vector_60" fill-rule="evenodd" clip-rule="evenodd" d="M93.9756 244.991H99.877V245.423H93.9756V244.991Z" fill="#ED3237"/>
                                <path id="Vector_61" fill-rule="evenodd" clip-rule="evenodd" d="M93.9756 241.394H99.877V241.825H93.9756V241.394Z" fill="#ED3237"/>
                                <path id="Vector_62" fill-rule="evenodd" clip-rule="evenodd" d="M168.812 80.0649V79.9741H168.72H164.124V80.1581H168.625V86.2768H168.812V80.0649Z" fill="#ED3237"/>
                                <path id="Vector_63" fill-rule="evenodd" clip-rule="evenodd" d="M168.812 76.3386V76.4312H168.72H164.124V76.2441H168.625V70.1274H168.812V76.3386Z" fill="#ED3237"/>
                                <path id="Vector_64" fill-rule="evenodd" clip-rule="evenodd" d="M171.205 80.0649V79.9741H171.297H175.893V80.1581H171.39V86.2768H171.205V80.0649Z" fill="#ED3237"/>
                                <path id="Vector_65" fill-rule="evenodd" clip-rule="evenodd" d="M171.205 76.3386V76.4312H171.297H175.893V76.2441H171.39V70.1274H171.205V76.3386Z" fill="#ED3237"/>
                                <path id="Vector_66" fill-rule="evenodd" clip-rule="evenodd" d="M170.01 94.1762C161.2 94.1762 154.034 87.0113 154.034 78.2012C154.034 69.3928 161.2 62.2255 170.01 62.2255C178.818 62.2255 185.984 69.3928 185.984 78.2012C185.984 87.0113 178.818 94.1765 170.01 94.1762ZM186.561 78.2012C186.561 69.0745 179.135 61.6514 170.01 61.6514C160.883 61.6514 153.459 69.0745 153.459 78.2012C153.459 87.3293 160.883 94.752 170.01 94.752C179.135 94.752 186.56 87.3296 186.561 78.2012Z" fill="#ED3237"/>
                                <path id="Vector_67" fill-rule="evenodd" clip-rule="evenodd" d="M171.143 78.2024C171.143 77.5759 170.637 77.0698 170.01 77.0698C169.382 77.0698 168.877 77.5759 168.877 78.2024C168.877 78.8289 169.382 79.335 170.01 79.335C170.637 79.335 171.143 78.8293 171.143 78.2024Z" fill="#ED3237"/>
                                <path id="Vector_68" fill-rule="evenodd" clip-rule="evenodd" d="M147.846 79.7866H153.748V80.2162H147.846V79.7866Z" fill="#ED3237"/>
                                <path id="Vector_69" fill-rule="evenodd" clip-rule="evenodd" d="M147.846 76.188H153.748V76.6196H147.846V76.188Z" fill="#ED3237"/>
                                <path id="Vector_70" fill-rule="evenodd" clip-rule="evenodd" d="M186.271 79.7866H192.174V80.2162H186.271V79.7866Z" fill="#ED3237"/>
                                <path id="Vector_71" fill-rule="evenodd" clip-rule="evenodd" d="M186.271 76.188H192.174V76.6196H186.271V76.188Z" fill="#ED3237"/>
                                <path id="Vector_72" fill-rule="evenodd" clip-rule="evenodd" d="M76.5147 80.0649V79.9741H76.4222H71.8271V80.1581H76.3263V86.2768H76.5147V80.0649Z" fill="#ED3237"/>
                                <path id="Vector_73" fill-rule="evenodd" clip-rule="evenodd" d="M76.5147 76.3386V76.4312H76.4222H71.8271V76.2441H76.3263V70.1274H76.5147V76.3386Z" fill="#ED3237"/>
                                <path id="Vector_74" fill-rule="evenodd" clip-rule="evenodd" d="M78.9043 80.0649V79.9741H78.9972H83.5922V80.1581H79.0887V86.2768H78.9043V80.0649Z" fill="#ED3237"/>
                                <path id="Vector_75" fill-rule="evenodd" clip-rule="evenodd" d="M78.9043 76.3386V76.4312H78.9972H83.5922V76.2441H79.0887V70.1274H78.9043V76.3386Z" fill="#ED3237"/>
                                <path id="Vector_76" fill-rule="evenodd" clip-rule="evenodd" d="M77.7107 94.1762C68.8999 94.1762 61.7358 87.0113 61.7358 78.2012C61.7358 69.3928 68.8999 62.2255 77.7107 62.2255C86.5201 62.2255 93.6857 69.3928 93.6857 78.2012C93.6861 87.0113 86.5201 94.1765 77.7107 94.1762ZM94.2609 78.2012C94.2609 69.0745 86.836 61.6514 77.7107 61.6514C68.584 61.6514 61.1592 69.0745 61.1592 78.2012C61.1592 87.3293 68.584 94.752 77.7107 94.752C86.836 94.752 94.2609 87.3296 94.2609 78.2012Z" fill="#ED3237"/>
                                <path id="Vector_77" fill-rule="evenodd" clip-rule="evenodd" d="M78.843 78.2024C78.843 77.5759 78.3356 77.0698 77.7098 77.0698C77.0826 77.0698 76.5771 77.5759 76.5771 78.2024C76.5771 78.8289 77.0826 79.335 77.7098 79.335C78.3356 79.335 78.843 78.8293 78.843 78.2024Z" fill="#ED3237"/>
                                <path id="Vector_78" fill-rule="evenodd" clip-rule="evenodd" d="M55.5459 79.7866H61.4487V80.2162H55.5459V79.7866Z" fill="#ED3237"/>
                                <path id="Vector_79" fill-rule="evenodd" clip-rule="evenodd" d="M55.5459 76.188H61.4487V76.6196H55.5459V76.188Z" fill="#ED3237"/>
                                <path id="Vector_80" fill-rule="evenodd" clip-rule="evenodd" d="M93.9756 79.7866H99.877V80.2162H93.9756V79.7866Z" fill="#ED3237"/>
                                <path id="Vector_81" fill-rule="evenodd" clip-rule="evenodd" d="M93.9756 76.188H99.877V76.6196H93.9756V76.188Z" fill="#ED3237"/>
                                <path id="Vector_82" fill-rule="evenodd" clip-rule="evenodd" d="M169.86 200.844C169.86 199.733 168.962 198.834 167.854 198.834C166.744 198.834 165.845 199.733 165.845 200.844C165.845 201.952 166.744 202.85 167.854 202.85C168.962 202.85 169.86 201.952 169.86 200.844Z" fill="#ED3237"/>
                                <path id="Vector_83" fill-rule="evenodd" clip-rule="evenodd" d="M81.8735 200.844C81.8735 199.733 80.9753 198.834 79.8662 198.834C78.7574 198.834 77.8584 199.733 77.8584 200.844C77.8584 201.952 78.7574 202.85 79.8662 202.85C80.9753 202.85 81.8735 201.952 81.8735 200.844Z" fill="#ED3237"/>
                                <path id="Vector_84" fill-rule="evenodd" clip-rule="evenodd" d="M169.86 120.768C169.86 119.659 168.962 118.759 167.854 118.759C166.744 118.759 165.845 119.659 165.845 120.768C165.845 121.877 166.744 122.776 167.854 122.776C168.962 122.776 169.86 121.877 169.86 120.768Z" fill="#ED3237"/>
                                <path id="Vector_85" fill-rule="evenodd" clip-rule="evenodd" d="M81.8735 120.768C81.8735 119.659 80.9753 118.759 79.8662 118.759C78.7574 118.759 77.8584 119.659 77.8584 120.768C77.8584 121.877 78.7574 122.776 79.8662 122.776C80.9753 122.776 81.8735 121.877 81.8735 120.768Z" fill="#ED3237"/>
                                <path id="Vector_86" fill-rule="evenodd" clip-rule="evenodd" d="M30.6084 47.7246H217.108V48.7677H30.6084V47.7246Z" fill="#ED3237"/>
                                <path id="Vector_87" fill-rule="evenodd" clip-rule="evenodd" d="M30.6084 273.023H217.108V274.065H30.6084V273.023Z" fill="#ED3237"/>
                                <path id="Vector_88" fill-rule="evenodd" clip-rule="evenodd" d="M28.668 260.851C28.668 289.248 53.2928 312.353 83.5656 312.353H164.146C194.419 312.353 219.047 289.248 219.047 260.851V60.7564C219.047 32.3603 194.419 9.25684 164.146 9.25684H83.5656C53.2931 9.25684 28.668 32.3603 28.668 60.7564V260.851ZM30.877 60.7564C30.877 33.5303 54.5138 11.3771 83.5656 11.3771H164.146C193.198 11.3771 216.834 33.5303 216.834 60.7564V260.851C216.834 288.078 193.198 310.23 164.146 310.23H83.5656C54.5138 310.23 30.877 288.078 30.877 260.851V60.7564Z" fill="#0A63AD"/>
                                <path id="Vector_89" fill-rule="evenodd" clip-rule="evenodd" d="M22.8555 266.962C22.8555 297.094 48.9847 321.611 81.1067 321.611H166.61C198.732 321.611 224.864 297.094 224.864 266.962V54.6461C224.864 24.5147 198.732 0 166.61 0H81.107C48.9846 0 22.8555 24.5147 22.8555 54.6464V266.962V266.962ZM25.2002 54.6461C25.2002 25.7565 50.2802 2.24989 81.1067 2.24989H166.61C197.437 2.24989 222.517 25.7565 222.517 54.6464V266.962C222.517 295.853 197.437 319.358 166.61 319.358H81.107C50.2801 319.358 25.2002 295.853 25.2002 266.962V54.6461V54.6461Z" fill="#FEFEFE"/>
                                <path id="Vector_90" d="M4 69.75H10C11.7949 69.75 13.25 71.2051 13.25 73V150C13.25 151.795 11.7949 153.25 10 153.25H4C2.20507 153.25 0.75 151.795 0.75 150V73C0.75 71.2051 2.20507 69.75 4 69.75ZM4 164.75H10C11.7949 164.75 13.25 166.205 13.25 168V245C13.25 246.795 11.7949 248.25 10 248.25H4C2.20507 248.25 0.75 246.795 0.75 245V168C0.75 166.205 2.20507 164.75 4 164.75Z" stroke="white" stroke-width="1.5"/>
                                <path id="Vector_91" d="M237 69.75H243C244.795 69.75 246.25 71.2051 246.25 73V134C246.25 135.795 244.795 137.25 243 137.25H237C235.205 137.25 233.75 135.795 233.75 134V73C233.75 71.2051 235.205 69.75 237 69.75ZM237 147.75H243C244.795 147.75 246.25 149.205 246.25 151V166C246.25 167.795 244.795 169.25 243 169.25H237C235.205 169.25 233.75 167.795 233.75 166V151C233.75 149.205 235.205 147.75 237 147.75ZM237 179.75H243C244.795 179.75 246.25 181.205 246.25 183V245C246.25 246.795 244.795 248.25 243 248.25H237C235.205 248.25 233.75 246.795 233.75 245V183C233.75 181.205 235.205 179.75 237 179.75Z" stroke="white" stroke-width="1.5"/>
                                <path id="Vector_92" fill-rule="evenodd" clip-rule="evenodd" d="M106.853 62.8651C106.853 64.1942 112.563 70.7429 123.861 70.7429C133.258 70.7429 138.201 66.4193 139.491 65.0936C140.012 64.5572 140.886 63.5531 140.868 62.8494C140.862 62.5644 140.865 53.186 140.868 48.2666V47.7183H140.32H107.401H106.853V48.2666V62.8651V62.8651ZM107.401 48.8141H140.32L139.773 48.2666C139.772 48.8482 139.762 62.5137 139.773 62.878V62.8586C139.639 63.8266 134.517 69.647 123.861 69.647C113.495 69.647 108.184 63.8327 107.945 62.8192L107.949 62.8651V48.2666L107.401 48.8141V48.8141Z" fill="#ED3237"/>
                                <path id="Vector_93" fill-rule="evenodd" clip-rule="evenodd" d="M136.07 62.291H140.638V63.4787H136.07V62.291Z" fill="#ED3237"/>
                                <path id="Vector_94" fill-rule="evenodd" clip-rule="evenodd" d="M107.749 62.291H112.317V63.4787H107.749V62.291Z" fill="#ED3237"/>
                                <path id="Vector_95" fill-rule="evenodd" clip-rule="evenodd" d="M112.448 48.7678C112.113 47.9005 111.927 46.9519 111.927 45.9543V43.1004C111.927 39.0509 114.98 35.7664 118.746 35.7664H128.976C132.741 35.7664 135.794 39.0509 135.794 43.1007V45.9543C135.794 46.9519 135.608 47.9018 135.272 48.7678C136.536 47.4797 137.314 45.7635 137.314 43.8717V41.0597C137.314 37.0674 133.872 33.8291 129.627 33.8291H118.095C113.848 33.8291 110.406 37.0673 110.406 41.06V43.8717C110.406 45.7621 111.185 47.4784 112.448 48.7678V48.7678Z" fill="#E1F3FC"/>
                                <path id="Vector_96" fill-rule="evenodd" clip-rule="evenodd" d="M135.936 47.7489H111.783L112.466 48.2584V47.9921V47.9499C112.466 45.2154 116.223 42.9914 120.84 42.9914H126.878C131.001 42.9914 134.475 44.7429 135.134 47.1561C135.214 47.4459 135.251 47.7071 135.251 47.9499V48.103V48.2584L135.936 47.7489V47.7489ZM136.62 48.103V47.9499C136.62 47.6373 136.572 47.3119 136.474 46.952C135.685 44.0661 131.649 41.9717 126.878 41.9717H120.84C115.468 41.9717 111.1 44.6532 111.1 47.9499V47.9921V48.2584V48.7679H111.783H135.936H136.62V48.2584V48.103V48.103Z" fill="#E1F3FC"/>
                                <path id="Vector_97" fill-rule="evenodd" clip-rule="evenodd" d="M120.699 48.072L111.967 39.3388L112.12 39.1851L120.853 47.9186L120.699 48.072Z" fill="#E1F3FC"/>
                                <path id="Vector_98" fill-rule="evenodd" clip-rule="evenodd" d="M123.662 48.0629L113.438 37.8379L113.592 37.6855L123.816 47.9091L123.662 48.0629Z" fill="#E1F3FC"/>
                                <path id="Vector_99" fill-rule="evenodd" clip-rule="evenodd" d="M122.664 48.1597L112.96 38.4558L113.114 38.3018L122.818 48.0059L122.664 48.1597Z" fill="#E1F3FC"/>
                                <path id="Vector_100" fill-rule="evenodd" clip-rule="evenodd" d="M122.089 48.3757L112.834 39.1229L112.989 38.9688L122.241 48.2217L122.089 48.3757Z" fill="#E1F3FC"/>
                                <path id="Vector_101" fill-rule="evenodd" clip-rule="evenodd" d="M119.119 48.2284L111.773 40.8825L111.927 40.7295L119.273 48.076L119.119 48.2284Z" fill="#E1F3FC"/>
                                <path id="Vector_102" fill-rule="evenodd" clip-rule="evenodd" d="M120.086 48.2546L111.387 39.5554L111.54 39.4023L120.238 48.1009L120.086 48.2546Z" fill="#E1F3FC"/>
                                <path id="Vector_103" fill-rule="evenodd" clip-rule="evenodd" d="M126.512 47.8801L114.797 36.1651L114.949 36.0117L126.664 47.7267L126.512 47.8801Z" fill="#E1F3FC"/>
                                <path id="Vector_104" fill-rule="evenodd" clip-rule="evenodd" d="M129.582 48.0439L117 35.4609L117.154 35.3071L129.735 47.8898L129.582 48.0439Z" fill="#E1F3FC"/>
                                <path id="Vector_105" fill-rule="evenodd" clip-rule="evenodd" d="M128.513 48.0009L116.069 35.5569L116.222 35.4053L128.664 47.8464L128.513 48.0009Z" fill="#E1F3FC"/>
                                <path id="Vector_106" fill-rule="evenodd" clip-rule="evenodd" d="M127.762 48.0458L115.631 35.9131L115.783 35.7607L127.915 47.891L127.762 48.0458Z" fill="#E1F3FC"/>
                                <path id="Vector_107" fill-rule="evenodd" clip-rule="evenodd" d="M124.62 47.9413L113.98 37.3L114.134 37.147L124.774 47.7882L124.62 47.9413Z" fill="#E1F3FC"/>
                                <path id="Vector_108" fill-rule="evenodd" clip-rule="evenodd" d="M125.343 47.7246L114.322 36.7016L114.476 36.5493L125.496 47.5708L125.343 47.7246Z" fill="#E1F3FC"/>
                                <path id="Vector_109" fill-rule="evenodd" clip-rule="evenodd" d="M132.631 48.0687L119.772 35.2099L119.926 35.0562L132.786 47.9157L132.631 48.0687Z" fill="#E1F3FC"/>
                                <path id="Vector_110" fill-rule="evenodd" clip-rule="evenodd" d="M135.634 47.8854L123.051 35.3038L123.205 35.1494L135.788 47.7324L135.634 47.8854Z" fill="#E1F3FC"/>
                                <path id="Vector_111" fill-rule="evenodd" clip-rule="evenodd" d="M134.496 47.9128L121.706 35.1216L121.86 34.9683L134.65 47.7583L134.496 47.9128Z" fill="#E1F3FC"/>
                                <path id="Vector_112" fill-rule="evenodd" clip-rule="evenodd" d="M133.467 47.816L120.676 35.0259L120.83 34.8735L133.62 47.663L133.467 47.816Z" fill="#E1F3FC"/>
                                <path id="Vector_113" fill-rule="evenodd" clip-rule="evenodd" d="M130.464 47.8544L118.159 35.5492L118.312 35.3955L130.619 47.7007L130.464 47.8544Z" fill="#E1F3FC"/>
                                <path id="Vector_114" fill-rule="evenodd" clip-rule="evenodd" d="M131.497 47.9492L118.603 35.0549L118.755 34.9019L131.65 47.7944L131.497 47.9492Z" fill="#E1F3FC"/>
                                <path id="Vector_115" fill-rule="evenodd" clip-rule="evenodd" d="M136.294 45.7255L126.001 35.4329L126.153 35.2788L136.447 45.5721L136.294 45.7255Z" fill="#E1F3FC"/>
                                <path id="Vector_116" fill-rule="evenodd" clip-rule="evenodd" d="M136.173 42.8557L128.099 34.781L128.252 34.6279L136.326 42.7016L136.173 42.8557Z" fill="#E1F3FC"/>
                                <path id="Vector_117" fill-rule="evenodd" clip-rule="evenodd" d="M136.701 44.2529L127.448 34.999L127.602 34.8452L136.854 44.0995L136.701 44.2529Z" fill="#E1F3FC"/>
                                <path id="Vector_118" fill-rule="evenodd" clip-rule="evenodd" d="M136.296 44.8494L126.662 35.2149L126.814 35.0615L136.45 44.6967L136.296 44.8494Z" fill="#E1F3FC"/>
                                <path id="Vector_119" fill-rule="evenodd" clip-rule="evenodd" d="M135.583 46.966L123.762 35.1459L123.915 34.9932L135.736 46.8123L135.583 46.966Z" fill="#E1F3FC"/>
                                <path id="Vector_120" fill-rule="evenodd" clip-rule="evenodd" d="M134.676 45.1198L124.625 35.0686L124.779 34.9155L134.83 44.9653L134.676 45.1198Z" fill="#E1F3FC"/>
                                <path id="Vector_121" fill-rule="evenodd" clip-rule="evenodd" d="M136.055 41.7973L128.604 34.3487L128.758 34.1943L136.209 41.6442L136.055 41.7973Z" fill="#E1F3FC"/>
                                <path id="Vector_122" fill-rule="evenodd" clip-rule="evenodd" d="M136.003 40.357L130.806 35.162L130.958 35.0083L136.156 40.2046L136.003 40.357Z" fill="#E1F3FC"/>
                                <path id="Vector_123" fill-rule="evenodd" clip-rule="evenodd" d="M136.128 41.2178L129.475 34.565L129.628 34.4106L136.282 41.0633L136.128 41.2178Z" fill="#E1F3FC"/>
                                <path id="Vector_124" fill-rule="evenodd" clip-rule="evenodd" d="M115.611 48.2648L111.698 44.3518L111.851 44.1987L115.765 48.1107L115.611 48.2648Z" fill="#E1F3FC"/>
                                <path id="Vector_125" fill-rule="evenodd" clip-rule="evenodd" d="M118.054 47.9608L111.575 41.4809L111.728 41.3271L118.208 47.8071L118.054 47.9608Z" fill="#E1F3FC"/>
                                <path id="Vector_126" fill-rule="evenodd" clip-rule="evenodd" d="M117.16 47.9362L111.651 42.427L111.805 42.2739L117.312 47.7822L117.16 47.9362Z" fill="#E1F3FC"/>
                                <path id="Vector_127" fill-rule="evenodd" clip-rule="evenodd" d="M116.478 48.2561L111.074 42.8516L111.227 42.6992L116.632 48.103L116.478 48.2561Z" fill="#E1F3FC"/>
                                <path id="Vector_128" fill-rule="evenodd" clip-rule="evenodd" d="M113.961 48.3519L112.196 46.5878L112.351 46.436L114.114 48.1985L113.961 48.3519Z" fill="#E1F3FC"/>
                                <path id="Vector_129" fill-rule="evenodd" clip-rule="evenodd" d="M114.683 48.1359L112.607 46.0601L112.761 45.9058L114.838 47.9818L114.683 48.1359Z" fill="#E1F3FC"/>
                                <path id="Vector_130" fill-rule="evenodd" clip-rule="evenodd" d="M112.053 47.414C112.053 46.6674 111.633 46.062 111.117 46.062C110.6 46.062 110.18 46.6674 110.18 47.414C110.18 48.1612 110.599 48.767 111.117 48.767C111.633 48.767 112.052 48.1612 112.053 47.414Z" fill="#E1F3FC"/>
                                <path id="Vector_131" fill-rule="evenodd" clip-rule="evenodd" d="M137.539 47.414C137.539 46.6674 137.119 46.062 136.602 46.062C136.084 46.062 135.665 46.6674 135.665 47.414C135.665 48.1612 136.084 48.767 136.602 48.767C137.119 48.767 137.538 48.1612 137.539 47.414Z" fill="#E1F3FC"/>
                                <path id="Vector_132" fill-rule="evenodd" clip-rule="evenodd" d="M140.87 258.918C140.87 257.589 135.16 251.04 123.862 251.04C114.463 251.04 109.522 255.364 108.231 256.689C107.709 257.225 106.835 258.229 106.854 258.934C106.861 259.219 106.857 268.597 106.854 273.516L106.853 274.064H107.401H140.321H140.87V273.516V258.918ZM140.321 272.968H107.401L107.95 273.516C107.95 272.935 107.959 259.27 107.949 258.905V258.924C108.083 257.956 113.205 252.136 123.862 252.136C134.227 252.136 139.539 257.95 139.777 258.963L139.773 258.918V273.516L140.321 272.968V272.968Z" fill="#ED3237"/>
                                <path id="Vector_133" fill-rule="evenodd" clip-rule="evenodd" d="M111.981 259.491H107.413V258.303H111.981V259.491Z" fill="#ED3237"/>
                                <path id="Vector_134" fill-rule="evenodd" clip-rule="evenodd" d="M140.306 259.491H135.738V258.303H140.306V259.491Z" fill="#ED3237"/>
                                <path id="Vector_135" fill-rule="evenodd" clip-rule="evenodd" d="M135.27 272.663C135.605 273.53 135.793 274.479 135.793 275.476V278.328C135.793 282.379 132.739 285.663 128.973 285.663H118.744C114.977 285.663 111.924 282.379 111.924 278.328V275.475C111.924 274.478 112.109 273.529 112.445 272.662C111.182 273.95 110.402 275.667 110.402 277.559V280.37C110.402 284.363 113.845 287.6 118.09 287.6H129.625C133.87 287.6 137.312 284.363 137.312 280.37V277.558C137.312 275.667 136.534 273.951 135.27 272.663V272.663Z" fill="#E1F3FC"/>
                                <path id="Vector_136" fill-rule="evenodd" clip-rule="evenodd" d="M111.781 273.681H135.934L135.251 273.172V273.438V273.48C135.251 276.214 131.494 278.439 126.877 278.439H120.838C116.716 278.439 113.242 276.687 112.582 274.274C112.503 273.983 112.465 273.724 112.465 273.48L112.465 273.327V273.172L111.781 273.681V273.681ZM111.097 273.327V273.48C111.097 273.793 111.145 274.119 111.243 274.478C112.032 277.364 116.068 279.459 120.838 279.459H126.877C132.248 279.459 136.619 276.777 136.619 273.48V273.438V273.172V272.662H135.934H111.781H111.097V273.172V273.327Z" fill="#E1F3FC"/>
                                <path id="Vector_137" fill-rule="evenodd" clip-rule="evenodd" d="M127.019 273.358L135.751 282.092L135.599 282.245L126.866 273.512L127.019 273.358Z" fill="#E1F3FC"/>
                                <path id="Vector_138" fill-rule="evenodd" clip-rule="evenodd" d="M124.054 273.368L134.279 283.592L134.125 283.746L123.901 273.523L124.054 273.368Z" fill="#E1F3FC"/>
                                <path id="Vector_139" fill-rule="evenodd" clip-rule="evenodd" d="M125.052 273.272L134.755 282.976L134.602 283.13L124.897 273.426L125.052 273.272Z" fill="#E1F3FC"/>
                                <path id="Vector_140" fill-rule="evenodd" clip-rule="evenodd" d="M125.632 273.056L134.885 282.309L134.732 282.463L125.479 273.208L125.632 273.056Z" fill="#E1F3FC"/>
                                <path id="Vector_141" fill-rule="evenodd" clip-rule="evenodd" d="M128.6 273.202L135.946 280.549L135.793 280.702L128.445 273.355L128.6 273.202Z" fill="#E1F3FC"/>
                                <path id="Vector_142" fill-rule="evenodd" clip-rule="evenodd" d="M127.633 273.175L136.334 281.874L136.18 282.028L127.481 273.329L127.633 273.175Z" fill="#E1F3FC"/>
                                <path id="Vector_143" fill-rule="evenodd" clip-rule="evenodd" d="M121.207 273.551L132.923 285.267L132.771 285.42L121.055 273.704L121.207 273.551Z" fill="#E1F3FC"/>
                                <path id="Vector_144" fill-rule="evenodd" clip-rule="evenodd" d="M118.138 273.388L130.721 285.969L130.569 286.124L117.985 273.541L118.138 273.388Z" fill="#E1F3FC"/>
                                <path id="Vector_145" fill-rule="evenodd" clip-rule="evenodd" d="M119.204 273.43L131.648 285.874L131.495 286.027L119.052 273.583L119.204 273.43Z" fill="#E1F3FC"/>
                                <path id="Vector_146" fill-rule="evenodd" clip-rule="evenodd" d="M119.956 273.385L132.087 285.518L131.934 285.671L119.802 273.539L119.956 273.385Z" fill="#E1F3FC"/>
                                <path id="Vector_147" fill-rule="evenodd" clip-rule="evenodd" d="M123.099 273.489L133.74 284.13L133.587 284.284L122.945 273.644L123.099 273.489Z" fill="#E1F3FC"/>
                                <path id="Vector_148" fill-rule="evenodd" clip-rule="evenodd" d="M122.374 273.707L133.396 284.728L133.244 284.881L122.221 273.859L122.374 273.707Z" fill="#E1F3FC"/>
                                <path id="Vector_149" fill-rule="evenodd" clip-rule="evenodd" d="M115.084 273.361L127.945 286.221L127.792 286.375L114.93 273.514L115.084 273.361Z" fill="#E1F3FC"/>
                                <path id="Vector_150" fill-rule="evenodd" clip-rule="evenodd" d="M112.084 273.546L124.667 286.128L124.514 286.282L111.931 273.7L112.084 273.546Z" fill="#E1F3FC"/>
                                <path id="Vector_151" fill-rule="evenodd" clip-rule="evenodd" d="M113.223 273.518L126.014 286.308L125.86 286.462L113.069 273.672L113.223 273.518Z" fill="#E1F3FC"/>
                                <path id="Vector_152" fill-rule="evenodd" clip-rule="evenodd" d="M114.253 273.614L127.044 286.404L126.889 286.557L114.1 273.767L114.253 273.614Z" fill="#E1F3FC"/>
                                <path id="Vector_153" fill-rule="evenodd" clip-rule="evenodd" d="M117.256 273.579L129.56 285.882L129.406 286.036L117.102 273.732L117.256 273.579Z" fill="#E1F3FC"/>
                                <path id="Vector_154" fill-rule="evenodd" clip-rule="evenodd" d="M116.219 273.483L129.115 286.376L128.961 286.53L116.065 273.635L116.219 273.483Z" fill="#E1F3FC"/>
                                <path id="Vector_155" fill-rule="evenodd" clip-rule="evenodd" d="M111.423 275.705L121.716 285.998L121.563 286.151L111.27 275.858L111.423 275.705Z" fill="#E1F3FC"/>
                                <path id="Vector_156" fill-rule="evenodd" clip-rule="evenodd" d="M111.546 278.575L119.62 286.648L119.466 286.802L111.393 278.728L111.546 278.575Z" fill="#E1F3FC"/>
                                <path id="Vector_157" fill-rule="evenodd" clip-rule="evenodd" d="M111.018 277.178L120.271 286.432L120.118 286.585L110.864 277.331L111.018 277.178Z" fill="#E1F3FC"/>
                                <path id="Vector_158" fill-rule="evenodd" clip-rule="evenodd" d="M111.424 276.58L121.057 286.215L120.904 286.368L111.27 276.734L111.424 276.58Z" fill="#E1F3FC"/>
                                <path id="Vector_159" fill-rule="evenodd" clip-rule="evenodd" d="M112.136 274.462L123.957 286.283L123.804 286.436L111.983 274.617L112.136 274.462Z" fill="#E1F3FC"/>
                                <path id="Vector_160" fill-rule="evenodd" clip-rule="evenodd" d="M113.044 276.31L123.095 286.361L122.942 286.514L112.891 276.464L113.044 276.31Z" fill="#E1F3FC"/>
                                <path id="Vector_161" fill-rule="evenodd" clip-rule="evenodd" d="M111.664 279.633L119.113 287.083L118.959 287.237L111.509 279.787L111.664 279.633Z" fill="#E1F3FC"/>
                                <path id="Vector_162" fill-rule="evenodd" clip-rule="evenodd" d="M111.716 281.072L116.913 286.267L116.759 286.421L111.562 281.225L111.716 281.072Z" fill="#E1F3FC"/>
                                <path id="Vector_163" fill-rule="evenodd" clip-rule="evenodd" d="M111.591 280.213L118.243 286.866L118.089 287.019L111.436 280.368L111.591 280.213Z" fill="#E1F3FC"/>
                                <path id="Vector_164" fill-rule="evenodd" clip-rule="evenodd" d="M132.109 273.166L136.024 277.08L135.87 277.233L131.956 273.32L132.109 273.166Z" fill="#E1F3FC"/>
                                <path id="Vector_165" fill-rule="evenodd" clip-rule="evenodd" d="M129.664 273.469L136.144 279.948L135.991 280.102L129.512 273.622L129.664 273.469Z" fill="#E1F3FC"/>
                                <path id="Vector_166" fill-rule="evenodd" clip-rule="evenodd" d="M130.557 273.495L136.067 279.003L135.913 279.156L130.404 273.648L130.557 273.495Z" fill="#E1F3FC"/>
                                <path id="Vector_167" fill-rule="evenodd" clip-rule="evenodd" d="M131.239 273.175L136.643 278.579L136.49 278.733L131.085 273.328L131.239 273.175Z" fill="#E1F3FC"/>
                                <path id="Vector_168" fill-rule="evenodd" clip-rule="evenodd" d="M133.755 273.078L135.518 274.841L135.365 274.995L133.603 273.231L133.755 273.078Z" fill="#E1F3FC"/>
                                <path id="Vector_169" fill-rule="evenodd" clip-rule="evenodd" d="M133.033 273.295L135.108 275.37L134.955 275.524L132.879 273.448L133.033 273.295Z" fill="#E1F3FC"/>
                                <path id="Vector_170" fill-rule="evenodd" clip-rule="evenodd" d="M135.669 274.015C135.669 274.761 136.087 275.367 136.604 275.367C137.122 275.367 137.541 274.761 137.541 274.015C137.541 273.268 137.122 272.662 136.604 272.662C136.087 272.662 135.669 273.268 135.669 274.015Z" fill="#E1F3FC"/>
                                <path id="Vector_171" fill-rule="evenodd" clip-rule="evenodd" d="M110.18 274.015C110.18 274.761 110.599 275.367 111.116 275.367C111.633 275.367 112.052 274.761 112.052 274.015C112.052 273.268 111.633 272.662 111.116 272.662C110.599 272.662 110.18 273.268 110.18 274.015Z" fill="#E1F3FC"/>
                            </g>
                            <a href="#zone_a" data-fancybox="">
                                <title></title>
                                <path id="field-top" d="M30.9102 62.2789C30.9102 34.1026 53.7515 11.2612 81.9278 11.2612H165.597C193.773 11.2612 216.615 34.1026 216.615 62.2789V110.916H30.9102V62.2789Z" fill="white"/>
                            </a>
                            <a href="#penalty_box" data-fancybox="">
                                <title></title>
                                <g id="field-right">
                                    <path d="M233 73C233 70.7909 234.791 69 237 69H243C245.209 69 247 70.7909 247 73V134C247 136.209 245.209 138 243 138H237C234.791 138 233 136.209 233 134V73Z" fill="white"/>
                                    {{--<path d="M233 151C233 148.791 234.791 147 237 147H243C245.209 147 247 148.791 247 151V166C247 168.209 245.209 170 243 170H237C234.791 170 233 168.209 233 166V151Z" fill="white"/>--}}
                                    <path d="M233 183C233 180.791 234.791 179 237 179H243C245.209 179 247 180.791 247 183V245C247 247.209 245.209 249 243 249H237C234.791 249 233 247.209 233 245V183Z" fill="white"/>
                                </g>
                            </a>
                            <a href="#zone_b" data-fancybox="">
                                <title></title>
                                <path id="field-bottom" d="M30.9102 210.91H216.615V259.547C216.615 287.723 193.773 310.564 165.597 310.564H81.9279C53.7516 310.564 30.9102 287.723 30.9102 259.547V210.91Z" fill="white"/>
                            </a>
                            <a href="#bench" data-fancybox="">
                                <title></title>
                                <g id="field-left">
                                    <path d="M0 73C0 70.7909 1.79086 69 4 69H10C12.2091 69 14 70.7909 14 73V150C14 152.209 12.2091 154 10 154H4C1.79086 154 0 152.209 0 150V73Z" fill="white"/>
                                    <path d="M0 168C0 165.791 1.79086 164 4 164H10C12.2091 164 14 165.791 14 168V245C14 247.209 12.2091 249 10 249H4C1.79086 249 0 247.209 0 245V168Z" fill="white"/>
                                </g>
                            </a>
                            <a href="#zone_c" data-fancybox="">
                                <title></title>
                                <path id="field-center" d="M30.9102 113.635H216.615V208.868H30.9102V113.635Z" fill="white"/>
                            </a>
                        </svg>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-6">
                    <a href="#scoreboard" title="{{ __("default.pages.main.scoreboard_title") }}" data-fancybox="" class="field-item"><img src="/assets/img/field/field-item-4.svg" alt=""></a>
                    <a href="#ice_machine" title="{{ __("default.pages.main.ice_machine_title") }}" data-fancybox="" class="field-item"><img src="/assets/img/field/field-item-5.svg" alt=""></a>
                    <a href="#tribune" title="{{ __("default.pages.main.tribune_title") }}" data-fancybox="" class="field-item"><img src="/assets/img/field/field-item-6.svg" alt=""></a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="title-primary">{!! __("default.pages.about.block_title_4") !!}</h2>
            <div class="plain-text plain-text__18">
                {!! __("default.pages.about.block_desc_4") !!}
            </div>

            <div class="roles">
                <a href="#goalkeeper" title="{!! __("default.pages.about.goalkeeper_title") !!}" data-fancybox="roles" class="roles-item">
                    <img src="/assets/img/goalkeeper.svg" alt="">
                    <span>{!! __("default.pages.about.goalkeeper_title") !!}</span>
                </a>
                <a href="#forward" title="{!! __("default.pages.about.forward_title") !!}" data-fancybox="roles" class="roles-item" style="margin-left: -3rem;">
                    <img src="/assets/img/striker.svg" alt="">
                    <span>{!! __("default.pages.about.forward_title") !!}</span>
                </a>
                <a href="#defender" title="{!! __("default.pages.about.defender_title") !!}" data-fancybox="roles" class="roles-item">
                    <img src="/assets/img/defender.svg" alt="">
                    <span>{!! __("default.pages.about.defender_title") !!}</span>
                </a>
            </div>
        </div>
    </section>


@endsection

@section("scripts")

@endsection
