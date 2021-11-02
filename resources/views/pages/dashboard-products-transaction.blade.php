@extends('layouts.dashboard')

@section('title')
    Dashboard Store Product
@endsection

@section('content')
      <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="cotainer-fluid">
              <div class="dasboard-heading">
                <h2 class="dashboard-title">Transaksi</h2>
                <p class="dashboard-subtitle">Lihat penghasilan hari ini</p>
              </div>
              <div class="dashboard-content">
                <div class="row"> 
                  <div class="col-12 mt-2">
                    <ul 
                      class="nav nav-pills mb-3"
                      id="pills-tab" 
                      role="tablist"
                    >
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="pills-home-tab"
                          data-toggle="pill"
                          href="#pills-home"
                          role="tab"
                          aria-controls="pills-home"
                          aria-selected="true"
                          >Pembelian Produk</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="pills-profile-tab"
                          data-toggle="pill"
                          href="#pills-profile"
                          role="tab"
                          aria-controls="pills-profile"
                          aria-selected="false"
                          >Penjualan Produk</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div
                        class="tab-pane fade show active"
                        id="pills-home"
                        role="tabpanel"
                        aria-labelledby="pills-home-tab"
                      >
                                            <a
                      href="/{{route('dashboard-transaction-details')}}"
                      class="card card-list d-block mt-2"
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
                    <a
                      href="/{{route('dashboard-transaction-details')}}"
                      class="card card-list d-block mt-2"
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
                     <a
                      href="/{{route('dashboard-transaction-details')}}"
                      class="card card-list d-block mt-2"
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
                      <div
                        class="tab-pane fade"
                        id="pills-profile"
                        role="tabpanel"
                        aria-labelledby="pills-profile-tab"
                      >
                        <a
                      href="/{{route('dashboard-transaction-details')}}"
                      class="card card-list d-block mt-2"
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
        </div>
      </div>
@endsection