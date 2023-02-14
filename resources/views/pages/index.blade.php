@extends('layouts/base')
@section('content')
@include('layouts/add_modal')
@include('layouts/update_modal')
@include('layouts/functions')
<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
      <div class="col-md-8">
        <h2 class="my-5 text-center">Laravel 9 Ajax CRUD</h2>
        <div class="mb-3">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addProductModal">
            Add Product
          </button>
        </div>
      <div class="table-data">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Product</th>
              <th scope="col">Date added</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item=>$product)
              <tr>
                <th>{{ $item+1 }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->price }}</td>
                <td>
                  <a href="" class="btn btn-warning updateProductForm"
                  data-bs-toggle="modal" data-bs-target="#updateProductModal"
                  data-id="{{ $product->id }}"
                  data-name="{{ $product->name }}"
                  data-price="{{ $product->price }}"
                  >Edit</a>
                  
                  <a href="" class="btn btn-danger delete_product"
                  data-id="{{ $product->id }}"
                  >Delete</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $data->links() }}
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$.ajaxSetup({
  headers:{
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
</script>
@endsection