@extends('layouts.success')

@section('title')
    Store Success 
@endsection

@section('content')
    <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-item-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="/images/success.svg" class="mb-4" alt="" />
              <h2>Transaction Precessed</h2>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Perspiciatis autem, repudiandae voluptatibus iure harum
                voluptate sed quod ex quasi. Expedita reiciendis quidem corporis
                obcaecati dolorem fugit omnis, praesentium sit velit?
              </p>
              <div>
                <a href="/dashboard.html" class="btn btn-success mt-4 w-50"
                  >My Dashboard</a
                >
                <a href="/index.html" class="btn btn-secondary mt-4 w-50"
                  >Go To Shopping</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection