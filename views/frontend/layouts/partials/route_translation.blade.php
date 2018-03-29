<div class="dropdown">
    <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ $composer_locale }}
        <span class="arrow_carrot-down"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dLabel">
        @php $route_translation = TranslateUrl::$locales; @endphp
        @if(count($route_translation))
            @foreach($composer_locales as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" class="{!! $composer_locale == $localeCode ? "active" : null !!}" href="{!! $route_translation[$localeCode] !!}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        @else
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" class="{!! $composer_locale == $localeCode ? "active" : null !!}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
</div>