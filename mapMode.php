<?php
	include("header.inc");
?>
<?php
	include("nav.inc");
?>

	<main>

    <p id="maptitle">Victorian COVID-19 Test Location Sites Map</p>

    <div id="map"></div>
    <script>
        function initMap() {

            // Map settings
            var settings = {
                zoom: 11.5,
                center: { lat: -37.814, lng: 144.96332 }
            }

            // New Map
            var map = new google.maps.Map(document.getElementById('map'), settings);

            // add Markers for test Locations
            // markers are indexed starting from the first location mentioned in the elicitation notes
            var markers = [];

            // Aughtie Walk - Albert Park: 23 Aughtie Dr, Albert Park, VIC, 3206
            var marker1 = new google.maps.Marker({
                position: { lat: -37.845762, lng: 144.965389 },
                map: map
            });
            markers.push(marker1);

            // Port Melbourne Respiratory Clinic: 405 Bay st, Port Melbourne, VIC 3207
            var marker2 = new google.maps.Marker({
                position: { lat: -37.83418029689519, lng: 144.94608887831345 },
                map: map
            });
            markers.push(marker2);

            // 227 Bourke Street, Melbourne, VIC 3000
            var marker3 = new google.maps.Marker({
                position: { lat: -37.813380, lng: 144.966910 },
                map: map
            });
            markers.push(marker3);

            // Montague st - south Melbourne
            var marker4 = new google.maps.Marker({
                position: { lat: -37.83127, lng: 144.950313 },
                map: map
            });
            markers.push(marker4);

            // Alfred Health - The Alfred Hospital: 55 COMMERCIAL RD, MELBOURNE VIC 3004, Australia
            var marker5 = new google.maps.Marker({
                position: { lat: -37.8456035, lng: 144.982784 },
                map: map
            });
            markers.push(marker5);

            // Prahran Respiratory Clinic (Star Health - Prahran Town Hall): 180 Greville St, Prahran VIC 3181
            var marker6 = new google.maps.Marker({
                position: { lat: -37.8492793, lng: 144.991449 },
                map: map
            });
            markers.push(marker6);

            // Melbourne Pathology - Balaclava: Carlisle Street, Balaclava VIC 3183
            var marker7 = new google.maps.Marker({
                position: { lat: -37.8688583, lng: 144.9942072 },
                map: map
            });
            markers.push(marker7);

            // 231 Russell Street, Melbourne, VIC 3000
            var marker8 = new google.maps.Marker({
                position: { lat: -37.811250, lng: 144.967100 },
                map: map
            });
            markers.push(marker8);

            // St Vincent's Hospital Melbourne - Fever Clinic: 41 Victoria Parade, Fitzroy VIC 3065
            var marker9 = new google.maps.Marker({
                position: { lat: -37.8070907, lng: 144.9746724 },
                map: map
            });
            markers.push(marker9);

            // Fitzroy Respiratory Clinic (Victorian Aboriginal Health Service): 186 Nicholson St, Fitzroy VIC 3065
            var marker10 = new google.maps.Marker({
                position: { lat: -37.7993801, lng: 144.975129 },
                map: map
            });
            markers.push(marker10);

            // Cohealth -Collingwood: 365 Hoddle St, Collingwood VIC 3066
            var marker11 = new google.maps.Marker({
                position: { lat: -37.7988615, lng: 144.992577 },
                map: map
            });
            markers.push(marker11);

            // The Royal Melbourne Hospital: 300 Grattan St, Parkville VIC 3050
            var marker12 = new google.maps.Marker({
                position: { lat: -37.7986693, lng: 144.9564033 },
                map: map
            });
            markers.push(marker12);

            // The Royal Children's Hospital: 50 Flemington Rd, Parkville VIC 3052
            var marker13 = new google.maps.Marker({
                position: { lat: -37.793935, lng: 144.948979 },
                map: map
            });
            markers.push(marker13);

            // Melbourne Pathology - North Melbourne: 70 Alfred St, North Melbourne VIC 3051
            var marker14 = new google.maps.Marker({
                position: { lat: -37.7909051, lng: 144.941004 },
                map: map
            });
            markers.push(marker14);

            // 4Cyte Pathology -Fairfield: 202 Station St, Fairfield VIC 3078
            var marker15 = new google.maps.Marker({
                position: { lat: -37.7833483, lng: 145.0174182 },
                map: map
            });
            markers.push(marker15);

            // Melbourne Pathology -Moonee Ponds: 14 Pascoe Vale Rd, Moonee Ponds VIC 3039
            var marker16 = new google.maps.Marker({
                position: { lat: -37.7661899, lng: 144.925363 },
                map: map
            });
            markers.push(marker16);

            // Melbourne Showgrounds: Epsom Rd, Ascot Vale VIC 3032
            var marker17 = new google.maps.Marker({
                position: { lat: -37.7838599, lng: 144.9179083 },
                map: map
            });
            markers.push(marker17);

            // Hampstead Road: 5/44 Hampstead Rd, Maidstone VIC 3012
            var marker18 = new google.maps.Marker({
                position: { lat: -37.7817566, lng: 144.8705215 },
                map: map
            });
            markers.push(marker18);

            // Cohealth - West Footscray: 5/44 Hampstead Rd, Maidstone VIC 3012
            var marker19 = new google.maps.Marker({
                position: { lat: -37.8000634, lng: 144.8949645 },
                map: map
            });
            markers.push(marker19);

            // Altona North Respiratory Clinic: 230 BLACKSHAWS RD, ALTONA NORTH VIC 3025, Australia
            var marker20 = new google.maps.Marker({
                position: { lat: -37.832459, lng: 144.861498 },
                map: map
            });
            markers.push(marker20);



            // add markers information pop-up of testing site
            var infoWindows = [];

            var infoWindow1 = new google.maps.InfoWindow({
                content: '<h3>Aughtie Walk - Albert Park</h3><h4>23 Aughtie Dr, Albert Park, VIC, 3206</h4><img src="resources/drive.png" class="small" alt="Drive-Thru" /><h4>Drive-Thru</h4>'
            });
            infoWindows.push(infoWindow1);

            var infoWindow2 = new google.maps.InfoWindow({
                content: '<h3>Port Melbourne Respiratory Clinic</h3><h4>405 Bay St, Port Melbourne, VIC 3207</h4><img src="resources/GP.png" class="small" alt="GP Clinic" /><h4>GP Respiratory Clinic</h4>'
            });
            infoWindows.push(infoWindow2);

            var infoWindow3 = new google.maps.InfoWindow({
                content: '<h3>Bourke Street Melbourne CBD</h3><h4>227 Bourke St, Melbourne, VIC 3000</h4><img src="resources/walk.png" class="small" alt="Walk-In" /><h4>Walk-In</h4>'
            });
            infoWindows.push(infoWindow3);

            var infoWindow4 = new google.maps.InfoWindow({
                content: '<h3>Montague St - South Melbourne</h3><h4>120 Montague St, South Melbourne, VIC 3205</h4><img src="resources/walk.png" class="small" alt="Walk-In" /><h4>Walk-In</h4>'
            });
            infoWindows.push(infoWindow4);

            var infoWindow5 = new google.maps.InfoWindow({
                content: '<h3>Alfred Health - The Alfred Hospital</h3><h4>55 COMMERCIAL RD, MELBOURNE VIC 3004</h4><img src="resources/hospital.png" class="small" alt="Hospital" /><h4>Hospital</h4>'
            });
            infoWindows.push(infoWindow5);

            var infoWindow6 = new google.maps.InfoWindow({
                content: '<h3>Prahran Respiratory Clinic (Star Health - Prahran Town Hall) </h3><h4>180 Greville St, Prahran VIC 3181</h4><img src="resources/walk.png" class="small" alt="Walk-In" /><h4>Walk-In</h4>'
            });
            infoWindows.push(infoWindow6);

            var infoWindow7 = new google.maps.InfoWindow({
                content: '<h3>Melbourne Pathology - Balaclava</h3><h4>Carlisle Street, Balaclava VIC 3183</h4><img src="resources/patho.png" class="small" alt="Pathology Clinic" /><h4>Pathology Clinic</h4>'
            });
            infoWindows.push(infoWindow7);

            var infoWindow8 = new google.maps.InfoWindow({
                content: '<h3>4 Cyte Pathology - Melbourne CBD</h3><h4>231 Russell St, Melbourne, VIC 3000</h4><img src="resources/patho.png" class="small" alt="Pathology Clinic" /><h4>Pathology Clinic</h4>'
            });
            infoWindows.push(infoWindow8);

            var infoWindow9 = new google.maps.InfoWindow({
                content: '<h3>St Vincents Hospital Melbourne - Fever Clinic</h3><h4>41 Victoria Parade, Fitzroy VIC 3065</h4><img src="resources/hospital.png" class="small" alt="Hospital" /><h4>Hospital</h4>'
            });
            infoWindows.push(infoWindow9);

            var infoWindow10 = new google.maps.InfoWindow({
                content: '<h3>Fitzroy Respiratory Clinic (Victorian Aboriginal Health Service)</h3><h4>186 Nicholson St, Fitzroy VIC 3065</h4><img src="resources/GP.png" class="small" alt="GP Clinic" /><h4>GP Respiratory Clinic</h4>'
            });
            infoWindows.push(infoWindow10);

            var infoWindow11 = new google.maps.InfoWindow({
                content: '<h3>Cohealth -Collingwood</h3><h4>365 Hoddle St, Collingwood VIC 3066</h4><img src="resources/walk.png" class="small" alt="Walk-In" /><h4>Walk-In</h4>'
            });
            infoWindows.push(infoWindow11);

            var infoWindow12 = new google.maps.InfoWindow({
                content: '<h3>The Royal Melbourne Hospital</h3><h4>300 Grattan St, Parkville VIC 3050</h4><img src="resources/hospital.png" class="small" alt="Hospital" /><h4>Hospital</h4>'
            });
            infoWindows.push(infoWindow12);

            var infoWindow13 = new google.maps.InfoWindow({
                content: '<h3>The Royal Childrens Hospital</h3><h4>50 Flemington Rd, Parkville VIC 3052</h4><img src="resources/hospital.png" class="small" alt="Hospital" /><h4>Hospital</h4>'
            });
            infoWindows.push(infoWindow13);

            var infoWindow14 = new google.maps.InfoWindow({
                content: '<h3>Melbourne Pathology - North Melbourne</h3><h4>70 Alfred St, North Melbourne VIC 3051</h4><img src="resources/patho.png" class="small" alt="Pathology Clinic" /><h4>Pathology Clinic</h4>'
            });
            infoWindows.push(infoWindow14);

            var infoWindow15 = new google.maps.InfoWindow({
                content: '<h3>4Cyte Pathology - Fairfield</h3><h4>202 Station St, Fairfield VIC 3078</h4><img src="resources/patho.png" class="small" alt="Pathology Clinic" /><h4>Pathology Clinic</h4>'
            });
            infoWindows.push(infoWindow15);

            var infoWindow16 = new google.maps.InfoWindow({
                content: '<h3>Melbourne Pathology - Moonee Ponds</h3><h4>MedicalOne, 14 Pascoe Vale Road VIC 3039</h4><img src="resources/patho.png" class="small" alt="Pathology Clinic" /><h4>Pathology Clinic</h4>'
            });
            infoWindows.push(infoWindow16);

            var infoWindow17 = new google.maps.InfoWindow({
                content: '<h3>Melbourne Showgrounds</h3><h4>Epsom Rd, Ascot Vale VIC 3032</h4><img src="resources/drive.png" class="small" alt="Drive-Thru" /><h4>Drive-Thru</h4>'
            });
            infoWindows.push(infoWindow17);

            var infoWindow18 = new google.maps.InfoWindow({
                content: '<h3>Hampstead Road</h3><h4>5/44 Hampstead Rd, Maidstone VIC 3012</h4><img src="resources/walk.png" class="small" alt="Walk-In" /><h4>Walk-In</h4>'
            });
            infoWindows.push(infoWindow18);

            var infoWindow19 = new google.maps.InfoWindow({
                content: '<h3>Cohealth - West Footscray</h3><h4>CoHealth Footscray, 78 Paisley Street, Footscray VIC 3011</h4><img src="resources/walk.png" class="small" alt="Walk-In" /><h4>Walk-In</h4>'
            });
            infoWindows.push(infoWindow19);

            var infoWindow20 = new google.maps.InfoWindow({
                content: '<h3>Altona North Respiratory Clinic</h3><h4>230 BLACKSHAWS RD, ALTONA NORTH VIC 3025</h4><img src="resources/GP.png" class="small" alt="GP Clinic" /><h4>GP Respiratory Clinic</h4>'
            });
            infoWindows.push(infoWindow20);




            // add event listeners for pop-ups to work when clicked on
            for (let i = 0; i < markers.length; i++) {
                markers[i].addListener('click', function () {
                    infoWindows[i].open(map, markers[i]);
                })
            };

        }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPFx8f5Cb4EIuZw7v-jVkjqAI-wpcYoCc&callback=initMap&v=weekly">
        </script>
	</main>
<?php
include("footer.inc");
?>