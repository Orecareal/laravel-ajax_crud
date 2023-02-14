<!-- Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addProductModalLabel">Add Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="errMsgContainer mb-3"></div>
          <form method="POST" id="addProductForm">
            @csrf
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="price" id="price" placeholder="Product Price">
            </div>
            <br>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success add_product">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
  