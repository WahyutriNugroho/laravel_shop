@extends('layouts.dashboard')

@section('title')
    My Account
@endsection

@section('content')
       <!-- Content -->
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="cotainer-fluid">
              <div class="dasboard-heading">
                <h2 class="dashboard-title">Account</h2>
                <p class="dashboard-subtitle">Akun Saya</p>
              </div>
              <div class="dashboard-content">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <form action="">
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="name">Nama</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    value="Sentra mantap"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="email"> Email</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    value="Sentra@Boot.me"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="addressOne">Address 1</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="addressOne"
                                    name="addressOne"
                                    value="Sentra Boot"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="addressTwo">Address 2</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="addressTwo"
                                    name="addressTwo"
                                    value="Sentra Boot"
                                  />
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="province">Province</label>
                                  <select
                                    name="province"
                                    id="province"
                                    class="form-control"
                                  >
                                    <option value="West Java">West Java</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="city">City</label>
                                  <select
                                    name="city"
                                    id="city"
                                    class="form-control"
                                  >
                                    <option value="Jatinangor">
                                      Jatinangor
                                    </option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="postalCode">Postal Code</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="postalCode"
                                    name="postalCode"
                                    value="908"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="country">Country</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="country"
                                    name="country"
                                    value="Indonesia"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="mobile">Mobile</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="mobile"
                                    name="mobile"
                                    value="+6297877907"
                                  />
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
          </div>
@endsection