@extends('master')

@section('title')

Portfolio | Rocket.Chip Web Solutions

@endsection

@section('content')
<div class="about-banner">
    <h1>Portfolio</h1>
</div>

<div class="portfolio-container portfolio-container-1">
    <div class="portfolio-item portfolio-item-1">
        <div class="portfolio-item-img">
            <a href="https://www.larrysdiy.ie" target="_blank"><img src="/images/larryslogo_trans.png" alt=""></a>
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
</div>
<div class="portfolio-container portfolio-container-2">
    <div class="portfolio-item">
        <div class="portfolio-item-img">
            <a href="http://www.drumcondrafc.com" target="_blank"><img src="/images/drumcondra_logo.png" alt=""></a>
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
@endsection