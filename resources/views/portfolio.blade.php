@extends('master')

@section('title')

Portfolio | Rocket.Chip Web Solutions

@endsection

@section('content')
<div class="about-banner">
    <h1>Portfolio</h1>
</div>

<div class="portfolio-container">
    <div class="portfolio-item">
        <div class="portfolio-item-img">
            <a href="https://www.larrysdiy.ie" target="_blank"><img src="/images/larryslogo_trans.png" alt=""></a>
        </div>

        <div class="portfolio-item-info">
            <div class="portfolio-item-info-about">
                <h2>About</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, voluptate.</p>
            </div>
            <div class="portfolio-item-info-project">
                <h2>The Project</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident explicabo, odio, sed voluptates adipisci sit omnis repellendus hic veritatis aspernatur nisi quaerat impedit possimus ex ut corporis, quos nobis dolor.</p>

            </div>
        </div>
    </div>
</div>
<div class="portfolio-container">
    <div class="portfolio-item">
        <div class="portfolio-item-img">
            <a href="http://www.drumcondrafc.com" target="_blank"><img src="/images/drumcondra_logo.png" alt=""></a>
        </div>

        <div class="portfolio-item-info">
            <div class="portfolio-item-info-about">
                <h2>About</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, voluptate.</p>
            </div>
            <div class="portfolio-item-info-project">
                <h2>The Project</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident explicabo, odio, sed voluptates adipisci sit omnis repellendus hic veritatis aspernatur nisi quaerat impedit possimus ex ut corporis, quos nobis dolor.</p>

            </div>
        </div>
    </div>
</div>
@endsection