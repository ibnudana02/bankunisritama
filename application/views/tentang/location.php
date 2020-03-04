<!-- Main Body Content Start -->
<main id="body-content">

    <!-- What Makes Us Special Start -->
    <section class="bg-sky-blue wide-tb-ibnu">
        <div class="container">
            <div class="row">
                <h1><?= $page; ?></h1>
                <div id="mapid" style="width:100%; height: 450px;"></div>
            </div>

        </div>
    </section>
    <section class="bg-sky-blue wide-tb-30">
    </section>
</main>
<script>
    var map = L.map('mapid').setView([0.450750, 101.439671], 13);
    L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}').addTo(map);
    var marker = L.marker([
        [0.424682, 101.435679],
        [0.447231, 101.453632]
    ]).addTo(map);
</script>