<footer class="c-footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <a class="navbar-brand" href="{{ asset('/') }}">
                    <img src="{{ @$site_info->logo }}" />
                    <a href="{{ @$site_info->link_bct }}"><span class="bct d-none"><img src="{{ @$site_info->logo_bct }}" /></span></a>
                </a>

                <h2 class="slogan">
                  {!! @$site_info->footer->desc1 !!}
                </h2>
                <p class="description">
                  {!! @$site_info->footer->desc2 !!}
                </p>
                <div class="social-top d-none">
                    <div class="social">
                        @if(!empty(@$site_info->social)) @foreach(@$site_info->social as $key => $value)
                        <a href="{{ $value->link }}" target="_blank"><img src="{{ $value->icon }}" /></a>
                        @endforeach @endif
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8">
                <div class="link-fter">
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3">
                            <h3 class="title-nav">{{ @$site_info->field1 }} <img src="{{ __BASE_URL__ }}/images/ar-blue.svg" class="img-fluid d-none" alt="" /></h3>
                            <ul class="nav">
                                @if(isset($menuMain[4]))
                                @foreach($menuMain[4] as $value)
                                <li class="nav-item"><a href="{{ $value->url }}" class="nav-link">{{ $value->title }}</a></li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3">
                            <h3 class="title-nav">{{ @$site_info->field2 }} <img src="{{ __BASE_URL__ }}/images/ar-blue.svg" class="img-fluid d-none" alt="" /></h3>
                            <ul class="nav">
                                @if(isset($menuMain[5]))
                                @foreach($menuMain[5] as $value)
                                <li class="nav-item"><a href="{{ $value->url }}" class="nav-link">{{ $value->title }}</a></li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3">
                            <h3 class="title-nav">{{ @$site_info->field3 }} <img src="{{ __BASE_URL__ }}/images/ar-blue.svg" class="img-fluid d-none" alt="" /></h3>
                            <ul class="nav">
                                @if(isset($menuMain[6]))
                                @foreach($menuMain[6] as $value)
                                <li class="nav-item"><a href="{{ $value->url }}" class="nav-link">{{ $value->title }}</a></li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3">
                            <h3 class="title-nav">{{ @$site_info->field4 }} <img src="{{ __BASE_URL__ }}/images/ar-blue.svg" class="img-fluid d-none" alt="" /></h3>
                            <ul class="nav">
                                @php
                                    $tang = 1
                                @endphp
                                @if(isset($menuMain[7]))
                                @foreach($menuMain[7] as $value)
                                <li class="nav-item"><a href="{{ $value->url }}" class="nav-link" data-bs-toggle="modal" data-bs-target="#modal-qrcode-{{ $tang }}">{{ $value->title }}</a></li>
                                @php
                                    $tang++;
                                    @endphp
                                @endforeach
                                @endif
                            </ul>

                            <div class="popup-header">
                                <div class="modal fade box-modal-head" id="modal-qrcode-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="content-popup-qr">
                                                    <div class="close-popup">
                                                        <a href="javascript:void(0)" data-bs-dismiss="modal"><img src="{{ __BASE_URL__ }}/images/close.svg" class="img-fluid" alt="{{ @$site_info->popup->title }}" /></a>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <div class="avr-modal"><img src="{{ __BASE_URL__ }}/images/qq-1.png" class="img-fluid w-100" alt="{{ @$site_info->popup->title }}" /></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="info-modal-qr">
                                                                <h6>{{ @$site_info->popup->title }}</h6>
                                                                <div class="desc">
                                                                    {{ @$site_info->popup->desc }}
                                                                </div>
                                                                <div class="note-modal"><img src="{{ __BASE_URL__ }}/images/footer-03.png" class="img-fluid" alt="" /></div>
                                                                <div class="apps-modal">
                                                                    <div class="left">
                                                                        <div class="avr-qr"><img src="{{ __BASE_URL__ }}/images/qr-1-1.png" class="img-fluid" alt="Tải app ngay" /></div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <ul> 
                                                                            <li><a href="{{ @$site_info->chung_link_ios }}" target="_blank"><img src="{{ @$site_info->chung_logo_ios }}" class="img-fluid"  alt="Tải app ngay" /></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade box-modal-head" id="modal-qrcode-2">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="content-popup-qr">
                                                    <div class="close-popup">
                                                        <a href="javascript:void(0)" data-bs-dismiss="modal"><img src="{{ __BASE_URL__ }}/images/close.svg" class="img-fluid" alt="{{ @$site_info->popup->title }}" /></a>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <div class="avr-modal"><img src="{{ __BASE_URL__ }}/images/qq-2.png" class="img-fluid w-100" alt="{{ @$site_info->popup->title }}" /></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="info-modal-qr">
                                                                <h6>{{ @$site_info->popup->title }}</h6>
                                                                <div class="desc">
                                                                    {{ @$site_info->popup->desc }}
                                                                </div>
                                                                <div class="note-modal"><img src="{{ __BASE_URL__ }}/images/footer-03.png" class="img-fluid" alt="" /></div>
                                                                <div class="apps-modal">
                                                                    <div class="left">
                                                                        <div class="avr-qr"><img src="{{ __BASE_URL__ }}/images/qr-1-1.png" class="img-fluid" alt="Tải app ngay" /></div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <ul>
                                                                            <li><a href="{{ @$site_info->chung_link_chplay }}" target="_blank"><img src="{{ @$site_info->chung_logo_chplay }}" class="img-fluid"  alt="Tải app ngay" /></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="bot-social">
                    <div class="left">
                        <div class="social mt-0">
                          @if(!empty(@$site_info->social)) @foreach(@$site_info->social as $key => $value)
                          <a href="{{ $value->link }}" target="_blank"><img src="{{ $value->icon }}" /></a>
                          @endforeach @endif
                        </div>
                    </div>
                    <div class="right">
                      <a href="{{ @$site_info->link_bct }}"><img src="{{ @$site_info->logo_bct }}" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="content">© 2021 Slash. All rights reserved | Designed by <a href="http://pitstudio.co/" target="_blank">Pit Studio</a></div>
            <ul class="nav nav-copyright">
              @if(!empty(@$site_info->linkbottom))
                  @foreach(@$site_info->linkbottom as $key => $value)
                  <li class="nav-item"><a href="{{ $value->link }}" class="nav-item">{{ $value->title }}</a></li>
                  @endforeach
              @endif
            </ul>
        </div>
    </div>
</footer>
<!-- footer end -->
