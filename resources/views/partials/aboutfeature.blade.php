<div class="aboutfeature">
    <div class="aboutfeature-leftPanel">
        <div>
            <i class="{{ $icon }} {{ $iconClass }}"></i>
        </div>
        <div>

        </div>
    </div>
    <div class="aboutfeature-rightPanel">
        <h2 class="about-title"> {{ $aboutTitle }}</h2>
        <p class="about-info"> {!! $aboutInfo !!}</p>
        {{-- @if ($serviceLink)
        <div class="service-link-container">
            <a href="{{ $serviceLink }}" class="{{ $serviceLinkClass }}">more</a>
        </div>
        @endif --}}
    </div>
</div>
