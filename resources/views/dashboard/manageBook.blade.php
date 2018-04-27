@extends('mainTheme.main')

@section('title' , 'Manage Books')

@section('content')
<div class="container-fluid">
        <div class="row">
        {{-- the batas konten --}}
        @foreach ($data_book as $item)
        <div class="col-lg-4">
            <div class="g-card">
                <div class="in-card-m">
                  <h1>{{$item->book_name}}
                  </h1>
                  <p class="small40">Available: {{ $item->total_stuff }} product</p>
                  <p class="smallin">{{$item->description}}</p>
                </div>
                <div class="line-card"></div>
                <a href="{{ route('bookStore.edit' , $item->book_id) }}">
                <div class="card-button">Manage</div>
                </a>
              </div>
        </div> {{-- end of conten --}}    
        @endforeach
        </div>
      </div>
@endsection