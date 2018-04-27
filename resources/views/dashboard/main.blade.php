@extends('mainTheme.main') 

@section('title' , 'BookStore Dashboard')

@section('content')
<div class="container-fluid">
  <div class="row">
    {{-- the batas konten --}}
    <div class="col-lg-12">
      <div class="g-card">
        <div class="in-card">
          <h1 class="display-4">View Product
          </h1>
          <p class="smallin">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto in eaque aliquam obcaecati ipsum fugit laboriosam
            facere id incidunt eligendi est illo possimus, sunt dolorem quis mollitia officiis magnam quos!</p>
        </div>
        <div class="line-card"></div>
        <div class="card-button">Take the Data</div>
      </div>
    </div>{{-- end of conten --}} {{-- the batas konten --}}
    <div class="col-sm-12 col-md-6 col-lg-6">
      <div class="g-card">
        <div class="in-card">
          <h1 class="display-4">Add New
          </h1>
          <p class="smallin">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto in eaque aliquam obcaecati ipsum fugit laboriosam
            facere id incidunt eligendi est illo possimus, sunt dolorem quis mollitia officiis magnam quos!</p>
        </div>
        <div class="line-card"></div>
        <div class="card-button">Take the Data</div>
      </div>
    </div> {{-- end of conten --}} {{-- the batas konten --}}
    <div class="col-sm-12 col-md-6 col-lg-6">
      <div class="g-card">
        <div class="in-card">
          <h1 class="display-4">Manage Product
          </h1>
          <p class="smallin">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto in eaque aliquam obcaecati ipsum fugit laboriosam
            facere id incidunt eligendi est illo possimus, sunt dolorem quis mollitia officiis magnam quos!</p>
        </div>
        <div class="line-card"></div>
        <div class="card-button">Take the Data</div>
      </div>
    </div> {{-- end of conten --}} {{-- the batas konten --}}
    <div class="col-lg-12">
      <div class="g-card">
        <div class="in-card">
          <h1 class="display-4">Manage Admin
          </h1>
          <p class="smallin">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto in eaque aliquam obcaecati ipsum fugit laboriosam
            facere id incidunt eligendi est illo possimus, sunt dolorem quis mollitia officiis magnam quos!</p>
        </div>
        <div class="line-card"></div>
        <div class="card-button">Take the Data</div>
      </div>
    </div> {{-- end of conten --}}
  </div>
</div>
@endsection