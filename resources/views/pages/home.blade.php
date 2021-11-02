@extends('layouts.app')

@section('title')
    Store Homepage
@endsection

@section('content')
    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
               <!-- caraousel -->
              <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#storeCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/banner.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/images/banner.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/images/banner.jpg" alt="Third slide">
                  </div>
              </div>
            </div>
            <!-- end caraousel -->
          </div>
        </div>
      </section>

      <section class="store-trend-categories mt-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
              <h5>Trend Categories</h5>
            </div>
          </div>
          <div class="row">
            @php $incrementCategory = 0; @endphp
            @forelse ($categories as $category)
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{$incrementCategory+=100}}">
                <a href="{{route('categories-detail', $category->slug)}}" class="component-categories d-block">
                  <div class="categories-image">
                    <img src={{Storage::url($category->photo)}} alt="" class="w-100">
                    <p class="categories-text">{{$category->name}}</p>
                </div>
              </a>
            </div>
            @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    Tidak ada data
                </div>
            @endforelse
          </div>
        </div>
      </section>

      <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>New Products</h5>
                    </div>
                </div>
                <div class="row">
                    @php $incrementProduct = 0 @endphp
                    @forelse ($products as $product)
                        <div
                        class="col-6 col-md-4 col-lg-3"
                        data-aos="fade-up"
                        data-aos-delay="{{  $incrementProduct += 100 }}"
                        >
                            <a href="{{ route('detail', $product->slug) }}" class="component-products d-block">
                                <div class="products-thumbnail">
                                    <div
                                    class="products-image"
                                    style="
                                        @if($product->galleries)
                                            background-image: url('{{ Storage::url($product->galleries->first()->photos) }}');
                                        @else
                                            background: #fefefe;
                                        @endif
                                    "
                                    ></div>
                                </div>
                                <div class="products-text">
                                    {{  $product->name }}
                                </div>
                                <div class="products-price">
                                    ${{ $product->price }}
                                </div>
                            </a>
                        </div>
                    @empty
                        <div
                                class="col-12 text-center py-5"
                                data-aos="fade-up"
                                data-aos-delay="100"
                            >
                                No Products Found
                            </div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
@endsection