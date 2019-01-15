function fn_ajax_lay_table_product(){
    //ajax gần giống như một form
    $.ajax({
        url: "http://localhost:81/tmdt/api/dssp.php",// địa chỉ api yêu cầu lấy dữ liệu (action)
        method: "get",//post, get
        dataType: "json", //html, json: dữ liệu nhận về
        contentType: "application/json; charset=utf-8", //header gửi lên
        data:  {} ,//object dữ liệu gửi lên để tương tác với api
        beforeSend: function(){ //trước khi gửi thì làm cái gì đó?
            $("#loading").show();
        },
        success: function (data) { //  nhận về dữ liệu thành công
            var $content = $("#tbl_product tbody");
            var str = "";
            data.forEach(function (value,index) {
                var img = "http://localhost:81/tmdt/"+value.main_photo;
                str+= "<tr>";
                str+= "<td>" + value.product_id+"</td>";
                str+="<td>"+value.name+"</td>";
                str+="<td><img src='"+img+"'/></td>";
                str+="<td>"+value.price+"</td>";
                str+="<td><button onclick='fn_ajax_xoa_san_pham("+value.product_id+")'>Xoa</button></td>";
                str+="<td><button onclick='fn_get_cap_nhat_san_pham("+value.product_id+")'>Edit</button></td>";
                str+= "</tr>";
            });
            $content.html(str);
        },
        error:function(xhr){
            alert("Lỗi: "+xhr.statusText +" - "+xhr.responseText);
        },
        complete: function () { //lỗi hay thành công thì cuối cùng cũng kết thúc
            $("#loading").hide();
        }
    });
}

function fn_ajax_them_san_pham(sanpham){

    $.ajax({
        url: "http://localhost:81/tmdt/api/add.php",// địa chỉ api yêu cầu lấy dữ liệu (action)
        type: 'POST',
        dataType:'json',
        data: (sanpham),//object dữ liệu gửi lên để tương tác với api, JSON.stringify() parse bien javascript ve json string
        beforeSend: function(){ //trước khi gửi thì làm cái gì đó?
            $("#loading").show();
        },
        success: function (data) { //  nhận về dữ liệu thành công
            if(data.ket_qua==true){
                fn_ajax_lay_table_product(); //tai lai table
                $("#modal_them_san_pham").modal("hide"); //dong modal
            }
            alert(data.thong_bao);
        },
        error:function(xhr){
            alert("Lỗi: "+xhr.statusText +" - "+xhr.responseText);
        },
        complete: function () { //lỗi hay thành công thì cuối cùng cũng kết thúc
            $("#loading").hide();
        }
    });
}

function fn_ajax_xoa_san_pham(product_id){
    if(confirm("Ban co chac Xoa?") == false){ //neu bam vao cancel thi khong lam gi ca
        return false; //hoac return;
    }

    $.ajax({
        url: "http://localhost:81/tmdt/api/delete.php",// địa chỉ api yêu cầu lấy dữ liệu (action)
        type: 'GET',
        dataType:'json',
        data: {product_id:product_id},//object dữ liệu gửi lên để tương tác với api, JSON.stringify() parse bien javascript ve json string
        beforeSend: function(){ //trước khi gửi thì làm cái gì đó?
            $("#loading").show();
        },
        success: function (data) { //  nhận về dữ liệu thành công
            if(data.ket_qua==true){
                fn_ajax_lay_table_product(); //tai lai table
                $("#modal_them_san_pham").modal("hide"); //dong modal
            }
            alert(data.thong_bao);
        },
        error:function(xhr){
            alert("Lỗi: "+xhr.statusText +" - "+xhr.responseText);
        },
        complete: function () { //lỗi hay thành công thì cuối cùng cũng kết thúc
            $("#loading").hide();
        }
    });
}

function fn_get_cap_nhat_san_pham(product_id){
    $.ajax({
        url: "http://localhost:81/tmdt/api/get_product_by_id.php",// địa chỉ api yêu cầu lấy dữ liệu (action)
        type: 'GET',
        dataType:'json',
        data: {product_id:product_id},//object dữ liệu gửi lên để tương tác với api, JSON.stringify() parse bien javascript ve json string
        beforeSend: function(){ //trước khi gửi thì làm cái gì đó?
            $("#loading").show();
        },
        success: function (data) { //  nhận về dữ liệu thành công
            $("#form_cap_nhat_san_pham input[name=product_id]").val(data.product_id);
            $("#form_cap_nhat_san_pham input[name=name]").val(data.name);
            $("#form_cap_nhat_san_pham input[name=price]").val(data.price);
            $("#form_cap_nhat_san_pham input[name=main_photo]").val(data.main_photo);
            $("#modal_form_cap_nhat_san_pham").modal("show");
        },
        error:function(xhr){
            alert("Lỗi: "+xhr.statusText +" - "+xhr.responseText);
        },
        complete: function () { //lỗi hay thành công thì cuối cùng cũng kết thúc
            $("#loading").hide();
        }
    });
}


function fn_cap_nhat_san_pham(){

    var name = $("#form_cap_nhat_san_pham input[name=name]").val();
    var product_id = $("#form_cap_nhat_san_pham input[name=product_id]").val();
    var price = $("#form_cap_nhat_san_pham input[name=price]").val();
    var main_photo = $("#form_cap_nhat_san_pham input[name=main_photo]").val();
    var sanpham = {
        'product_id':product_id,
        'name': name,
        'price': price,
        'main_photo': main_photo
    };


    $.ajax({
        url: "http://localhost:81/tmdt/api/update.php",// địa chỉ api yêu cầu lấy dữ liệu (action)
        type: 'POST',
        dataType:'json',
        data: (sanpham),//object dữ liệu gửi lên để tương tác với api, JSON.stringify() parse bien javascript ve json string
        beforeSend: function(){ //trước khi gửi thì làm cái gì đó?
            $("#loading").show();
        },
        success: function (data) { //  nhận về dữ liệu thành công
            if(data.ket_qua==true){
                fn_ajax_lay_table_product(); //tai lai table
                $("#modal_form_cap_nhat_san_pham").modal("hide"); //dong modal
            }
            alert(data.thong_bao);
        },
        error:function(xhr){
            alert("Lỗi: "+xhr.statusText +" - "+xhr.responseText);
        },
        complete: function () { //lỗi hay thành công thì cuối cùng cũng kết thúc
            $("#loading").hide();
        }
    });
}
