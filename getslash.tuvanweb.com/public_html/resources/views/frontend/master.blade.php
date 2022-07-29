<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="{{ $site_info->favicon }}">
	@if (isset($site_info->index_google))
		<meta name="robots" content="{{ $site_info->index_google == 1 ? 'index, follow' : 'noindex, nofollow' }}">
	@else
		<meta name="robots" content="noindex, nofollow">
	@endif
	{!! SEO::generate() !!}
	<meta property="og:url" content="{{ url('/') }}" />
	<meta http-equiv="content-language" content="vi" />
	<meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="Hà Nội" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
 	<meta name="_token" content="{{csrf_token()}}" />
 	<link rel="canonical" href="{{ \Request::fullUrl() }}">

	<!--link css-->
	<link rel="stylesheet" href="{{ __BASE_URL__ }}/vendor/bootstrap-5.1.0-dist/bootstrap.min.css">
	<link rel="stylesheet" href="{{ __BASE_URL__ }}/vendor/fancyapps/jquery.fancybox.min.css">
	<link rel="stylesheet" href="{{ __BASE_URL__ }}/vendor/slick/slick.css">
	<link rel="stylesheet" href="{{ __BASE_URL__ }}/scss/main.css">
	<link rel="stylesheet" href="{{ __BASE_URL__ }}/scss/style.css">

	<link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/plugin/jquery.toast.min.css">
	@yield('css')
	
 	<script>
 		var base_url = "{{ __BASE_URL__ }}";
 		var base = "{{ url('/') }}";
 	</script>
 	<script src="{{ __BASE_URL__ }}/vendor/jquery-3.3.1.min.js"></script>
 	
 	@if (!empty($site_info->google_analytics))
 		{!! $site_info->google_analytics !!}
 	@endif
</head> 
	<body>
		@if (!empty($site_info->code_facebook))
	 		{!! $site_info->code_facebook !!}
	 	@endif
		@include('frontend.teamplate.header')

		@yield('main')

		@include('frontend.teamplate.footer')
		<script src="{{ __BASE_URL__ }}/vendor/bootstrap-5.1.0-dist/popper.min.js"></script>
		<script src="{{ __BASE_URL__ }}/vendor/fancyapps/jquery.fancybox.min.js"></script>
		<script src="{{ __BASE_URL__ }}/vendor/slick/slick.min.js"></script>
		<script src="{{ __BASE_URL__ }}/main.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		
		<script type="text/javascript" src="{{ __BASE_URL__ }}/plugin/jquery.toast.min.js"></script>
		@yield('script')
		@if (Session::has('toastr'))
			<script>
				function showToast(text, heading){
				    $.toast({
				        text: text,
				        heading: heading,
				        icon: 'success',
				        showHideTransition: 'fade',
				        allowToastClose: false,
				        hideAfter: 3000,
				        stack: 5,
				        position: 'top-right',
				        textAlign: 'left', 
				        loader: true, 
				        loaderBg: '#9ec600',
				    });   
				}
				jQuery(document).ready(function($) {
					showToast('{{ Session::get('toastr') }}', 'Thông báo');
					$('#Modal-success').show();
				});
			</script>
		@endif
		@if (Session::has('toastr'))
			<script>
				jQuery(document).ready(function($) {
					$('.text-name-success').text('<?= Session::get('name'); ?>')
					$('#Modal-success').modal('show');
				});
			</script>
		@endif
		@if (!empty($site_info->script))
	 		{!! $site_info->script !!}
	 	@endif
	</body>
</html>