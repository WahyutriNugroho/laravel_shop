@extends('layouts.dashboard')

@section('title')
    Dashboard Store Add Product
@endsection

@section('content')
    <!-- Content -->
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="cotainer-fluid">
              <div class="dasboard-heading">
                <h2 class="dashboard-title">Tambah Produk</h2>
                <p class="dashboard-subtitle">Tambah produk anda</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="text">Nama Produk</label>
                                <input
                                  type="text"
                                  class="form-control is-valid"
                                  autofocus
                                  name="text"
                                  id="text"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="text">harga</label>
                                <input
                                  type="number"
                                  class="form-control is-valid"
                                  autofocus
                                  name="text"
                                  id="text"
                                />
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="text">Deskripsi</label>
                                <textarea name="editor"></textarea>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="text">Kategori</label>
                                <select name="category" class="form-control">
                                  <option value="" disabled>
                                    Select Kategory
                                  </option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="text">Gambar</label>
                                <input
                                  type="file"
                                  class="form-control is-valid"
                                  autofocus
                                  name="text"
                                  id="text"
                                />
                                <p class="text-muted">Kamu hanya bisa memilih 1 gambar</p>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5"
                              >
                                Simpan
                              </button>
                            </div>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
     
@push('addon-script')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
       CKEDITOR.replace( 'editor' );
    </script>
@endpush