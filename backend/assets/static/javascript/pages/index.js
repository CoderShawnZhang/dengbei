
let tab;
let ttt;
layui.config({
    base: option + "/javascript/pages/"
}).extend({
    "bodyTab":"bodyTab"
});

layui.use(['bodyTab'],function(e){
    tab = layui.bodyTab({
        url:'/site/menu'
    });
    // 添加新窗口
    $("body").on("click", ".layui-nav-tree .layui-nav-child a", function () {
       addTab($(this));
    });
    /*初始化左侧菜单*/
    $(function(){
        console.log('初始化左侧菜单8888');
        $.get(tab.tabConfig.url,function(){
            tab.render();
        });
    });
});

/*点击左侧菜单打开tab页面*/
function addTab(_this) {
    tab.tabAdd(_this);
}


