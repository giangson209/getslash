@extends('frontend.master')
@section('main')
    <section class="banner">
        <div class="slide-banner">
            <div class="item-banner">
                <div class="avarta"><img src="{{ __BASE_URL__ }}/images/bn-style.jpg" class="img-fluid w-100" alt=""></div>
                <div class="caption">
                    <div class="container">
                        <div class="slide-style">
                            <div class="item-style-banner">
                                <h3 class="text-uppercase wow fadeInUp wHighlight" data-aos-duration=".25" data-wow-delay=".25s">{{ $data->created_at->format('Y') }}</h3>
                                <h1 class=" wow fadeInUp wHighlight" data-aos-duration=".25" data-wow-delay=".25s">{{ $data->{ 'name_'.app()->getLocale() } }}</h1>
                                <div class="desc wow fadeInUp wHighlight" data-aos-duration=".25" data-wow-delay=".25s">{{ $data->{ 'desc_'.app()->getLocale() } }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="style-cate">
        <div class="container">
            <div class="content-style">
                <div class="row">
                    <div class="col-md-6">
                        <div class="txt-style">
                            <h2 class=" wow fadeInUp wHighlight" data-aos-duration=".25" data-wow-delay=".25s">@lang('site.about')</h2>
                            <div class="desc wow fadeInUp wHighlight" data-aos-duration=".25" data-wow-delay=".25s">
                                {!! $data->{ 'content_'.locale() } !!}
                            </div>
                            <div class="social social-pc wow fadeInUp wHighlight" data-aos-duration=".25" data-wow-delay=".25s">
                                <p>SHARE</p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="8.547" height="16" viewBox="0 0 8.547 16">
                                                <path id="Path_181" data-name="Path 181" d="M834.059,481.765h1.514v-2.492l-2.119-.163c-4.1,0-3.843,3.563-3.843,3.563v2.492h-2.585v2.865h2.585v7.08h3.074v-7.08h2.329l.466-2.865h-2.795V483.3C832.685,481.672,834.059,481.765,834.059,481.765Z" transform="translate(-827.026 -479.11)" fill="#999"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://t.me/share/url?url={{ url()->current() }}&text={{ $data->{ 'name_'.app()->getLocale() } }}" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13.334" viewBox="0 0 16 13.334">
                                                <path id="Path_182" data-name="Path 182" d="M366.278,490.453l-.265,3.723a.925.925,0,0,0,.739-.358l1.775-1.7,3.679,2.694c.675.376,1.15.178,1.332-.621l2.415-11.315h0c.214-1-.361-1.387-1.018-1.143l-14.194,5.434c-.969.376-.954.916-.165,1.161l3.629,1.129,8.429-5.274c.4-.263.757-.117.461.145Z" transform="translate(-360 -481.665)" fill="#999"/>
                                            </svg>

                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $data->{ 'name_'.app()->getLocale() } }}&summary={{ $data->{ 'desc_'.app()->getLocale() } }}&source={{ $data->{ 'name_'.app()->getLocale() } }}" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <g id="Group_130" data-name="Group 130" transform="translate(-170 -280.024)">
                                                    <path id="Path_183" data-name="Path 183" d="M200.949,308.9a3.083,3.083,0,0,1,.512-.589,4.11,4.11,0,0,1,1.858-.9,5.577,5.577,0,0,1,2.682.1,2.914,2.914,0,0,1,2.095,2.153,6.57,6.57,0,0,1,.23,1.3q.049.589.048,1.181-.005,2.714,0,5.427c0,.046,0,.093,0,.139,0,.086-.03.13-.12.126-.054,0-.108,0-.162,0q-1.275,0-2.55,0c-.308,0-.279.044-.279-.289,0-1.616,0-3.232,0-4.848a4.128,4.128,0,0,0-.218-1.413,2.036,2.036,0,0,0-.595-.9,1.449,1.449,0,0,0-.8-.339,2.635,2.635,0,0,0-.921.057,1.94,1.94,0,0,0-1.369,1.179,3.636,3.636,0,0,0-.27,1.447q0,2.412,0,4.824c0,.307.031.278-.268.278q-1.31,0-2.619,0c-.208,0-.235.052-.235-.219q0-4.987,0-9.973c0-.2,0-.2.2-.2H200.7c.207,0,.208,0,.208.221q0,.613,0,1.227Z" transform="translate(-22.374 -21.815)" fill="#999"/>
                                                    <path id="Path_184" data-name="Path 184" d="M175.035,313.211v4.846c0,.031,0,.062,0,.093,0,.3,0,.25-.249.251q-1.31,0-2.619,0c-.046,0-.093,0-.139,0-.074,0-.117-.026-.115-.107,0-.054,0-.108,0-.162v-9.854c0-.016,0-.031,0-.046,0-.225,0-.226.226-.226H174.8c.245,0,.231-.025.231.245Q175.035,310.73,175.035,313.211Z" transform="translate(-1.53 -22.38)" fill="#999"/>
                                                    <path id="Path_185" data-name="Path 185" d="M171.947,283.92a1.948,1.948,0,1,1,1.946-1.941A1.944,1.944,0,0,1,171.947,283.92Z" transform="translate(0)" fill="#999"/>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="list-style">
                            @foreach($data->getGalleryStyle() ?? [] as $item)
                                <div class="item-style wow fadeInUp wHighlight" data-aos-duration=".25" data-wow-delay=".25s">
                                    <a href="{{ $item->path }}" data-fancybox="winner">
                                        <img src="{{ $item->path }}" class="img-fluid w-100" alt="">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="social social-mobile" style="display: none;">
                             <p>SHARE</p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="8.547" height="16" viewBox="0 0 8.547 16">
                                                <path id="Path_181" data-name="Path 181" d="M834.059,481.765h1.514v-2.492l-2.119-.163c-4.1,0-3.843,3.563-3.843,3.563v2.492h-2.585v2.865h2.585v7.08h3.074v-7.08h2.329l.466-2.865h-2.795V483.3C832.685,481.672,834.059,481.765,834.059,481.765Z" transform="translate(-827.026 -479.11)" fill="#999"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://t.me/share/url?url={{ url()->current() }}&text={{ $data->{ 'name_'.app()->getLocale() } }}" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13.334" viewBox="0 0 16 13.334">
                                                <path id="Path_182" data-name="Path 182" d="M366.278,490.453l-.265,3.723a.925.925,0,0,0,.739-.358l1.775-1.7,3.679,2.694c.675.376,1.15.178,1.332-.621l2.415-11.315h0c.214-1-.361-1.387-1.018-1.143l-14.194,5.434c-.969.376-.954.916-.165,1.161l3.629,1.129,8.429-5.274c.4-.263.757-.117.461.145Z" transform="translate(-360 -481.665)" fill="#999"/>
                                            </svg>

                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $data->{ 'name_'.app()->getLocale() } }}&summary={{ $data->{ 'desc_'.app()->getLocale() } }}&source={{ $data->{ 'name_'.app()->getLocale() } }}" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <g id="Group_130" data-name="Group 130" transform="translate(-170 -280.024)">
                                                    <path id="Path_183" data-name="Path 183" d="M200.949,308.9a3.083,3.083,0,0,1,.512-.589,4.11,4.11,0,0,1,1.858-.9,5.577,5.577,0,0,1,2.682.1,2.914,2.914,0,0,1,2.095,2.153,6.57,6.57,0,0,1,.23,1.3q.049.589.048,1.181-.005,2.714,0,5.427c0,.046,0,.093,0,.139,0,.086-.03.13-.12.126-.054,0-.108,0-.162,0q-1.275,0-2.55,0c-.308,0-.279.044-.279-.289,0-1.616,0-3.232,0-4.848a4.128,4.128,0,0,0-.218-1.413,2.036,2.036,0,0,0-.595-.9,1.449,1.449,0,0,0-.8-.339,2.635,2.635,0,0,0-.921.057,1.94,1.94,0,0,0-1.369,1.179,3.636,3.636,0,0,0-.27,1.447q0,2.412,0,4.824c0,.307.031.278-.268.278q-1.31,0-2.619,0c-.208,0-.235.052-.235-.219q0-4.987,0-9.973c0-.2,0-.2.2-.2H200.7c.207,0,.208,0,.208.221q0,.613,0,1.227Z" transform="translate(-22.374 -21.815)" fill="#999"/>
                                                    <path id="Path_184" data-name="Path 184" d="M175.035,313.211v4.846c0,.031,0,.062,0,.093,0,.3,0,.25-.249.251q-1.31,0-2.619,0c-.046,0-.093,0-.139,0-.074,0-.117-.026-.115-.107,0-.054,0-.108,0-.162v-9.854c0-.016,0-.031,0-.046,0-.225,0-.226.226-.226H174.8c.245,0,.231-.025.231.245Q175.035,310.73,175.035,313.211Z" transform="translate(-1.53 -22.38)" fill="#999"/>
                                                    <path id="Path_185" data-name="Path 185" d="M171.947,283.92a1.948,1.948,0,1,1,1.946-1.941A1.944,1.944,0,0,1,171.947,283.92Z" transform="translate(0)" fill="#999"/>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection