@extends('frontend.master')
@section('main')
<main>
    <section class="box-slide-news" style="background: url('{{ __BASE_URL__ }}/images/banner-news.png') no-repeat center;">
        <div class="container">
            <div class="title">
                <p class="text-uppercase">{{ @$contentPage->banner->title }}</p>
                <h2>
                    {!! nl2br(@$contentPage->banner->sub_title) !!}
                </h2>
            </div>
        </div>
        <div class="slide-new-hot">
            @foreach($noibat as $item)
            <div class="item-slide">
                <div class="item-new-hot">
                    <div class="avarta">
                        <a href="{{ route('pages.post.single', $item->slug) }}"><img src="{{ $item->image }}" class="img-fluid w-100" alt="{{ $item->name_vi }}" /></a>
                    </div>
                    <div class="info">
                        @if(count($item->category) > 0)
                        <p><a href="{{ route('pages.category.post',$item->category[0]->slug) }}">{{ implode(', ',$item->category()->pluck('name_vi')->toArray()) }}</a></p>
                        @endif
                        <h3><a href="{{ route('pages.post.single', $item->slug) }}">{{ $item->name_vi }}</a></h3>
                        <div class="more-detail">
                            <a href="{{ route('pages.post.single', $item->slug) }}">
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
            <div class="title-news">
                <h2>{{ @$contentPage->khoi2->title }}</h2>
            </div>
            <div class="filter-cate-news">
                <div class="title-tags-tab text-uppercase">{{ @$contentPage->khoi2->sub_title }}</div>
                <div class="scroll-filter">
                    <ul>
                        <li><a href="{{  asset('news') }}" class="{{ $slug == '' ? 'active' : '' }}">#Tất cả</a></li>
                        @foreach($category as $item)
                        <li><a href="{{ route('pages.category.post',$item->slug) }}" class="{{ $slug == $item->slug ? 'active' : '' }}">#{{ $item->name_vi }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="list-news">
                <div class="row">
                    @foreach($data as $item)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="item-news">
                            <div class="avarta">
                                <a href="{{ route('pages.post.single', $item->slug) }}"><img src="{{ $item->image }}" class="img-fluid w-100" alt="{{ $item->name_vi }}" /></a>
                            </div>
                            <div class="info">
                                @if(count($item->category) > 0)
                                <p><a href="{{ route('pages.category.post',$item->category[0]->slug) }}">{{ implode(', ',$item->category()->pluck('name_vi')->toArray()) }}</a></p>
                                @endif
                                <h3><a href="{{ route('pages.post.single', $item->slug) }}">{{ $item->name_vi }}</a></h3>
                                <div class="desc">
                                    {!! $item->desc_vi !!}
                                </div>
                                <div class="more-detail">
                                    <a href="{{ route('pages.post.single', $item->slug) }}">
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
    @include('frontend.teamplate.contact')
    
</main>

@stop