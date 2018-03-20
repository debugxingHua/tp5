/**
 *  权限管理
 */



function auth_department_add(){
    var data = $('#department').serialize();
    var url = 'auth/department/add.html';
    var url2 = 'auth.html';
    send_post(url,data,url2);
    return false;
}