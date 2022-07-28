@extends('frontend.master')
@section('main')
<main>
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
                            <img src="{{ __BASE_URL__ }}/images/qr-shop.svg" class="img-fluid" alt="Tải app ngay" />
                            <!-- <img src="{{ @$site_info->qr }}" class="img-fluid" alt="Tải app ngay" /> -->
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
    <section class="box-deal-hot">
        <div class="line-abs"><img src="{{ __BASE_URL__ }}/images/line-shop.png" class="img-fluid" alt="" /></div>
        <div class="container">
            <div class="heading">
                <p>{{ @$contentPage->khoi1->title }}</p>
                {!! @$contentPage->khoi1->sub_title !!}
            </div>
            <div class="lsit-deal-hot">
                <div class="row">
                    @if(isset($posttype['product']))
                    @foreach ($posttype['product'] as $k => $pro)
                        @if ($k > 3)
                            @break
                        @endif

                        <div class="col-md-3">
                            <div class="item-deal">
                                <div class="avarta">
                                    <a href="{{ $pro->slug }}"><img src="{{ $pro->image }}" class="img-fluid w-100" alt="{{ $pro->name }}" /></a>
                                </div>
                                <div class="info">
                                    <h3><a href="{{ $pro->slug }}">{{ $pro->name }}</a></h3>
                                    <del>{{ $pro->price_old }}₫</del>
                                    <div class="price">
                                        <span>{{ $pro->price }}<label>đ</label></span>
                                        <div class="status">{!! str_replace(['<p>', '</p>'], '', $pro->note ) !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    @endif
                </div>
                @if (isset($contentPage->khoi1->loadmore))
                    <div class="view-all text-center"><a href="{{ @$contentPage->khoi1->link }}">{{ @$contentPage->khoi1->nut }}</a></div>
                @endif
            </div>
        </div>
    </section>
    <section class="box-deal-hot">
        <div class="container">
            <div class="heading">
                <p>{{ @$contentPage->khoi2->title }}</p>
                {!! @$contentPage->khoi2->sub_title !!}
            </div>
            <div class="lsit-cate-hot">
                <div class="row">
                    @if(isset($posttype['category']))
                    @foreach ($posttype['category'] as $k => $pro)
                        @if ($k > 9)
                            @break
                        @endif
                        <div class="col-md-3">
                            <div class="item-cate-hot">
                                <div class="avarta">
                                    <a href="{{ $pro->slug }}"><img src="{{ $pro->image }}" class="img-fluid w-100" alt="{{ $pro->name }}" /></a>
                                </div>
                                <div class="info">
                                    <h3><a href="{{ $pro->slug }}">{{ $pro->name }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
                <!-- @if (isset($contentPage->khoi2->loadmore))
                    <div class="view-all text-center"><a href="{{ @$contentPage->khoi2->link }}">{{ @$contentPage->khoi2->nut }}</a></div>
                @endif -->
                <div class="view-all text-center"><a href="{{ @$contentPage->khoi2->link }}">{{ @$contentPage->khoi2->nut }}</a></div>
            </div>
        </div>
    </section>
    <section class="box-deal-hot" style="background: #fafbfd;">
        <div class="container">
            <div class="heading">
                <p>{{ @$contentPage->khoi3->title }}</p>
                {!! @$contentPage->khoi3->sub_title !!}
            </div>
            <div class="lsit-partner-hot">
                <div class="row">
                    @if(isset($posttype['partner']))
                    @foreach ($posttype['partner'] as $k => $pro)
                        @if ($k > 7)
                            @break
                        @endif
                        <div class="col-md-3">
                            <div class="item-part-hot">
                                <div class="avarta">
                                    <a href="{{ $pro->slug }}"><img src="{{ $pro->image }}" class="img-fluid w-100" alt="{{ $pro->name }}" /></a>
                                    <div class="icon-part"><img src="{{ $pro->logo }}" class="img-fluid" alt="{{ $pro->name }}" /></div>
                                </div>
                                <div class="info">
                                    <h3><a href="{{ $pro->slug }}">{{ $pro->name }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
                <!-- @if (isset($contentPage->khoi3->loadmore))
                    <div class="view-all text-center"><a href="{{ @$contentPage->khoi3->link }}">{{ @$contentPage->khoi3->nut }}</a></div>
                @endif -->
                <div class="view-all text-center"><a href="{{ @$contentPage->khoi3->link }}">{{ @$contentPage->khoi3->nut }}</a></div>
            </div>
        </div>
    </section>
</main>
@stop