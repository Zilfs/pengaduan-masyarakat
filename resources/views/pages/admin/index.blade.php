@extends('layouts.dashboard')

@section('page-contents')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Aduan Hari Ini</h1>

    </div>

    <!-- Content Row -->
    <div class="row">
        @if (session()->has('success'))
            <div class="w-100 alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <!-- Earnings (Monthly) Card Example -->
        @foreach ($data as $item)
            <div class="col-xl-12 col-md-12 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <a class="card-body" href="{{ route('detail-aduan-masyarakat', $item->id) }}"
                        style="text-decoration: none">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h4 mb-0 font-weight-bold text-gray-800">{{ $item->judul }}</div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    {{ $item->status }}</div>
                            </div>
                            <div class="col-auto">
                                <div class="d-flex flex-column">
                                    <img src="{{ Storage::url($item->foto) }}" alt="" class="h-100"
                                        style="width: 75px">
                                    <div class="text-xs  mt-2">
                                        Dilaporkan Oleh : {{ $item->masyarakat->nama }}</div>
                                    <div class="text-xs ">
                                        {{ $item->tanggal_pengaduan }}</div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach


    </div>
@endsection
