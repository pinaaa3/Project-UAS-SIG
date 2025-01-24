@extends('layouts.main')

@section('content')
    <div class="container mt-4 mb-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Data Tematik Sulawesi Tengah</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="thematicTable">
                    <thead>
                        <tr>
                            <th>Kabupaten/Kota</th>
                            <th>Jumlah Penduduk</th>
                            <th>Tingkat Kemiskinan</th>
                            <th>Tingkat Pengangguran</th>
                            <th>Jumlah Taman</th>
                            <th>Jumlah Sekolah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($thematicData as $data)
                            <tr>
                                <td>{{ $data->regency->name }}</td>
                                <td>{{ number_format($data->population) }}</td>
                                <td>{{ number_format($data->poverty_rate, 2) }}%</td>
                                <td>{{ number_format($data->unemployment_rate, 2) }}%</td>
                                <td>{{ number_format($data->parks) }}</td>
                                <td>{{ number_format($data->schools) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#thematicTable').DataTable({
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json'
                    }
                });
            });
        </script>
    @endpush
@endsection
