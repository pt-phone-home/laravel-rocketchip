@extends('master')

@section('title')

Portfolio | Rocket.Chip Web Solutions

@endsection

@section('content')
<div class="about-banner">
    <h1>Portfolio</h1>
</div>
{{-- <portfolio></portfolio> --}}
{{-- <div class="w-full bg-gray-200 h-72">
    <div class="container mx-auto flex flex-wrap">
        <div class="w-full sm:w-1/2 md:w-1/3 p-2">
            <div class="w-full h-64 omPortfolio">

            </div>
            <div class="text-center text-3xl">
                <h2>O'Mahony Meats Ltd.</h2>
            </div>
        </div>
    </div>
</div> --}}
<div class="portfolio-grid">
    <div class="portfolio-grid-inset">
        <div class="portfolio-element portfolio-element-omahony">
            <div class="portfolio-element-img-container">
                <img src="/images/om_meatsbackground.png" class="portfolio-element-image" alt />
            </div>
            <div class="portfolio-heading-container">
                 <h2 class="heading">O'Mahony Meats Ltd.</h2>
             </div>
            <div class="portfolio-link-container">
                <a href="#" class="link om_link" id="om_link" data-toggle="window-cover" data-target="om_modal">More Info</a>
            </div>
            @component('partials.modal')
                @slot('id')
                    om_modal
                @endslot
                @slot('image')
                    /images/om_meatsbackground.png
                @endslot
                @slot('aboutContent')
                <p>O'Mahony Meats are an SME based in Dublin. They supply meat to both the catering trade and the general public. They sell over 600 products. They customer-driven products</p>
                @endslot
                @slot('aboutTitleClass')
                    om-about-title
                @endslot
                @slot('projectContent')
                    <p>Rocket.Chip Web Solutions worked closely with O'Mahony Meats to develop a custom web solution to suit their style, brand identity and specific requirements.
                    <p>The website features a unique navigation and page structure, which was designed in conjuction with the client. It aslo features a custom back-end which enables the client to post employment opportunities, special offers, recipes and more.</p>
                @endslot
                @slot('projectTitleClass')
                    om-project-title
                @endslot
                @slot('link')
                    https://www.omahonymeats.ie
                @endslot
                @slot('linkClass')
                    om-link-button
                @endslot
            @endcomponent
        </div>
        <div class="portfolio-element portfolio-element-cityfarm">
            <div class="portfolio-element-img-container">
                <img src="/images/cityfarmbackground.png" class="portfolio-element-image" alt />
            </div>
            <div class="portfolio-heading-container">
                 <h2 class="heading">St. Anne's City Farm</h2>
             </div>
            <div class="portfolio-link-container">
                <a href="#" class="link cf_link" id="cf_link" data-toggle="" data-target="cf_modal">More Info</a>
            </div>
            @component('partials.modal')
                @slot('id')
                    cf_modal
                @endslot
                @slot('image')
                    /images/cityfarmbackground.png
                @endslot
                @slot('aboutContent')
                <p style="margin-bottom: .5rem;">St. Anne's City Farm is an educational hub that encourages people to come get involved in growing their own food and being in nature.</p>
                <p>As an awardee of the Google Innovation fund, they launched on the 26th of April 2019 and required a website to engage with the public.</p>
                @endslot
                @slot('aboutTitleClass')
                    cf-about-title
                @endslot
                @slot('projectContent')
                <p style="margin-bottom: .5rem;">Rocket.Chip Web Solutions worked closely with St. Anne's City Farm to build a website from the ground up which captured their vision and the range of activities taking place at the farm</p>
                <p>The website is a custom design, with a unique look and feel. It includes an events calendar and news section which can be easily updated by the staff at St. Anne's City Farm.</p>
                @endslot
                @slot('projectTitleClass')
                cf-project-title
                @endslot
                @slot('link')
                    https://www.stannescityfarm.ie
                @endslot
                @slot('linkClass')
                    cf-link-button
                @endslot
            @endcomponent
        </div>
        <div class="portfolio-element portfolio-element-clothing4u">
            <div class="portfolio-element-img-container">
                <img src="/images/clothingforyoubackground.png" class="portfolio-element-image" alt />
            </div>
            <div class="portfolio-heading-container">
                 <h2 class="heading">Clothing4U</h2>
             </div>
            <div class="portfolio-link-container">
                <a href="#" class="link c4u_link" id="c4u_link" data-toggle="" data-target="c4u_modal">More Info</a>
            </div>
            @component('partials.modal')
                @slot('id')
                    c4u_modal
                @endslot
                @slot('image')
                    /images/clothingforyoubackground.png
                @endslot
                @slot('aboutContent')
                <p style="margin-bottom: .5rem;">Taking your business online is crucial, and it may not be as complicated or expensive as you think.</p>
                <p>This e-commerce application demonstrates our ability to create a custom online shop where you can sell your products and services to the world.</p>
                @endslot
                @slot('aboutTitleClass')
                    c4u-about-title
                @endslot
                @slot('projectContent')
                <p style="margin-bottom: .5rem;">E-commerce applications allow businesses to sell their products globally, reaching a wider potential audience.</p>
                <p>Our E-commerce sites feature full STRIPE integration, allowing you to take payments securely and manage these payments online.</p>
                @endslot
                @slot('projectTitleClass')
                    c4u-project-title
                @endslot
                @slot('link')
                https://sample-online-shop.netlify.com/
                @endslot
                @slot('linkClass')
                    c4u-link-button
                @endslot
            @endcomponent
        </div>
        <div class="portfolio-element portfolio-element-islandferries">
            <div class="portfolio-element-img-container">
                <img src="/images/islandferriesbackground.png" class="portfolio-element-image" alt />
            </div>
            <div class="portfolio-heading-container">
                 <h2 class="heading">Island Ferries</h2>
             </div>
            <div class="portfolio-link-container">
                <a href="#" class="link if_link" id="if_link" data-toggle="" data-target="if_modal">More Info</a>
            </div>
            @component('partials.modal')
                @slot('id')
                    if_modal
                @endslot
                @slot('image')
                    /images/islandferriesbackground.png
                @endslot
                @slot('aboutContent')
                <p>Island Ferries provide a range of boat trips in Howth, Dublin. They cater for families, corporate events, and individuals.</p>
                @endslot
                @slot('aboutTitleClass')
                    if-about-title
                @endslot
                @slot('projectContent')
                <p>Island Ferries needed a new website which reflected their brand and highlighted the services they offer.</p>
                <br>
                <p>Rocket.Chip Web Solutions also developed an online store which has resulted in increased revenue for Island Ferries, alowing them to tap into the online market in addition to traditional tourism in Howth. </p>
                @endslot
                @slot('projectTitleClass')
                    if-project-title
                @endslot
                @slot('link')
                https://www.islandferries.net
                @endslot
                @slot('linkClass')
                    if-link-button
                @endslot
            @endcomponent
        </div>
        <div class="portfolio-element portfolio-element-drumcondrafc">
            <div class="portfolio-element-img-container">
                <img src="/images/drumcondrafcbackground.png" class="portfolio-element-image" alt />
            </div>
            <div class="portfolio-heading-container">
                 <h2 class="heading">Drumcondra FC</h2>
             </div>
            <div class="portfolio-link-container">
                <a href="#" class="link dc_link" id="dc_link" data-toggle="" data-target="dc_modal">More Info</a>
            </div>
            @component('partials.modal')
                @slot('id')
                    dc_modal
                @endslot
                @slot('image')
                    /images/drumcondrafcbackground.png
                @endslot
                @slot('aboutContent')
                <p>Drumcondra A.F.C are a successful soccer club based on the north side of Dublin. They have teams from under age through to senior league. </p>
                @endslot
                @slot('aboutTitleClass')
                    dc-about-title
                @endslot
                @slot('projectContent')
                <p>Drumcondra A.F.C required a website which provided relevant information to players, parents and managers. The project included the development of a news section, fixtures &amp; results section, and image gallery.</p>
                <br>
                <p>The development also involved creating a bespoke administration area where managers can log in to update fixtures, results, and add news items to the site.</p>
                @endslot
                @slot('projectTitleClass')
                    dc-project-title
                @endslot
                @slot('link')
                https://www.drumcondrafc.com
                @endslot
                @slot('linkClass')
                    dc-link-button
                @endslot
            @endcomponent
        </div>
        <div class="portfolio-element portfolio-element-larrys">
            <div class="portfolio-element-img-container">
                <img src="/images/larrysdiybackground.png" class="portfolio-element-image" alt />
            </div>
            <div class="portfolio-heading-container">
                 <h2 class="heading">Larry's DIY</h2>
             </div>
            <div class="portfolio-link-container">
                <a href="#" class="link ld_link" id="ld_link" data-toggle="" data-target="ld_modal">More Info</a>
            </div>
            @component('partials.modal')
                @slot('id')
                    ld_modal
                @endslot
                @slot('image')
                    /images/larrysdiybackground.png
                @endslot
                @slot('aboutContent')
                <p>Larry's DIY are a family run hardware and DIY store based in Dublin. They specialise in wood cutting and pride themselves on providing a personal service to their customers.</p>
                @endslot
                @slot('aboutTitleClass')
                    ld-about-title
                @endslot
                @slot('projectContent')
                <p>Larry's DIY had an existing website which was created using outdated web technologies. The project involved a complete redesign and redevelopment of their site, including creating individual service pages and integration of google maps on their contact page. </p>
                @endslot
                @slot('projectTitleClass')
                    ld-project-title
                @endslot
                @slot('link')
                https://www.larrysdiy.ie
                @endslot
                @slot('linkClass')
                    ld-link-button
                @endslot
            @endcomponent
        </div>
    </div>
</div>








{{-- <div class="portfolio-container portfolio-container-2">
    <div class="portfolio-item">
        <div class="portfolio-item-img">
            <a href="https://www.omahonymeats.ie" target="_blank"><img src="/images/OM_meats.png" alt="" class="om-img"></a>
            <h2 style="text-align:center">O'Mahony Meats Ltd.</h2>
        </div>

        <div class="portfolio-item-info">
            <div class="portfolio-item-info-about">
                <h2>About</h2>
                <p>O'Mahony Meats are an SME based in Dublin. They supply meat to both the catering trade and the general public. They sell over 600 products. They customer-driven products</p>
            </div>
            <div class="portfolio-item-info-project">
                <h2>The Project</h2>
                <p>Rocket.Chip Web Solutions worked closely with O'Mahony Meats to develop a custom web solution to suit their style, brand identity and specific requirements.
                <p>The website features a unique navigation and page structure, which was designed in conjuction with the client. It aslo features a custom back-end which enables the client to post employment opportunities, special offers, recipes and more.</p>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-container portfolio-container">
    <div class="portfolio-item">
        <div class="portfolio-item-img">
            <a href="https://sample-online-shop.netlify.com/" target="_blank"><i class="fad fa-scarf" style="font-size: 12rem; color:darkslategrey"></i></a>
            <h2 style="text-align:center">Clothing4U</h2>
        </div>

        <div class="portfolio-item-info">
            <div class="portfolio-item-info-about">
                <h2>About</h2>
                <p>Taking your business online is crucial, and it may not be as complicated or expensive as you think.</p>
                <p>This e-commerce application demonstrates our ability to create a custom online shop where you can sell your products and services to the world.</p>
            </div>
            <div class="portfolio-item-info-project">
                <h2>The Project</h2>
                <p>E-commerce applications allow businesses to sell their products globally, reaching a wider potential audience.</p>
                <p>Our E-commerce sites feature full STRIPE integration, allowing you to take payments securely and manage these payments online.</p>

            </div>
        </div>
    </div>
</div>
<div class="portfolio-container portfolio-container-2">
    <div class="portfolio-item">
        <div class="portfolio-item-img">
            <a href="https://www.stannescityfarm.ie" target="_blank"><img src="/images/cityfarm.png" alt="" class="larrys-img"></a>
        </div>

        <div class="portfolio-item-info">
            <div class="portfolio-item-info-about">
                <h2>About</h2>
                <p>St. Anne's City Farm is an educational hub that encourages people to come get involved in growing their own food and being in nature.</p>
                <p>As an awardee of the Google Innovation fund, they launched on the 26th of April 2019 and required a website to engage with the public.</p>
            </div>
            <div class="portfolio-item-info-project">
                <h2>The Project</h2>
                <p>Rocket.Chip Web Solutions worked closely with St. Anne's City Farm to build a website from the ground up which captured their vision and the range of activities taking place at the farm</p>
                <p>The website is a custom design, with a unique look and feel. It includes an events calendar and news section which can be easily updated by the staff at St. Anne's City Farm.</p>

            </div>
        </div>
    </div>
</div>
<div class="portfolio-container portfolio-container-3">
    <div class="portfolio-item">
        <div class="portfolio-item-img">
            <a href="https://www.islandferries.net" target="_blank"><img src="/images/logoifn.jpg" alt="" class="islandferries-img"></a>
        </div>

        <div class="portfolio-item-info">
            <div class="portfolio-item-info-about">
                <h2>About</h2>
                <p>Island Ferries provide a range of boat trips in Howth, Dublin. They cater for families, corporate events, and individuals.</p>
            </div>
            <div class="portfolio-item-info-project">
                <h2>The Project</h2>
                <p>Island Ferries needed a new website which reflected their brand and highlighted the services they offer.</p>
                <br>
                <p></p>

            </div>
        </div>
    </div>
</div>
<div class="portfolio-container portfolio-container-2">
    <div class="portfolio-item">
        <div class="portfolio-item-img">
            <a href="http://www.drumcondrafc.com" target="_blank"><img src="/images/drumcondra_logo.png" alt="" class="drumcondra-img"></a>
        </div>

        <div class="portfolio-item-info">
            <div class="portfolio-item-info-about">
                <h2>About</h2>
                <p>Drumcondra A.F.C are a successful soccer club based on the north side of Dublin. They have teams from under age through to senior league. </p>
            </div>
            <div class="portfolio-item-info-project">
                <h2>The Project</h2>
                <p>Drumcondra A.F.C required a website which provided relevant information to players, parents and managers. The project included the development of a news section, fixtures &amp; results section, and image gallery.</p>
                <br>
                <p>The development also involved creating a bespoke administration area where managers can log in to update fixtures, results, and add news items to the site.</p>

            </div>
        </div>
    </div>
</div>
<div class="portfolio-container portfolio-container-1">
    <div class="portfolio-item portfolio-item-1">
        <div class="portfolio-item-img">
            <a href="https://www.larrysdiy.ie" target="_blank"><img src="/images/larryslogo_trans.png" alt="" class="larrys-img"></a>
        </div>

        <div class="portfolio-item-info">
            <div class="portfolio-item-info-about">
                <h2>About</h2>
                <p>Larry's DIY are a family run hardware and DIY store based in Dublin. They specialise in wood cutting and pride themselves on providing a personal service to their customers.</p>
            </div>
            <div class="portfolio-item-info-project">
                <h2>The Project</h2>
                <p>Larry's DIY had an existing website which was created using outdated web technologies. The project involved a complete redesign and redevelopment of their site, including creating individual service pages and integration of google maps on their contact page. </p>

            </div>
        </div>
    </div>
</div> --}}

@endsection

@section('scripts')

<script>
    const omOpen = document.querySelector('#om_link');
    const cfOpen = document.getElementById('cf_link');
    const c4uOpen = document.getElementById('c4u_link');
    const ifOpen = document.getElementById('if_link');
    const dcOpen = document.getElementById('dc_link');
    const ldOpen = document.getElementById('ld_link');



    const close = document.querySelectorAll('#modalCloseButton');
    // let modalWindow = document.querySelectorAll('.window-cover');
    const omModalWindow = document.getElementById('om_modal').getAttribute('id');
    const c4uModalWindow = document.getElementById('c4u_modal').getAttribute('id');
    const cfModalWindow = document.getElementById('cf_modal').getAttribute('id');
    const ifModalWindow = document.getElementById('if_modal').getAttribute('id');
    const dcModalWindow = document.getElementById('dc_modal').getAttribute('id');
    const ldModalWindow = document.getElementById('ld_modal').getAttribute('id');


    // omOpen.addEventListener('click', openModal(omModalWindow));
    // cfOpen.addEventListener('click', openModal(c4uModalWindow));
    // c4uOpen.addEventListener('click', openModal(cfModalWindow));
    // omOpen.addEventListener('click', openModal('#cf_modal'));
    omOpen.addEventListener('click', openOmModal);
    cfOpen.addEventListener('click', openCfModal);
    c4uOpen.addEventListener('click', openC4UModal);
    ifOpen.addEventListener('click', openIfModal);
    dcOpen.addEventListener('click', openDcModal);
    ldOpen.addEventListener('click', openLdModal);




    function openOmModal(event) {
        event.preventDefault();
        yPosition = event.clientY;
        // sibling = event.target.parentElement.parentElement.children[3];

        // console.log(sibling);
        // modalId = this.modalId;
        // document.body.style.position = 'fixed';
        document.body.style.overflow = 'hidden';
        document.body.scrollTop = yPosition;


        const timeline = new TimelineMax();
        timeline
        .fromTo(
            '#om_modal',
            0.3,
            {
                display: "none", opacity: 0, height: 0, width: 0, ease: Bounce.easeIn,
            },
            {
                opacity: 1,
                height: "100vh",
                width: "100vw",
                backgroundColor: "rgba(0,0,0, 0.8)",
                position: "fixed",
                top: 0,
                bottom: 0,
                left: 0,
                right: 0,
                padding: "1rem",
                zIndex: 2000,
                display: "flex",
                justifyContent: "center",
                alignItems: "center",
                transformOrigin: "center",
                ease: Elastic.easeIn,
            }
        )
        .fromTo(
            '#om_modal>.modal',
            .2,
            {
                // width: '70%',
                // height: 0,
                backgroundColor: "rgba(248, 248, 248, 0.9)",
                display: 'flex',
                flexDirection: "column",
                justifyContent: "space-around",
                padding: '1rem',
                ease: Bounce.easeIn,

            },
            {
                delay: .2,
                // width: '70%',
                // height: '70%',
                backgroundColor: "rgba(248, 248, 248, 0.8)",
                display: 'flex',
                flexDirection: "column",
                justifyContent: "space-around",
                padding: '1rem',

            }
        )
        .fromTo(
            '#om_modal>.modal>.modal-top-section>.image-container',
            .2,
            {
                x: -50,
                opacity: 0,
            },
            {
                x:0,
                opacity:1,
            }
        )
        .fromTo(
            '#om_modal>.modal>.modal-top-section>.content-section',
            .2,
            {
                y: 100,
                opacity: 0
            },
            {
                y: 0,
                opacity: 1,
            }
        )
        .fromTo(
            '#om_modal>.modal>.modal-top-section>.content-section>.about',
            .2,
            {
                y: -100,
                opacity: 0,
                marginBottom: '2rem',
            },
            {
                y: 0,
                opacity: 1,
                delay: 0,
                marginBottom: '2rem',
            }
        )
        .fromTo(
            '#om_modal>.modal>.modal-top-section>.content-section>.project',
            .2,
            {
                y: 100,
                opacity: 0,
                marginBottom: '1rem',
            },
            {
                y: 0,
                opacity: 1,
                delay: .1,
                marginBottom: '1rem',
            }

        )
        .fromTo(
            '#om_modal>.modal>.bottom-section',
            .2,
            {
                // y: 100,
                opacity: 0,
            },
            {
                // y: 0,
                opacity: 1,
            }
        )

    }
    function openCfModal(event) {
        event.preventDefault();
        yPosition = event.clientY;
        // modalId = this.modalId;
        // document.body.style.position = 'fixed';
        document.body.style.overflow = 'hidden';
        document.body.scrollTop = yPosition;

        const timeline = new TimelineMax();
        timeline
        .fromTo(
            '#cf_modal',
            0.3,
            {
                display: "none", opacity: 0, height: 0, width: 0, ease: Bounce.easeIn,
            },
            {
                opacity: 1,
                height: "100vh",
                width: "100vw",
                backgroundColor: "rgba(0,0,0, 0.8)",
                position: "fixed",
                top: 0,
                bottom: 0,
                left: 0,
                right: 0,
                padding: "1rem",
                zIndex: 2000,
                display: "flex",
                justifyContent: "center",
                alignItems: "center",
                transformOrigin: "center",
                ease: Elastic.easeIn,
            }
        )
        .fromTo(
            '#cf_modal>.modal',
            .2,
            {
                // width: '70%',
                // height: '0%',
                backgroundColor: "rgba(248, 248, 248, 0.9)",
                display: 'flex',
                flexDirection: "column",
                justifyContent: "space-around",
                padding: '1rem',
                ease: Bounce.easeIn,

            },
            {
                delay: .2,
                // width: '70%',
                // height: '70%',
                backgroundColor: "rgba(248, 248, 248, 0.8)",
                display: 'flex',
                flexDirection: "column",
                justifyContent: "space-around",
                padding: '1rem',

            }
        )
        .fromTo(
            '#cf_modal>.modal>.modal-top-section>.image-container',
            .2,
            {
                x: -50,
                opacity: 0,
            },
            {
                x:0,
                opacity:1,
            }
        )
        .fromTo(
            '#cf_modal>.modal>.modal-top-section>.content-section',
            .2,
            {
                y: 100,
                opacity: 0
            },
            {
                y: 0,
                opacity: 1,
            }
        )
        .fromTo(
            '#cf_modal>.modal>.modal-top-section>.content-section>.about',
            .2,
            {
                y: -100,
                opacity: 0,
                marginBottom: '2rem',
            },
            {
                y: 0,
                opacity: 1,
                delay: 0,
                marginBottom: '2rem',
            }
        )
        .fromTo(
            '#cf_modal>.modal>.modal-top-section>.content-section>.project',
            .2,
            {
                y: 100,
                opacity: 0,
                marginBottom: '1rem',
            },
            {
                y: 0,
                opacity: 1,
                delay: .1,
                marginBottom: '1rem',
            }

        )
        .fromTo(
            '#cf_modal>.modal>.bottom-section',
            .2,
            {
                // y: 100,
                opacity: 0,
            },
            {
                // y: 0,
                opacity: 1,
            }
        )

    }
    function openC4UModal(event) {
        // modalId = this.modalId;

        event.preventDefault();
        yPosition = event.clientY;
        // sibling = event.target.parentElement.parentElement.children[3];

        // console.log(sibling);
        // modalId = this.modalId;
        // document.body.style.position = 'fixed';
        document.body.style.overflow = 'hidden';
        document.body.scrollTop = yPosition;
        const timeline = new TimelineMax();
        timeline
        .fromTo(
            '#c4u_modal',
            0.3,
            {
                display: "none", opacity: 0, height: 0, width: 0, ease: Bounce.easeIn,
            },
            {
                opacity: 1,
                height: "100vh",
                width: "100vw",
                backgroundColor: "rgba(0,0,0, 0.8)",
                position: "fixed",
                top: 0,
                bottom: 0,
                left: 0,
                right: 0,
                padding: "1rem",
                zIndex: 2000,
                display: "flex",
                justifyContent: "center",
                alignItems: "center",
                transformOrigin: "center",
                ease: Elastic.easeIn,
            }
        )
        .fromTo(
            '#c4u_modal>.modal',
            .2,
            {
                // width: '70%',
                // height: '0%',
                backgroundColor: "rgba(248, 248, 248, 0.9)",
                display: 'flex',
                flexDirection: "column",
                justifyContent: "space-around",
                padding: '1rem',
                ease: Bounce.easeIn,

            },
            {
                delay: .2,
                // width: '70%',
                // height: '70%',
                backgroundColor: "rgba(248, 248, 248, 0.8)",
                display: 'flex',
                flexDirection: "column",
                justifyContent: "space-around",
                padding: '1rem',

            }
        )
        .fromTo(
            '#c4u_modal>.modal>.modal-top-section>.image-container',
            .2,
            {
                x: -50,
                opacity: 0,
            },
            {
                x:0,
                opacity:1,
            }
        )
        .fromTo(
            '#c4u_modal>.modal>.modal-top-section>.content-section',
            .2,
            {
                y: 100,
                opacity: 0
            },
            {
                y: 0,
                opacity: 1,
            }
        )
        .fromTo(
            '#c4u_modal>.modal>.modal-top-section>.content-section>.about',
            .2,
            {
                y: -100,
                opacity: 0,
                marginBottom: '2rem',
            },
            {
                y: 0,
                opacity: 1,
                delay: 0,
                marginBottom: '2rem',
            }
        )
        .fromTo(
            '#c4u_modal>.modal>.modal-top-section>.content-section>.project',
            .2,
            {
                y: 100,
                opacity: 0,
                marginBottom: '1rem',
            },
            {
                y: 0,
                opacity: 1,
                delay: .1,
                marginBottom: '1rem',
            }

        )
        .fromTo(
            '#c4u_modal>.modal>.bottom-section',
            .2,
            {
                // y: 100,
                opacity: 0,
            },
            {
                // y: 0,
                opacity: 1,
            }
        )



    }
    function openIfModal(event) {
        // modalId = this.modalId;

        event.preventDefault();
        yPosition = event.clientY;
        // sibling = event.target.parentElement.parentElement.children[3];

        // console.log(sibling);
        // modalId = this.modalId;
        // document.body.style.position = 'fixed';
        document.body.style.overflow = 'hidden';
        document.body.scrollTop = yPosition;
        const timeline = new TimelineMax();
        timeline
        .fromTo(
            '#if_modal',
            0.3,
            {
                display: "none", opacity: 0, height: 0, width: 0, ease: Bounce.easeIn,
            },
            {
                opacity: 1,
                height: "100vh",
                width: "100vw",
                backgroundColor: "rgba(0,0,0, 0.8)",
                position: "fixed",
                top: 0,
                bottom: 0,
                left: 0,
                right: 0,
                padding: "1rem",
                zIndex: 2000,
                display: "flex",
                justifyContent: "center",
                alignItems: "center",
                transformOrigin: "center",
                ease: Elastic.easeIn,
            }
        )
        .fromTo(
            '#if_modal>.modal',
            .2,
            {
                // width: '70%',
                // height: '0%',
                backgroundColor: "rgba(248, 248, 248, 0.9)",
                display: 'flex',
                flexDirection: "column",
                justifyContent: "space-around",
                padding: '1rem',
                ease: Bounce.easeIn,

            },
            {
                delay: .2,
                // width: '70%',
                // height: '70%',
                backgroundColor: "rgba(248, 248, 248, 0.8)",
                display: 'flex',
                flexDirection: "column",
                justifyContent: "space-around",
                padding: '1rem',

            }
        )
        .fromTo(
            '#if_modal>.modal>.modal-top-section>.image-container',
            .2,
            {
                x: -50,
                opacity: 0,
            },
            {
                x:0,
                opacity:1,
            }
        )
        .fromTo(
            '#if_modal>.modal>.modal-top-section>.content-section',
            .2,
            {
                y: 100,
                opacity: 0
            },
            {
                y: 0,
                opacity: 1,
            }
        )
        .fromTo(
            '#if_modal>.modal>.modal-top-section>.content-section>.about',
            .2,
            {
                y: -100,
                opacity: 0,
                marginBottom: '2rem',
            },
            {
                y: 0,
                opacity: 1,
                delay: 0,
                marginBottom: '2rem',
            }
        )
        .fromTo(
            '#if_modal>.modal>.modal-top-section>.content-section>.project',
            .2,
            {
                y: 100,
                opacity: 0,
                marginBottom: '1rem',
            },
            {
                y: 0,
                opacity: 1,
                delay: .1,
                marginBottom: '1rem',
            }

        )
        .fromTo(
            '#if_modal>.modal>.bottom-section',
            .2,
            {
                // y: 100,
                opacity: 0,
            },
            {
                // y: 0,
                opacity: 1,
            }
        )



    }
    function openDcModal(event) {
        // modalId = this.modalId;

        event.preventDefault();
        yPosition = event.clientY;
        // sibling = event.target.parentElement.parentElement.children[3];

        // console.log(sibling);
        // modalId = this.modalId;
        // document.body.style.position = 'fixed';
        document.body.style.overflow = 'hidden';
        document.body.scrollTop = yPosition;
        const timeline = new TimelineMax();
        timeline
        .fromTo(
            '#dc_modal',
            0.3,
            {
                display: "none", opacity: 0, height: 0, width: 0, ease: Bounce.easeIn,
            },
            {
                opacity: 1,
                height: "100vh",
                width: "100vw",
                backgroundColor: "rgba(0,0,0, 0.8)",
                position: "fixed",
                top: 0,
                bottom: 0,
                left: 0,
                right: 0,
                padding: "1rem",
                zIndex: 2000,
                display: "flex",
                justifyContent: "center",
                alignItems: "center",
                transformOrigin: "center",
                ease: Elastic.easeIn,
            }
        )
        .fromTo(
            '#dc_modal>.modal',
            .2,
            {
                // width: '70%',
                // height: '0%',
                backgroundColor: "rgba(248, 248, 248, 0.9)",
                display: 'flex',
                flexDirection: "column",
                justifyContent: "space-around",
                padding: '1rem',
                ease: Bounce.easeIn,

            },
            {
                delay: .2,
                // width: '70%',
                // height: '70%',
                backgroundColor: "rgba(248, 248, 248, 0.8)",
                display: 'flex',
                flexDirection: "column",
                justifyContent: "space-around",
                padding: '1rem',

            }
        )
        .fromTo(
            '#dc_modal>.modal>.modal-top-section>.image-container',
            .2,
            {
                x: -50,
                opacity: 0,
            },
            {
                x:0,
                opacity:1,
            }
        )
        .fromTo(
            '#dc_modal>.modal>.modal-top-section>.content-section',
            .2,
            {
                y: 100,
                opacity: 0
            },
            {
                y: 0,
                opacity: 1,
            }
        )
        .fromTo(
            '#dc_modal>.modal>.modal-top-section>.content-section>.about',
            .2,
            {
                y: -100,
                opacity: 0,
                marginBottom: '2rem',
            },
            {
                y: 0,
                opacity: 1,
                delay: 0,
                marginBottom: '2rem',
            }
        )
        .fromTo(
            '#dc_modal>.modal>.modal-top-section>.content-section>.project',
            .2,
            {
                y: 100,
                opacity: 0,
                marginBottom: '1rem',
            },
            {
                y: 0,
                opacity: 1,
                delay: .1,
                marginBottom: '1rem',
            }

        )
        .fromTo(
            '#dc_modal>.modal>.bottom-section',
            .2,
            {
                // y: 100,
                opacity: 0,
            },
            {
                // y: 0,
                opacity: 1,
            }
        )



    }
    function openLdModal(event) {
        // modalId = this.modalId;

        event.preventDefault();
        yPosition = event.clientY;
        // sibling = event.target.parentElement.parentElement.children[3];

        // console.log(sibling);
        // modalId = this.modalId;
        // document.body.style.position = 'fixed';
        document.body.style.overflow = 'hidden';
        document.body.scrollTop = yPosition;
        const timeline = new TimelineMax();
        timeline
        .fromTo(
            '#ld_modal',
            0.3,
            {
                display: "none", opacity: 0, height: 0, width: 0, ease: Bounce.easeIn,
            },
            {
                opacity: 1,
                height: "100vh",
                width: "100vw",
                backgroundColor: "rgba(0,0,0, 0.8)",
                position: "fixed",
                top: 0,
                bottom: 0,
                left: 0,
                right: 0,
                padding: "1rem",
                zIndex: 2000,
                display: "flex",
                justifyContent: "center",
                alignItems: "center",
                transformOrigin: "center",
                ease: Elastic.easeIn,
            }
        )
        .fromTo(
            '#ld_modal>.modal',
            .2,
            {
                // width: '70%',
                // height: '0%',
                backgroundColor: "rgba(248, 248, 248, 0.9)",
                display: 'flex',
                flexDirection: "column",
                justifyContent: "space-around",
                padding: '1rem',
                ease: Bounce.easeIn,

            },
            {
                delay: .2,
                // width: '70%',
                // height: '70%',
                backgroundColor: "rgba(248, 248, 248, 0.8)",
                display: 'flex',
                flexDirection: "column",
                justifyContent: "space-around",
                padding: '1rem',

            }
        )
        .fromTo(
            '#ld_modal>.modal>.modal-top-section>.image-container',
            .2,
            {
                x: -50,
                opacity: 0,
            },
            {
                x:0,
                opacity:1,
            }
        )
        .fromTo(
            '#ld_modal>.modal>.modal-top-section>.content-section',
            .2,
            {
                y: 100,
                opacity: 0
            },
            {
                y: 0,
                opacity: 1,
            }
        )
        .fromTo(
            '#ld_modal>.modal>.modal-top-section>.content-section>.about',
            .2,
            {
                y: -100,
                opacity: 0,
                marginBottom: '2rem',
            },
            {
                y: 0,
                opacity: 1,
                delay: 0,
                marginBottom: '2rem',
            }
        )
        .fromTo(
            '#ld_modal>.modal>.modal-top-section>.content-section>.project',
            .2,
            {
                y: 100,
                opacity: 0,
                marginBottom: '1rem',
            },
            {
                y: 0,
                opacity: 1,
                delay: .1,
                marginBottom: '1rem',
            }

        )
        .fromTo(
            '#ld_modal>.modal>.bottom-section',
            .2,
            {
                // y: 100,
                opacity: 0,
            },
            {
                // y: 0,
                opacity: 1,
            }
        )



    }

    close.forEach((c) => {
        c.addEventListener('click', closeModal)
    })
    function closeModal(e) {
        document.body.style.position = '';
        document.body.style.overflow = 'auto';
        let modal = e.target.parentElement.parentElement.parentElement;
        // console.log(modal);
        timeline = new TimelineMax();
        timeline
        .fromTo(
            modal,
            .2,
            {opacity: 1,
            display: 'flex'},
            {opacity: 0,
            display: 'none'}
        )
    }
    // function openOmModal() {
    //     const timeline = new TimelineMax();
    //     timeline
    //     .fromTo(
    //         '#om_modal',
    //         0.3,
    //         {
    //             display: "none", opacity: 0, height: 0, width: 0, ease: Bounce.easeIn,
    //         },
    //         {
    //             opacity: 1,
    //             height: "100vh",
    //             width: "100vw",
    //             backgroundColor: "rgba(0,0,0, 0.8)",
    //             position: "fixed",
    //             top: 0,
    //             bottom: 0,
    //             left: 0,
    //             right: 0,
    //             padding: "1rem",
    //             zIndex: 2000,
    //             display: "flex",
    //             justifyContent: "center",
    //             alignItems: "center",
    //             transformOrigin: "center",
    //             ease: Elastic.easeIn,
    //         }
    //     )
    //     .fromTo(
    //         '#om_modal>.modal',
    //         .2,
    //         {
    //             width: '70%',
    //             height: '0%',
    //             backgroundColor: "rgba(248, 248, 248, 0.9)",
    //             display: 'flex',
    //             flexDirection: "column",
    //             justifyContent: "space-around",
    //             padding: '1rem',
    //             ease: Bounce.easeIn,

    //         },
    //         {
    //             delay: .2,
    //             width: '70%',
    //             height: '70%',
    //             backgroundColor: "rgba(248, 248, 248, 0.8)",
    //             display: 'flex',
    //             flexDirection: "column",
    //             justifyContent: "space-around",
    //             padding: '1rem',

    //         }
    //     )
    //     .fromTo(
    //         '#om_modal>.modal>.modal-top-section>.image-container',
    //         .2,
    //         {
    //             x: -50,
    //             opacity: 0,
    //         },
    //         {
    //             x:0,
    //             opacity:1,
    //         }
    //     )
    //     .fromTo(
    //         '#om_modal>.modal>.modal-top-section>.content-section',
    //         .2,
    //         {
    //             y: 100,
    //             opacity: 0
    //         },
    //         {
    //             y: 0,
    //             opacity: 1,
    //         }
    //     )
    //     .fromTo(
    //         '#om_modal>.modal>.modal-top-section>.content-section>.about',
    //         .2,
    //         {
    //             y: -100,
    //             opacity: 0,
    //             marginBottom: '2rem',
    //         },
    //         {
    //             y: 0,
    //             opacity: 1,
    //             delay: 0,
    //             marginBottom: '2rem',
    //         }
    //     )
    //     .fromTo(
    //         '#om_modal>.modal>.modal-top-section>.content-section>.project',
    //         .2,
    //         {
    //             y: 100,
    //             opacity: 0,
    //             marginBottom: '1rem',
    //         },
    //         {
    //             y: 0,
    //             opacity: 1,
    //             delay: .1,
    //             marginBottom: '1rem',
    //         }

    //     )
    //     .fromTo(
    //         '#om_modal>.modal>.bottom-section',
    //         .2,
    //         {
    //             // y: 100,
    //             opacity: 0,
    //         },
    //         {
    //             // y: 0,
    //             opacity: 1,
    //         }
    //     )

    // }
    // function openCfModal() {
    //     const timeline = new TimelineMax();
    //     timeline
    //     .fromTo(
    //         '#cf_modal',
    //         0.3,
    //         {
    //             display: "none", opacity: 0, height: 0, width: 0, ease: Bounce.easeIn,
    //         },
    //         {
    //             opacity: 1,
    //             height: "100vh",
    //             width: "100vw",
    //             backgroundColor: "rgba(0,0,0, 0.8)",
    //             position: "fixed",
    //             top: 0,
    //             bottom: 0,
    //             left: 0,
    //             right: 0,
    //             padding: "1rem",
    //             zIndex: 2000,
    //             display: "flex",
    //             justifyContent: "center",
    //             alignItems: "center",
    //             transformOrigin: "center",
    //             ease: Elastic.easeIn,
    //         }
    //     )
    //     .fromTo(
    //         '#cf_modal>.modal',
    //         .2,
    //         {
    //             width: '70%',
    //             height: '0%',
    //             backgroundColor: "rgba(248, 248, 248, 0.9)",
    //             display: 'flex',
    //             flexDirection: "column",
    //             justifyContent: "space-around",
    //             padding: '1rem',
    //             ease: Bounce.easeIn,

    //         },
    //         {
    //             delay: .2,
    //             width: '70%',
    //             height: '70%',
    //             backgroundColor: "rgba(248, 248, 248, 0.8)",
    //             display: 'flex',
    //             flexDirection: "column",
    //             justifyContent: "space-around",
    //             padding: '1rem',

    //         }
    //     )
    //     .fromTo(
    //         '#cf_modal>.modal>.modal-top-section>.image-container',
    //         .2,
    //         {
    //             x: -50,
    //             opacity: 0,
    //         },
    //         {
    //             x:0,
    //             opacity:1,
    //         }
    //     )
    //     .fromTo(
    //         '#cf_modal>.modal>.modal-top-section>.content-section',
    //         .2,
    //         {
    //             y: 100,
    //             opacity: 0
    //         },
    //         {
    //             y: 0,
    //             opacity: 1,
    //         }
    //     )
    //     .fromTo(
    //         '#cf_modal>.modal>.modal-top-section>.content-section>.about',
    //         .2,
    //         {
    //             y: -100,
    //             opacity: 0,
    //             marginBottom: '2rem',
    //         },
    //         {
    //             y: 0,
    //             opacity: 1,
    //             delay: 0,
    //             marginBottom: '2rem',
    //         }
    //     )
    //     .fromTo(
    //         '#cf_modal>.modal>.modal-top-section>.content-section>.project',
    //         .2,
    //         {
    //             y: 100,
    //             opacity: 0,
    //             marginBottom: '1rem',
    //         },
    //         {
    //             y: 0,
    //             opacity: 1,
    //             delay: .1,
    //             marginBottom: '1rem',
    //         }

    //     )
    //     .fromTo(
    //         '#cf_modal>.modal>.bottom-section',
    //         .2,
    //         {
    //             // y: 100,
    //             opacity: 0,
    //         },
    //         {
    //             // y: 0,
    //             opacity: 1,
    //         }
    //     )

    // }
    // function closeOmModal() {
    //     const timeline = new TimelineMax();
    //     timeline
    //     .fromTo(
    //         '#om_modal',
    //         .2,
    //         {opacity: 1, display: 'flex'},
    //         {opacity: 0, display: 'none'}
    //     )
    // }
    // function closeCfModal() {
    //     const timeline = new TimelineMax();
    //     timeline
    //     .fromTo(
    //         '#cf_modal',
    //         .2,
    //         {opacity: 1, display: 'flex'},
    //         {opacity: 0, display: 'none'}
    //     )
    // }
    // function openCfModal() {
    //     cfModalWindow.style.display = 'flex';
    // }

    // function openC4UModal() {
    //     c4uModalWindow.style.display = 'flex';
    // }

    // close.forEach((c) => {
    //     c.addEventListener('click', closeOmModal);
    // })
    // close.forEach((c) => {
    //     c.addEventListener('click', () => {
    //         modalWindow.forEach((w) => {
    //             w.style.display = 'none';
    //         })

    //     });
    // });

    </script>
@endsection
