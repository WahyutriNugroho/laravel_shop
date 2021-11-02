@extends('layouts.app')

@section('title')
    Store Cart
@endsection

@section('content')
     <!-- Page Content -->
    <section class="page-content page-cart">
      <!-- Breadcrumb -->
      <section
        class="store-breadcrumb"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">
                  <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
              </ol>
            </nav>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb -->
      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table class="table table-borderless table-cart">
                <thead>
                  <tr>
                    <td>Image</td>
                    <td>Name &amp; Seller</td>
                    <td>Price</td>
                    <td>Menu</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 25%">
                      <img
                        src="/images/product-details-1.jpg"
                        class="cart-image w-100"
                        alt=""
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Sofa Ternyaman</div>
                      <div class="product-suubtitle">Saya Suksess</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">$20,901</div>
                      <div class="product-suubtitle">USD</div>
                    </td>
                    <td style="width: 20%">
                      <a href="" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 25%">
                      <img
                        src="/images/product-details-2.jpg"
                        class="cart-image w-100"
                        alt=""
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Ternyaman</div>
                      <div class="product-suubtitle">Saya Suksess</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">$20,901</div>
                      <div class="product-suubtitle">USD</div>
                    </td>
                    <td style="width: 20%">
                      <a href="" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 25%">
                      <img
                        src="/images/product-details-3.jpg"
                        class="cart-image w-100"
                        alt=""
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Sofa Ternyaman</div>
                      <div class="product-suubtitle">Saya Suksess</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">$20,901</div>
                      <div class="product-suubtitle">USD</div>
                    </td>
                    <td style="width: 20%">
                      <a href="" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12"><h2>Shipping Details</h2></div>
          </div>
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="300">
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
                <select name="province" id="province" class="form-control">
                  <option value="West Java">West Java</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" class="form-control">
                  <option value="Jatinangor">Jatinangor</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
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
          <div class="row" data-aos="fade-up" data-aos-delay="400">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12"><h2>Payment Information</h2></div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="500">
            <div class="col-4 col-md-2">
              <div class="product-title">$10</div>
              <div class="product-subtitle">Country Tax</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">$280</div>
              <div class="product-subtitle">Product Insurance</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">$580</div>
              <div class="product-subtitle">Ship to Jakarta</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title text-success">$222,409</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <a href="/success.html" class="btn btn-success mt-4 btn-block"
                >Checkout Now</a
              >
            </div>
          </div>
        </div>
      </section>
      <!-- End Page Content -->
    </section>
@endsection