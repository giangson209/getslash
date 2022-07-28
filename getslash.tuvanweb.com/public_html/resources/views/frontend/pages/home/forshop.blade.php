@extends('frontend.master')
@section('main')
<main>
    <section class="box-banner-home-mer">
        <div class="caption-banner-mer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="txt-banner-mer">
                            <p class="mb-0">{!! nl2br(@$contentPage->top->title_1) !!}</p>
                            <h1>{!! nl2br(@$contentPage->top->title_2) !!}</h1>
                            <p class="mb-0">{!! nl2br(@$contentPage->top->desc) !!}</p>
                            <div class="btn-banner-mer">
                                <ul>
                                    <li><a href="{{ @$contentPage->top->link }}" class="btn-banner-1" target="_blank">{{ @$contentPage->top->nut }}</a></li>
                                    <li><a href="{{ @$contentPage->bot->link }}" class="btn-banner-2" target="_blank">{{ @$contentPage->bot->nut }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="avarta"><img src="{{ @$contentPage->top->banner }}" class="img-fluid w-100" alt="{{ @$contentPage->top->title_1 }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-solution" style="background: #F1F2F8;">
        <div class="container">
            <div class="heading">
                <p>{{ @$contentPage->khoi2->title }}</p>
                <h2>{!! @$contentPage->khoi2->title_2 !!}</h2>
            </div>
            <div class="list-sol">
                @if (!empty(@$contentPage->khoi2_list))
                  @foreach(@$contentPage->khoi2_list as $key => $value)
                  <div class="item-sol">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="avarta"><img src="{{ @$value->icon }}" class="img-fluid w-100" alt="{{ @$value->title }}"></div>
                        </div>
                        <div class="col-lg-5">
                            <div class="txt-sol">
                                <h4 class="mb-0">{{ @$value->title }}</h4>
                                <div class="desc">
                                  {!! @$value->content !!}
                                </div>
                                <div class="btn-page"><a href="{{ @$value->link }}">{{ @$value->nut }}</a></div>
                            </div>
                        </div>
                    </div>
                  </div>
                  @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="c-group">
      <div class="container">
        <!-- box -->

        <div class="box">
          <div class="heading">
            <p>{{ @$contentPage->khoi3->title_1 }}</p>
            <h2>{{ @$contentPage->khoi3->title_2 }}</h2>
          </div><!-- / heading -->
          <div class="slider slider-partner">
            @if(isset($posttype['partner']))
              @foreach ($posttype['partner'] as $k => $pro)
                @if ($k > 9)
                    @break
                @endif
                <div class="item"><a href="{{ $pro->slug }}"><img src="{{ $pro->logo }}"></a></div>
              @endforeach
            @endif
          </div><!-- / slider -->
        </div>
        <!-- box -->

        <div class="box">
          <div class="heading">
            <p>{{ @$contentPage->khoi3->titledd_1 }}</p>
            <h2>{{ @$contentPage->khoi3->titledd_2 }}</h2>
          </div><!-- / heading -->
          <div class="list-integrated">
            @if(isset($posttype['tichhop']))
              @foreach ($posttype['tichhop'] as $k => $p)
                @if ($k > 9)
                    @break
                @endif
                <div class="item-slide">
                  <div class="item-int"><img src="{{ $p->image }}" class="img-fluid w-100" alt="{{ $p->name }}"></div>
                </div>
              @endforeach
            @endif
          </div>
        </div>
        <!-- box -->

      </div>
    </section>

    <section class="box-why" style="background: #FAFBFD;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="txt-why">
              <div class="title-why"><span>{{ @$contentPage->khoi4->title_1 }}</span>{{ @$contentPage->khoi4->title_2 }}</div>
              <div class="avarta-why d-none"><img src="{{ @$contentPage->khoi4->image }}" class="img-fluid w-100" alt="{{ @$contentPage->khoi4->title_1 }}"></div>
              <div class="list-why">
                <div class="row">
                  @if (!empty(@$contentPage->toturial1))
                  @foreach(@$contentPage->toturial1 as $key => $value)
                    <div class="col-md-6">
                      <div class="item-why">
                        <div class="icon"><img src="{{ @$value->icon }}" class="img-fluid" alt="{{ @$value->name }}"></div>
                        <div class="info">{{ @$value->name }}</div>
                      </div>
                    </div>
                    @endforeach
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="avarta"><img src="{{ @$contentPage->khoi4->image }}" class="img-fluid w-100" alt="{{ @$contentPage->khoi4->title_1 }}"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="box-home-form">
      <div class="container">
        <div class="form-field-mer ">
          <div class="title-frm">{{ @$contentPage->khoi5->title }}</div>
            <form action="{{ route('pages.contact.post') }}" method="POST">
              @csrf
              <div class="item-field">
                <label>{{ @$contentPage->khoi5->field_name }} <span style="color: #FC3462;">*</span></label>
                <input type="text" placeholder="{{ @$contentPage->khoi5->placeholder_name }}" name="name" class="txt_field" required>
              </div>
              <div class="item-field">
                <label>{{ @$contentPage->khoi5->field_phone }} <span style="color: #FC3462;">*</span></label>
                <input type="text" placeholder="{{ @$contentPage->khoi5->placeholder_phone }}i" name="phone" class="txt_field" required>
              </div>
              <div class="item-field">
                <label>{{ @$contentPage->khoi5->field_shop }} <span style="color: #FC3462;">*</span></label>
                <input type="text" placeholder="{{ @$contentPage->khoi5->placeholder_shop }}" name="content" class="txt_field" required>
                <input type="hidden" name="type" value="for shopper">
              </div>
              <div class="item-field item-field-btn">
                <input type="submit" value="{{ @$contentPage->khoi5->nut }}" class="btn_field">
              </div>
            </form>
        </div>
      </div>
    </section>
    <section class="box-partner">
      <div class="container">
        <div class="heading">
            <p>{{ @$contentPage->khoi6->title }}</p>
            <h2>{!! @$contentPage->khoi6->title_2 !!}</h2>
          </div>
          <div class="list-partner">
            @foreach($press as $item)
            <div class="item-slide">
              <div class="item-part">
                <div class="logo-part"><a href="{{ route('press.single', $item->slug) }}"><img src="{{ $item->logo }}" class="img-fluid" alt="{{ $item->name_vi }}"></a></div>
                <div class="more-detail">
                  <a href="{{ route('press.single', $item->slug) }}">
                    <span>Xem chi tiết</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2.25 12H21.75" stroke="#0F1C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M17.25 7.5L21.75 12L17.25 16.5" stroke="#0F1C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
      </div>
    </section>
    <section class="box-feedback" style="background: #FAFBFD;">
      <div class="container">
        <div class="heading">
          <p>{{ @$contentPage->khoi7->title }}</p>
          <h2>{!! @$contentPage->khoi7->title_2 !!}</h2>
        </div>
        <div class="slide-feedback">
          @if(isset($posttype['banle']))
            @foreach ($posttype['banle'] as $k => $pr)
              @if ($k > 6)
                  @break
              @endif
              <div class="item-slide">
                <div class="item-feedback">
                  <div class="avarta">
                    <a href="{{ $pr->slug }}"><img src="{{ $pr->image }}" class="img-fluid w-100" alt="{{ $pr->name }}"></a>
                    <div class="play-video">
                      <a href="javascript:void(0)">
                        <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_1704_6808)">
                          <circle cx="24.0001" cy="24.5" r="23.5" stroke="white"/>
                          <path d="M36.6161 23.179V23.1801L17.4714 12.1271C17.0183 11.8655 16.4388 12.0207 16.1772 12.4739C16.0941 12.6178 16.0503 12.781 16.0503 12.9472V35.0531C16.0505 35.5763 16.4749 36.0003 16.9982 36C17.1643 35.9999 17.3276 35.9562 17.4715 35.8731L36.6162 24.8201C37.0694 24.5586 37.2248 23.9791 36.9633 23.5259C36.88 23.3818 36.7604 23.2622 36.6161 23.179Z" fill="white"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_1704_6808">
                          <rect width="48" height="48" fill="white" transform="translate(0 0.5)"/>
                          </clipPath>
                          </defs>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <div class="info">
                    <h3><a href="{{ $pr->slug }}">{{ $pr->name }}</a></h3>
                    <p class="mb-0">{{ \Carbon\Carbon::parse($pr->created_at)->diffForHumans() }}</p>
                  </div>
                </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </section>
    <section class="box-method">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="avarta"><img src="{{ @$contentPage->khoi8->image }}" class="img-fluid w-100" alt="{{ @$contentPage->khoi8->title_1 }}"></div>
          </div>
          <div class="col-lg-6">
            <div class="txt-method">
              <div class="d-top">
                <h4 class="mb-0">{{ @$contentPage->khoi8->title_1 }}</h4>
                <div class="desc">{{ @$contentPage->khoi8->title_2 }}</div>
              </div>
              <div class="qr-code">
                <ul class="qrcode-merchant p-0">
                  <li><img src="{{ @$site_info->qr }}" class="img-fluid" alt="{{ @$contentPage->khoi8->title_1 }}"></li>
                  <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-qrcode">Tải ứng dụng</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>

@stop