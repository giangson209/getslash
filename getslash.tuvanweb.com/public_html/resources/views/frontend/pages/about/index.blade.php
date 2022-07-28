@extends('frontend.master')
@section('main')

<main class="fqa">
    <section class="box-banner banner-about">
        <div class="avarta">
            <img src="{{ @$contentPage->banner->pc }}" class="img-fluid w-100 show-pc" alt="{{ @$contentPage->banner->title }}" />
            <img src="{{ @$contentPage->banner->mobile }}" class="img-fluid w-100 d-none show-mb" alt="{{ @$contentPage->banner->title }}" />
        </div>
        <div class="caption-banner">
            <div class="container">
                <div class="info-caption caption-about">
                    <div class="icon-kep"><img src="{{ __BASE_URL__ }}/images/kep-white.png" class="img-fluid" alt="{{ @$contentPage->banner->title }}" /></div>
                    <p class="text-uppercase mb-0">{{ @$contentPage->banner->title }}</p>
                    <h2 class="mb-0">
                        {!! nl2br(@$contentPage->banner->sub_title) !!}
                    </h2>
                    <div class="btn-main">
                        <a href="{{ @$contentPage->banner->link }}">{{ @$contentPage->banner->nut }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="box-service-about">
        <div class="container">
            <div class="list-service">
                <div class="row">
                    @if (!empty(@$contentPage->about))
                        @foreach(@$contentPage->about as $key => $value)
                            <div class="col-md-4">
                                <div class="item-srv text-center">
                                    <div class="icon"><img src="{{ @$value->icon }}" alt="{{ @$value->name }}" /></div>
                                    <div class="desc">
                                        <h5>{{ @$value->name }}</h5>
                                        <p>{!! @$value->desc !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="banner-qr" style="background-image: url('{{ __BASE_URL__ }}/images/background_qr.svg');">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="slider slide-banner-qr slide-img-about">
                        <div class="item-banner">
                            <img src="{{ @$contentPage->khoi3->banner }}" alt="{{ @$contentPage->khoi3->title }}" />
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="info">
                        <h3 class="title-bannerqr">
                            {{ @$contentPage->khoi3->title }}
                        </h3>
                        <span class="content-qr">
                            {!! nl2br(@$contentPage->khoi3->sub_title) !!}
                        </span>
                        <div class="image-qr row">
                            <div class="col-md-4">
                                <img src="{{ @$site_info->qr }}" />
                            </div>
                            <div class="col-md-7 btn-qr">
                                <!-- <a href="{{ @$contentPage->khoi3->link }}" class="download-qr">{{ @$contentPage->khoi3->nut }}</a>  -->
                                <a href="javascript:void(0)" class="download-qr" data-bs-toggle="modal" data-bs-target="#modal-qrcode">{{ @$contentPage->khoi3->nut }}</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    
@endsection
