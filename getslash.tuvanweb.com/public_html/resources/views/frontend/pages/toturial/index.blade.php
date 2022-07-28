@extends('frontend.master')
@section('main')
<main>
    <section class="box-banner banner-tutorial">
        <div class="slide-banner">
            <div class="item-slide">
                <div class="item-banner">
                    <div class="avarta">
                        <img src="{{ @$contentPage->banner->pc }}" class="img-fluid w-100 show-pc" alt="{{ @$contentPage->banner->title }}" />
                        <img src="{{ @$contentPage->banner->mobile }}" class="img-fluid w-100 d-none show-mb" alt="{{ @$contentPage->banner->title }}" />
                    </div>
                    <div class="caption-banner">
                        <div class="container">
                            <div class="txt-banner">
                                <div class="icon"><img src="{{ __BASE_URL__ }}/images/kep.svg" class="img-fluid" alt="{{ @$contentPage->banner->title }}" /></div>
                                <div class="t-banner">
                                    <h1>{!! @$contentPage->banner->title !!}</h1>
                                    <div class="btn-main"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-qrcode">{{ @$contentPage->banner->nut }}</a></div>
                                    <!-- <div class="btn-main"><a href="{{ @$contentPage->banner->link }}">{{ @$contentPage->banner->nut }}</a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="c-guide">
        <div class="container">
            <div class="heading">
                <p>{{ @$site_info->khoi2->title }}</p>
                <h2>{!! nl2br(@$site_info->khoi2->sub_title) !!}</h2>
            </div>
            <div class="row guide-box">
                <div class="col-12 col-lg-6">
                    <div class="slider slider-guide-content">
                        @if (!empty(@$site_info->about))
                            @php $i=1; @endphp
                            @foreach(@$site_info->about as $key => $value)
                                <div class="slide-item">
                                    <div class="content">
                                        <div class="step">BƯỚC {{ $i }}</div>
                                        <h2>{{ @$value->name }}</h2>
                                        <p>{!! @$value->desc !!}</p>
                                    </div>
                                </div>
                            @php $i++; @endphp
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="slider slider-guide-images">
                        @if (!empty(@$site_info->about))
                            @foreach(@$site_info->about as $key => $value)
                            <div class="slide-item">
                                <div class="image-wrapper"><img src="{{ @$value->icon }}" title="{{ @$value->name }}" alt="{{ @$value->name }}"/></div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-step-guide">
        <div class="container">
            <div class="heading">
                <p>{{ @$contentPage->khoi3->title }}</p>
                <h2>{!! nl2br(@$contentPage->khoi3->sub_title) !!}</h2>
            </div>
            <div class="list-step">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="content-tab-step text-center">
                            @if (!empty(@$contentPage->toturial))
                                @php $i=1; @endphp
                                @foreach(@$contentPage->toturial as $key => $value)
                                <div class="tab-content {{ $i == 1 ? 'active' : '' }}" id="tab-{{ $i }}">
                                    <img src="{{ @$value->icon }}" class="img-fluid" alt="{{ @$value->name }}" />
                                </div>
                                @php $i++; @endphp
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tab-step">
                            @if (!empty(@$contentPage->toturial))
                                @php $i=1; @endphp
                                @foreach(@$contentPage->toturial as $key => $value)
                                <div class="item-tab-step  {{ $i == 1 ? 'active' : '' }}" data-tab="tab-{{ $i }}">
                                    <div class="numb"><span>0{{ $i }}.</span></div>
                                    <h6>{{ @$value->name }}</h6>
                                    <div class="desc">{!! @$value->desc !!}</div>
                                </div>
                                @php $i++; @endphp
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-payment" style="background: #fafbfd;">
        <div class="container">
            <div class="heading">
                <p>{{ @$contentPage->khoi4->title }}</p>
                <h2>{!! nl2br(@$contentPage->khoi4->sub_title) !!}</h2>
            </div>
            <div class="list-payment">
                <div class="row">
                    @if (!empty(@$contentPage->toturial1))
                        @php $i=1; @endphp
                        @foreach(@$contentPage->toturial1 as $key => $value)
                        <div class="col-md-3">
                            <div class="itme-payment">
                                <div class="avarta text-center"><img src="{{ @$value->icon }}" class="img-fluid" alt="{{ @$value->name }}" /></div>
                                <div class="info">
                                    <p>BƯỚC {{ $i }}</p>
                                    <h5>{{ @$value->name }}</h5>
                                </div>
                            </div>
                        </div>
                        @php $i++; @endphp
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <div class="box-video">
        <div class="container">
            <div class="title-box">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="heading">
                            <p>{{ @$contentPage->khoi5->title }}</p>
                            <h2>{!! nl2br(@$contentPage->khoi5->sub_title) !!}</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="link-title">
                            <a href="{{ @$contentPage->khoi5->link }}" target="_blank">{{ @$contentPage->khoi5->nut }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-video">
                <div class="row">
                    <div class="col-lg-8"> 
                        <div class="video-bigs">
                            <div class="avarta">
                                @if(isset($video[0]))
                                <input type="text" class="rend-iframe d-none" value="{{ $video[0]->slug }}" id="url"/>
                                <input type="button" class="btn_rend-iframe d-none" id="sendUrl"/>
                                <div id="myVideo"></div>
                                <!-- <img src="{{ $video[0]->image }}" class="img-fluid w-100" alt="{{ $video[0]->name }}" />    -->
                                <!-- <a class="play clc-play-video" id="play-button" href="javascript:void(0)">
                                    <svg width="88" height="89" viewBox="0 0 88 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1043_10503)">
                                            <circle cx="44.0002" cy="44.5" r="42.5853" stroke="white" stroke-width="2.82935" />
                                            <path
                                                d="M67.1304 42.0784V42.0803L32.0317 21.8165C31.201 21.3369 30.1387 21.6215 29.659 22.4523C29.5068 22.7161 29.4264 23.0152 29.4264 23.32V63.8475C29.4268 64.8067 30.2049 65.5841 31.1642 65.5835C31.4687 65.5833 31.768 65.5031 32.0319 65.3508L67.1306 45.087C67.9615 44.6076 68.2463 43.5452 67.7668 42.7144C67.6142 42.4502 67.3948 42.2308 67.1304 42.0784Z"
                                                fill="white"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1043_10503">
                                                <rect width="88" height="88" fill="white" transform="translate(0 0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a> -->
                                @endif
                            </div> 
                        </div>
                    </div>
                    <!-- <div class="col-lg-8">
                        <div class="video-bigs">
                            <div class="avarta">
                                @if(isset($video[0]))
                                <img src="{{ $video[0]->image }}" class="img-fluid w-100" alt="{{ $video[0]->name }}" />
                                <a class="play" data-fancybox="gallery-0" href="{{ $video[0]->slug }}">
                                    <svg width="88" height="89" viewBox="0 0 88 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1043_10503)">
                                            <circle cx="44.0002" cy="44.5" r="42.5853" stroke="white" stroke-width="2.82935" />
                                            <path
                                                d="M67.1304 42.0784V42.0803L32.0317 21.8165C31.201 21.3369 30.1387 21.6215 29.659 22.4523C29.5068 22.7161 29.4264 23.0152 29.4264 23.32V63.8475C29.4268 64.8067 30.2049 65.5841 31.1642 65.5835C31.4687 65.5833 31.768 65.5031 32.0319 65.3508L67.1306 45.087C67.9615 44.6076 68.2463 43.5452 67.7668 42.7144C67.6142 42.4502 67.3948 42.2308 67.1304 42.0784Z"
                                                fill="white"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1043_10503">
                                                <rect width="88" height="88" fill="white" transform="translate(0 0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>





                                @endif
                            </div>
                        </div>
                    </div> -->

                    <!-- <iframe width="1280" height="753" src="{{ $video[0]->slug }}" title="TO THE MOON - hooligan. (Official Lyric Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  -->
                    <div class="col-lg-4">
                        <div class="list-video-small">
                            <div class="item-slide">
                                @if(count($video) > 1)
                                @foreach($video as $k => $v)
                                @if($k < 5 && $k > 0)
                                <div class="item-video-small">
                                    <div class="avarta">
                                        <img src="{{ $v->image }}" class="img-fluid w-100" alt="{{ $v->name }}" />
                                        <a class="play" href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/play-small.svg" class="img-fluid" alt="{{ $v->name }}" /></a>
                                    </div>
                                    <div class="info">
                                        <h5><a href="{{ $v->slug }}" target="_blank">{{ $v->name }}</a></h5>
                                        <p>{{ $v->video }} phút • {{ \Carbon\Carbon::parse($v->created_at)->diffForHumans() }}</p>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endif
                            </div>
                            <div class="item-slide">
                                @if(count($video) > 5)
                                @foreach($video as $k => $v)
                                @if($k > 4)
                                <div class="item-video-small">
                                    <div class="avarta">
                                        <img src="{{ $v->image }}" class="img-fluid w-100" alt="{{ $v->name }}" />
                                        <a class="play" href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/play-small.svg" class="img-fluid" alt="{{ $v->name }}" /></a>
                                    </div>
                                    <div class="info">
                                        <h5><a href="{{ $v->slug }}" target="_blank">{{ $v->name }}</a></h5>
                                        <p>{{ $v->video }} phút • {{ \Carbon\Carbon::parse($v->created_at)->diffForHumans() }}</p>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


    
@endsection