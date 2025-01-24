@extends('layouts.main')

@section('content')
    <div class="container mt-4 mb-4">
        <div class="bg-white rounded shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="p-4 pb-0 text-center">
                <h1 class="text-2xl font-bold text-danger">Peta Tingkat Kemiskinan Sulawesi Tengah</h1>
                <p class="text-red-100 mt-2">Visualisasi tingkat kemiskinan per kabupaten/kota di Sulawesi Tengah</p>
            </div>

            <!-- Map Container -->
            <div class="p-4 pt-0">
                <div id="map" style="height: 600px;" class="rounded border"></div>
            </div>
        </div>
    </div>

    <style>
        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .legend {
            line-height: 18px;
            color: #555;
        }

        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }
    </style>
@endsection

@push('scripts')
    <script>
        // Data dari controller
        var regencyData = @json($regencies);
        var grades = @json($grades);

        // Debug: Tampilkan data di console
        console.log('Regency Data:', regencyData);
        console.log('Grades:', grades);

        // Fungsi untuk membersihkan nama
        function sanitizeName(name) {
            if (!name) return '';
            return name.toLowerCase().trim().replace(/[^a-z0-9]/g, '');
        }

        // Inisialisasi peta
        var map = L.map('map').setView([-1.4300, 121.4456], 7);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        function getColor(d) {
            // Warna untuk tingkat kemiskinan
            const colors = ['#ef9a9a', '#e57373', '#ef5350', '#f44336', '#d32f2f'];

            for (let i = 0; i < grades.length; i++) {
                if (d <= grades[i]) {
                    return colors[i];
                }
            }
            return '#b71c1c';
        }

        function style(feature) {
            // Debug: Tampilkan properties dari feature
            console.log('Feature Properties:', feature.properties);

            var regency = regencyData.find(function(r) {
                return feature.properties.kode_kab === r.id ||
                    feature.properties.id === r.id ||
                    sanitizeName(feature.properties.name) === sanitizeName(r.name);
            });

            // Debug: Tampilkan data kabupaten yang ditemukan
            console.log('Found Regency:', regency);

            let value = regency && regency.thematic_data ? regency.thematic_data.value : 0;

            return {
                fillColor: getColor(value),
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }

        var geojson;

        function highlightFeature(e) {
            var layer = e.target;

            layer.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer.bringToFront();
            info.update(layer.feature.properties);
        }

        function resetHighlight(e) {
            geojson.resetStyle(e.target);
            info.update();
        }

        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }

        var info = L.control();

        info.onAdd = function(map) {
            this._div = L.DomUtil.create('div', 'info');
            this.update();
            return this._div;
        };

        info.update = function(props) {
            if (!props) {
                this._div.innerHTML = '<h4>Informasi Kabupaten/Kota</h4>Arahkan kursor ke wilayah';
                return;
            }

            var regency = regencyData.find(function(r) {
                return props.kode_kab === r.id ||
                    props.id === r.id ||
                    sanitizeName(props.name) === sanitizeName(r.name);
            });

            let value = regency && regency.thematic_data ? regency.thematic_data.value : 0;

            this._div.innerHTML = '<h4>Informasi Kabupaten/Kota</h4>' +
                '<b>' + (props.name || 'Unknown') + '</b><br />' +
                'Tingkat Kemiskinan: ' + value.toLocaleString('id-ID') + '%';
        };

        info.addTo(map);

        var legend = L.control({
            position: 'bottomright'
        });

        legend.onAdd = function(map) {
            var div = L.DomUtil.create('div', 'info legend');
            const colors = ['#ef9a9a', '#e57373', '#ef5350', '#f44336', '#d32f2f'];

            div.innerHTML = '<h4>Tingkat Kemiskinan (%)</h4>';

            for (let i = 0; i < grades.length; i++) {
                div.innerHTML +=
                    `<i style="background:${colors[i]}"></i>` +
                    (i === 0 ? '< ' : grades[i - 1].toLocaleString('id-ID') + ' - ') +
                    grades[i].toLocaleString('id-ID') + '<br>';
            }
            div.innerHTML += `<i style="background:#b71c1c"></i>` +
                grades[grades.length - 1].toLocaleString('id-ID') + '+';
            return div;
        };

        legend.addTo(map);

        // Load GeoJSON files
        const regencyFiles = [{
                code: '7201',
                file: '/images/polygon/7201.geojson'
            },
            {
                code: '7202',
                file: '/images/polygon/7202.geojson'
            },
            {
                code: '7203',
                file: '/images/polygon/7203.geojson'
            },
            {
                code: '7204',
                file: '/images/polygon/7204.geojson'
            },
            {
                code: '7205',
                file: '/images/polygon/7205.geojson'
            },
            {
                code: '7206',
                file: '/images/polygon/7206.geojson'
            },
            {
                code: '7207',
                file: '/images/polygon/7207.geojson'
            },
            {
                code: '7208',
                file: '/images/polygon/7208.geojson'
            },
            {
                code: '7209',
                file: '/images/polygon/7209.geojson'
            },
            {
                code: '7271',
                file: '/images/polygon/7271.geojson'
            }
        ];

        // Debug: Error handling untuk loading GeoJSON
        regencyFiles.forEach(function(regency) {
            fetch(regency.file)
                .then(function(response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(function(data) {
                    console.log('Loaded GeoJSON for ' + regency.code + ':', data);
                    var layer = L.geoJson(data, {
                        style: style,
                        onEachFeature: onEachFeature
                    }).addTo(map);

                    if (!geojson) {
                        geojson = layer;
                    }
                })
                .catch(function(error) {
                    console.error('Error loading GeoJSON for ' + regency.code + ':', error);
                });
        });
    </script>
@endpush
