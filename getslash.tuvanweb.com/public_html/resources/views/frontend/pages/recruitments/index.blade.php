@extends('frontend.master')
@section('main')
<main>
    <section class="box-banner-career">
        <div class="container">
            <div class="banner-career">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="txt-banner-career">
                            <h1>{!! @$contentPage->top->title_1 !!}</h1>
                            <div class="desc">{!! @$contentPage->top->title_2 !!}</div>
                            <!-- <div class="btn-page"><a href="{{ @$contentPage->top->link }}">{{ @$contentPage->top->nut }}</a></div> -->
                            <div class="btn-page"><a href="#list-job" class="clc-scroll">{{ @$contentPage->top->nut }}</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="avr-banner"><img src="{{ @$contentPage->top->banner }}" class="img-fluid" alt="{{ @$contentPage->top->title_1 }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-career" id="list-job">
        <div class="line-abs"><img src="{{ __BASE_URL__ }}/images/line-career.png" class="img-fluid" alt=""></div>
        <div class="container">
            <div class="title-career text-center">
                <img src="{{ __BASE_URL__ }}/images/icon-title.png" class="img-fluid" alt="">
                <h2>{{ @$contentPage->khoi3->title_1 }}</h2>
                <div class="desc">{!! nl2br(@$contentPage->khoi3->title_2) !!}</div>
                <div class="btn-page"><a href="#form-register" class="clc-scroll">{{ @$contentPage->khoi3->nut_1 }}</a></div>
                <!-- <div class="btn-page"><a href="{{ @$contentPage->khoi3->link_1 }}">{{ @$contentPage->khoi3->nut_1 }}</a></div> -->
            </div>
            <div class="list-job" id="opening-job">
                <div class="row">
                    @foreach($data ?? [] as $item)
                    <div class="col-md-3">
                        <div class="item-job">
                            <div class="avail">Available</div>
                            <h3><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-career" data-title="{{ $item->name_vi }}"  data-address="{!! $item->address_vi !!}" data-department="{!! $item->department !!}" data-type="{!! $item->type !!}" data-offers="{!! $item->offers_vi !!}" data-content="{!! $item->desc_vi !!}" class="data-popup">{{ $item->name_vi }}</a></h3>
                            <div class="more-detail">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-career" data-title="{{ $item->name_vi }}"  data-address="{!! $item->address_vi !!}" data-department="{!! $item->department !!}" data-type="{!! $item->type !!}" data-offers="{!! $item->offers_vi !!}" data-content="{!! $item->desc_vi !!}" class="data-popup">
                                    <span>Xem chi tiết</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.25 12H21.75" stroke="#0F1C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M17.25 7.5L21.75 12L17.25 16.5" stroke="#0F1C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div> 
            </div>
            <div class="search-job-filter text-center">
                <h4>{{ @$contentPage->khoi3->titledd_1 }}</h4>
                <p>{!! nl2br(@$contentPage->khoi3->titledd_2) !!}</p>
                <div class="btn-page"><a href="#form-register" class="clc-scroll">{{ @$contentPage->khoi3->nut_2 }}</a></div> 
                <!-- <div class="btn-page"><a href="{{ @$contentPage->khoi3->link_2 }}">{{ @$contentPage->khoi3->nut_2 }}</a></div> -->
            </div>
        </div>
    </section>
    <section class="box-popup-career">
            <div class="modal fade modal-career-detail" id="modal-career">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="detail-career">
                                <div class="close-popup"><a href="javascript:void(0)" class="btn-close-remove" data-bs-dismiss="modal"><img src="{{ __BASE_URL__ }}/images/close.svg" class="img-fluid" alt=""></a></div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="left-car">
                                            <div class="avail">Available</div>
                                            <h1 class="txt-title-job ">Merchant Acquisition Manager</h1>
                                            <ul>
                                                <li>
                                                    <span class="text-uppercase">Location</span>
                                                    <h6 class="address">Ho Chi Minh, Viet Nam</h6>
                                                </li>
                                                <li>
                                                    <span class="text-uppercase">Department</span>
                                                    <h6 class="department">Marketing</h6>
                                                </li>
                                                <li>
                                                    <span class="text-uppercase">Employment Type</span>
                                                    <h6 class="typejob">Full-time</h6>
                                                </li>
                                                <li>
                                                    <span class="text-uppercase">Salary</span>
                                                    <h6 class="offers">Up to ~$</h6>
                                                </li>
                                            </ul>
                                            <div class="btn-career"><a href="javascript:void(0)">Gửi hồ sơ</a></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="txt-detail-job active">
                                            
                                        </div>
                                        <div class="frm-popup">
                                            <h5>Gửi hồ sơ của bạn về cho chúng tôi</h5>
                                            <form class="form-popup">
                                                <div class="form-field">
                                                    <div class="item-field">
                                                        <label>HỌ VÀ TÊN <span style="color: #FC3462;">*</span></label>
                                                        <input type="text" placeholder="Nhập Họ và tên" name="name" class="txt_field" required>
                                                    </div>
                                                    <div class="item-field">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>EMAIL <span style="color: #FC3462;">*</span></label>
                                                                <input type="text" placeholder="Nhập địa chỉ Email" name="email" class="txt_field" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>SỐ ĐIỆN THOẠI <span style="color: #FC3462;">*</span></label>
                                                                <input type="text" placeholder="Nhập số điện thoại"  name="phone" class="txt_field" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-field">
                                                        <label>VỊ TRÍ ỨNG TUYỂN <span style="color: #FC3462;">*</span></label>
                                                        <input type="text" placeholder="Nhập vị trí bạn muốn ứng tuyển" name="postion" class="txt_field postion_popup" required>
                                                    </div>
                                                    <div class="item-field">
                                                        <label>TẢI LÊN HỒ SƠ CỦA BẠN (cho phép tệp DOC, DOCX, PDF) <span style="color: #FC3462;">*</span></label>
                                                        <div class="file-drop-area text-center">
                                                            <input type="file" class="file-input" name="file" required>
                                                            <p class="fake-btn">Kéo vào<br><label>hoặc</label></p>
                                                             <a href="javascript:void(0)" class="filename">
                                                                <span>Tải lên từ máy tính</span>
                                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9 15L9 3" stroke="#00E889" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M5.625 6.375L9 3L12.375 6.375" stroke="#00E889" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                        </div>      
                                                    </div>
                                                    <div class="item-field item-field-btn text-center">
                                                        <input type="button" value="Gửi hồ sơ" class="btn_field field-popup">
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="print-error-msg"><ul></ul></div>
                                        </div>
                                        <div class="success-career text-center">
                                            <div class="content-succ-career">
                                                <div class="icon">
                                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="42" cy="42" r="40" fill="#D3F8D6" stroke="#57D562" stroke-width="4"/>
                                                        <path d="M30.8887 41.9999L38.6664 49.7777L53.1109 35.3333" stroke="#57D562" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                                <div class="info">
                                                    <h4>Apply Succesfully</h4>
                                                    <div class="desc">
                                                        <p>I wish you could see me I’m totally doing a happy dance.</p>
                                                        <p>Thank you for applying to Slash!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-career text-center"><a href="javascript:void(0)">Gửi hồ sơ</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="box-desert">
        <div class="container">
            <div class="heading">
              <p>{{ @$contentPage->khoi2->title }}</p>
              <h2>{!! @$contentPage->khoi2->title_2 !!}</h2>
            </div>
            <div class="list-desert">
                @if (!empty(@$contentPage->khoi2_list))
                    @foreach(@$contentPage->khoi2_list as $key => $value)
                    <div class="item-desert">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="avarta"><img src="{{ @$value->icon }}" class="img-fluid" alt="{{ @$value->title }}"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="txt-des">
                                    <h4>{{ @$value->title }}</h4>
                                    <div class="desc">
                                        {!! @$value->content !!}
                                    </div>
                                    <div class="btn-page"><a href="#form-register" class="clc-scroll">{{ @$value->nut }}</a></div>
                                    <!-- <div class="btn-page"><a href="{{ @$value->link }}">{{ @$value->nut }}</a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="box-service-career" style="background:#FAFBFD">
        <div class="container">
            <div class="heading">
                <p>{{ @$contentPage->khoi4->title_1 }}</p>
                <h2>{{ @$contentPage->khoi4->title_2 }}</h2>
            </div>
            <div class="list-srv-career">
                <div class="row">
                    @if (!empty(@$contentPage->toturial))
                        @foreach(@$contentPage->toturial as $key => $value)
                        <div class="col-md-3">
                            <div class="item-srv-career text-center">
                                <div class="icon"><img src="{{ @$value->icon }}" class="img-fluid" alt="{{ @$value->name }}"></div>
                                <div class="info">
                                    <h5>{{ @$value->name }}</h5>
                                    <div class="desc">{!! nl2br(@$value->desc) !!}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="number-hot">
                <div class="title-number-hot text-center">
                    <img src="{{ __BASE_URL__ }}/images/icon-title.png" class="img-fluid" alt="">
                    <div class="note-title">{!! @$contentPage->khoi6->title_2 !!}</div>
                    <h2 class="mb-0">{{ @$contentPage->khoi6->title }}</h2>
                </div>
            </div>
            <div class="list-number text-center">
                <div class="row">
                    @if (!empty(@$contentPage->summary))
                        @foreach(@$contentPage->summary as $key => $value)
                        <div class="col-md-3">
                            <div class="item-numb">
                                <div class="numb">{{ @$value->title }}</div>
                                <p class="mb-0">{{ @$value->desc }}</p>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="box-form frm-career" id="form-register">
        <div class="container">
            <div class="heading">
                <p>{{ @$contentPage->khoi5->title }}</p>
                <h2>{{ @$contentPage->khoi5->phu }}</h2>
            </div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="content-form content-form-career">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-field">
                            <form action="{{ route('pages.contact.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="item-field">
                                    <label>HỌ VÀ TÊN <span style="color: #FC3462;">*</span></label>
                                    <input type="text" placeholder="Nhập Họ và tên" name="name=" class="txt_field" required>
                                </div>
                                <div class="item-field">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>EMAIL <span style="color: #FC3462;">*</span></label>
                                            <input type="text" placeholder="Nhập địa chỉ Email" class="txt_field" name="email" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>SỐ ĐIỆN THOẠI <span style="color: #FC3462;">*</span></label>
                                            <input type="text" placeholder="Nhập số điện thoại" class="txt_field" name="phone" required>
                                            <input type="hidden" placeholder="Nhập số điện thoại" value="Career" name="type" >
                                        </div>
                                    </div>
                                </div>
                                <div class="item-field">
                                    <label>VỊ TRÍ ỨNG TUYỂN <span style="color: #FC3462;">*</span></label>
                                    <input type="text" placeholder="Nhập vị trí bạn muốn ứng tuyển" class="txt_field" name="postion" required>
                                </div>
                                <div class="item-field">
                                    <label>TẢI LÊN HỒ SƠ CỦA BẠN (cho phép tệp DOC, DOCX, PDF) <span style="color: #FC3462;">*</span></label>
                                    <div class="file-drop-area text-center">
                                        <input type="file" class="file-input" name="file" required>
                                        <p class="fake-btn">Kéo vào<br><label>hoặc</label></p>
                                        <a href="javascript:void(0)" class="filename">
                                            <span>Tải lên từ máy tính</span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 15L9 3" stroke="#00E889" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.625 6.375L9 3L12.375 6.375" stroke="#00E889" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </div>      
                                </div>
                                <div class="item-field item-field-btn">
                                    <input type="submit" value="Gửi hồ sơ" class="btn_field">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="avr-form"><img src="{{ @$contentPage->khoi5->image }}" class="img-fluid w-100" alt="{{ @$contentPage->khoi5->title }}"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup-success">
            <div class="modal fade" id="Modal-success">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="content-pop-success text-center">
                                <div class="close-popup" data-bs-dismiss="modal"><img src="{{ __BASE_URL__ }}/images/close.svg" class="img-fluid" alt=""></div>
                                <div class="icon-success">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="42" cy="42" r="40" fill="#D3F8D6" stroke="#57D562" stroke-width="4"/>
                                        <path d="M30.8892 42L38.6669 49.7778L53.1114 35.3333" stroke="#57D562" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="info">
                                    <h4>Apply Succesfully</h4>
                                    <div class="desc">Chúng tôi đã nhận được thông tin và sẽ sớm liên hệ với bạn qua Email. Cảm ơn bạn đã dành sự quan tâm đến Slash!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
</main>

@stop

@section('script')
<script type="text/javascript">
    $(".field-popup").click(function () {
        // $(".frm-popup").removeClass("active");
        // $(".success-career").addClass("active");
        var formData = new FormData($('.form-popup')[0]);
        formData.append('_token', '{{ csrf_token() }}'); 

        $.ajax({
            url: '{{ route("pages.contact.postpopup") }}',
            data: formData,
            type: 'POST',
            contentType: false, 
            processData: false,
            success:function(data){
                if($.isEmptyObject(data.error)){
                    $(".frm-popup").removeClass("active");
                    $(".print-error-msg").css('display','none');
                    $(".success-career").addClass("active");
                }else{
                    printErrorMsg(data.error);
                }
            }
        });
        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
</script>
@endsection