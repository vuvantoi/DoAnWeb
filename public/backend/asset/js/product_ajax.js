$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
// thêm ảnh đại diện sản phẩm

$('#file').on('change',()=>{
var formData = new FormData();
var file = $('#file')[0].files[0];
formData.append('file', file);
var url = $('input[name=upload]').val();
$.ajax({
    url : url,
    processData: false,//illega invocation
    dataType: 'json',
    data: formData,
    method: 'POST',
    contentType: false, // khong hien o preview
    success: function(result){
        if (result.success == true)
        {
            html = '';
            html+= '<img src="'+result.path+'" alt="">';
            $('#input-file-img').html(html)
            $('#input-file-img-hiden').val(result.path)
        }
    }
})
})

//Thêm nhiều ảnh sp
$('#files').on('change',()=>{
    var formData = new FormData()
    var files = $('#files')[0].files
    for (let index = 0; index < files.length; index++) {
        formData.append('files[]',files[index])
    }
    var url = $('input[name=uploads]').val();
    $.ajax({
        url: url,
        method: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        processData: false,
        success:function(result){
            if(result.success = true)
            {
                let url = window.location.hostname
                if(url.includes('minacode.net')) {
                    for (let index = 0; index < result.url.length; index++) {
                        let truePath =  "/public"+result.url[index] ;
                        html =''
                       html+=
                       '<img src="'+truePath+'" alt=""><input type="hidden" value="'+truePath+'" class="product-images" name="product_images[]">'
                       $('#input-file-imgs').html(html)
                    }
                }
                else {
                    html =''
                    for (let index = 0; index < result.paths.length; index++) {
                       html+=
                       '<img src="'+result.paths[index]+'" alt=""><input type="hidden" value="'+result.paths[index]+'" class="product-images" name="images[]">'

                       $('#input-file-imgs').html(html)

                    }
                }

            }
        }
    })
})

//
function removeRow(product_id,url){
    if(confirm('Bạn có chắc chắn xóa không?')){
          $.ajax({
          url: url,
          data: {product_id},
          method: 'GET',
          dataType:'JSON',
          success: function (res){
            if(res.success == true){
                location.reload();
            }
          }
      }
      )
    }
  }