<li class="header">TRANG QUẢN TRỊ</li>

<li class="{{ Request::segment(2) == 'home' ? 'active' : null  }}">
    <a href="{{ route('backend.home') }}">
        <i class="fa fa-home"></i> <span>Trang chủ</span>
    </a>
</li>
<li class="{{ Request::segment(2) == 'users' ? 'active' : null  }}">
    <a href="{{ route('users.index') }}">
        <i class="fa fa-user"></i> <span>Tài khoản</span>
    </a>
</li>



<li class="{{ Request::segment(2) == 'contact' ? 'active' : null  }}">
    <a href="{{ route('get.list.contact') }}">
        <i class="fa fa-comments" aria-hidden="true"></i> <span>Khách hàng liên hệ</span>
    </a>
</li>

<li class="treeview {{ Request::segment(2) === 'posts' && request('type') == 'blog' || Request::segment(2) === 'categories-post' && request('type') == 'blog'  ? 'active' : null }}">
    <a href="#">
        <i class="fa fa-tags" aria-hidden="true"></i> <span> Blog </span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ Request::segment(2) === 'posts' && request('type') == 'blog' ? 'active' : null }}">
            <a href="{{ route('posts.index',['type' =>'blog']) }}"><i class="fa fa-circle-o"></i> Danh sách</a>
        </li>


        <li class="{{ Request::segment(2) === 'categories-post' && request('type') == 'blog' ? 'active' : null }}">
            <a href="{{ route('categories-post.index',['type' =>'blog']) }}"><i class="fa fa-circle-o"></i> Chuyên mục</a>
        </li>

    </ul>
</li>

<li class="{{ Request::segment(2) == 'posttype'  && request('type') == 'product'  ? 'active' : null  }}">
    <a href="{{ route('posttype.index',['type' =>'product']) }}">
        <i class="fa fa-tags" aria-hidden="true"></i> <span>Sản phẩm</span>
    </a>
</li>

<li class="{{ Request::segment(2) == 'posttype'  && request('type') == 'category' ? 'active' : null  }}">
    <a href="{{ route('posttype.index',['type' =>'category']) }}">
        <i class="fa fa-tags" aria-hidden="true"></i> <span>Danh mục sản phẩm</span>
    </a>
</li>

<li class="{{ Request::segment(2) == 'posttype'  && request('type') == 'partner' ? 'active' : null  }}">
    <a href="{{ route('posttype.index',['type' =>'partner']) }}">
        <i class="fa fa-tags" aria-hidden="true"></i> <span>Đối tác</span>
    </a>
</li>

<li class="{{ Request::segment(2) == 'posttype'  && request('type') == 'tichhop' ? 'active' : null  }}">
    <a href="{{ route('posttype.index',['type' =>'tichhop']) }}">
        <i class="fa fa-tags" aria-hidden="true"></i> <span>Tích hợp</span>
    </a>
</li>

<li class="{{ Request::segment(2) == 'posttype'  && request('type') == 'banle' ? 'active' : null  }}">
    <a href="{{ route('posttype.index',['type' =>'banle']) }}">
        <i class="fa fa-tags" aria-hidden="true"></i> <span>Bán lẻ</span>
    </a>
</li>

<li class="{{ Request::segment(2) == 'posttype'  && request('type') == 'video' ? 'active' : null  }}">
    <a href="{{ route('posttype.index',['type' =>'video']) }}">
        <i class="fa fa-tags" aria-hidden="true"></i> <span>Video</span>
    </a>
</li>

<li class="{{ Request::segment(2) == 'styles' ? 'active' : null  }}">
    <a href="{{ route('styles.index') }}">
        <i class="fa fa-tags" aria-hidden="true"></i> <span>Press</span>
    </a>
</li>

<li class="{{ Request::segment(2) == 'recruitments' ? 'active' : null  }}">
    <a href="{{ route('recruitments.index') }}">
        <i class="fa fa-tags" aria-hidden="true"></i> <span>Tuyển dụng</span>
    </a>
</li>

<li class="treeview {{ Request::segment(2) === 'posts' && request('type') == 'faq' || Request::segment(2) === 'categories-post' && request('type') == 'faq'  ? 'active' : null }}">
    <a href="#">
        <i class="fa fa-tags" aria-hidden="true"></i> <span> FAQ </span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ Request::segment(2) === 'posts' && request('type') == 'faq' ? 'active' : null }}">
            <a href="{{ route('posts.index',['type' =>'faq']) }}"><i class="fa fa-circle-o"></i> Danh sách</a>
        </li>


        <li class="{{ Request::segment(2) === 'categories-post' && request('type') == 'faq' ? 'active' : null }}">
            <a href="{{ route('categories-post.index',['type' =>'faq']) }}"><i class="fa fa-circle-o"></i> Chuyên mục</a>
        </li>

    </ul>
</li>

<li class="treeview {{ Request::segment(2) === 'posts' && request('type') == 'faq-merchant' || Request::segment(2) === 'categories-post' && request('type') == 'faq-merchant'  ? 'active' : null }}">
    <a href="#">
        <i class="fa fa-tags" aria-hidden="true"></i> <span> FAQ Merchant </span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ Request::segment(2) === 'posts' && request('type') == 'faq-merchant' ? 'active' : null }}">
            <a href="{{ route('posts.index',['type' =>'faq-merchant']) }}"><i class="fa fa-circle-o"></i> Danh sách</a>
        </li>


        <li class="{{ Request::segment(2) === 'categories-post' && request('type') == 'faq-merchant' ? 'active' : null }}">
            <a href="{{ route('categories-post.index',['type' =>'faq-merchant']) }}"><i class="fa fa-circle-o"></i> Chuyên mục</a>
        </li>

    </ul>
</li>

<li class="{{ Request::segment(2) == 'pages' ? 'active' : null  }}">
    <a href="{{ route('pages.list') }}">
        <i class="fa fa-paper-plane" aria-hidden="true"></i> <span>Cài đặt trang</span>
    </a>
</li>

<li class="header">Cấu hình hệ thống</li>
<li class="treeview {{ Request::segment(2) === 'options' || Request::segment(2) === 'branchs' || Request::segment(2) === 'menu-category' ||  Request::segment(2) === 'menu' || Request::segment(2) === 'banks' ? 'active' : null }}">
    <a href="#">
        <i class="fa fa-cog" aria-hidden="true"></i> <span>Cấu hình</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ Request::segment(3) === 'general' ? 'active' : null }}">
            <a href="{{ route('backend.options.general') }}"><i class="fa fa-circle-o"></i> Cấu hình chung</a>
        </li>

        <li class="{{ Request::segment(2) === 'menu' ? 'active' : null }}">
            <a href="{{ route('setting.menu') }}"><i class="fa fa-circle-o"></i> Menu</a>
        </li>

        <li class="{{ Request::segment(3) === 'smtp' ? 'active' : null }}">
            <a href="{{ route('backend.options.smtp-config') }}"><i class="fa fa-circle-o"></i>  Cấu hình Email</a>
        </li>

    </ul>
</li>
<div style="display: none;">
	<li class="header">Cấu hình hệ thống</li>
	<li class="treeview {{ Request::segment(2) == 'options' ? 'active' : null  }}">
		<a href="#">
			<i class="fa fa-folder"></i> <span>Setting (Developer)</span>
			<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
			</span>
		</a>
		<ul class="treeview-menu">
			<li class="{{ Request::segment(3) == 'developer-config' ? 'active' : null  }}">
				<a href="{{ route('backend.options.developer-config') }}"><i class="fa fa-circle-o"></i> Developer - Config</a>
			</li>
		</ul>
	</li>
</div>
