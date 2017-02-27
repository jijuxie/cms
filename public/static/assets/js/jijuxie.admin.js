/**
 * Created by 12156 on 2017/2/23.
 */
$(document).ready(function () {
    //全屏方法(切换)
    function screenBigOpen() {
        if ($.AMUI.fullscreen.enabled) {
            $.AMUI.fullscreen.toggle();
        } else {
            putmsg.animal('本浏览器不支持全屏');
        }
    }
    $('.tpl-big-open-button').click(function () {
        screenBigOpen();
    });
    //菜单点击 iframe切换src
    function changeIframeSrc(url) {
        $('#main_iframe').attr('src', url);

    }
    $(".jijuxie_iframe_menu").click(function () {
        changeIframeSrc($(this).attr('data-change-url'));
    });
});
