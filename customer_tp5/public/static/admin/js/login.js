/**
 * 用户的注册登录
 */

/**
 *  发起注册请求
 * @returns {boolean}
 */
function register(){
    var data = $("#register-form").serialize();
    var url = 'check/register.html';
    var url2 = 'login.html';
    send_post(url,data,url2);
    return false;
}
/**
 *  login请求
 * @returns {boolean}
 */
function login() {
    var data = $("#login-form").serialize();
    var url  = 'check/login.html';
    var url2 = 'admin.html';
    send_post(url,data,url2);
    return false;
}