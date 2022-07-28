<div class="amblog-item">
	<div class="amblog-photo">
		<a href="{{ route('home.post.single', $item->slug) }}" title="{{ $item->name }}" class="zoom">
			<img src="{{ $item->image }}" alt="{{ $item->name }}" title="{{ $item->name }}">
		</a>
	</div>
	<p class="amblog-date">{{ $item->created_at->format('d/m/Y') }}</p>
	<h4 class="amblog-name"><a href="{{ route('home.post.single', $item->slug) }}" title="{{ $item->name }}">{{ $item->name }}</a></h4>
	<p class="amblog-short">{{ $item->desc }}</p>
	<a href="{{ route('home.post.single', $item->slug) }}" class="view-detail" title="">Chi tiết</a>
</div>