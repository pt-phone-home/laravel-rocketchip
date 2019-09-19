<div class="servicesnav">
    <div class="servicesnav-top">
        <a href="{{ route('webdesign') }}" class="servicesnav-link servicesnav-link-top {{ Route::current()->getName() === 'webdesign' ? 'servicesnav-link-top-active': ''}}">Website Design &amp; Development</a>
        <a href="{{ route('ecommerce') }}" class="servicesnav-link servicesnav-link-top {{ Route::current()->getName() === 'ecommerce' ? 'servicesnav-link-top-active': ''}}">E-Commerce Design &amp; Development</a>
        <a href="{{ route('webapp') }}" class="servicesnav-link servicesnav-link-top {{ Route::current()->getName() === 'webapp' ? 'servicesnav-link-top-active': ''}}">Web Application Development</a>
        <a href="{{ route('redesign') }}" class="servicesnav-link servicesnav-link-top {{ Route::current()->getName() === 'redesign' ? 'servicesnav-link-top-active': ''}}">Website Redesign</a>
    </div>
    <div class="servicesnav-bottom">
        <a href="{{ route('seo') }}" class="servicesnav-link servicesnav-link-bottom {{ Route::current()->getName() === 'seo' ? 'servicesnav-link-bottom-active': ''}}">Search Engine Optimisation</a>
        <a href="{{ route('hosting') }}" class="servicesnav-link servicesnav-link-bottom {{ Route::current()->getName() === 'hosting' ? 'servicesnav-link-bottom-active': ''}}">Website Hosting &amp; Maintenance</a>
        <a href="{{ route('design') }}" class="servicesnav-link servicesnav-link-bottom {{ Route::current()->getName() === 'design' ? 'servicesnav-link-bottom-active': ''}}">Graphic Design</a>
        <a href="{{ route('logo') }}" class="servicesnav-link servicesnav-link-bottom {{ Route::current()->getName() === 'logo' ? 'servicesnav-link-bottom-active': ''}}">Logo Design</a>
    </div>
</div>
