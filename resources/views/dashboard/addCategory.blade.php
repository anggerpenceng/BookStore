@extends('mainTheme.main') 

@section('title' , 'Add New Category')

@section('content')

<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12">
        <div class="g-card">
        <div class="in-card">
        <form action="{{ route('category.store') }}" class="form" method="post">
          {{ csrf_field() }}

          <h5>New Category Here</h5>
          <p class="text-right smallin">Silahkan isi sesuai dengan ketentuan</p>
          <div class="my-3"></div>
          <!-- midle of end -->
          <div class="row">
            <div class="col-lg-5">
              <p class="small40">Category Name<br>
                <span class="small40li">Sesuaikan nama center anda dengan benar</span><br>
                
              </p>
            </div>
            <div class="col-lg-7">
              <div class="form-group">
                <label for="first" class="form-label">ex: Social</label>
                <input id="first" class="form-input" type="text" name="category_name" class="form-control{{ $errors->has('category_name') ? ' is-invalid' : '' }}" />
                @if ($errors->has('category_name'))
                      <span class="small40li" style="color:red">
                          <strong>{{ $errors->first('category_name') }}</strong>
                      </span>
                @endif
              </div>
            </div>
          </div>
          
          <hr class="my-5">
          
          <!-- midle of end -->
          <div class="row">
            <div class="col-lg-5">
              <p class="small40">Category Deskription <br>
                <span class="small40li">Sesuaikan nama center anda dengan benar</span>
              </p>
            </div>

            <div class="col-lg-7">
              <div class="form-group">
                  <label for="second" class="form-label">ex: Social learn about....</label>
                  <textarea id="second" class="form-input" name="c_deskrip" rows="6"></textarea>
              </div>
            </div>
          </div>



          <div class="my-5"></div>

          <div class="row">
            <div class="col-lg-12">
              <button type="submit" class="btn btn-primary">Save The Category</button>
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