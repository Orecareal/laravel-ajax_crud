<!-- Modal -->
<div class="modal fade" id="updateProductModal" tabindex="-1" aria-labelledby="updateProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateProductModalLabel">Update Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="errMsgContainer mb-3"></div>
          <form method="POST" id="updateProductForm">
            @csrf
            <input type="hidden" id="update_id">
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="update_name" id="update_name" placeholder="Product Name">
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="update_price" id="update_price" placeholder="Product Price">
            </div>
            <br>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success update_product">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
  