@extends('layouts.app')

@section('content')
<div class="logo-icon-home"></div>
<section class="panel section section-services" data-color="teal">

    <div class="container-page">

        <div class="text-left">
            <h5 class="services-title title-scroll text-purple">Services</h5>
            <h1 class="services-header headline-header text-purple"><span>Strategy</span></h1>
            <p class="header-p section-p services-p">Insights gleaned from hours of obsessing and years of experience form the foundation upon which brilliant solutions can come to life.</p>
            <p class="header-p section-p">analyse, deep-dive, test, challenge, astonish</p>
        </div>
        
        <!-- Icon Animation -->
        <div class="header-icon" id="strategy-icon"></div>

        <button id="btn-click">
			<img class="scroll-arrow" src="img/common/arrow-down.svg" alt="">
		</button>
    </div>

</section>

<!-- Section 2 -->
<section class="panel section section-sml" data-color="grey">
    <div class="container-grid">
        <div class="title-panel title-2lines">
            <h2 class="section-title text-purple">What we</h2>
			<h2 class="section-titleB text-purple">can offer <span style="color:#6FC7B0">YOU.</span></h2>
        </div>
        <div class="services-grid" style="opacity: 1; transform: translate(0px, 0px);">
        
            <div class="services-grid-item">
                <h6>Campaign Strategy</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Lead Acquisition</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Channel Marketing</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Social Media Strategy</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Brand Strategy</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Reporting</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Lead Nurturing</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Consumer Engagement</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Promotions &amp; Activations</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Digital Strategy</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Tactical</h6>
                <h6>+</h6>
            </div>

        </div>
    </div>
</section>
<!-- Section 3 -->
<section class="panel section section-projects" data-color="purple">
    <div class="container-grid">
        <div class="section-title2 title-panel">
            <div>
                <h5 class="services-title text-teal">Strategy</h5>
				<h2 class="text-white">Projects</span></h2>
            </div>

                <a class="button" href="">View all
                    <img class="arrow" src="img/common/arrow-next.svg" alt="">
                </a>
        </div>
        <div class="section-scrolltrigger">
            <div class=" services-grid">

                <div class="grid-card">
                    <div class="card">
                        <img src="/img/work/thumbnails/thumbnail_locallegends.jpg" alt="">
                        <h4 class="card-title">LG Local Legends</h4>
                        <h5 class="card-client">LG Electronics</h5>
                        <div class="border"></div>
                    </div>
                </div>

                <div class="grid-card">
                    <div class="card">
                        <img src="/img/work/thumbnails/thumbnail_inkforgood.jpg" alt="">
                        <h4 class="card-title">#inkForGood</h4>
                        <h5 class="card-client">One Disease</h5>
                        <div class="border"></div>
                    </div>
                </div>

                <div class="grid-card grid-card-3">
                    <div class="card ">
                        <img src="/img/work/thumbnails/thumbnail_chromebook.jpg" alt="">
                        <h4 class="card-title text-white">ChromeBook Launch Campaign</h4>
                        <h5 class="card-client text-white">Lenovo</h5>
                        <div class="border"></div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- Section Services -->
<section class="section services-selector">

    <div class="services-selector-card service-card-left color-pink">
        <img src="/img/services/icon-creative-sml.svg" width="200" height="184 alt="">
        <h3 class="text-white">Creative</h3>
        <a href="services-creative.html"></a>
    </div>

    <div class="services-selector-card service-card-right color-orange">
        <h3 class="text-white">Technology</h3>
        <img src="/img/services/icon-technology-sml.svg" width="200" height="184" alt="">
        <a href="services-technology.html"></a>
    </div>

</section>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('scripts/lottie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/scripts.js') }}"></script>
@endsection