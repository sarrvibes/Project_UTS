@extends('layout')
@section('content')
<main class="app-main">
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Edit Produk</h3></div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Produk</li>
              </ol>
            </div>
          </div>
          <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
        <!--begin::Row-->
        <div class="row g-4">
            <!--begin::Col-->
            <div class="col-md-12 px-5">
            <!--begin::Quick Example-->
            <div class="card card-primary card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header"><div class="card-title">Edit Produk</div></div>
                <!--end::Header-->
                <!--begin::Form-->
                <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                    @csrf @method('PUT')
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Nama Produk:</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}">
                        </div>
                        <div class="mb-3">
                            <label>Kategori:</label>
                            <input type="text" name="kategori" class="form-control" value="{{ $produk->kategori }}">
                        </div>
                        <div class="mb-3">
                            <label>Harga:</label>
                            <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}">
                        </div>
                        <div class="mb-3">
                            <label>Stok:</label>
                            <input type="number" name="stok" class="form-control" value="{{ $produk->stok }}">
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Quick Example-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
</main>
@endsection