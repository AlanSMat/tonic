@extends('layouts.app')

@section('content')
<div class="logo-icon-home"></div>
<section class="panel section section-services" data-color="orange">
    <button id="btn-down-click">
        <a class="scroll-arrow __white"></a>
    </button>

    <div class="container-page">
        <div class="text-left">
            <h5 class="services-title title-scroll text-purple">Services</h5>
            <h1 class="services-header headline-header text-purple"><span>Technology</span></h1>
            <p class="header-p section-p services-p">Our fleet of Creative Technologists can investigate, design, build and test anything from websites and apps to ecommerce tools and beyond.</p>
            <p class="header-p section-p">build, invent, explore, surprise, delight</p>
        </div>
        <!-- Icon Animation -->
        <div class="header-icon" id="technology-icon"></div>

    </div>
</section>
<!-- Section 2 -->
<section class="panel section section-sml" data-color="grey">
    <div class="container-grid">
        <div class="title-panel title-2lines">
            <h2 class="section-title text-purple">What we</h2>
			<h2 class="section-titleB text-purple">can offer <span class="text-orangetech">YOU.</span></h2>
        </div>
        <div class="services-grid">
            <div class="services-grid-item">
                <h6>Branding</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Campaign Strategy</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Direct Mail</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Concept Development</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>UX/UI</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Design</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Art Direction</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Social Media</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Tone Of Voice</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Copywriting</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Web Design</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Digital</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Concept Development</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Campaign Development</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Content</h6>
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
                <h5 class="services-title text-orangetech">Technology</h5>
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
                    <img src="/img/work/thumbnails/thumbnail_rrkiosk.jpg" alt="">
                        <h4 class="card-title">Project Name Here</h4>
                        <h5 class="card-client">LG Electronics</h5>
                        <div class="border"></div>
                    </div>
                </div>

                <div class="grid-card">
                    <div class="card">
                        <img src="/img/work/thumbnails/thumbnail_adf.jpg" alt="">
                        <h4 class="card-title">Project Name Here</h4>
                        <h5 class="card-client">LG Electronics</h5>
                        <div class="border"></div>
                    </div>
                </div>

                <div class="grid-card grid-card-3">
                    <div class="card ">
                        <img src="/img/work/thumbnails/thumbnail_vouchr.jpg" alt="">
                        <h4 class="card-title text-pink">Project Name Here</h4>
                        <h5 class="card-client text-pink">LG Electronics</h5>
                        <div class="border"></div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- Section 4 -->
<section class="section services-selector" style="opacity: 1; transform: translate(0px, 0px);">

    <div class="services-selector-card service-card-left color-pink">
        <img src="/img/services/icon-creative-sml.svg" width="200" height="184" alt="">
        <h3 class="text-white">Creative</h3>
        <a href="services-creative.html"></a>
    </div>

    <div class="services-selector-card service-card-right color-teal">
        <h3 class="text-white">Strategy</h3>
        <img src="/img/services/icon-services-sml.svg" width="200" height="184" alt="">
        <a href="services-strategy.html"></a>
    </div>

</section>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('scripts/lottie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/scripts.js') }}"></script>
@endsection