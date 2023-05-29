@php
    $footerlinks = config('db.footerlinks');

    $socials = config('db.socials');
@endphp



<section id="footer">
    <div class="footer-top">
        <div class="container d-flex px-0 ">
            <div class="py-3 w-50 mx-0">
                <div class="d-flex flex-column flex-wrap linksBox">
                    @foreach ($footerlinks as $link)
                        <ul class="px-0">
                            <li class="text-white text-uppercase">{{ $link['title'] }}</li>
                            @foreach ($link['links'] as $item)
                                <li>
                                    <a :href="{{ $item['url'] }}">{{ $item['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
            <div class="w-50 logo-box">
                <img class="foot-logo" src="/img/dc-logo-bg.png" alt="logo DC">
            </div>
        </div>
    </div>
    <div class="footer-bot d-flex align-items-center  ">
        <div class="container py-3 px-0 ">
            <div class="d-flex justify-content-between align-items-center m-0">
                <div>
                    <button class="">sign-up now!</button>
                </div>
                <div>
                    <ul class="d-flex align-items-center mb-0">

                        <div>
                            @foreach ($socials as $icon)
                            <a class="me-2" href="{{$icon['url']}}">
                                <img src="{{$icon['img']}}" alt="{{$icon['text']}}">
                            </a>
                            @endforeach
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
