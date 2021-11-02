@extends('layouts.dashboard')

@section('title')
    Dashboard Store
@endsection

@section('content')
     <!-- Content -->
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="cotainer-fluid">
              <div class="dasboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">Lihat penghasilan hari ini</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Customer</div>
                        <div class="dashboard-card-subtitle">15,293</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Penghasilan</div>
                        <div class="dashboard-card-subtitle">
                          15,293,331,414
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Transaksi</div>
                        <div class="dashboard-card-subtitle">15,293.313</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transaction</h5>
                    <a
                      href="//"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="/images//dashboard-icon-product-1.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">Marjan Marjan</div>
                          <div class="col-md-3">Marijan</div>
                          <div class="col-md-3">12 Oktober 2021</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <a
                      href=""
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="/images//dashboard-icon-product-1.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">Marjan Marjan</div>
                          <div class="col-md-3">Marijan</div>
                          <div class="col-md-3">12 Oktober 2021</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <a
                      href="/"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="/images//dashboard-icon-product-1.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">Marjan Marjan</div>
                          <div class="col-md-3">Marijan</div>
                          <div class="col-md-3">12 Oktober 2021</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection