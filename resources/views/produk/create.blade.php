@extends('layout')
@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6"><h3 class="mb-0">Form Produk</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Form Produk</li>
            </ol>
          </div>
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
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
              <div class="card-header"><div class="card-title">Tambah Produk</div></div>
              <!--end::Header-->
              <!--begin::Form-->
              <form>
                <!--begin::Body-->
                <div class="card-body">
                  <div class="mb-3">
                    <label for="produk" class="form-label">Nama Produk</label>
                    <input
                      type="text"
                      class="form-control"
                      id="produk"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" />
                  </div>
                  <div class="mb-3">
                    <label for="Harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="Harga" />
                  </div>
                  <div class="mb-3">
                    <label for="Stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="Stok" />
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
    <!--end::App Content-->
  </main>
@endsection