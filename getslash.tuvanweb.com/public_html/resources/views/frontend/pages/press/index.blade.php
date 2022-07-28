@extends('frontend.master')
@section('main')
<main>
    <section class="box-banner-press">
        <div class="caption-press">
            <div class="container">
                <h1>{{ @$contentPage->banner->title }}</h1>
                <div class="desc">
                    {!! @$contentPage->banner->sub_title !!}
                </div>
            </div>
        </div>
    </section>
    <section class="box-slide-news" style="background: url('{{ __BASE_URL__ }}/images/banner-news.png') no-repeat center;">
        <div class="container">
            <div class="title">
                <p class="text-uppercase">{{ @$contentPage->khoi2->title }}</p>
                {!! @$contentPage->khoi2->sub_title !!}
            </div>
        </div>
        <div class="slide-new-hot">
            @foreach($noibat as $item)
            <div class="item-slide">
                <div class="item-new-hot">
                    <div class="avarta">
                        <a href="{{ route('press.single', $item->slug) }}"><img src="{{ $item->image }}" class="img-fluid w-100" alt="{{ $item->name_vi }}" /></a>
                    </div>
                    <div class="info">
                        <p>
                            <a href="{{ route('press.single', $item->slug) }}"><img src="{{ $item->logo }}" class="img-fluid" alt="{{ $item->name_vi }}" /></a>
                        </p>
                        <h3><a href="{{ route('press.single', $item->slug) }}">{{ $item->name_vi }}</a></h3>
                        <div class="more-detail">
                            <a href="{{ route('press.single', $item->slug) }}">
                                <span>Xem chi tiết</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.25 12H21.75" stroke="#0F1C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.25 7.5L21.75 12L17.25 16.5" stroke="#0F1C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section class="box-news">
        <div class="container">
            <div class="list-news">
                <div class="row">
                    @foreach($data as $item)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="item-news">
                            <div class="avarta">
                                <a href="{{ route('press.single', $item->slug) }}"><img src="{{ $item->image }}" class="img-fluid w-100" alt="{{ $item->name_vi }}" /></a>
                            </div>
                            <div class="info">
                                <h3><a href="{{ route('press.single', $item->slug) }}">{{ $item->name_vi }}</a></h3>
                                <div class="logo-news">
                                    <a href="{{ route('press.single', $item->slug) }}"><img src="{{ $item->logo }}" class="img-fluid" alt="{{ $item->name_vi }}" /></a>
                                </div>
                                <div class="more-detail">
                                    <a href="{{ route('press.single', $item->slug) }}">
                                        <span>Xem chi tiết</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.25 12H21.75" stroke="#0F1C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.25 7.5L21.75 12L17.25 16.5" stroke="#0F1C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-md-12">
                        <div class="pagination">
                            <ul>
                                @if ($data->lastPage() > 1)
                                    <li class="{{ ($data->currentPage() == 1) ? ' d-none' : '' }}">
                                        <a href="{{ $data->url(1) }}"><img src="{{ __BASE_URL__ }}/images/arrow-left.png" class="img-fluid" alt="Previous" /></a>
                                    </li>
                                    @for ($i = 1; $i <= $data->lastPage(); $i++)
                                        <li>
                                            <a href="{{ $data->url($i) }}" class="{{ ($data->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li class="{{ ($data->currentPage() == $data->lastPage()) ? ' d-none' : '' }}">
                                        <a href="{{ $data->url($data->currentPage()+1) }}" ><img src="{{ __BASE_URL__ }}/images/arrow-right.png" class="img-fluid" alt="Next" /></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-press-kit">
        <div class="container">
            <div class="content-kit">
                <div class="left-kit">
                    <div class="logo"><img src="{{ __BASE_URL__ }}/images/logo-kit.svg" class="img-fluid" alt="{{ @$contentPage->khoi3->title }}" /></div>
                    <h2>{!! nl2br(@$contentPage->khoi3->note) !!}</h2>    
                </div>
                <div class="right-kit">
                    <h4>{{ @$contentPage->khoi3->title }}</h4>
                    <p>{{ @$contentPage->khoi3->sub_title }}</p>
                    <div class="btn-page">
                        <a href="{{ @$contentPage->khoi3->link }}">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 4.66675V15.7501" stroke="#0F1C4C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.33337 12.8333L14 16.9166L18.6667 12.8333" stroke="#0F1C4C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5.83337 19.8333V22.1666H22.1667V19.8333" stroke="#0F1C4C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>{{ @$contentPage->khoi3->nut }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@stop