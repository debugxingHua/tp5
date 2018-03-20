/**
 *  退出登录
 */
function logout() {
    window.location.href = '/logout.html';
}

/**
 *  公用的post请求
 * @param url
 * @param data
 * @param url2
 */
function send_post(url,data,url2) {
    $.post(url,data,function (result) {
        console.log(result);
        switch (result.status){
            case 1:
                alert(result.message);
                break;
            case 0:
                alert(result.message);
                window.location.href= url2;
                break;
        }
    },"JSON");
}