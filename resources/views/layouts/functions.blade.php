<script>
    $(document).ready(function(){
        // Add Product
      $(document).on('click', '.add_product', function(e){
        e.preventDefault();
        let name = $('#name').val();
        let price = $('#price').val();
    
        $.ajax({
          url: "{{ route('add.product')}}",
          method: 'POST',
          data: {name:name, price:price},
          success:function(res){
            if(res.status=='success'){
              $('#addProductModal').modal('hide');
              $('#addProductForm')[0].reset();
              $('.table').load(location.href+' .table');
            }
    
          },error:function(err){
            let error = err.responseJSON;
            $.each(error.errors, function(index, value){
              $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
            });
          }
        });
      });
    
    //   Show update product modal
    $(document).on('click', '.updateProductForm', function(){
        let id = $(this).data('id');
        let name = $(this).data('name');
        let price = $(this).data('price');
    
        $('#update_id').val(id);
        $('#update_name').val(name);
        $('#update_price').val(price);
    });
        
    // update product
    $(document).on('click', '.update_product', function(e){
        e.preventDefault();
        let id = $('#update_id').val();
        let name = $('#update_name').val();
        let price = $('#update_price').val();
        
        $.ajax({
            url: "{{ route('update.product')}}",
            method: 'POST',
            data: {update_id:id, update_name:name, update_price:price},
            success:function(res){
            if(res.status=='success'){
                $('#updateProductModal').modal('hide');
                $('#updateProductForm')[0].reset();
                $('.table').load(location.href+' .table');
            }
        
            },error:function(err){
            let error = err.responseJSON;
            $.each(error.errors, function(index, value){
                $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
            });
            }
        });
    });

    // delete product
    $(document).on('click', '.delete_product', function(e){
        e.preventDefault();
        let product_id = $(this).data('id');

        $.ajax({
            url: "{{ route('delete.product')}}",
            method: 'POST',
            data: {id:product_id},
            success:function(res){
                if(res.status=='success'){
                    $('.table').load(location.href+' .table');
                }
            }
        });
    });

    // pagination
    $(document).on('click', '.pagination a', function(e){
      e.preventDefault();
      let page = $(this).attr('href').split('page=')[1];
      product(page);
    })

    function product(page){
      $.ajax({
        url:"/pagination/paginate-data?page="+page,
        success:function(res){
          $('.table-data').html(res);
          //
        }
      });
    }
});
</script>