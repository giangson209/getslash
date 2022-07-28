@extends('frontend.master')
@section('main')
    <section class="blog-cate">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="list-blog">
                        <div class="item-blog title-detail">
                            <div class="avarta"><a href="">
                                <img src="{{ $data->image }}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="info">
                                <div class="date-time">{{ $data->created_at->format('F jS, Y') }}</div>
                                <h1>{{ $data->{ 'name_'.locale() } }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="content-detai">
                        <div class="re-mobile" style="display: none;">
                            <div class="title-bar">@lang('site.overview')</div>
                            <div class="info-recruit">
                                <ul>
                                    <li>
                                        <label>@lang('site.income')</label>
                                        <div class="desc" style="color: #FE5202">{{ $data->{ 'offers_'.locale() } }}</div>
                                    </li>
                                    <li>
                                        <label>@lang('site.quantity')</label>
                                        <div class="desc">{{ $data->qty }}</div>
                                    </li>
                                    <li>
                                        <label>@lang('site.office_address')</label>
                                        <div class="desc">{{ $data->{ 'address_'.locale() } }}</div>
                                    </li>
                                    <li>
                                        <label>@lang('site.deadline')</label>
                                        <div class="desc">{{ $data->deadline }}</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="detail detail-recruit">
                            <h5>@lang('site.job_des')</h5>
                            {!! $data->{ 'desc_'.locale() } !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="side-bar">
                        <div class="list-bar">
                            <div class="item-bar re-pc">
                                <div class="title-bar">@lang('site.overview')</div>
                                <div class="info-recruit">
                                    <ul>
                                        <li>
                                            <label>@lang('site.income')</label>
                                            <div class="desc" style="color: #FE5202">{{ $data->{ 'offers_'.locale() } }}</div>
                                        </li>
                                        <li>
                                            <label>@lang('site.quantity')</label>
                                            <div class="desc">{{ $data->qty }}</div>
                                        </li>
                                        <li>
                                            <label>@lang('site.office_address')</label>
                                            <div class="desc">{{ $data->{ 'address_'.locale() } }}</div>
                                        </li>
                                        <li>
                                            <label>@lang('site.deadline')</label>
                                            <div class="desc">{{ $data->deadline }}</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-bar">
                                <div class="title-bar">@lang('site.related_posts')</div>
                                <ul class="list-cate">
                                    @foreach($recruitmentOther ?? [] as $item)
                                        <li><a href="{{ route('pages.recruitments.single', $item->slug) }}">{{ $item->{ 'name_'.locale() } }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection