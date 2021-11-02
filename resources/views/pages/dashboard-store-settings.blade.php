@extends('layouts.dashboard')

@section('title')
    Store Settings
@endsection

@section('content')
     <!-- Content -->
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="cotainer-fluid">
              <div class="dasboard-heading">
                <h2 class="dashboard-title">Pengaturan</h2>
                <p class="dashboard-subtitle">bagian Penguturan</p>
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
                                <label for="text">Nama Toko</label>
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
                                <label for="text">Kategori</label>
                                <select name="category" class="form-control">
                                  <option value="" disabled>
                                    Select Kategory
                                  </option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="text">Store</label>
                                <p class="text-muted">
                                  Apa anda ingin membuka toko
                                </p>
                                <div
                                  class="
                                    custom-control
                                    custom-radio
                                    custom-control-inline
                                  "
                                >
                                  <input
                                    type="radio"
                                    class="custom-control-input"
                                    name="is_store_open"
                                    id="openStoreTrue"
                                    value="true"
                                  />
                                  <label
                                    for="openStoreTrue"
                                    class="custom-control-label"
                                    >Buka</label
                                  >
                                </div>
                                <div
                                  class="
                                    custom-control
                                    custom-radio
                                    custom-control-inline
                                  "
                                >
                                  <input
                                    type="radio"
                                    class="custom-control-input"
                                    name="is_store_open"
                                    id="openStoreFalse"
                                    value="false"
                                  />
                                  <label
                                    for="openStoreFalse"
                                    class="custom-control-label"
                                    >Sementara Tutup</label
                                  >
                                </div>
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
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection