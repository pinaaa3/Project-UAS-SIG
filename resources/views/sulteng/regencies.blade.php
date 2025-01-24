@extends('layouts.main')

@section('content')
<div class="container mt-4 mb-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Data Kabupaten/Kota Sulawesi Tengah</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead class="table-light">
                        <tr class="text-center">
                            <th width="8%">No</th>
                            <th width="20%">Nama</th>
                            <th width="12%">Latitude</th>
                            <th width="12%">Longitude</th>
                            <th width="15%">Jumlah Penduduk</th>
                            <th width="15%">Tingkat Kemiskinan</th>
                            <th width="15%">Tingkat Pengangguran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($regencies as $index => $regency)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $regency->name }}</td>
                            <td class="text-center">{{ $regency->latitude }}</td>
                            <td class="text-center">{{ $regency->longitude }}</td>
                            <td class="text-end">{{ number_format($regency->thematicData->first()->population ?? 0) }}</td>
                            <td class="text-end">{{ number_format($regency->thematicData->first()->poverty_rate ?? 0, 2) }}%</td>
                            <td class="text-end">{{ number_format($regency->thematicData->first()->unemployment_rate ?? 0, 2) }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .table > :not(caption) > * > * {
        padding: 0.75rem;
        vertical-align: middle;
    }
    .table > thead > tr > th {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.875rem;
        background-color: #f8f9fa;
    }
    .table > tbody > tr > td {
        font-size: 0.875rem;
    }
    .table-bordered > :not(caption) > * > * {
        border-width: 1px;
    }
</style>
@endpush
@endsection 