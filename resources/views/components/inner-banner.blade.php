<!-- Inner Banner -->
<div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title text-center">
            <h3>{{ $title }}</h3>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                @if(isset($breadcrumbs))
                    @foreach($breadcrumbs as $breadcrumb)
                        <li>
                            @if(isset($breadcrumb['url']))
                                <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                            @else
                                {{ $breadcrumb['name'] }}
                            @endif
                        </li>
                    @endforeach
                @else
                    <li>{{ $title }}</li>
                @endif
            </ul>
        </div>
    </div>
    <div class="inner-lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- Inner Banner End -->
