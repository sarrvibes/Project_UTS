@extends('layout')
@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6"><h3 class="mb-0">Table Produk</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tabel Produk</li>
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
        <div class="row">
          <div class="col-md-12 px-5">
            <div class="card mb-12 px-5">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama Produk</th>
                      <th>Kategori</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th style="width: 150px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="align-middle">
                      <td>1.</td>
                      <td>Update software</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-warning">Hapus</a>
                      </td>
                    </tr>
                    <tr class="align-middle">
                      <td>2.</td>
                      <td>Clean database</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-warning">Hapus</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-end">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content-->
  </main>
@endsection