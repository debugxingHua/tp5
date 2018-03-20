/**
 *  角色管理
 */

/**
 *  编辑页面
 */
$('#role_table #role_edit').on('click',function () {
    var role_id = $(this).attr('attr-id');
    window.location.href='/role/edit/'+role_id+'.html';
});

/**
 *  删除角色
 */
$('#role_table #role_delete').on('click',function () {
    var role_id = $(this).attr('attr-id');
    var data = {'role_id':role_id,'edit':'edit'};
    var url = '/role/delete.html';
    var url2= '/role/index.html';
    send_post(url,data,url2);
});

$('#role_table_edit #set_role_auth').on('click',function () {
    var menu_id = $(this).attr('attr-id');
    var role_id = $(this).attr('role-id');
    var data = {'menu_id':menu_id,'role_id':role_id};
    var url = '/auth/set_rm.html';
    var url2 = '/role/edit/'+role_id+'.html';
    send_post(url,data,url2);
});

/**
 *  添加角色
 * @returns {boolean}
 */
function role_add() {
    var data = $('#role_add_form').serialize();
    var url = '/role/add.html';
    var url2 = '/role/index.html';
    send_post(url,data,url2);
    return false;
}