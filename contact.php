<?php
$page_title = "Contact Us | ";
$meta_description = "Get in touch with our team.";
include 'inc/header.php';
?>
<style>
/* ── Contact Map Page ── */
.contact-map-page {
    position: relative;
    width: 100%;
    height: 100vh;
    min-height: 600px;
    overflow: hidden;
}

/* Full-bleed map */
#contactMap {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
}

/* Hide default Google zoom control */
.gm-bundled-control { display: none !important; }

/* ── Custom Zoom Controls — left side ── */
.map-zoom-controls {
    position: absolute;
    left: 20px;
    bottom: 20%;
    transform: translateY(50%);
    z-index: 10;
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.zoom-btn {
    width: 50px;
    height: 50px;
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 60px;
    font-size: 22px;
    font-weight: 300;
    color: #333;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
    box-shadow: 0 2px 8px rgba(0,0,0,0.10);
    transition: background 0.2s, color 0.2s;
    user-select: none;
}

.zoom-btn:hover {
    background: #1a1a1a;
    color: #fff;
}

/* Country tab strip — top-left */
.country-tabs {
    display: flex;
    gap: 10px;
    position: absolute;
    top: 85px;
    left: 70px;
    z-index: 10;
}

.ctab {
    position: relative;
    overflow: hidden;
    height: 44px;
    padding: 0 24px;
    border-radius: 30px;
    background: #fff;
    border: 1px solid #e0e0e0;
    color: #666;
    cursor: pointer;
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 0.04em;
    transition: background .3s ease, color .3s ease, border-color .3s ease;
}

.ctab.active,
.ctab:hover {
    background: #1a1a1a;
    color: #fff;
    border-color: #1a1a1a;
}

.tab-text {
    position: relative;
    display: block;
    height: 20px;
    overflow: hidden;
}

.tab-text span {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 20px;
    transition: transform .35s ease;
    white-space: nowrap;
}

.tab-text span:first-child  { transform: translateY(0); }
.tab-text span:last-child   { position: absolute; left: 0; top: 100%; width: 100%; }

.ctab:hover .tab-text span:first-child,
.ctab.active .tab-text span:first-child { transform: translateY(-100%); }

.ctab:hover .tab-text span:last-child,
.ctab.active .tab-text span:last-child  { transform: translateY(-100%); }

/* ── Info Card — bottom-right ── */
.map-info-card {
    position: absolute;
    right: 50px;
    bottom: 50px;
    width: 390px;
    background: #fff;
    z-index: 10;
    box-shadow: 0 4px 24px rgba(0,0,0,.08);
    overflow: hidden;
}

.map-info-card h5 {
    margin: 0;
    padding: 28px 28px 0;
    font-size: 20px;
    font-weight: 500;
    text-transform: uppercase;
}

.mic-divider {
    border: none;
    border-top: 1px solid #f0f0f0;
    margin: 20px 28px 0;
}

.mic-row {
    display: grid;
    grid-template-columns: 90px 1fr;
    gap: 18px;
    padding: 14px 28px 0;
    font-size: 15px;
}

.mic-row strong {
    font-weight: 600;
    color: #222;
}

.mic-row a,
.mic-row span {
    color: #444;
    line-height: 1.6;
    text-decoration: none;
    word-break: break-word;
}

.mic-row a:hover { text-decoration: underline; }

.contact-btn {
    position: relative;
    display: block;
    width: calc(100% - 56px);
    height: 50px;
    margin: 24px 28px 28px;
    border: none;
    border-radius: 999px;
    background: #1f1b1d;
    color: #fff;
    cursor: pointer;
    overflow: hidden;
}

.btn-text {
    position: relative;
    display: block;
    height: 100%;
    overflow: hidden;
}

.btn-text span {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 50px;
    font-size: 15px;
    font-weight: 600;
    transition: transform 0.35s ease;
}

.btn-text span:first-child  { transform: translateY(0); }
.btn-text span:last-child   { position: absolute; left: 0; top: 100%; width: 100%; }

.contact-btn:hover .btn-text span:first-child { transform: translateY(-100%); }
.contact-btn:hover .btn-text span:last-child  { transform: translateY(-100%); }

/* ── Mobile ── */
@media (max-width: 768px) {
    .contact-map-page { height: 100svh; min-height: 500px; }

    .country-tabs {
        top: 85px;
        left: 16px;
        right: 16px;
        flex-wrap: nowrap;
        overflow-x: auto;
        overflow-y: hidden;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .country-tabs::-webkit-scrollbar { display: none; }

    .ctab {
        flex: 0 0 auto;
        min-width: max-content;
        padding: 0 16px;
        font-size: 11px;
        height: 38px;
    }

    .map-zoom-controls {
        left: 12px;
        bottom: auto;
        top: 20%;
        transform: translateY(-50%);
    }

    .map-info-card {
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        box-shadow: 0 -4px 20px rgba(0,0,0,0.08);
    }
}

.showrooms-section {
    padding: 80px 60px 80px;
    background: #f5f3ee;
}

.showrooms-title {
    font-size: clamp(48px, 8vw, 96px);
    font-weight: 500;
    letter-spacing: -3px;
    line-height: 1;
    margin-bottom: 52px;
    color: #1a1a1a;
}

.city-filter { position: relative; display: inline-block; }

.city-trigger {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 12px 24px;
    border-radius: 50px;
    background: #1a1a1a;
    color: #fff;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
    border: none;
    min-width: 150px;
}

.city-dash { font-size: 20px; margin-left: auto; }

.city-dropdown {
    position: absolute;
    top: calc(100% + 10px);
    left: 0;
    background: #fff;
    border-radius: 20px;
    padding: 20px;
    min-width: 240px;
    z-index: 100;
    display: none;
}

.city-dropdown.open { display: block; }

.city-select-label {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: #888;
    margin-bottom: 14px;
}

.city-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #1a1a1a;
    display: inline-block;
    flex-shrink: 0;
}

.city-pill {
    display: inline-block;
    padding: 8px 20px;
    border-radius: 50px;
    border: 1.5px solid #1a1a1a;
    background: #fff;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.15s;
    margin: 10px 4px 0 0;
    color: #1a1a1a;
}

.city-pill.active,
.city-pill:hover {
    background: #1a1a1a;
    color: #fff;
}


/* ─── SECTION 3: City Detail + Photo/Map ─── */

#showroomMap {
    width: 100%;
    height: 100%;
}


.city-detail-section-wrapper{
    background:#f5f3ee;
}

.city-detail-section{
    display:grid;
    grid-template-columns:480px 1fr;
    min-height:520px;
}

.city-info-side {
    /* padding: 48px 44px; */
    padding-top:80px;
    padding-bottom:80px;
    background: #f5f3ee;
    border-top: 1px solid #e0ddd6;
}

.city-detail-name {
    font-size: 36px;
    font-weight: 500;
    margin-bottom: 36px;
    letter-spacing: -0.5px;
    color: #1a1a1a;
}

.detail-row {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 15px;
}

.detail-icon {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    border: 1.5px solid #ccc;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 600;
    color: #1a1a1a;
    flex-shrink: 0;
    margin-top: 2px;
}

.detail-text {
    font-size: 15px;
    line-height: 1.7;
    color: #1a1a1a;
}

.detail-text a {
    color: #1a1a1a;
    text-decoration: underline;
}

.read-more-btn {
    display: block;
    width: 75%;
    padding: 14px;
    border-radius: 50px;
    border: 1.5px solid #ccc;
    background: transparent;
    font-size: 14px;
    cursor: pointer;
    text-align: center;
    margin-top: 32px;
    transition: all 0.15s;
    color: #1a1a1a;
}

.read-more-btn:hover {
    border-color: #1a1a1a;
    background: #e8e4dc;
}

.city-visual-side {
    position: relative;
    overflow: hidden;
    background: #ccc;
    border-top: 1px solid #e0ddd6;
}

.photo-map-toggle {
    position: absolute;
    top: 24px;
    left: 24px;
    display: flex;
    background: rgba(26,26,26,0.85);
    border-radius: 50px;
    padding: 4px;
    z-index: 10;
    backdrop-filter: blur(4px);
}

.ptab {
    padding: 8px 22px;
    border-radius: 50px;
    font-size: 14px;
    cursor: pointer;
    color: rgba(255,255,255,0.6);
    border: none;
    background: transparent;
    transition: all 0.15s;
    font-weight: 500;
}

.ptab.active {
    background: #fff;
    color: #1a1a1a;
}

.visual-photo,
.visual-map {
    width: 100%;
    height: 100%;
}

.visual-map { display: none; }

.visual-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.visual-map iframe {
    width: 100%;
    height: 100%;
    border: none;
    display: block;
}

/* Story section */
   .future-section{
    position:relative;
    height:100vh;
    min-height:700px;
    overflow:hidden;
    display:flex;
    align-items:flex-end;
}

/* PARALLAX IMAGE */

.future-bg{
    position:absolute;
    inset:-20% 0;
    z-index:0;
    will-change:transform;
}

.future-bg img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

/* OVERLAY */

.future-overlay{
    position:absolute;
    inset:0;
    z-index:1;
    background:linear-gradient(
        to bottom,
        rgba(0,0,0,.08) 0%,
        rgba(0,0,0,.20) 45%,
        rgba(0,0,0,.55) 100%
    );
}

/* CONTENT */

.future-content{
    position:relative;
    z-index:2;
    width:100%;
    padding:60px;
}

/* TITLE */

.future-title-wrap{
    margin-bottom:50px;
}

.future-title{
    display:inline;
    color:#fff;
    -webkit-box-decoration-break:clone;
    box-decoration-break:clone;
    padding:5px 14px 10px;
    font-size:clamp(42px,6vw,90px);
    line-height:1.1;
    font-weight:400;
}

/* BOTTOM AREA */

.future-bottom{
    display:flex;
    justify-content:space-between;
    align-items:flex-end;
    gap:40px;
}

.future-text{
    max-width:550px;
    color:#fff;
    font-size:18px;
    line-height:1.7;
}

.future-btn{
    min-width:300px;
    width: 300px;
    color:#5d5b5a;
    background-color: #fff;
}

@media(max-width:768px){

    .future-section{
        min-height:650px;
    }

    .future-content{
        padding:25px;
    }

    .future-title{
        font-size:clamp(30px,9vw,48px);
        line-height:1.15;
    }

    .future-bottom{
        flex-direction:column;
        align-items:flex-start;
        gap:25px;
    }

    .future-text{
        max-width:100%;
        font-size:15px;
        line-height:1.7;
    }

    .future-btn{
        width:100%;
        min-width:unset;
    }

    /* disable parallax on mobile */
    .future-bg{
        inset:0;
        transform:none !important;
    }
}
</style>

<main>
<div class="contact-map-page">
    <!-- Full-bleed Google Map -->
    <div id="contactMap"></div>

    <!-- Custom Zoom Controls (left-centre) -->
    <div class="map-zoom-controls">
        <button class="zoom-btn" id="zoomIn"  title="Zoom in">+</button>
        <button class="zoom-btn" id="zoomOut" title="Zoom out">−</button>
    </div>

    <!-- Country Tabs -->
    <div class="country-tabs">
        <button class="ctab active"
            data-country="canada"
            data-name="Canada"
            data-phone="+1 778 297 7108"
            data-email="info@luxwood.com"
            data-addr="200-3071 Number 5 Road,<br>Richmond,<br>British Columbia, Canada">
            <span class="tab-text">
                <span>Canada</span>
                <span>Canada</span>
            </span>
        </button>

        <button class="ctab"
            data-country="newZealand"
            data-name="New Zealand"
            data-phone="+64 07 858 3628"
            data-email="nz@luxwood.com"
            data-addr="33 Harwood Street,<br>Hamilton Central,<br>Hamilton, New Zealand">
            <span class="tab-text">
                <span>New Zealand</span>
                <span>New Zealand</span>
            </span>
        </button>

        <button class="ctab"
            data-country="southAfrica"
            data-name="South Africa"
            data-phone="+27 21 555 3226"
            data-email="sa@luxwood.com"
            data-addr="Unit 10 Montague Square,<br>28 Montague Drive, Montague Gardens,<br>Cape Town, South Africa">
            <span class="tab-text">
                <span>South Africa</span>
                <span>South Africa</span>
            </span>
        </button>

        <button class="ctab"
            data-country="china"
            data-name="China"
            data-phone="+86 532 0000 0000"
            data-email="china@luxwood.com"
            data-addr="7 Huaquan First Road,<br>Longquan Town, Jimo City,<br>Qingdao, China">
            <span class="tab-text">
                <span>China</span>
                <span>China</span>
            </span>
        </button>
    </div>

    <!-- Info Card -->
    <div class="map-info-card">
        <h5 id="micName">Canada</h5>
        <hr class="mic-divider">
        <div class="mic-row">
            <strong>Phone:</strong>
            <a id="micPhone" href="tel:+17782977108">+1 778 297 7108</a>
        </div>
        <div class="mic-row">
            <strong>Email:</strong>
            <a id="micEmail" href="mailto:info@luxwood.com">info@luxwood.com</a>
        </div>
        <div class="mic-row">
            <strong>Address:</strong>
            <span id="micAddr">
                200-3071 Number 5 Road,<br>
                Richmond,<br>
                British Columbia, Canada
            </span>
        </div>
        <button class="contact-btn">
            <span class="btn-text">
                <span>Contact Us</span>
                <span>Contact Us</span>
            </span>
        </button>
    </div>
</div>

    <!--Section 2  -->
    <section class="showrooms-section" >
        <div class="container">
            <h1 class="showrooms-title mt-5">Showrooms</h1>

            <div class="city-filter">
                <button class="city-trigger" id="cityTrigger">
                    Canada
                    <span class="city-dash">—</span>
                </button>
                <div class="city-dropdown" id="cityDropdown">
                    <p class="city-select-label">
                        <span class="city-dot"></span>
                        Select the Country
                    </p>    

                    <button class="city-pill active"
                        data-city="Canada"
                        data-lat="49.1709"
                        data-lng="-123.0898"
                        data-phone="+1 778 297 7108"
                        data-email="info@luxwood.com"
                        data-addr="200-3071 Number 5 Road<br>Richmond<br>British Columbia, Canada"
                        data-map="https://maps.google.com/maps?q=Richmond+British+Columbia+Canada&output=embed"
                        data-photo="img/contact/show_room1.webp">
                        Canada
                    </button>

                    <button class="city-pill"
                        data-city="New Zealand"
                        data-lat="-37.7830"
                        data-lng="175.2778"
                        data-phone="+64 07 858 3628"
                        data-email="nz@luxwood.com"
                        data-addr="33 Harwood Street<br>Hamilton Central<br>Hamilton, New Zealand"
                        data-map="https://maps.google.com/maps?q=Hamilton+New+Zealand&output=embed"
                        data-photo="img/contact/show_room2.webp">
                        New Zealand
                    </button>

                    <button class="city-pill"
                        data-city="South Africa"
                        data-lat="-33.8611"
                        data-lng="18.5214"
                        data-phone="+27 21 555 3226"
                        data-email="sa@luxwood.com"
                        data-addr="Unit 10 Montague Square<br>Montague Gardens<br>Cape Town, South Africa"
                        data-map="https://maps.google.com/maps?q=Cape+Town+South+Africa&output=embed"
                        data-photo="img/contact/show_room3.webp">
                        South Africa
                    </button>

                    <button class="city-pill"
                        data-city="China"
                        data-lat="36.3897"
                        data-lng="120.4622"
                        data-phone="+86 532 0000 0000"
                        data-email="china@luxwood.com"
                        data-addr="7 Huaquan First Road<br>Jimo City<br>Qingdao, China"
                        data-map="https://maps.google.com/maps?q=Qingdao+China&output=embed"
                        data-photo="img/contact/show_room1.webp">
                        China
                    </button>

                </div>
            </div>
        </div>
    </section>

    <!--Section 3  -->
    <section class="city-detail-section-wrapper">
        <div class="container">
             
            <div class="city-detail-section">
                <div class="city-info-side">
                    <h3 class="city-detail-name" id="detailCityName">Canada</h3>
                    <div class="detail-row">
                        <div class="detail-icon">P</div>
                        <div class="detail-text">
                            <a href="tel:+971000000000" id="detailPhone">+17782977108</a>
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-icon">E</div>
                        <div class="detail-text">
                            <a href="mailto:info@luxwood.com" id="detailEmail">info@luxwood.com</a>
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-icon">A</div>
                        <div class="detail-text" id="detailAddr">
                            200-3071 Number 5 Road,<br>Richmond,<br>British Columbia, Canada
                        </div>
                    </div>
                    <button class="read-more-btn">Read more</button>
                </div>

                <div class="city-visual-side">
                    <div class="photo-map-toggle">
                        <button class="ptab active" id="photoTab" onclick="switchView('photo')">Photo</button>
                        <button class="ptab" id="mapTab" onclick="switchView('map')">Map</button>
                    </div>
                    <div class="visual-photo" id="visualPhoto">
                        <img src="img/contact/show_room1.webp" alt="Dubai showroom" id="showroomPhoto">
                    </div>
                    <div class="visual-map" id="visualMap">
                        <div id="showroomMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Section 4  -->
    <section class="future-section" id="futureSection">
        <div class="future-bg" id="futureBg">
            <img src="img/contact/story_banner.webp" alt="">
        </div>
        <div class="future-overlay"></div>

        <div class="future-content">

            <div class="future-title-wrap">
                <span class="future-title">
                    This is what the<br>
                    future sounds like
                </span>
            </div>

            <div class="future-bottom">

                <div class="future-text">
                    Using carbon neutral acoustic solutions designed to reduce
                    reverberation and control echo. All our products and global
                    operations are carbon neutral—because nothing is more beautiful
                    than a future we can all be proud of.
                </div>
                <!-- <a href="#" class="future-btn">
                    Find out how we did it
                </a> -->
                <button class="contact-btn future-btn">
                    <span class="btn-text">
                        <span>Find out how we did it</span>
                        <span>Find out how we did it</span>
                    </span>
                </button>
            </div>
        </div>
    </section>
</main>

<!-- Google Maps JS API (zoomControl:false so we use our own) -->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-fSqRpW24y6bsoNeIWSDAjafI5DeJw04&callback=initMap">
</script>

<script>
    //Section 1 Script Start
    const GREYSCALE_STYLE = [
        {"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},
        {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},
        {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},
        {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},
        {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},
        {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},
        {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},
        {"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},
        {"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},
        {"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},
        {"elementType":"labels.icon","stylers":[{"visibility":"off"}]},
        {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},
        {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},
        {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}
    ];

    const LOCATIONS = {
        canada:      { lat: 49.1709,   lng: -123.0898,  zoom: 15 },
        newZealand:  { lat: -37.7830,  lng:  175.2778,  zoom: 15 },
        southAfrica: { lat: -33.8611,  lng:   18.5214,  zoom: 15 },
        china:       { lat:  36.3897,  lng:  120.4622,  zoom: 15 }
    };

    let map, marker;
    let showroomMap, showroomMarker;

    function initMap() {
        const start = LOCATIONS.canada;

        map = new google.maps.Map(document.getElementById('contactMap'), {
            center: { lat: start.lat, lng: start.lng },
            zoom: start.zoom,
            styles: GREYSCALE_STYLE,
            mapTypeControl:    false,
            streetViewControl: false,
            fullscreenControl: false,
            zoomControl:       false   // we use our own buttons
        });
        
        const markerSvg = `
            <svg viewBox="0 0 62 89" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 31.0857C0 54.4 31 88.4 31 88.4C31 88.4 62 54.4 62 31.0857C62 13.9175 48.1206 0 31 0C13.8794 0 0 13.9175 0 31.0857Z" fill="#252324"/>
                <path d="M41.0873 21.5718V20.8H41.3078L41.5454 21.363L41.7791 20.8H42V21.5718H41.8488V20.9906L41.6072 21.5718H41.4747L41.2381 20.9906V21.5718H41.0873ZM40.364 20.9555V20.8H41.0047V20.9555H40.766V21.5718H40.6041V20.9555H40.364Z" fill="#FFFCF5"/>
                <path d="M29.9412 43.68H21L22.6031 28.9422H31.5443L29.9412 43.68Z" fill="#FFFCF5"/>
                <path d="M33.0606 43.68H42L39.4327 20.8H30.473L33.0606 43.68Z" fill="#FFFCF5"/>
            </svg>
        `;

        marker = new google.maps.Marker({
            position: { lat: start.lat, lng: start.lng },
            map: map,
            animation: google.maps.Animation.DROP,
            icon: {
                url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(markerSvg),
                scaledSize: new google.maps.Size(62, 89),
                anchor: new google.maps.Point(31, 89)
            }
        });


        showroomMap = new google.maps.Map(
            document.getElementById('showroomMap'),
            {
                center: {
                    lat: 49.1709,
                    lng: -123.0898
                },
                zoom: 15,
                styles: GREYSCALE_STYLE,
                mapTypeControl:false,
                streetViewControl:false,
                fullscreenControl:false,
                zoomControl:false
            }
        );

        showroomMarker = new google.maps.Marker({
            position:{
                lat:49.1709,
                lng:-123.0898
            },
            map:showroomMap,
            icon:{
                url:'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(markerSvg),
                scaledSize:new google.maps.Size(62,89),
                anchor:new google.maps.Point(31,89)
            }
        });

        // Wire up custom zoom buttons AFTER map is ready
        document.getElementById('zoomIn').addEventListener('click', function() {
            map.setZoom(map.getZoom() + 1);
        });
        document.getElementById('zoomOut').addEventListener('click', function() {
            map.setZoom(map.getZoom() - 1);
        });
    }

    function goToLocation(key) {
        const loc = LOCATIONS[key];
        if (!map || !marker || !loc) return;
        
        let zoom = map.getZoom();

        // Smooth zoom out
        const zoomOut = setInterval(() => {
            if (zoom <= 3) {
                clearInterval(zoomOut);
                map.panTo({
                    lat: loc.lat,
                    lng: loc.lng
                });

                marker.setPosition({
                    lat: loc.lat,
                    lng: loc.lng
                });

                marker.setAnimation(google.maps.Animation.DROP);
                setTimeout(() => {
                    let z = 3;
                    const zoomIn = setInterval(() => {
                        if (z >= loc.zoom) {
                            clearInterval(zoomIn);
                            return;
                        }
                        z++;
                        map.setZoom(z);
                    }, 120);
                }, 400);
                return;
            }
            zoom--;
            map.setZoom(zoom);
        }, 120);

        google.maps.event.addListenerOnce(map, 'idle', () => {
            map.setZoom(loc.zoom);
            marker.setAnimation(google.maps.Animation.DROP);
        });
    }

    // Tab clicks
    document.querySelectorAll('.ctab').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.ctab').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Update info card
            document.getElementById('micName').textContent  = btn.dataset.name;
            document.getElementById('micPhone').textContent = btn.dataset.phone;
            document.getElementById('micPhone').href        = 'tel:' + btn.dataset.phone.replace(/[\s\-()+]/g, '');
            document.getElementById('micEmail').textContent = btn.dataset.email;
            document.getElementById('micEmail').href        = 'mailto:' + btn.dataset.email;
            document.getElementById('micAddr').innerHTML    = btn.dataset.addr;

            // Move map
            goToLocation(btn.dataset.country);
        });
    });

    //Section 1 Script End

    //Section 2 Script Start

    const cityTrigger = document.getElementById('cityTrigger');
    const cityDropdown = document.getElementById('cityDropdown');

    cityTrigger.addEventListener('click', () => {
        cityDropdown.classList.toggle('open');
    });

    document.addEventListener('click', (e) => {
        if (!e.target.closest('.city-filter')) {
            cityDropdown.classList.remove('open');
        }
    });

    document.querySelectorAll('.city-pill').forEach(pill => {
        pill.addEventListener('click', function() {
            // Active state
            document.querySelectorAll('.city-pill').forEach(p =>
                p.classList.remove('active')
            );
            this.classList.add('active');

            // Update button text
            cityTrigger.innerHTML =
                this.dataset.city +
                '<span class="city-dash">—</span>';

            // Update section 3 content
            document.getElementById('detailCityName').textContent =
                this.dataset.city;

            document.getElementById('detailPhone').textContent =
                this.dataset.phone;

            document.getElementById('detailPhone').href =
                'tel:' + this.dataset.phone.replace(/[\s\-()+]/g,'');

            document.getElementById('detailEmail').textContent =
                this.dataset.email;

            document.getElementById('detailEmail').href =
                'mailto:' + this.dataset.email;

            document.getElementById('detailAddr').innerHTML =
                this.dataset.addr;

            // document.getElementById('detailHours').textContent =
            //     this.dataset.hours;

            document.getElementById('showroomPhoto').src =
                this.dataset.photo;

            document.getElementById('showroomPhoto').alt =
                this.dataset.city + ' Showroom';

            const lat = parseFloat(this.dataset.lat);
            const lng = parseFloat(this.dataset.lng);

            showroomMap.panTo({
                lat: lat,
                lng: lng
            });

            showroomMap.setZoom(15);

            showroomMarker.setPosition({
                lat: lat,
                lng: lng
            });

            showroomMarker.setAnimation(
                google.maps.Animation.DROP
            );

            cityDropdown.classList.remove('open');
        });
    });


    function switchView(type) {

        const photo = document.getElementById('visualPhoto');
        const map = document.getElementById('visualMap');

        const photoTab = document.getElementById('photoTab');
        const mapTab = document.getElementById('mapTab');

        if (type === 'photo') {
            photo.style.display = 'block';
            map.style.display = 'none';
            photoTab.classList.add('active');
            mapTab.classList.remove('active');
        } else {
            photo.style.display = 'none';
            map.style.display = 'block';
            mapTab.classList.add('active');
            photoTab.classList.remove('active');
        }
    }

    //Section 2 Script End

    // Story Section 
    (function(){

        const section = document.getElementById('futureSection');
        const bg = document.getElementById('futureBg');

        if(!section || !bg) return;

        const isTouch =
            ('ontouchstart' in window) ||
            navigator.maxTouchPoints > 0;

        if(isTouch) return;

        let ticking = false;
        const SPEED = 0.4;

        function updateParallax(){

            const rect = section.getBoundingClientRect();

            if(rect.bottom < 0 || rect.top > window.innerHeight){
                ticking = false;
                return;
            }

            const scrolled = -rect.top;
            const offset = scrolled * SPEED;

            bg.style.transform =
                `translateY(${offset}px)`;

            ticking = false;
        }

        window.addEventListener('scroll', function(){

            if(!ticking){
                requestAnimationFrame(updateParallax);
                ticking = true;
            }

        }, { passive:true });

        updateParallax();

    })();


</script>

<script>
    
</script>

<?php include 'inc/footer.php'; ?>