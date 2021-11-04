@extends('layouts.app')

@section('title')
    Store Detail Product 
@endsection

@section('content')
    <!-- Page Content -->
    <section class="page-content page-details">
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
                <li class="breadcrumb-item active " aria-current="page">
                  Product Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb -->
      <!-- Gallery -->
      <section class="store-gallery mb-3" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img
                  :key="photos[activePhoto].id"
                  :src="photos[activePhoto].url"
                  class="w-100 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2" id="slide">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{ active: index == activePhoto }"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Gallery -->
      
      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1>{{$product->name}}</h1>
                <div class="owner">By {{$product->user->store_name}}</div>
                <div class="price">${{number_format($product->price)}}</div>
              </div>
              <div class="col-lg-2" data-aos="fade-in">
                @auth
                <form action="" method="POST" enctype="multipart/form-data">
                  @csrf
                <button  type="submit" class="btn btn-success px-4 text-white btn-block mb-3">
                  Add To Cart
                </button>
                </form>
                @else
                <a href="{{route('login')}}" class="btn btn-success px-4 text-white btn-block mb-3">
                  Sign In To Add
                </a>
                @endauth
              </div>
            </div>
          </div>
        </section>
      </div>
      
      <section class="store-description">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8">
              {{$product->description}}
            </div>
          </div>
        </div>
      </section>

      <div class="section store-review">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8 mt-3 mb-3">
              <h3>Customer Review(3)</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8">
              <ul class="list-unstyled">
                  <li class="media">
                  <img class="rounded-circle mr-3" src="/images/icon-testimonial-1.png">
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Anggela</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div>
                </li> 
                  <li class="media">
                  <img class="rounded-circle mr-3" src="/images/icon-testimonial-2.png">
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Anggela</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div>
                </li> 
                  <li class="media">
                  <img class="rounded-circle mr-3" src="/images/icon-testimonial-3.png">
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Anggela</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div>
                </li> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    <!-- End Page Content -->
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            @foreach($product->galleries as $gallery )
            {
              id: {{ $gallery->id}},
              url: "{{Storage::url($product->photos)}}",
            },
            @endforeach
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
@endpush