@extends('frontend.master')
@section('main')
<style>
    .c-group::before {
        top: 0;
        height: 100%;
    }
</style>
<main class="main">
    <section class="c-hero">
        <img class="element element-01" src="{{ __BASE_URL__ }}/images/hero-2.jpg" />
        <div class="element element-02"></div>
        <img class="element element-03" src="{{ __BASE_URL__ }}/images/hero.png" />
        <img class="element element-04" src="{{ __BASE_URL__ }}/images/hero-1.png" />
        <img src="{{ __BASE_URL__ }}/images/bn-home-ipad.jpg" class="img-fluid w-100 d-none d-ipad show-ipad" alt="" />
        <img src="{{ __BASE_URL__ }}/images/bn-home-mb.jpg" class="img-fluid w-100 d-none hide-ipad" alt="" />

        <div class="container">
            <svg class="element element-05" width="232" height="400" viewBox="0 0 232 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.59348 397.5L133.136 2.5H228.271L98.7608 397.5H3.59348Z" stroke="#00E889" stroke-width="5" />
            </svg>
            <div class="content">
                <h1><label>&nbsp;</label>{!! @$contentPage->top->title_1 !!}</h1>
                <h2>{!! nl2br(@$contentPage->top->title_2) !!}</h2>
                <p>
                    {!! nl2br(@$contentPage->top->desc) !!}
                </p>
                <a href="{{ @$contentPage->top->link }}" class="btn btn-01" type="button">{!! nl2br(@$contentPage->top->nut) !!}</a>
            </div>
        </div>
    </section>
    <!-- hero -->

    <section class="c-guide" style="background: #FAFBFD;">
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
    <!-- guide -->

    <section class="c-group">
        <div class="container">
            <div class="box">
                <div class="heading">
                    <p>{{ @$contentPage->khoi3->title_pro }}</p>
                    <h2>{{ @$contentPage->khoi3->sub_title_pro }}</h2>
                </div>
                <!-- / heading -->
                <div class="slider slider-deal">
                    @if(isset($posttype['product']))
                    @foreach ($posttype['product'] as $k => $pro)
                        @if ($k > 10)
                            @break
                        @endif
                    <figure class="item">
                        <a class="item-wrapper" href="#">
                            <div class="sale">40%</div>
                            <div class="img"><img src="{{ $pro->image }}" alt="{{ $pro->name }}" /></div>
                            <div class="info">
                                <h3 class="title">{{ $pro->name }}</h3>
                                <div class="deal">{{ $pro->price_old }}<span>đ</span></div>
                                <div class="price">
                                    <div class="number">{{ $pro->price }}<span>đ</span></div>
                                    <div class="statu">
                                        {!! str_replace(['<p>', '</p>'], '', $pro->note ) !!}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </figure>
                    @endforeach
                    @endif
                </div>
                <!-- / slider -->
            </div>
            <!-- box -->

            <div class="box">
                <div class="heading">
                    <p>{{ @$contentPage->khoi3->title_pat }}</p>
                    <h2>{{ @$contentPage->khoi3->sub_title_pat }}</h2>
                </div>
                <!-- / heading -->
                <div class="slider slider-partner">
                    @if(isset($posttype['partner']))
                    @foreach ($posttype['partner'] as $k => $pro)
                        @if ($k > 10)
                            @break
                        @endif
                    <div class="item">
                        <a href="{{ $pro->slug }}"><img src="{{ $pro->logo }}" /></a>
                    </div>
                    @endforeach
                    @endif
                </div>
                <!-- / slider -->
            </div>
            <!-- box -->

            <div class="box">
                <div class="heading">
                    <p>{{ @$contentPage->khoi3->title_cat }}</p>
                    <h2>{{ @$contentPage->khoi3->sub_title_cat }}</h2>
                </div>
                <!-- / heading -->
                <div class="slider slider-category">
                    @if(isset($posttype['category']))
                    @foreach ($posttype['category'] as $k => $pro)
                        @if ($k > 4)
                            @break
                        @endif
                    <div class="item">
                        <a href="{{ $pro->slug }}">
                            <img src="{{ $pro->image }}" />
                            <h3>
                                {{ $pro->name }}
                            </h3>
                        </a>
                    </div>
                    @endforeach
                    @endif
                </div>
                <!-- / slider -->
            </div>
            <!-- box -->
        </div>
    </section>
    <!-- group -->

    <section class="c-video">
        <img class="element element-01" src="{{ __BASE_URL__ }}/images/e-1.png" />
        <img class="element element-02" src="{{ __BASE_URL__ }}/images/e-2.png" />
        <img class="element element-03" src="{{ __BASE_URL__ }}/images/e-3.png" />
        <div class="container">
            <div class="heading">
                <h2>
                    {!! nl2br(@$contentPage->video->title_1) !!}
                </h2>
                <p>{{ @$contentPage->video->title_2 }}</p>
            </div>
            <div class="video">
                <input type="text" class="rend-iframe d-none" value="{{ @$contentPage->video->link }}" id="url"/>
                <input type="button" class="btn_rend-iframe d-none" id="sendUrl"/>
                <div id="myVideo">
                    <iframe src="https://www.youtube.com/embed/{{ @$contentPage->video->link }}?rel=0&enablejsapi=1&autoplay=1=1&mute=1&loop=1"></iframe>
                </div>
                <!-- <img src="{{ @$contentPage->video->image }}" class="video-bg" />  -->
                <!-- <a class="play" data-fancybox="gallery-0" href="{{ @$contentPage->video->link }}"></a>  --> 
            </div>
        </div>
    </section>
    <!-- video -->

    <section class="c-review">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="heading"> 
                        <p>{{ @$contentPage->review->title_1 }}</p>
                        <h2>{{ @$contentPage->review->title_2 }}</h2>
                    </div>
                    <!-- / header -->
                    <div class="slider slider-review">
                        @if (!empty(@$contentPage->partner))
                            @foreach(@$contentPage->partner as $key => $value)
                            <div class="item">
                                <div class="iteam-wrapper">
                                    <div class="description">{{ @$value->content }}</div>
                                    <div class="info-user">
                                        <div class="avata"><img src="{{ @$value->logo }}" alt="{{ @$value->name }}" /></div>
                                        <div class="name">{{ @$value->name }}</div>
                                        <div class="info-other">{{ @$value->info }}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- / col -->
                <div class="col-12 col-lg-7">
                    <div class="row review-app">
                        <div class="col-md-6 col-12 item">
                            <div class="item-wrapper">
                                <div class="item-box">
                                    <div class="stars">
                                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.2874 1.39629C14.5843 0.814487 15.4157 0.814487 15.7126 1.39629L19.6113 9.03592C19.7276 9.2637 19.9457 9.42218 20.1982 9.46234L28.6688 10.8095C29.3138 10.9121 29.5707 11.7027 29.1092 12.1649L23.0482 18.2336C22.8675 18.4146 22.7842 18.671 22.824 18.9236L24.1603 27.3958C24.2621 28.041 23.5895 28.5297 23.0074 28.2335L15.3627 24.3445C15.1348 24.2286 14.8652 24.2286 14.6373 24.3445L6.99264 28.2335C6.41046 28.5297 5.7379 28.041 5.83967 27.3958L7.17597 18.9236C7.21581 18.671 7.1325 18.4146 6.95179 18.2336L0.890847 12.1649C0.429273 11.7027 0.686165 10.9121 1.33124 10.8095L9.80175 9.46234C10.0543 9.42218 10.2724 9.2637 10.3887 9.03592L14.2874 1.39629Z"
                                                fill="#FFAF00"
                                            />
                                        </svg>
                                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.2874 1.39629C14.5843 0.814487 15.4157 0.814487 15.7126 1.39629L19.6113 9.03592C19.7276 9.2637 19.9457 9.42218 20.1982 9.46234L28.6688 10.8095C29.3138 10.9121 29.5707 11.7027 29.1092 12.1649L23.0482 18.2336C22.8675 18.4146 22.7842 18.671 22.824 18.9236L24.1603 27.3958C24.2621 28.041 23.5895 28.5297 23.0074 28.2335L15.3627 24.3445C15.1348 24.2286 14.8652 24.2286 14.6373 24.3445L6.99264 28.2335C6.41046 28.5297 5.7379 28.041 5.83967 27.3958L7.17597 18.9236C7.21581 18.671 7.1325 18.4146 6.95179 18.2336L0.890847 12.1649C0.429273 11.7027 0.686165 10.9121 1.33124 10.8095L9.80175 9.46234C10.0543 9.42218 10.2724 9.2637 10.3887 9.03592L14.2874 1.39629Z"
                                                fill="#FFAF00"
                                            />
                                        </svg>
                                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.2874 1.39629C14.5843 0.814487 15.4157 0.814487 15.7126 1.39629L19.6113 9.03592C19.7276 9.2637 19.9457 9.42218 20.1982 9.46234L28.6688 10.8095C29.3138 10.9121 29.5707 11.7027 29.1092 12.1649L23.0482 18.2336C22.8675 18.4146 22.7842 18.671 22.824 18.9236L24.1603 27.3958C24.2621 28.041 23.5895 28.5297 23.0074 28.2335L15.3627 24.3445C15.1348 24.2286 14.8652 24.2286 14.6373 24.3445L6.99264 28.2335C6.41046 28.5297 5.7379 28.041 5.83967 27.3958L7.17597 18.9236C7.21581 18.671 7.1325 18.4146 6.95179 18.2336L0.890847 12.1649C0.429273 11.7027 0.686165 10.9121 1.33124 10.8095L9.80175 9.46234C10.0543 9.42218 10.2724 9.2637 10.3887 9.03592L14.2874 1.39629Z"
                                                fill="#FFAF00"
                                            />
                                        </svg>
                                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.2874 1.39629C14.5843 0.814487 15.4157 0.814487 15.7126 1.39629L19.6113 9.03592C19.7276 9.2637 19.9457 9.42218 20.1982 9.46234L28.6688 10.8095C29.3138 10.9121 29.5707 11.7027 29.1092 12.1649L23.0482 18.2336C22.8675 18.4146 22.7842 18.671 22.824 18.9236L24.1603 27.3958C24.2621 28.041 23.5895 28.5297 23.0074 28.2335L15.3627 24.3445C15.1348 24.2286 14.8652 24.2286 14.6373 24.3445L6.99264 28.2335C6.41046 28.5297 5.7379 28.041 5.83967 27.3958L7.17597 18.9236C7.21581 18.671 7.1325 18.4146 6.95179 18.2336L0.890847 12.1649C0.429273 11.7027 0.686165 10.9121 1.33124 10.8095L9.80175 9.46234C10.0543 9.42218 10.2724 9.2637 10.3887 9.03592L14.2874 1.39629Z"
                                                fill="#FFAF00"
                                            />
                                        </svg>
                                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.2874 1.39629C14.5843 0.814487 15.4157 0.814487 15.7126 1.39629L19.6113 9.03592C19.7276 9.2637 19.9457 9.42218 20.1982 9.46234L28.6688 10.8095C29.3138 10.9121 29.5707 11.7027 29.1092 12.1649L23.0482 18.2336C22.8675 18.4146 22.7842 18.671 22.824 18.9236L24.1603 27.3958C24.2621 28.041 23.5895 28.5297 23.0074 28.2335L15.3627 24.3445C15.1348 24.2286 14.8652 24.2286 14.6373 24.3445L6.99264 28.2335C6.41046 28.5297 5.7379 28.041 5.83967 27.3958L7.17597 18.9236C7.21581 18.671 7.1325 18.4146 6.95179 18.2336L0.890847 12.1649C0.429273 11.7027 0.686165 10.9121 1.33124 10.8095L9.80175 9.46234C10.0543 9.42218 10.2724 9.2637 10.3887 9.03592L14.2874 1.39629Z"
                                                fill="#FFAF00"
                                            />
                                        </svg>
                                    </div>
                                    <div class="number">
                                        {!! @$contentPage->ios->sao !!}
                                    </div>
                                    <a href="{{ @$contentPage->ios->link }}#" class="btn btn-02"><img src="{{ @$contentPage->ios->image }}" /></a>
                                </div>
                                <!-- / box -->
                                <div class="description">{{ @$contentPage->ios->note }}</div>
                                <a href="{{ @$contentPage->ios->link }}" class="btn btn-03">{{ @$contentPage->ios->nut }}</a>
                            </div>
                        </div>
                        <!-- / item -->
                        <div class="col-md-6 col-12 item">
                            <div class="item-wrapper">
                                <div class="item-box">
                                    <div class="stars">
                                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.2874 1.39629C14.5843 0.814487 15.4157 0.814487 15.7126 1.39629L19.6113 9.03592C19.7276 9.2637 19.9457 9.42218 20.1982 9.46234L28.6688 10.8095C29.3138 10.9121 29.5707 11.7027 29.1092 12.1649L23.0482 18.2336C22.8675 18.4146 22.7842 18.671 22.824 18.9236L24.1603 27.3958C24.2621 28.041 23.5895 28.5297 23.0074 28.2335L15.3627 24.3445C15.1348 24.2286 14.8652 24.2286 14.6373 24.3445L6.99264 28.2335C6.41046 28.5297 5.7379 28.041 5.83967 27.3958L7.17597 18.9236C7.21581 18.671 7.1325 18.4146 6.95179 18.2336L0.890847 12.1649C0.429273 11.7027 0.686165 10.9121 1.33124 10.8095L9.80175 9.46234C10.0543 9.42218 10.2724 9.2637 10.3887 9.03592L14.2874 1.39629Z"
                                                fill="#FFAF00"
                                            />
                                        </svg>
                                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.2874 1.39629C14.5843 0.814487 15.4157 0.814487 15.7126 1.39629L19.6113 9.03592C19.7276 9.2637 19.9457 9.42218 20.1982 9.46234L28.6688 10.8095C29.3138 10.9121 29.5707 11.7027 29.1092 12.1649L23.0482 18.2336C22.8675 18.4146 22.7842 18.671 22.824 18.9236L24.1603 27.3958C24.2621 28.041 23.5895 28.5297 23.0074 28.2335L15.3627 24.3445C15.1348 24.2286 14.8652 24.2286 14.6373 24.3445L6.99264 28.2335C6.41046 28.5297 5.7379 28.041 5.83967 27.3958L7.17597 18.9236C7.21581 18.671 7.1325 18.4146 6.95179 18.2336L0.890847 12.1649C0.429273 11.7027 0.686165 10.9121 1.33124 10.8095L9.80175 9.46234C10.0543 9.42218 10.2724 9.2637 10.3887 9.03592L14.2874 1.39629Z"
                                                fill="#FFAF00"
                                            />
                                        </svg>
                                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.2874 1.39629C14.5843 0.814487 15.4157 0.814487 15.7126 1.39629L19.6113 9.03592C19.7276 9.2637 19.9457 9.42218 20.1982 9.46234L28.6688 10.8095C29.3138 10.9121 29.5707 11.7027 29.1092 12.1649L23.0482 18.2336C22.8675 18.4146 22.7842 18.671 22.824 18.9236L24.1603 27.3958C24.2621 28.041 23.5895 28.5297 23.0074 28.2335L15.3627 24.3445C15.1348 24.2286 14.8652 24.2286 14.6373 24.3445L6.99264 28.2335C6.41046 28.5297 5.7379 28.041 5.83967 27.3958L7.17597 18.9236C7.21581 18.671 7.1325 18.4146 6.95179 18.2336L0.890847 12.1649C0.429273 11.7027 0.686165 10.9121 1.33124 10.8095L9.80175 9.46234C10.0543 9.42218 10.2724 9.2637 10.3887 9.03592L14.2874 1.39629Z"
                                                fill="#FFAF00"
                                            />
                                        </svg>
                                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.2874 1.39629C14.5843 0.814487 15.4157 0.814487 15.7126 1.39629L19.6113 9.03592C19.7276 9.2637 19.9457 9.42218 20.1982 9.46234L28.6688 10.8095C29.3138 10.9121 29.5707 11.7027 29.1092 12.1649L23.0482 18.2336C22.8675 18.4146 22.7842 18.671 22.824 18.9236L24.1603 27.3958C24.2621 28.041 23.5895 28.5297 23.0074 28.2335L15.3627 24.3445C15.1348 24.2286 14.8652 24.2286 14.6373 24.3445L6.99264 28.2335C6.41046 28.5297 5.7379 28.041 5.83967 27.3958L7.17597 18.9236C7.21581 18.671 7.1325 18.4146 6.95179 18.2336L0.890847 12.1649C0.429273 11.7027 0.686165 10.9121 1.33124 10.8095L9.80175 9.46234C10.0543 9.42218 10.2724 9.2637 10.3887 9.03592L14.2874 1.39629Z"
                                                fill="#FFAF00"
                                            />
                                        </svg>
                                        <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.2874 1.39629C14.5843 0.814487 15.4157 0.814487 15.7126 1.39629L19.6113 9.03592C19.7276 9.2637 19.9457 9.42218 20.1982 9.46234L28.6688 10.8095C29.3138 10.9121 29.5707 11.7027 29.1092 12.1649L23.0482 18.2336C22.8675 18.4146 22.7842 18.671 22.824 18.9236L24.1603 27.3958C24.2621 28.041 23.5895 28.5297 23.0074 28.2335L15.3627 24.3445C15.1348 24.2286 14.8652 24.2286 14.6373 24.3445L6.99264 28.2335C6.41046 28.5297 5.7379 28.041 5.83967 27.3958L7.17597 18.9236C7.21581 18.671 7.1325 18.4146 6.95179 18.2336L0.890847 12.1649C0.429273 11.7027 0.686165 10.9121 1.33124 10.8095L9.80175 9.46234C10.0543 9.42218 10.2724 9.2637 10.3887 9.03592L14.2874 1.39629Z"
                                                fill="#FFAF00"
                                            />
                                        </svg>
                                    </div>
                                    <div class="number">
                                        {!! @$contentPage->android->sao !!}
                                    </div>
                                    <a href="{{ @$contentPage->android->link }}#" class="btn btn-02"><img src="{{ @$contentPage->android->image }}" /></a>
                                </div>
                                <!-- / box -->
                                <div class="description">{{ @$contentPage->android->note }}</div>
                                <a href="{{ @$contentPage->android->link }}" class="btn btn-03">{{ @$contentPage->android->nut }}</a>
                            </div>
                        </div>
                        <!-- / item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- review -->

   
    <section class="box-banner-shop">
        <div class="container">
            <div class="banner-shop">
                <div class="avr-banner">
                    <img src="{{ __BASE_URL__ }}/images/bn-shop.png" class="img-fluid w-100 show-pc"  alt="Tải app ngay" />
                    <img src="{{ __BASE_URL__ }}/images/bn-shop-mb.png" class="img-fluid w-100 show-mb d-none"  alt="Tải app ngay" />
                </div>
                <div class="caption">
                    <p>{{ @$site_info->chung_title1 }}</p>
                    <h5>{{ @$site_info->chung_title2 }}</h5>
                    <p>{{ @$site_info->chung_title3 }}</p>
                    <div class="app-bn">
                        <div class="left">
                            <img src="{{ @$site_info->qr }}" class="img-fluid" alt="Tải app ngay" />
                        </div>
                        <div class="right">
                            <ul>
                                <li><a href="{{ @$site_info->chung_link_ios }}"><img src="{{ @$site_info->chung_logo_ios }}" class="img-fluid"  alt="Tải app ngay" /></a></li>
                                <li><a href="{{ @$site_info->chung_link_chplay }}"><img src="{{ @$site_info->chung_logo_chplay }}" class="img-fluid"  alt="Tải app ngay" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="phone-abs"><img src="{{ @$site_info->feapp }}" class="img-fluid" alt="" /></div>
            </div>
        </div>
    </section>
    <!-- voucher -->
</main>

@stop
