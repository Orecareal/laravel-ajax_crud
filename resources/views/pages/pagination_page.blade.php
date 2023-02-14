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