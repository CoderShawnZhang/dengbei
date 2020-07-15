
let tab;
let ttt;
layui.config({
    base: option + "/javascript/pages/"
}).extend({
    "bodyTab":"bodyTab"
});

layui.use(['bodyTab'],function(e){
    tab = layui.bodyTab({
        url:'/site/menu',
        top_url:'/site/top'
    });
    // 添加新窗口
    $("body").on("click", ".layui-nav-tree .layui-nav-child a", function () {
       addTab($(this));
    });
    /*初始化左侧菜单*/
    $(function(){
        console.log('初始化左侧菜单8888');
        $.get(tab.tabConfig.url,function(res){
            tab.render(res.menu);
        });
    });
});
$(".topLevelMenus li").click(function () {
    var cur_index = $(this).data('menu');
    var url = tab.tabConfig.top_url;
    if(cur_index == 1){
        url = tab.tabConfig.url;
    }
    $.get(url,function(res){
        tab.render(res.menu);
    });
});
//隐藏左侧导航
$(".hideMenu").click(function () {
    // if ($(".topLevelMenus li.layui-this a").data("url")) {
    //     layer.msg("此栏目状态下左侧菜单不可展开");  //主要为了避免左侧显示的内容与顶部菜单不匹配
    //     return false;
    // }
    $(".layui-layout-admin").toggleClass("showMenu");
    //渲染顶部窗口
    // tab.tabMove();
});

/*点击左侧菜单打开tab页面*/
function addTab(_this) {
    tab.tabAdd(_this);
}


