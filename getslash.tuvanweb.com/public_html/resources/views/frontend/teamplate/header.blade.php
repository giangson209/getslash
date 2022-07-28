<style>
    .c-header.header-fixed.menu_fixed {
        top: -80px;
    }
    .header-menu .btn-menu {
        justify-content: flex-end;
    }
</style>
<header class="c-header">
    <div class="topbar">
        <div class="container"> 
            <ul class="nav">
                @if(isset($menuMain[2]))
                @foreach($menuMain[2] as $value)
                    <li class="nav-item"><a href="{{ asset($value->url) }}" class="nav-link 
                        {{ '/'.Request::segment(1) == $value->url ? 'active' : null  }}  
                        {{ Request::segment(1) == 'faq-merchant' &&  $value->url == '/home-merchant' ? 'active' : null }}
                        {{ Request::segment(1) !== 'faq-merchant' && Request::segment(1) !== 'home-merchant' && Request::segment(1) !== 'career' && $value->url !== '/home-merchant' && $value->url !== '/career' ? 'active' : null }}

                    ">{{ $value->title }}</a></li>
                @endforeach
                @endif
            </ul>
        </div>
    </div>
    <!-- top bar -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="box">
                <a class="navbar-brand" href="{{ asset('/') }}">
                    <img src="{{ @$site_info->logo_color }}" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if(Request::segment(1) == 'faq-merchant' || Request::segment(1) == 'home-merchant')
                            @if(isset($menuMain[6]))
                            @foreach($menuMain[6] as $value)
                            <li class="nav-item"><a href="{{ asset($value->url) }}" class="nav-link {{ '/'.Request::segment(1) == $value->url ? 'active' : null  }}">{{ $value->title }}</a></li>
                            @endforeach
                            @endif
                        @else
                            @if(isset($menuMain[1]))
                            @foreach($menuMain[1] as $value)
                            <li class="nav-item"><a href="{{ asset($value->url) }}" class="nav-link {{ '/'.Request::segment(1) == $value->url ? 'active' : null  }}">{{ $value->title }}</a></li>
                            @endforeach
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
            <!-- / box -->

            <div class="box">
                <a href="javascript:void(0)" class="btn btn-downapp" data-bs-toggle="modal" data-bs-target="#modal-qrcode">
                    <svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M7.367 0.25H7.4H8.6H8.633C9.72515 0.249995 10.5906 0.24999 11.2883 0.306988C12.0017 0.365274 12.6053 0.486882 13.1565 0.767719C14.0502 1.22312 14.7769 1.94978 15.2323 2.84355C15.5131 3.39472 15.6347 3.99834 15.693 4.71173C15.75 5.40935 15.75 6.27483 15.75 7.36695V7.36697V7.36698V7.4V16.6V16.633C15.75 17.7252 15.75 18.5906 15.693 19.2883C15.6347 20.0017 15.5131 20.6053 15.2323 21.1565C14.7769 22.0502 14.0502 22.7769 13.1565 23.2323C12.6053 23.5131 12.0017 23.6347 11.2883 23.693C10.5906 23.75 9.72515 23.75 8.63302 23.75H8.6H7.4H7.36698C6.27485 23.75 5.40935 23.75 4.71173 23.693C3.99834 23.6347 3.39472 23.5131 2.84355 23.2323C1.94978 22.7769 1.22312 22.0502 0.767719 21.1565C0.486882 20.6053 0.365274 20.0017 0.306988 19.2883C0.24999 18.5906 0.249994 17.7251 0.25 16.633V16.6V7.4V7.367C0.249994 6.27485 0.24999 5.40936 0.306988 4.71173C0.365274 3.99834 0.486882 3.39472 0.767719 2.84355C1.22312 1.94978 1.94978 1.22312 2.84355 0.767719C3.39472 0.486882 3.99834 0.365274 4.71173 0.306988C5.40935 0.24999 6.27485 0.249995 7.36699 0.25H7.367ZM4.83388 1.80201C4.21325 1.85271 3.829 1.94909 3.52453 2.10423C2.913 2.41582 2.41582 2.913 2.10423 3.52453C1.94909 3.829 1.85271 4.21325 1.80201 4.83388C1.75058 5.46326 1.75 6.26752 1.75 7.4V16.6C1.75 17.7325 1.75058 18.5367 1.80201 19.1661C1.85271 19.7867 1.94909 20.171 2.10423 20.4755C2.41582 21.087 2.913 21.5842 3.52453 21.8958C3.829 22.0509 4.21325 22.1473 4.83388 22.198C5.46326 22.2494 6.26752 22.25 7.4 22.25H8.6C9.73248 22.25 10.5367 22.2494 11.1661 22.198C11.7867 22.1473 12.171 22.0509 12.4755 21.8958C13.087 21.5842 13.5842 21.087 13.8958 20.4755C14.0509 20.171 14.1473 19.7867 14.198 19.1661C14.2494 18.5367 14.25 17.7325 14.25 16.6V7.4C14.25 6.26752 14.2494 5.46327 14.198 4.83388C14.1473 4.21325 14.0509 3.829 13.8958 3.52453C13.5842 2.913 13.087 2.41582 12.4755 2.10423C12.171 1.94909 11.7867 1.85271 11.1661 1.80201C10.5367 1.75058 9.73248 1.75 8.6 1.75H7.4C6.26752 1.75 5.46326 1.75058 4.83388 1.80201ZM5.25 19C5.25 18.5858 5.58579 18.25 6 18.25H10C10.4142 18.25 10.75 18.5858 10.75 19C10.75 19.4142 10.4142 19.75 10 19.75H6C5.58579 19.75 5.25 19.4142 5.25 19ZM8 6C8.55229 6 9 5.55229 9 5C9 4.44772 8.55229 4 8 4C7.44772 4 7 4.44772 7 5C7 5.55229 7.44772 6 8 6Z"
                            fill="#0F1C4C"
                        />
                    </svg>
                    Tải ứng dụng
                </a>
                <div class="language">
                    <span><img src="{{ __BASE_URL__ }}/images/vi.png" /> VIE</span>
                </div>
            </div>
            <!-- / box -->
        </div>
    </nav>
    <!-- nav bar -->

    <div class="header-menu d-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-6">
                    <div class="logo">
                        <a href="{{ asset('/') }}"><img src="{{ @$site_info->logo_color }}" class="img-fluid" alt="trang chủ" /></a>
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="btn-menu">
                        <a href="javascript:void(0)">
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_1454_1987" style="mask-type: alpha;" maskUnits="userSpaceOnUse" x="2" y="5" width="28" height="23">
                                    <path d="M4 7.07736H28M4 16.4107H28M4 25.744H28" stroke="white" stroke-width="3" stroke-linecap="square" />
                                </mask>
                                <g mask="url(#mask0_1454_1987)">
                                    <path d="M4 7.07736H28M4 16.4107H28M4 25.744H28" stroke="#0F1C4C" stroke-width="3" stroke-linecap="square" />
                                    <path d="M29.6972 -1.61632H44.0798L32.2586 34.4377H17.873L29.6972 -1.61632Z" fill="#00E889" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-menu-mobile">
        <div class="container">
            <div class="top-tab-menu">
                <div class="close-menu-tab">
                    <a href="javascript:void(0)">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_1316_39099" style="mask-type: alpha;" maskUnits="userSpaceOnUse" x="4" y="4" width="24" height="24">
                                <path d="M6.66663 6.66666L25.3333 25.3333M6.66663 25.3333L25.3333 6.66666" stroke="#0F1C4C" stroke-width="3" stroke-linecap="square" />
                            </mask>
                            <g mask="url(#mask0_1316_39099)">
                                <path d="M6.66663 6.66666L25.3333 25.3333M6.66663 25.3333L25.3333 6.66666" stroke="#0F1C4C" stroke-width="3" stroke-linecap="square" />
                                <path d="M26.4908 0.639648H40.8733L29.0522 36.6937H14.6666L26.4908 0.639648Z" fill="#00E889" />
                            </g>
                        </svg>
                    </a>
                </div>
                <ul>
                    <li><a href="javascript:void(0)" class="clc-tab-menu active" data-tab="menu-1">{{ @$site_info->fieldmb1 }}</a></li>
                    <li><a href="javascript:void(0)" class="clc-tab-menu" data-tab="menu-2">{{ @$site_info->fieldmb2 }}</a></li>
                    <li><a href="career" class="clc-tab-menu">{{ @$site_info->fieldmb3 }}</a></li>
                </ul>
            </div>
            <div class="nav-mobile active" id="menu-1">
                <ul>
                    @if(isset($menuMain[9]))
                    @foreach($menuMain[9] as $value)
                    <li><a href="{{ asset($value->url) }}" class="{{ '/'.Request::segment(1) == $value->url ? 'active' : null  }}">{{ $value->title }}</a></li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="nav-mobile" id="menu-2">
                <ul>
                    @if(isset($menuMain[10]))
                    @foreach($menuMain[10] as $value)
                    <li><a href="{{ asset($value->url) }}" class="{{ '/'.Request::segment(1) == $value->url ? 'active' : null  }}">{{ $value->title }}</a></li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="btn-download-menu">
            <a href="javascript:void(0)" class="btn btn-downapp" data-bs-toggle="modal" data-bs-target="#modal-qrcode">
                <svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.367 0.25H7.4H8.6H8.633C9.72515 0.249995 10.5906 0.24999 11.2883 0.306988C12.0017 0.365274 12.6053 0.486882 13.1565 0.767719C14.0502 1.22312 14.7769 1.94978 15.2323 2.84355C15.5131 3.39472 15.6347 3.99834 15.693 4.71173C15.75 5.40935 15.75 6.27483 15.75 7.36695V7.36697V7.36698V7.4V16.6V16.633C15.75 17.7252 15.75 18.5906 15.693 19.2883C15.6347 20.0017 15.5131 20.6053 15.2323 21.1565C14.7769 22.0502 14.0502 22.7769 13.1565 23.2323C12.6053 23.5131 12.0017 23.6347 11.2883 23.693C10.5906 23.75 9.72515 23.75 8.63302 23.75H8.6H7.4H7.36698C6.27485 23.75 5.40935 23.75 4.71173 23.693C3.99834 23.6347 3.39472 23.5131 2.84355 23.2323C1.94978 22.7769 1.22312 22.0502 0.767719 21.1565C0.486882 20.6053 0.365274 20.0017 0.306988 19.2883C0.24999 18.5906 0.249994 17.7251 0.25 16.633V16.6V7.4V7.367C0.249994 6.27485 0.24999 5.40936 0.306988 4.71173C0.365274 3.99834 0.486882 3.39472 0.767719 2.84355C1.22312 1.94978 1.94978 1.22312 2.84355 0.767719C3.39472 0.486882 3.99834 0.365274 4.71173 0.306988C5.40935 0.24999 6.27485 0.249995 7.36699 0.25H7.367ZM4.83388 1.80201C4.21325 1.85271 3.829 1.94909 3.52453 2.10423C2.913 2.41582 2.41582 2.913 2.10423 3.52453C1.94909 3.829 1.85271 4.21325 1.80201 4.83388C1.75058 5.46326 1.75 6.26752 1.75 7.4V16.6C1.75 17.7325 1.75058 18.5367 1.80201 19.1661C1.85271 19.7867 1.94909 20.171 2.10423 20.4755C2.41582 21.087 2.913 21.5842 3.52453 21.8958C3.829 22.0509 4.21325 22.1473 4.83388 22.198C5.46326 22.2494 6.26752 22.25 7.4 22.25H8.6C9.73248 22.25 10.5367 22.2494 11.1661 22.198C11.7867 22.1473 12.171 22.0509 12.4755 21.8958C13.087 21.5842 13.5842 21.087 13.8958 20.4755C14.0509 20.171 14.1473 19.7867 14.198 19.1661C14.2494 18.5367 14.25 17.7325 14.25 16.6V7.4C14.25 6.26752 14.2494 5.46327 14.198 4.83388C14.1473 4.21325 14.0509 3.829 13.8958 3.52453C13.5842 2.913 13.087 2.41582 12.4755 2.10423C12.171 1.94909 11.7867 1.85271 11.1661 1.80201C10.5367 1.75058 9.73248 1.75 8.6 1.75H7.4C6.26752 1.75 5.46326 1.75058 4.83388 1.80201ZM5.25 19C5.25 18.5858 5.58579 18.25 6 18.25H10C10.4142 18.25 10.75 18.5858 10.75 19C10.75 19.4142 10.4142 19.75 10 19.75H6C5.58579 19.75 5.25 19.4142 5.25 19ZM8 6C8.55229 6 9 5.55229 9 5C9 4.44772 8.55229 4 8 4C7.44772 4 7 4.44772 7 5C7 5.55229 7.44772 6 8 6Z"
                        fill="#0F1C4C"
                    />
                </svg>
                Tải ứng dụng
            </a>
        </div>
    </div>
</header>
<!-- header end -->
<div class="popup-header">
    <div class="modal fade box-modal-head" id="modal-qrcode">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="content-popup-qr">
                        <div class="close-popup">
                            <a href="javascript:void(0)" data-bs-dismiss="modal"><img src="{{ __BASE_URL__ }}/images/close.svg" class="img-fluid" alt="{{ @$site_info->popup->title }}" /></a>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="avr-modal"><img src="{{ @$site_info->popup->banner }}" class="img-fluid w-100" alt="{{ @$site_info->popup->title }}" /></div>
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
                                            <div class="avr-qr"><img src="{{ @$site_info->qr }}" class="img-fluid" alt="Tải app ngay" /></div>
                                        </div>
                                        <div class="right">
                                            <ul>
                                                <li><a href="{{ @$site_info->chung_link_ios }}" target="_blank"><img src="{{ @$site_info->chung_logo_ios }}" class="img-fluid"  alt="Tải app ngay" /></a></li>
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
