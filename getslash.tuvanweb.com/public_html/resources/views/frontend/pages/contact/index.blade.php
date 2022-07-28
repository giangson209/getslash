@extends('frontend.master')
@section('main')
<main>
    <section class="box-form">
        <div class="container">
            <div class="content-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading">
                            <p>{{ @$contentPage->khoi1->title }}</p>
                            <h2>{{ @$contentPage->khoi1->title_sub }}</h2>
                        </div>
                        <div class="form-field">
                            <form action="{{ route('pages.contact.post') }}" method="POST">
                            @csrf
                            <div class="item-field">
                                <label>{{ @$contentPage->field->name }} <span style="color: #fc3462;">*</span></label>
                                <input type="text" placeholder="{{ @$contentPage->field->placeholder_name }}" name="name" required class="txt_field" value="{!! old('name') !!}"/>
                                <input type="hidden" name="type" value="Contact">
                            </div>
                            <div class="item-field">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>{{ @$contentPage->field->email }} <span style="color: #fc3462;">*</span></label>
                                        <input type="email" placeholder="{{ @$contentPage->field->placeholder_email }}" name="email" class="txt_field" required value="{!! old('email') !!}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{ @$contentPage->field->phone }} <span style="color: #fc3462;">*</span></label>
                                        <input type="text" placeholder="{{ @$contentPage->field->placeholder_phone }}" name="phone" class="txt_field" required />
                                    </div>
                                </div>
                            </div>
                            <div class="item-field">
                                <label>{{ @$contentPage->field->who }} <span style="color: #fc3462;">*</span></label>
                                <select name="you_are" id="you_are" required>
                                @if (!empty(@$contentPage->who_select))
                                    @foreach(@$contentPage->who_select as $key => $value)
                                        <option value="{{ @$value->name }}">{{ @$value->name }}</option>
                                    @endforeach
                                @endif
                                </select>
                                <div class="icon-choose"><img src="{{ __BASE_URL__ }}/images/arr-choose.svg" class="img-fluid" alt="" /></div>
                            </div>
                            <div class="item-field show-choose" id="select-show">
                                <label>{{ @$contentPage->field->choice }} <span style="color: #fc3462;">*</span></label>
                                <select name="help" id="help" required>
                                @if (!empty(@$contentPage->choice_select))
                                    @foreach(@$contentPage->choice_select as $key => $value)
                                        <option value="{{ @$value->name }}">{{ @$value->name }}</option>
                                    @endforeach
                                @endif
                                </select>
                                <div class="icon-choose"><img src="{{ __BASE_URL__ }}/images/arr-choose.svg" class="img-fluid" alt="" /></div>
                            </div>
                            <div class="item-field">
                                <label>{{ @$contentPage->field->content }} </label>
                                <textarea name="content" cols="30" rows="10" placeholder="{{ @$contentPage->field->placeholder_content }} "></textarea>
                            </div>
                            <div class="item-field item-field-btn">
                                <input type="submit" value="{{ @$contentPage->field->button }} " class="btn_field" />
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="maps">
                            {!! @$contentPage->khoi1->map !!}
                        </div>
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
                                <div class="close-popup" data-bs-dismiss="modal"><img src="{{ __BASE_URL__ }}/images/close.svg" class="img-fluid" alt="" /></div>
                                <div class="icon-success">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="42" cy="42" r="40" fill="#D3F8D6" stroke="#57D562" stroke-width="4" />
                                        <path d="M30.8892 42L38.6669 49.7778L53.1114 35.3333" stroke="#57D562" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="info">
                                    <h4>Cảm ơn, <span class="text-name-success"></span></h4>
                                    <div class="desc">Chúng tôi đã nhận được thông tin và sẽ sớm liên hệ với bạn qua Email. Cảm ơn bạn đã dành sự quan tâm đến Slash!</div>
                                    <div class="btn-page"><a href="{{ asset('/') }}">Tìm hiểu thêm</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-place">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-place">
                        <img src="{{ __BASE_URL__ }}/images/t-place.svg" class="img-fluid" alt="{!! @$contentPage->khoi2 !!}" />
                        <h2>{!! @$contentPage->khoi2 !!}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list-place">
                        @if (!empty(@$contentPage->contact_content))
                            @foreach(@$contentPage->contact_content as $key => $value)
                                <div class="item-place">
                                    <div class="title-place">
                                        <img src="{{ @$value->icon }}" class="img-fluid" alt="{{ @$value->title }}" />
                                        <span>{{ @$value->title }}</span>
                                    </div>
                                    {!! @$value->content !!}
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection