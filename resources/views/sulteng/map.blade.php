@extends('layouts.main')

@section('content')
    <div class="container mt-4 mb-4">
        <div class="bg-white rounded shadow-lg overflow-hidden">
            <div class="p-4 text-center pb-0">
                <h1 class="text-2xl font-bold text-primary">Peta Sulawesi Tengah</h1>
                <p class="text-blue-100 mt-2">Lokasi Kabupaten/Kota di Sulawesi Tengah</p>
            </div>

            <div class="p-4 pt-0">
                <div id="map" style="height: 600px;" class="rounded border"></div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Inisialisasi peta dengan center di tengah Sulawesi Tengah
            var map = L.map('map').setView([-1.4300, 121.4456], 7);

            // Tambahkan tile layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Data kabupaten dari database
            var regencies = @json($regencies);
            console.log('Data Kabupaten:', regencies);

            // Icon untuk marker
            var blueIcon = L.divIcon({
                className: 'custom-div-icon',
                html: "<div style='background-color:#4A90E2;' class='marker-pin'></div>",
                iconSize: [30, 42],
                iconAnchor: [15, 42]
            });

            // Style untuk marker
            var style = document.createElement('style');
            style.textContent = `
        .marker-pin {
            width: 20px;
            height: 20px;
            border-radius: 50% 50% 50% 0;
            transform: rotate(-45deg);
            margin: -10px 0 0 -10px;
        }
        .custom-div-icon {
            background: none;
            border: none;
        }
    `;
            document.head.appendChild(style);

            // Tambahkan marker untuk setiap kabupaten
            regencies.forEach(function(regency) {
                if (regency.latitude && regency.longitude) {
                    var marker = L.marker([regency.latitude, regency.longitude])


                    // Buat konten popup
                    var popupContent = `
                <div class="popup-content">
                    <h4 class="font-bold">${regency.name}</h4>
                    <table class="table table-sm mt-2">
                        <tr>
                            <td>Jumlah Penduduk</td>
                            <td>: ${regency.thematic_data.population.toLocaleString('id-ID')} jiwa</td>
                        </tr>
                        <tr>
                            <td>Tingkat Kemiskinan</td>
                            <td>: ${regency.thematic_data.poverty_rate.toLocaleString('id-ID')}%</td>
                        </tr>
                        <tr>
                            <td>Tingkat Pengangguran</td>
                            <td>: ${regency.thematic_data.unemployment_rate.toLocaleString('id-ID')}%</td>
                        </tr>
                        <tr>
                            <td>Jumlah Taman</td>
                            <td>: ${regency.thematic_data.parks.toLocaleString('id-ID')} unit</td>
                        </tr>
                        <tr>
                            <td>Jumlah Sekolah</td>
                            <td>: ${regency.thematic_data.schools.toLocaleString('id-ID')} unit</td>
                        </tr>
                    </table>
                </div>
            `;

                    // Tambahkan popup ke marker
                    marker.bindPopup(popupContent);
                    marker.addTo(map);
                }
            });
        </script>
    @endpush
@endsection
