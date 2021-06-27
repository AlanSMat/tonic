@extends('layouts.app')

@section('content')
<div class="logo-icon-home"></div>
<!-- <div class="back-btn">
    <div class="back-btn-link">
        <a href="work.html">Back</a>
    </div>
</div> -->
<button id="btn-click">
    <img class="scroll-arrow" src="/img/common/arrow-down.svg" alt="">
</button>
<section class="panel section section-about" data-color="teal">
    
    <div class="container-page">
        <div class="text-left">
            <h1 class="headline-header text-purple">A bit<br>about <span>us...</span></h1>
            <p class="header-p section-p">We realised that the best way to help our clients succeed was to combine the power of brilliant creative, technological and strategic thinking.</p>
        </div>

        <div class="header-icon header-icon-about" id="icon-about1"></div>
    </div>

</section>
<!-- Section 2 -->
<section id="sect-creative-2" class="panel section section-sml" data-color="grey">
    <div class="container-grid">
        <div class="title-panel title-2lines">
            <h2 class="section-title text-purple">What we</h2>
            <h2 class="section-titleB text-purple">can offer <span class="text-pink">YOU.</span></h2>
        </div>

        <div class="services-grid" style="opacity: 1; transform: translate(0px, 0px);">
            <div class="services-grid-item">
                <h6>Campaign Development</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Concept Development</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Branding</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Creative &amp; Art Direction</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Design</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>UX/UI</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Copywriting</h6>
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
                <h6>App Design</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Web Design</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Digital Creative</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Experiential</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Direct Mail</h6>
                <h6>+</h6>
            </div>
            <div class="services-grid-item">
                <h6>Content &amp; Photography</h6>
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
                <h5 class="services-title text-pink">Creative</h5>
                <h2 class="text-white">Projects</span></h2>
            </div>

                <a class="button" href="">View all
                    <img class="arrow" src="/img/common/arrow-next.svg" alt="">
                </a>
        </div>
        <div class="section-scrolltrigger">
            <div class=" services-grid">

                <div class="grid-card">
                    <div class="card">
                        <img src="/img/work/thumbnails/thumbnail_hempblack.jpg" alt="">
                        <h4 class="card-title">Feel.Look.Do.Better.</h4>
                        <h5 class="card-client">Hemp Black</h5>
                        <div class="border"></div>
                        <a href="cs-hempblack.html"></a>
                    </div>
                </div>

                <div class="grid-card">
                    <div class="card">
                        <img src="/img/work/thumbnails/freestyler_thumb.jpg" alt="">
                        <h4 class="card-title">Freestyler Campaign</h4>
                        <h5 class="card-client">LG Electronics</h5>
                        <div class="border"></div>
                        <a href="cs-lgfreestyler.html"></a>
                    </div>
                </div>

                <div class="grid-card card3">
                    <div class="card ">
                        <img src="/img/work/thumbnails/thumbnail_NickKyrios.jpg" alt="">
                        <h4 class="card-title">Rebrand and Foundation Launch</h4>
                        <h5 class="card-client">Nick Kyrios</h5>
                        <div class="border"></div>
                        <a href="cs-nickkyrios.html"></a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- Section 4 -->
<section class="section services-selector" style="opacity: 1; transform: translate(0px, 0px);">

    <div class="services-selector-card service-card-left color-orange">
        <img src="/img/services/icon-technology-sml.svg" alt="">
        <h3 class="text-white">Technology</h3>
        <a href="services-technology.html"></a>
    </div>

    <div class="services-selector-card service-card-right color-teal">
        <h3 class="text-white">Strategy</h3>
        <img src="/img/services/icon-services-sml.svg" alt="">
        <a href="services-strategy.html"></a>
    </div>
    <p>&nbsp;</p>
</section>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('scripts/lottie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/scripts.js') }}"></script>
@endsection