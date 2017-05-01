/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function showSubcatalog(obj) {
    var $id = obj.parents('.catalogues').attr('catalogid');
    if ($('#subcatalog_' + $id).hasClass('hidden')) {
        $.ajax(url_subcatalogs + '/' + $id, {
            type: 'json',
            method: 'get',
            success: function (data) {
                $('#subcatalog_' + $id).html(data);
                $('#subcatalog_' + $id).removeClass('hidden');
            },
            error: function (error) {

            }
        });
    } else {
        $('#subcatalog_' + $id).addClass('hidden');
    }
}
function creatSubcatalog(obj) {
    var $id = obj.parents('.new_subcatalogue').attr('catalogid');
    var $name = $('#subname_' + $id).val();
    console.log($id);
    $.ajax(url_catalogs, {
        type: 'json',
        method: 'post',
        data: {
            _token: _token,
            pid: $id,
            name: $name,
            type: 'sub'
        },
        success: function (data) {
        },
        error: function (error) {

        }
    });
}

