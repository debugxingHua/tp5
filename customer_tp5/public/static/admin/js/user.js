/**
 * 用户管理
 */

/**
 *  去用户编辑页面
 */
$('#user_table #user_edit').on('click',function () {
    var user_id = $(this).attr('attr-id');
    window.location.href='/user/edit/'+user_id+'.html';
});
/**
 *  index页面的删除用户
 */
// $('#user_table #user_delete').on('click',function () {
//     var user_id = $(this).attr('attr-id');
//     var data = {"user_id":user_id};
//     var url = '/user/delete.html';
//     var url2 = '/user/index.html';
//     send_post(url,data,url2);
// });

/**
 *  index页面的重置密码为123
 * @param user_id
 */
// $('#user_table #user_set_pw').on('click',function () {
//     var user_id = $(this).attr('attr-id');
//     var data = {"user_id":user_id,"set":"set"};
//     var url = '/user/password.html';
//     var url2 = '/user/index.html';
//     send_post(url,data,url2);
// });

//将用户操作全部放入编辑页面
/**
 *  删除用户
 * @param user_id
 */
function user_delete(user_id) {
    var data = {"user_id":user_id};
    var url = '/user/delete.html';
    var url2 = '/user/index.html';
    send_post(url,data,url2);
}
/**
 *  重置密码
 * @param user_id
 */
function user_set_pw(user_id) {
    var data = {"user_id":user_id,"set":"set"};
    var url = '/user/password.html';
    var url2 = '/user/index.html';
    send_post(url,data,url2);
}
/**
 *  分配用户角色
 * @returns {boolean}
 */
function user_set_role() {
    var data = $('#set_user_role_form').serialize();
    var user_id = $('#set_user_role_form #user_id').val();
    var url = '/auth/set_ur.html';
    var url2 = '/user/edit/'+user_id+'.html';
    send_post(url,data,url2);
    return false;
}