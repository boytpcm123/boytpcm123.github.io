@php $breadcrumbs = Breadcrumb::$breadcrumb; @endphp
@if(!empty($breadcrumbs) && is_array($breadcrumbs) && count($breadcrumbs) > 1)
    <section class="section-breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs">
                @foreach($breadcrumbs as $key => $value)
                    @if($value["link"] )
                        <li><a href="{!! $value["link"] !!}" title="{!! $value["name"] !!}">{!! $value["name"] !!}</a></li>
                    @else
                        <li><span>{!! $value["name"] !!}</span></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </section>
@endif