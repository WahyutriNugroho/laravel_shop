@extends('layouts.dashboard')

@section('title')
    Dashboard Store Product
@endsection

@section('content')
     <!-- Content -->
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="cotainer-fluid">
              <div class="dasboard-heading">
                <h2 class="dashboard-title">Produk Saya</h2>
                <p class="dashboard-subtitle">Daftar Produk Saya</p>
              </div>
              <div class="dashboard-content">
                <div class="row col-12">
                  <a
                    href="/dashboard-product-create.html"
                    class="btn btn-success"
                    >Tambah Produk</a
                  >
                </div>
                <div class="row mt-4">
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      href="/dashboard-products-details.html"
                      class="card card-dashboard-product d-block"
                    >
                      <div class="card-body">
                        <img
                          src="/images/product-cart-1.jpg"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Marjan</div>
                        <div class="product-category">Food</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      href="/dashboard-products-details.html"
                      class="card card-dashboard-product d-block"
                    >
                      <div class="card-body">
                        <img
                          src="/images/product-cart-1.jpg"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Marjan</div>
                        <div class="product-category">Food</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      href="/dashboard-products-details.html"
                      class="card card-dashboard-product d-block"
                    >
                      <div class="card-body">
                        <img
                          src="/images/product-cart-1.jpg"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Marjan</div>
                        <div class="product-category">Food</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      href="/dashboard-products-details.html"
                      class="card card-dashboard-product d-block"
                    >
                      <div class="card-body">
                        <img
                          src="/images/product-cart-1.jpg"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Marjan</div>
                        <div class="product-category">Food</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      href="/dashboard-products-details.html"
                      class="card card-dashboard-product d-block"
                    >
                      <div class="card-body">
                        <img
                          src="/images/product-cart-1.jpg"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Marjan</div>
                        <div class="product-category">Food</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection