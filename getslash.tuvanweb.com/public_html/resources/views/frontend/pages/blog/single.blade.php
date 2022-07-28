@extends('frontend.master')
@section('main')
<main>
	<section class="box-cover-detail">
		<div class="container">
			<div class="cover-thumb text-center"><img src="{{ $data->image }}" class="img-fluid w-100" alt="{{ $data->name_vi }}"></div>
			<div class="info-cover-detail">
				<h1>{{ $data->name_vi }}</h1>
				<ul>
					<li><span>Đăng bởi:</span><span> {{  isset($data->user) ? $data->user->name : 'Admin' }}</span></li>
					<li><span>Ngày đăng:</span><span> {{ $data->created_at->format('d/m/Y') }}</span></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="box-detail">
		<div class="container">
			<div class="content-detail">
				<div class="info-detail">
					{!! $data->content_vi !!}
				</div>
				<div class="author-detail">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="authoor-time">
								<ul>
									<li>Người viết: {{  isset($data->user) ? $data->user->name : 'Admin' }}</li>
									<li>Ngày đăng: {{ $data->created_at->format('d/m/Y') }}</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="shear-detail">
								<p>Chia sẻ bài viết</p>
								<ul>
									<li><a href="https://www.facebook.com/sharer.php?u={{ route('pages.post.single', $data->slug) }}"><img src="{{ __BASE_URL__ }}/images/sc-1.svg" class="img-fluid" alt="facebook"></a></li>
									<li><a href="https://www.twitter.com/sharer.php?u={{ route('pages.post.single', $data->slug) }}"><img src="{{ __BASE_URL__ }}/images/sc-2.svg" class="img-fluid" alt="twitter"></a></li>
									<li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('pages.post.single', $data->slug) }}&title={{ $data->name_vi }}&summary={{ $data->name_vi }}&source={{ $data->name_vi }}"><img src="{{ __BASE_URL__ }}/images/sc-3.svg" class="img-fluid" alt="linkedin"></a></li>
									<li><a href="{{ route('pages.post.single', $data->slug) }}"><img src="{{ __BASE_URL__ }}/images/sc-4.svg" class="img-fluid" alt="linkedin"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-news">
		<div class="container">
			<div class="title-news">
				<h2>Bài viết liên quan</h2>
			</div>
			<div class="list-news">
				<div class="slide-new-other">
				
					@foreach($lq as $item)
					<div class="item-slide">
						<div class="item-news">
							<div class="avarta">
                                <a href="{{ route('pages.post.single', $item->slug) }}"><img src="{{ $item->image }}" class="img-fluid w-100" alt="{{ $item->name_vi }}" /></a>
							</div>
							<div class="info">
								@if(count($item->category) > 0)
                                <p><a href="{{ route('pages.category.post',$item->category[0]->slug) }}" class="text-uppercase">{{ implode(', ',$item->category()->pluck('name_vi')->toArray()) }}</a></p>
                                @endif
                                <h3><a href="{{ route('pages.post.single', $item->slug) }}">{{ $item->name_vi }}</a></h3>
								<div class="desc">
                                    {!! $item->desc_vi !!}
                                </div>
								<div class="more-detail">
									<a href="{{ route('pages.post.single', $item->slug) }}">
										<span>Xem chi tiết</span>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M2.25 12H21.75" stroke="#0F1C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M17.25 7.5L21.75 12L17.25 16.5" stroke="#0F1C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
	</section>
	@include('frontend.teamplate.contact')
</main>
@endsection