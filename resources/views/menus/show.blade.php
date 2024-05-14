@extends('layouts.master')
<body style="background: lightgray">

    <div class="container mt-5 mb-5 pt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/menus/'.$menu->gambar) }}" class="w-50 rounded">
                        <hr>
                        <h4>{{ $menu->nama_menu }}</h4>
                        <p class="tmt-3">
                            {!! $menu->harga !!}
                        </p>
                        <p class="tmt-3">
                            {!! $menu->deskripsi !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
