@extends('frontend.master')
@section('main')

<main class="fqa">
    <section class="banner" style="background-image: url('{{ __BASE_URL__ }}/images/banner-faq.svg');">
        <div class="container">
            <div class="caption-slide">
                <p class="title-note">{{ @$contentPage->banner->title }}</p>
                <h2 class="title">
                    {!! nl2br(@$contentPage->banner->sub_title) !!}
                </h2>
            </div>
            <div class="form-search">
                <form class="form" method="POST">
                    @csrf
                    <span>{{ @$contentPage->search->title }}</span>
                    <input type="text" name="search" placeholder="{{ @$contentPage->search->sub_title }}" required />
                    <button type="submit" style="background: #0F1C4C"><img src="{{ __BASE_URL__ }}/images/search_icon_1.svg" /></button>
                </form>
            </div>
        </div>
    </section>

    <section class="box-faq">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="tab-faq">
                        <ul>
                            @foreach($category as $key => $item)
                            <li>
                                <a href="javascript:void(0)" data-tab="faq-{{ $key }}" class="{{ $key == 0 && count($search) == 0 ? 'active' : '' }}">
                                    <img src="{{ $item->icon }}" alt="{{ $item->name_vi }}" />
                                    <span>&ensp;{{ $item->name_vi }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    @foreach($category as $key => $item)
                    <div class="content-tab-faq @if($key == 0 && count($search) == 0) active @endif" id="faq-{{ $key }}">
                        @if (isset($posts[$item->name_vi]))
                            @foreach($posts[$item->name_vi] as $k => $value)
                            <div class="faq-content">
                                <div class="title-quesstion {{ $k == 0 ? 'active' : '' }}">{{ @$value->name_vi }}</div>
                                <div class="answer" style="{{ $k == 0 ? 'display: block;' : '' }}">
                                    {!! $value->content_vi !!}
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    @endforeach
                    @if(count($search) > 0)
                        <div class="content-tab-faq  active " id="faq-100">
                                @foreach($search as $k => $value)
                                <div class="faq-content">
                                    <div class="title-quesstion {{ $k == 0 ? 'active' : '' }}">{{ @$value->name_vi }}</div>
                                    <div class="answer" style="{{ $k == 0 ? 'display: block;' : '' }}">
                                        {!! $value->content_vi !!}
                                    </div>
                                </div>
                                @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="banner-qr" style="background-image: url('{{ __BASE_URL__ }}/images/background_qr.svg');">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="slider slide-banner-qr">
                        @if (!empty(@$contentPage->slide))
                            @foreach(@$contentPage->slide as $key => $value)
                            <div class="item-banner">
                                <img src="{{ @$value->image }}" />
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="info">
                        <h3 class="title-bannerqr">
                            {!! nl2br(@$contentPage->qr->title) !!}
                        </h3>
                        <span class="content-qr">
                            {!! nl2br(@$contentPage->qr->sub_title) !!}
                        </span>
                        <div class="image-qr row">
                            <div class="col-md-4">
                                <img src="{{ @$site_info->qr }}" />
                            </div>
                            <div class="col-md-7 btn-qr">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-qrcode" class="download-qr">{{ @$contentPage->qr->nut }}</a>
                                <!-- <a href="{{ @$contentPage->qr->link }}" class="download-qr">{{ @$contentPage->qr->nut }}</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-faq" style="background-image: url('{{ __BASE_URL__ }}/images/contact-us.svg');">
        <div class="container">
            <div class="info">
                <h3 class="title-contactfaq">
                    {{ @$contentPage->contact->title }}
                </h3>
                <span class="content-contact-faq">
                    {!! nl2br(@$contentPage->contact->sub_title) !!}
                </span>
                <div class="image-faq">
                    <div class="btn-faq">
                        <a href="{{ @$contentPage->contact->link }}" class="download-faq">{{ @$contentPage->contact->nut }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    
@endsection
