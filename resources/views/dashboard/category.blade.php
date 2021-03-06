@extends('mainTheme.main') 

@section('title' , 'Category')

@section('content') @if(Session::has('alert-success'))
<div class="alert alert-success">
    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
</div>
@endif
<div class="container-fluid">
    <div class="row">
        {{-- the batas konten --}}
        <div class="col-lg-12 g-card">
            <div class="in-card">
            <h5>List Product</h5>
            <a href="{{ route('category.create') }}">
                <button type="button" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Add Category</button>
            </a>
            <div class="my-3"></div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp @foreach ($data_category as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->category_name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <form action="{{ route('category.destroy' , $item->category_id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to delete it?')">Delete</button>
                                    </form>
                                </td>
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