<?php
$page_title = "Contact Us | ";
$meta_description = "Get in touch with our team.";
include 'inc/header.php';
?>
<link rel="stylesheet" href="css/contact.css">

<main class="contact-page">

         <section class="home-hero-section">
        <div class="hero-section-bg">
            <img src="img/building-system/banner_main.jpg" alt="PHE Hero" class="hero-section-bg-img">
        </div>

        <div class="building-system-hero-section-wrap">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-9">
                        <h2 class="mb-0">PHE LUXWOOD CONTACT US</h2>
                    </div>
                    <div class="col-lg-3">
                        <h6>Engineered modular systems designed to accelerate construction, reduce costs, and deliver reliable performance. </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 1: Map with overlay tabs + info card -->
    <!-- <section class="contact-map-section">
        <div id="contactMap">

        <iframe class="contact-gmap" id="contactMap"
            src="https://maps.google.com/maps?q=dubai+design+district+uae&t=&z=14&ie=UTF8&iwloc=&output=embed"
            loading="lazy"></iframe>

       
        <div class="country-tabs">

            <button class="ctab active"
                data-country="dubai"
                data-name="Dubai"
                data-phone="+971 00 000 0000"
                data-email="info@luxwood.com"
                data-addr="Dubai Design District<br>Dubai, UAE">
                Dubai
            </button>

            <button class="ctab"
                data-country="stockholm"
                data-name="Stockholm"
                data-phone="+46 00 000 0000"
                data-email="stockholm@luxwood.com"
                data-addr="Stockholm<br>Sweden">
                Stockholm
            </button>

            <button class="ctab"
                data-country="london"
                data-name="London"
                data-phone="+44 20 0000 0000"
                data-email="london@luxwood.com"
                data-addr="London<br>United Kingdom">
                London
            </button>

        </div>

        <div class="map-info-card">
            <h2 class="mic-name" id="micName">Dubai</h2>
            <div class="mic-row">
                <span class="mic-label">Phone:</span>
                <span class="mic-val"><a id="micPhone" href="tel:+971000000000">+971 00 000 0000</a></span>
            </div>
            <div class="mic-row">
                <span class="mic-label">Email:</span>
                <span class="mic-val"><a id="micEmail" href="mailto:info@luxwood.com">info@luxwood.com</a></span>
            </div>
            <div class="mic-row">
                <span class="mic-label">Address:</span>
                <span class="mic-val" id="micAddr">Dubai Design District<br>Dubai, UAE</span>
            </div>
            <button class="mic-cta">Contact us</button>
        </div>

    </section> -->
    <section class="contact-map-section">

            <!-- Google Map -->
            <div id="contactMap" class="contact-gmap"></div>

            <!-- Country Tabs -->
            <div class="country-tabs">

                <button class="ctab active"
                    data-country="dubai"
                    data-name="Dubai"
                    data-phone="+971 00 000 0000"
                    data-email="info@luxwood.com"
                    data-addr="Dubai Design District<br>Dubai, UAE">
                    Dubai
                </button>

                <button class="ctab"
                    data-country="stockholm"
                    data-name="Stockholm"
                    data-phone="+46 00 000 0000"
                    data-email="stockholm@luxwood.com"
                    data-addr="Stockholm<br>Sweden">
                    Stockholm
                </button>

                <button class="ctab"
                    data-country="london"
                    data-name="London"
                    data-phone="+44 20 0000 0000"
                    data-email="london@luxwood.com"
                    data-addr="London<br>United Kingdom">
                    London
                </button>

            </div>

            <!-- Info Card -->
            <div class="map-info-card">

                <h5 id="micName">Dubai</h5>

                <div class="mic-row">
                    <strong>Phone:</strong>
                    <a id="micPhone" href="tel:+971000000000">
                        +971 00 000 0000
                    </a>
                </div>

                <div class="mic-row">
                    <strong>Email:</strong>
                    <a id="micEmail" href="mailto:info@luxwood.com">
                        info@luxwood.com
                    </a>
                </div>

                <div class="mic-row">
                    <strong>Address:</strong>
                    <span id="micAddr">
                        Dubai Design District<br>
                        Dubai, UAE
                    </span>
                </div>

            </div>

        </section>

    <!-- SECTION 2: Showrooms Heading + City Filter -->
    <section class="showrooms-section">
    <div class="container">
        <h1 class="showrooms-title mt-5">Showrooms</h1>

        <div class="city-filter" id="cityFilter mb-5">
            <button class="city-trigger" id="cityTrigger">
                City <span class="city-dash">—</span>
            </button>
            <div class="city-dropdown" id="cityDropdown">
                <p class="city-select-label">
                    <span class="city-dot"></span> Select the City
                </p>
                <button class="city-pill active" data-city="Dubai"
                    data-phone="+971 00 000 0000"
                    data-email="info@luxwood.com"
                    data-addr="Dubai Design District<br>Building 7, Suite 201<br>Dubai, UAE"
                    data-hours="Mon – Fri: 9am – 5.30pm"
                    data-map="https://maps.google.com/maps?q=dubai+design+district&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    data-photo="img/contact/show_room1.webp">
                    Dubai
                </button>
                <button class="city-pill" data-city="Stockholm"
                    data-phone="+46 00 000 0000"
                    data-email="stockholm@luxwood.com"
                    data-addr="Stockholm<br>Sweden"
                    data-hours="Mon – Fri: 9am – 5pm"
                    data-map="https://maps.google.com/maps?q=stockholm+sweden&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    data-photo="img/contact/show_room2.webp">
                    Stockholm
                </button>
                <button class="city-pill" data-city="London"
                    data-phone="+44 20 0000 0000"
                    data-email="london@luxwood.com"
                    data-addr="London<br>United Kingdom"
                    data-hours="Mon – Fri: 9am – 6pm"
                    data-map="https://maps.google.com/maps?q=london+uk&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    data-photo="img/contact/show_room3.webp">
                    London
                </button>
            </div>
        </div>
    </div>

    </section>

    <!-- SECTION 3: City Detail + Photo/Map Toggle -->
    <!-- <section class="city-detail-section">
        
            <div class="city-info-side">
                <h3 class="city-detail-name" id="detailCityName">Dubai</h3>
                <div class="detail-row">
                    <div class="detail-icon">P</div>
                    <div class="detail-text">
                        <a href="tel:+971000000000" id="detailPhone">+971 00 000 0000</a>
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
                        Dubai Design District<br>Building 7, Suite 201<br>Dubai, UAE
                    </div>
                </div>
                <div class="detail-row">
                    <div class="detail-icon">H</div>
                    <div class="detail-text" id="detailHours">Mon – Fri: 9am – 5.30pm</div>
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
                    <iframe id="showroomMap"
                        src="https://maps.google.com/maps?q=dubai+design+district&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        loading="lazy"></iframe>
                </div>
            </div>
    
    </section> -->
    <section class="city-detail-section-wrapper">
    <div class="container">
        <div class="city-detail-section">

            <div class="city-info-side">
                <h3 class="city-detail-name" id="detailCityName">Dubai</h3>
                <div class="detail-row">
                    <div class="detail-icon">P</div>
                    <div class="detail-text">
                        <a href="tel:+971000000000" id="detailPhone">+971 00 000 0000</a>
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
                        Dubai Design District<br>Building 7, Suite 201<br>Dubai, UAE
                    </div>
                </div>
                <div class="detail-row">
                    <div class="detail-icon">H</div>
                    <div class="detail-text" id="detailHours">Mon – Fri: 9am – 5.30pm</div>
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
                    <iframe id="showroomMap"
                        src="https://maps.google.com/maps?q=dubai+design+district&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sticky-image-section">
    <div class="sticky-image-wrap">
        <img src="img/footer-banner.webp" alt="Luxury Interior">
    </div>
</section>

</main>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-fSqRpW24y6bsoNeIWSDAjafI5DeJw04&callback=initMap">
</script>


<script>

let map;
let marker;

const locations = {

    dubai: {
        lat: 25.1857,
        lng: 55.2644,
        zoom: 15
    },

    stockholm: {
        lat: 59.3293,
        lng: 18.0686,
        zoom: 13
    },

    london: {
        lat: 51.5072,
        lng: -0.1276,
        zoom: 13
    }

};

function initMap() {

    map = new google.maps.Map(
        document.getElementById('contactMap'),
        {
            center: locations.dubai,
            zoom: 4,
            mapTypeControl:false,
            streetViewControl:false,
            fullscreenControl:false
        }
    );

    marker = new google.maps.Marker({
        position: locations.dubai,
        map: map,
        animation: google.maps.Animation.DROP
    });

    flyToLocation(locations.dubai);

}

function flyToLocation(location){

    // map.setZoom(3);

    setTimeout(function(){

        map.panTo({
            lat: location.lat,
            lng: location.lng
        });

        marker.setPosition({
            lat: location.lat,
            lng: location.lng
        });

        let zoom = 1;

        const zoomAnimation = setInterval(function(){

            zoom++;

            map.setZoom(zoom);

            if(zoom >= location.zoom){
                clearInterval(zoomAnimation);
            }

        },120);

    },600);

}


document.addEventListener('DOMContentLoaded', function(){

    document.querySelectorAll('.ctab').forEach(function(btn){

        btn.addEventListener('click', function(){

            document
                .querySelectorAll('.ctab')
                .forEach(function(b){
                    b.classList.remove('active');
                });

            this.classList.add('active');

            const country = this.dataset.country;

            flyToLocation(locations[country]);

            document.getElementById('micName').textContent =
                this.dataset.name;

            document.getElementById('micPhone').textContent =
                this.dataset.phone;

            document.getElementById('micPhone').href =
                'tel:' + this.dataset.phone.replace(/\s/g,'');

            document.getElementById('micEmail').textContent =
                this.dataset.email;

            document.getElementById('micEmail').href =
                'mailto:' + this.dataset.email;

            document.getElementById('micAddr').innerHTML =
                this.dataset.addr;

        });

    });

});

</script>
<script>
// Country tabs (Section 1)
document.querySelectorAll('.ctab').forEach(function(btn) {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.ctab').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        document.getElementById('infoCountry').textContent = btn.dataset.name;
        document.getElementById('infoPhone').textContent = btn.dataset.phone;
        document.getElementById('infoPhone').href = 'tel:' + btn.dataset.phone.replace(/\s/g,'');
        document.getElementById('infoEmail').textContent = btn.dataset.email;
        document.getElementById('infoEmail').href = 'mailto:' + btn.dataset.email;
        document.getElementById('infoAddr').innerHTML = btn.dataset.addr;
    });
});

// City dropdown toggle (Section 2)
document.getElementById('cityTrigger').addEventListener('click', function(e) {
    e.stopPropagation();
    document.getElementById('cityDropdown').classList.toggle('open');
});
document.addEventListener('click', function() {
    document.getElementById('cityDropdown').classList.remove('open');
});
document.getElementById('cityDropdown').addEventListener('click', function(e) {
    e.stopPropagation();
});

// City pills — update Section 3
document.querySelectorAll('.city-pill').forEach(function(btn) {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.city-pill').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        document.getElementById('cityDropdown').classList.remove('open');
        document.getElementById('cityTrigger').childNodes[0].textContent = btn.dataset.city + ' ';

        document.getElementById('detailCityName').textContent = btn.dataset.city;
        document.getElementById('detailPhone').textContent = btn.dataset.phone;
        document.getElementById('detailPhone').href = 'tel:' + btn.dataset.phone.replace(/\s/g,'');
        document.getElementById('detailEmail').textContent = btn.dataset.email;
        document.getElementById('detailEmail').href = 'mailto:' + btn.dataset.email;
        document.getElementById('detailAddr').innerHTML = btn.dataset.addr;
        document.getElementById('detailHours').textContent = btn.dataset.hours;
        document.getElementById('showroomPhoto').src = btn.dataset.photo;
        document.getElementById('showroomPhoto').alt = btn.dataset.city + ' showroom';
        document.getElementById('showroomMap').src = btn.dataset.map;
    });
});

// Photo / Map toggle (Section 3)
function switchView(view) {
    if (view === 'photo') {
        document.getElementById('visualPhoto').style.display = 'block';
        document.getElementById('visualMap').style.display = 'none';
        document.getElementById('photoTab').classList.add('active');
        document.getElementById('mapTab').classList.remove('active');
    } else {
        document.getElementById('visualPhoto').style.display = 'none';
        document.getElementById('visualMap').style.display = 'block';
        document.getElementById('photoTab').classList.remove('active');
        document.getElementById('mapTab').classList.add('active');
    }
}
</script>

<?php include 'inc/footer.php'; ?>