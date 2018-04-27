@extends('mainTheme.main') 

@section('title' , 'Edit book')

@section('content')



<div class="container-fluid">
    @foreach ($data_book as $item)
  <div class="row">
      <div class="col-lg-12">
            @if(Session::has('alert-success'))
            <div class="alert alert-success">
                <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
            </div>
            @endif
        <div class="g-card">
        <div class="in-card">
        <form action="{{ route('bookStore.update' , $item->book_id) }}" class="form" method="post">
          {{ csrf_field() }}
          {{ method_field('PUT') }}

          <h5>Manage Book Here</h5>
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
                <input id="first" class="form-input" type="text" name="b_name" value="{{ $item->book_name }}"/>
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
                  <textarea id="second" class="form-input" name="b_deskrip" rows="6">{{ $item->description }}</textarea>
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
                <input id="first" class="form-input" type="number" name="b_price" value="{{ $item->price }}"/>
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
                <input id="first" class="form-input" type="number" name="b_total_stuff" value="{{ $item->total_stuff }}"/>
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
                    @foreach ($data_catalog as $item2)
                        <option value="{{ $item2->category_id }}">{{ $item2->category_name }}</option>
                    @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="my-5"></div>

          <div class="row">
            <div class="col-lg-12">
              <button type="submit" class="btn btn-success">Save The Changes</button>                                
                <form action="{{ route('bookStore.destroy' , $item->book_id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to delete it?')">Delete</button>
                </form>
            </div>
          </div>
          
          <div class="my-5"></div>

        </form>

        </div>
      </div>
      </div>

  </div>
  @endforeach
</div>

@endsection