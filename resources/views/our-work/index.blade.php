@extends('layouts.app')

@section('content')
<section class="work">
    <div class="grid-container">
        <h2>Our <span>Work.</span></h2>
        <div class="work-grid">

            <div class="grid-card card1">
                <div class="card">
                    <img src="/img/work/thumbnails/thumbnail_hempblack.jpg" alt="">
                    <h4 class="card-title">Feel. Look. Do. Better.</h4>
                    <h5 class="card-client">Hemp Black</h5>
                    <div class="border"></div>
                    <a href="cs-hempblack.html"></a>
                </div>
            </div>

            <div class="grid-card card2">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_locallegends.jpg" alt="">
						<h4 class="card-title">LG Local Legends</h4>
						<h5 class="card-client">LG Electronics</h5>
						<div class="border"></div>
						<a href="cs-lglocallegends.html"></a>
					</div>
				</div>

				<div class="grid-card card3">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_chromebook.jpg" alt="">
						<h4 class="card-title">ChromeBook Launch Campaign</h4>
						<h5 class="card-client">Lenovo</h5>
						<div class="border"></div>
						<a href="cs-chromebook.html"></a>
					</div>
				</div>

				<div class="grid-card card1">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_inkforgood.jpg" alt="">
						<h4 class="card-title">#inkForGood</h4>
						<h5 class="card-client">One Disease</h5>
						<div class="border"></div>
						<a href="cs-inkforgood.html"></a>
					</div>
				</div>

				<div class="grid-card card2">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_rrkiosk.jpg" alt="">
						<h4 class="card-title">Product Finder Kiosk</h4>
						<h5 class="card-client">Rhino Rack</h5>
						<div class="border"></div>
						<a href="cs-rrkiosk.html"></a>
					</div>
				</div>

				<div class="grid-card card3">
					<div class="card">
						<img src="img/work/thumbnails/freestyler_thumb.jpg" alt="">
						<h4 class="card-title">Freestyler Campaign</h4>
						<h5 class="card-client">LG Electronics</h5>
						<div class="border"></div>
						<a href="cs-lgfreestyler.html"></a>
					</div>
				</div>

				<div class="grid-card card1">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_vaneckdm.jpg" alt="">
						<h4 class="card-title">Sustainable ETF Direct Mail</h4>
						<h5 class="card-client">VanEck</h5>
						<div class="border"></div>
						<a href="cs-vaneckdm.html"></a>
					</div>
				</div>

				<div class="grid-card card2">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_zodiac.jpg" alt="">
						<h4 class="card-title">iQPump Launch Campaign</h4>
						<h5 class="card-client">Zodiac</h5>
						<div class="border"></div>
						<a href="cs-zodiac.html"></a>
					</div>
				</div>

				<div class="grid-card card3">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_rrwebsite.jpg" alt="">
						<h4 class="card-title">Website Design & Development</h4>
						<h5 class="card-client">Rhino Rack</h5>
						<div class="border"></div>
						<a href="cs-rrwebsite.html"></a>
					</div>
				</div>

				<div class="grid-card card1">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_mssurfacepro.jpg" alt="">
						<h4 class="card-title">Surface Pro Direct Mail</h4>
						<h5 class="card-client">Microsoft</h5>
						<div class="border"></div>
						<a href="cs-mssurfacepro.html"></a>
					</div>
				</div>

				<div class="grid-card card2">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_lgbch.jpg" alt="">
						<h4 class="card-title">Bring Cinema Home</h4>
						<h5 class="card-client">LG Electronics</h5>
						<div class="border"></div>
						<a href="cs-lgbringcinemahome.html"></a>
					</div>
				</div>

				<div class="grid-card card3">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_NickKyrios.jpg" alt="">
						<h4 class="card-title">Rebrand and Foundation Launch</h4>
						<h5 class="card-client">Nick Kyrios</h5>
						<div class="border"></div>
						<a href="cs-nickkyrios.html"></a>
					</div>
				</div>

				<div class="grid-card card1">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_adf.jpg" alt="">
						<h4 class="card-title">Virtual Career Portal</h4>
						<h5 class="card-client">Australian Defence Force</h5>
						<div class="border"></div>
						<a href="cs-adf.html"></a>
					</div>
				</div>

				<div class="grid-card card2">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_msmobiliser.jpg" alt="">
						<h4 class="card-title">Mobiliser Direct Mail Campaign</h4>
						<h5 class="card-client">Microsoft</h5>
						<div class="border"></div>
						<a href="cs-msmobiliser.html"></a>
					</div>
				</div>

				<div class="grid-card card3">
					<div class="card">
						<img src="img/work/thumbnails/thumbnail_vouchr.jpg" alt="">
						<h4 class="card-title">Mobile Marketing Platform</h4>
						<h5 class="card-client">Vouchr</h5>
						<div class="border"></div>
						<a href="cs-vouchr.html"></a>
					</div>
				</div>

        </div>
    </div>

</section>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('scripts/lottie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/scripts.js') }}"></script>
@endsection