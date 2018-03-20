// 菜单管理

/**
 *  删除
 */
$('#menu_table #menu_delete').on('click',function () {
    var menu_id = $(this).attr('attr-id');
    var data = {'menu_id':menu_id,'edit':'edit'};
    var url = '/menu/delete.html';
    var url2= '/menu/index.html';
    send_post(url,data,url2);
});

/**
 *  添加
 * @returns {boolean}
 */
function menu_add() {
    var data = $('#menu_add_form').serialize();
    var url = '/menu/add.html';
    var url2 = '/menu/index.html';
    send_post(url,data,url2);
    return false;
}