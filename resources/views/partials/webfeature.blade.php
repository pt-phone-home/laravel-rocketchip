<div class=" {{ $featureClass }}">
    <div class="{{ $featureClass }}-leftPanel">
        <div>
            <i class="{{ $icon }} {{ $iconClass }}"></i>
        </div>
        <div>

        </div>
    </div>
    <div class="{{ $featureClass }}-rightPanel">
        <h2 class="service-title"> {{ $serviceTitle }}</h2>
        <p class="service-info"> {!! $serviceInfo !!}</p>
        @if ($serviceLink)
        <div class="service-link-container">
            <a href="{{ $serviceLink }}" class="{{ $serviceLinkClass }}">more</a>
        </div>
        @endif
    </div>
</div>
