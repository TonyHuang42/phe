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
</main>

<!-- Google Maps JS API (zoomControl:false so we use our own) -->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-fSqRpW24y6bsoNeIWSDAjafI5DeJw04&callback=initMap">
</script>

<script>
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
</script>

<?php include 'inc/footer.php'; ?>