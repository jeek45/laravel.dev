
//запрос на действия


 function delete_mes(mes_id)
{
    ajax_request('/destroy', 'delete', mes_id);
}

 function edit_mes(mes_id)
 {
     //выключаем активный textarea
     if( $('textarea').is($('.mess').prop('disabled',false)))
     {
        var elem = $('textarea.mess').prop('disabled',false);
        var id_elem = elem.attr('id');
        elem.prop('disabled',true);
     }

     message_text = $("#edit_text").text();
     $('#save'+mes_id).show();    //показываем "сохранить"
     $('#'+mes_id).prop('disabled',false);  //разблокировали textarea

 }

 function save_mes(mes_id, text)
 {
     if(text=='')
     {  $('#ajax_success').hide();
         $('#ajax_error').show();
         $('.ajax_error').text('Ошибка: пустое сообщение');
     }
     else
        ajax_request('/update', 'put', mes_id, text);
 }
function ajax_request(url, method, mes_id ,text)
{
   var token = $("meta[name = 'csrf-token']").attr("content");
    $.ajax({
    url: url,
    type: "Post",
    headers: {
        'X-CSRF-Token': token
    },
    data: { _method: method, mes_id: mes_id, text: text},
    success: function (data) {
        if(data=='')
        {
            $('#ajax_success').hide();
            $('#ajax_error').show();
            $('.ajax_error').text('Ошибка: Что-то пошло не так');
        }
        else
        {   $('#ajax_error').hide();
            $('#ajax_success').show();
            $('.ajax_success').text(data);
            if(method=='delete')
            $('#row'+mes_id).remove();
            else $('#save'+mes_id).hide();
        }


    },
    error: function (msg) {
        alert('Ошибка связи с сервером');
    }
});
}

//сохранение изменений в сообщении
$(document).ready(function () {
    $("body").on("click", "#save_textarea", function () {
        alert($(this).parent().val());
    });

});