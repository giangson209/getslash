<section class="box-subscribe">
    <div class="container">
        <div class="content-sub-form">
            <div class="title-sub text-center">
                <h2>{{ @$site_info->khoi3->title }}</h2>
                <p>{!! nl2br(@$site_info->khoi3->sub_title) !!}</p>
            </div>
            <div class="frm-sub">
                <p>{{ @$site_info->khoi3->form }}</p>
                <form action="{{ route('pages.contact.post') }}" method="POST">
                @csrf
                <input type="email" placeholder="{{ @$site_info->khoi3->placeholder }}" name="email" class="txt_sub_field" required />
                <input type="hidden" name="type" value="Blog">
                <button type="submit" class="btn_sub_frm">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 20C0 8.95431 8.95431 0 20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20Z" fill="#0F1C4C" />
                        <path d="M10.25 20H29.75" stroke="#00E889" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M25.25 15.5L29.75 20L25.25 24.5" stroke="#00E889" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                </form>
            </div>
            <div class="note-sub text-center">{{ @$site_info->khoi3->note }}</div>
        </div>
    </div>
</section>