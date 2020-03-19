<!-- Main Body Content Start -->
<main id="body-content">

    <!-- What Makes Us Special Start -->
    <section class="bg-sky-blue wide-tb-ibnu">
        <div class="container">
            <div class="row">
                <h1><?= $page; ?></h1>

                <!-- <div id="mapid" style="width:100%; height: 450px;"></div> -->
            </div>

        </div>
    </section>
    <section class="bg-sky-blue wide-tb-30">
        <div class="container">
            <div class="card" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div id="mapid" style="width:100%; height: 250px;"></div>
                <div class="card-body">
                    <h5 class="card-title">Kantor Pusat</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    var map = L.map('mapid').setView([0.450750, 101.439671], 13);
    L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}').addTo(map);
    var marker = L.marker([0.447211, 101.453636]).addTo(map);
    marker.bindPopup("<b>Kantor Pelayanan Kas UIR</b><br>I am a popup.").openPopup();
    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(map);
    }

    map.on('click', onMapClick);
</script>