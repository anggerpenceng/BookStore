@extends('mainTheme.main') 

@section('title' , 'List Book')

@section('content') 
@if(Session::has('alert-success'))
<div class="alert alert-success">
    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
</div>
@endif
<div class="container-fluid">
    <div class="row">
        {{-- the batas konten --}}
        <div class="col-lg-12 g-card">
            <div class="in-card">
            <h5>List Books</h5>
            <div class="my-3"></div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Book Name</th>
                                <th>Description</th>
                                <th>Prices</th>
                                <th>Total_Stuff</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp @foreach ($data_book as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->book_name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>Rp. {{ number_format($item->price) }}</td>
                                <td>{{ $item->total_stuff }} Book</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> {{-- end of conten --}}
    </div>
    </div>
</div>
@endsection