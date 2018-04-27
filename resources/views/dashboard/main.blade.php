@extends('mainApp.main') 

@section('title' , 'Add New Book')

@section('content')

<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12">
        <div class="g-card">
        <div class="in-card">
        <form action="{{ route('product.store') }}" class="form" method="post">
          {{ csrf_field() }}

          <h5>Detail Product</h5>
          <p class="text-right smallin">Silahkan isi sesuai dengan ketentuan</p>
          <div class="my-3"></div>
          <!-- midle of end -->
          <div class="row">
            <div class="col-lg-5">
              <p class="small40">Product Name<br>
                <span class="small40li">Sesuaikan nama center anda dengan benar</span>
              </p>
            </div>
            <div class="col-lg-7">
              <div class="form-group">
                <label for="first" class="form-label">ex: Laptop Asus</label>
                <input id="first" class="form-input" type="text" name="name" />
              </div>
            </div>
          </div>
          
          <hr class="my-5">
          
          <!-- midle of end -->
          <div class="row">
            <div class="col-lg-5">
              <p class="small40">Product Deskription <br>
                <span class="small40li">Sesuaikan nama center anda dengan benar</span>
              </p>
            </div>

            <div class="col-lg-7">
              <div class="form-group">
                  <label for="second" class="form-label">ex: laptop dengan kapasitas...</label>
                  <textarea id="second" class="form-input" name="deskrip" rows="6"></textarea>
              </div>
            </div>
          </div>

          <hr class="my-5">

          <!-- midle of end -->
          <div class="row">
            <div class="col-lg-5">
              <p class="small40">Price <br>
                <span class="small40li">Sesuaikan nama center anda dengan benar</span>
              </p>
            </div>

            <div class="col-lg-7">
              <div class="form-group">
                <label for="first" class="form-label">ex: Rp. 30,000</label>
                <input id="first" class="form-input" type="number" name="price"/>
              </div>
            </div>
          </div>

          <hr class="my-5">

          <!-- midle of end -->
          <div class="row">
            <div class="col-lg-5">
              <p class="small40">Total Stuff <br>
                <span class="small40li">Sesuaikan nama center anda dengan benar</span>
              </p>
            </div>

            <div class="col-lg-7">
              <div class="form-group">
                <label for="first" class="form-label">ex: 200 Pcs</label>
                <input id="first" class="form-input" type="number" name="total_stuff"/>
              </div>
            </div>
          </div>

          <hr class="my-5">

          <!-- midle of end -->
          <div class="row">
            <div class="col-lg-5">
              <p class="small40">Catalog
                <br>
                <span class="small40li">Sesuaikan nama center anda dengan benar</span>
              </p>
            </div>

            <div class="col-lg-7">
              <div class="form-group">
                <select class="form-control form-input" name="catalog">
                  <option value="2">Laptop</option>
                  <option value="5">Software</option>
                  <option value="3">Destop PC</option>
                  <option value="1">Accessories</option>
                  <option value="4">Hardware</option>
                </select>
              </div>
            </div>
          </div>

          <div class="my-5"></div>

          <div class="row">
            <div class="col-lg-12">
              <button type="submit" class="btn btn-primary">Save The Product</button>
            </div>
          </div>
          
          <div class="my-5"></div>

        </form>

        </div>
      </div>
      </div>

  </div>
</div>

@endsection