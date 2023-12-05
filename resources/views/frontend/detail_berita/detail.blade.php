@extends('layout.__app')
@section('content')
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>{{ $data->judul_berita }}</h2>
        </div>
    </div>
    <div class="container-md mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="mb-5">
                        <img src="{{ asset('gambarBerita/' . $data->gambar) }}" alt="" class="imgberita">
                        <p>{{ $data->created_at }}</p>
                    </div>
                    <div class="col-10">@php
                        echo $data->isi_berita;
                    @endphp</div>
                    <!-- End Course Item-->
                </div>
            </div>
            {{-- aside --}}
            @include('frontend.__aside')

        </div>

    </div>
    </div>
@endsection
