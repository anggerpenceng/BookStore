@extends('mainTheme.main') 

@section('title' , 'Add New Book')

@section('content')

<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12">
        <div class="g-card">
        <div class="in-card">
        <form action="{{ route('bookStore.store') }}" class="form" method="post">
          {{ csrf_field() }}

          <h5>New Book Here</h5>
          <p class="text-right smallin">Silahkan isi sesuai dengan ketentuan</p>
          <div class="my-3"></div>
          <!-- midle of end -->
          <div class="row">
            <div class="col-lg-5">
              <p class="small40">Book Name<br>
                <span class="small40li">Sesuaikan nama center anda dengan benar</span>
              </p>
            </div>
            <div class="col-lg-7">
              <div class="form-group">
                <label for="first" class="form-label">ex: Learning Laravel</label>
                <input id="first" class="form-input" type="text" name="book_name" class="form-control{{ $errors->has('book_name') ? ' is-invalid' : '' }}" />
                @if ($errors->has('book_name'))
                      <span class="small40li" style="color:red">
                          <strong>{{ $errors->first('book_name') }}</strong>
                      </span>
                @endif
              </div>
            </div>
          </div>
          
          <hr class="my-5">
          
          <!-- midle of end -->
          <div class="row">
            <div class="col-lg-5">
              <p class="small40">Book Deskription <br>
                <span class="small40li">Sesuaikan nama center anda dengan benar</span>
              </p>
            </div>

            <div class="col-lg-7">
              <div class="form-group">
                  <label for="second" class="form-label">ex: this book make....</label>
                  <textarea id="second" class="form-input" name="b_deskrip" rows="6"></textarea>
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
                <input id="first" class="form-input" type="number" name="b_price"/>
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
                <input id="first" class="form-input" type="number" name="b_total_stuff"/>
              </div>
            </div>
          </div>

          <hr class="my-5">

          <!-- midle of end -->
          <div class="row">
            <div class="col-lg-5">
              <p class="small40">Catalog
                <br>
                <span class="small40li">NB: Before using it. Make Category in "Book Category"</span>
              </p>
            </div>

            <div class="col-lg-7">
              <div class="form-group">
                <select class="form-control form-input" name="b_catalog">
                    @foreach ($data_category as $item)
                        <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                    @endforeach
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