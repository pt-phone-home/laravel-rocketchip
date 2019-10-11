<div class="header">
    <div class="logo">
        <a href="/"><img src="/images/color_logo_transparent.png" alt="RocketChip Websolutions Logo"></a>
    </div>
    <div class="nav">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li id="services-nav-item"><a href="{{ route('webdesign') }}">Services</a>
            <div class="hovernav">
                <div class="hovernav-row1">
                    <div class="hovernav-row1-item" onclick="location.href= '/website-design-development';" style="cursor:pointer;">
                        <div>
                            <i class="fal fa-object-group"></i>
                        </div>
                        <div>
                            <p><a href="{{ route('webdesign') }}">Website Design & Development</a></p>
                        </div>
                    </div>
                    <div class="hovernav-row1-item" onclick="location.href= '/ecommerce-design-development';" style="cursor:pointer;">
                        <div>
                            <i class="fal fa-shopping-cart"></i>
                        </div>
                        <div>
                            <p><a href="{{ route('ecommerce') }}">E-Commerce Design & Development</a></p>
                        </div>
                    </div>
                    <div class="hovernav-row1-item" onclick="location.href= '/web-application-development';" style="cursor:pointer;">
                        <div>
                            <i class="fal fa-browser"></i>
                        </div>
                        <div>
                            <p><a href="{{ route('webapp') }}">Web Application Development</a></p>
                        </div>
                    </div>
                    <div class="hovernav-row1-item" onclick="location.href= '/website-redesign';" style="cursor:pointer;">
                        <div>
                            <i class="fal fa-redo-alt"></i>
                        </div>
                        <div>
                            <p><a href="{{ route('redesign') }}">Website Redesign</a></p>
                        </div>
                    </div>
                </div>
                <div class="hovernav-row1">
                    <div class="hovernav-row1-item" onclick="location.href= '/search-engine-optimisation';" style="cursor:pointer;">
                        <div>
                            <i class="fal fa-search-plus"></i>
                        </div>
                        <div>
                            <p><a href="{{ route('seo') }}">Search Engine Optimisation</a></p>
                        </div>
                    </div>
                    <div class="hovernav-row1-item" onclick="location.href= '/website-hosting-maintenance';" style="cursor:pointer;">
                        <div>
                            <i class="fal fa-cogs"></i>
                        </div>
                        <div>
                            <p><a href="{{ route('hosting') }}">Website Hosting & Maintenance</a></p>
                        </div>

                    </div>
                    <div class="hovernav-row1-item" onclick="location.href= '/graphic-design';" style="cursor:pointer;">
                        <div>
                            <i class="fal fa-swatchbook"></i>
                        </div>
                        <div>
                            <p><a href="{{ route('design') }}">Graphic Design</a></p>
                        </div>
                    </div>
                    <div class="hovernav-row1-item" onclick="location.href= '/logo-design';" style="cursor:pointer;">
                        <div>
                            <i class="fal fa-pencil-paintbrush"></i>
                        </div>
                        <div>
                            <p><a href="{{ route('logo') }}">Logo Design</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li><a href="/contact" class="contact_us">Contact Us</a></li>
    </div>
    <div class="sidenavbutton" id="sidenavbutton">
        <i class="fas fa-bars"></i>
    </div>

</div>

    <div class="sidenav" id="sidenav">
        <li class="sidenav-item" ><a href="" class="sidenav-item-close" id="sideNavClose">Close X</a></li>
        <li class="sidenav-item"><a href="/" class="sidenav-item-link" >Home</a></li>
        <li class="sidenav-item"><a href="/about" class="sidenav-item-link">About Us</a></li>
        <li class="sidenav-item" id="sideNavDropdownBtn"><a href="" class="sidenav-item-link">Services</a>
            <ul class="sidenav-dropdown" id="sideNavDropdownMenu">
                <li class="sidenav-dropdown-item"><a class="sidenav-dropdown-item-link" href="{{ route('webdesign') }}">Website Design & Development</a></li>
                <li class="sidenav-dropdown-item"><a class="sidenav-dropdown-item-link" href="{{ route('ecommerce') }}">E-Commerce Design & Development</a></li>
                <li class="sidenav-dropdown-item"><a class="sidenav-dropdown-item-link" href="{{ route('webapp') }}">Web Application Development</a></li>
                <li class="sidenav-dropdown-item"><a class="sidenav-dropdown-item-link" href="{{ route('redesign') }}">Website Redesign</a></li>
                <li class="sidenav-dropdown-item"><a class="sidenav-dropdown-item-link" href="{{ route('seo') }}">Search Engine Optimisation</a></li>
                <li class="sidenav-dropdown-item"><a class="sidenav-dropdown-item-link" href="{{ route('hosting') }}">Website Hosting & Maintenance</a></li>
                <li class="sidenav-dropdown-item"><a class="sidenav-dropdown-item-link" href="{{ route('design') }}">Graphic Design</a></li>
                <li class="sidenav-dropdown-item"><a class="sidenav-dropdown-item-link" href="{{ route('logo') }}">Logo Design</a></li>
            </ul>
        </li>
        <li class="sidenav-item"><a href="/portfolio" class="sidenav-item-link">Portfolio</a></li>
        <li class="sidenav-item"><a href="/contact" class="contact_us sidenav-item-link">Contact Us</a></li>
    </div>
</div>



