@extends('layouts.auth')

@section('content')
   <div class="page-content page-auth" id="register">
     <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-item-center row-login justify-content-center">
         <div class="col-lg-4">
        <h2>Memulai jual beli dengan lebih mudah</h2>
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="form-group">
            <label for="text">Full Name</label>
            <input id="name" type="text" v-model="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input id="email" type="email" v-model="email" @change="checkforEmailAvalability()" :class="{'is-invalid' : this.email_unavaliable}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">Password </label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="password_confirmation">Password Confirm</label>
            <input id="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
            @error('password_confirmation')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="text">Store</label>
            <p class="text-muted">Apa anda ingin membuka toko</p>
           <div class="custom-control custom-radio custom-control-inline">
             <input type="radio" class="custom-control-input" name="is_store_open" id="openStoreTrue" v-model="is_store_open" :value="true">
             <label for="openStoreTrue" class="custom-control-label">Iya, Boleh</label>
           </div>
           <div class="custom-control custom-radio custom-control-inline">
             <input type="radio" class="custom-control-input" name="is_store_open" id="openStoreFalse" v-model="is_store_open" :value="false">
             <label for="openStoreFalse" class="custom-control-label">Engga, Makasih</label>
           </div>
          </div>
          <div class="form-group" v-if="is_store_open">
            <label for="text">Nama Toko</label>
            <input type="text" v-model="store_name" id="store_name" name="store_name" class="form-control @error('password') is-invalid @enderror" required autocomplete autofocus>
             @error('store_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group" v-if="is_store_open">
            <label for="text">Kategori</label>
            <select name="categories_id" class="form-control">
              <option value="" disabled>Select Kategory</option>
              @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          <button type="submit"class="btn btn-success btn-block" :disabled="this.email_unavaliable" >Sign up Now </button>
          <a href="{{route('login')}}" class="btn btn-secondary btn-block" >Back to Sign In</a>
        </form>
      </div>
      </div>
     
     </div>
      </div>
   </div>

   {{-- template lama --}}
<div class="container" style="display: none" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
        <script src="/vendor/vue/vue.js"></script>
      <script src="https://unpkg.com/vue-toasted"></script>
      <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
      <script>
        Vue.use(Toasted);

        var register = new Vue({
          el: '#register',
          mounted(){
            AOS.init();
            

          },
          methods:{
            checkforEmailAvalability() : function () {
              var self = this;
              // Make a request for a user with a given ID
              axios.get('{{route('api.register.check')}}',{
                params:{
                  email:this.email
                },
              })
                .then(function (response) {
                  if(response.data == 'Avaliable'){
                      self.$toasted.show(
                        'Email anda bisa digunakan. Silahkan lanjut ke step selanjutnya',
                        {
                          position:"top-center" ,
                          className : "rounded",
                          duration: 1000
                        }
                      );
                    self.email_unavaliable = false;
                  }else{
                      self.$toasted.error(
                        'Eror Hayoloho',
                        {
                          position:"top-center" ,
                          className : "rounded",
                          duration: 1000
                        }
                      );
                       self.email_unavaliable = true;
                  }


                  // handle success
                  console.log(response);
                })
            },
          } ,
          data:(
            return {
              name:"Nadia Annisa",
              email:"Nadia.Annisa@gmail.com",
              is_store_open:true,
              store_name:"",
              email_unavaliable : false
           },
          ),
        })
      </script>
@endpush
