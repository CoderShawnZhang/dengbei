/**
    解决了phpStorm注册问题
    解决了phpStorm输入内容卡顿问题
*/
layui.define(["element"],function(exports){ //提示：模块也可以依赖其它模块，如：layui.define('layer', callback);
    var element = layui.element;
    //插件初始参数
    let obj = function(){
        this.tabConfig = {
            openTabNum: undefined,  //最大可打开窗口数量
            tabFilter: "bodyTab",  //添加窗口的filter
            url: undefined  //获取菜单json地址
        };
    };
    //插件测试函数
    obj.prototype.hello = function(){
        alert('hello world!');
    };
    //插件导航生成函数
    obj.prototype.navBar = function(){
        var ulHtml = '<li class="layui-nav-item">\n' +
            '                    <a class="" href="javascript:;">所有商品<span class="layui-nav-more"></span></a>\n' +
            '                    <dl class="layui-nav-child">\n' +
            '                        <dd><a href="javascript:;" data-url="/site/welcome">列1表一</a></dd>\n' +
            '                        <dd><a href="javascript:;" data-url="/admin/menu">列2表二</a></dd>\n' +
            '                        <dd><a href="javascript:;">列3表三</a></dd>\n' +
            '                        <dd><a href="javascript:;">超链接</a></dd>\n' +
            '                    </dl>\n' +
            '                </li>';

        ulHtml += '<li class="layui-nav-item">\n' +
            '                    <a class="" href="javascript:;">所有商品<span class="layui-nav-more"></span></a>\n' +
            '                    <dl class="layui-nav-child">\n' +
            '                        <dd><a href="javascript:;" data-url="/site/welcome">列1表一</a></dd>\n' +
            '                        <dd><a href="javascript:;">列2表二</a></dd>\n' +
            '                        <dd><a href="javascript:;">列3表三</a></dd>\n' +
            '                        <dd><a href="javascript:;">超链接</a></dd>\n' +
            '                    </dl>\n' +
            '                </li>';
        return ulHtml;
    };
    //将动态生成的HTML导航渲染在左侧列表
    obj.prototype.render = function(){
        $(".layui-side-scroll ul").append(this.navBar());
        element.init();
    };
    var tabIdIndex = 0;
    //动态添加
    obj.prototype.tabAdd = function(_this){
        var that = this;
        var title = '';
        tabIdIndex++;
        title += '<i class="layui-icon layui-icon-refresh tab_refresh" style="padding:3px;margin-right:3px"></i>';
        title += '<span>'+_this.html()+'</span>';
        element.tabAdd("top_nav_raw",{
            title:title,
            content:"<iframe src='"+_this.attr("data-url")+"' data-id='"+tabIdIndex+"'></iframe>",
            id: new Date().getTime()
        });
        element.tabChange('top_nav_raw', that.getLayId(_this.html())); //切换到：用户管理
    };
    //通过title获取lay-id
    obj.prototype.getLayId = function (title) {
        var layId = 0;
        $(".layui-tab-title li").each(function () {
            if ($(this).find("span").html() == title) {
                layId = $(this).attr("lay-id");
            }
        })
        return layId;
    }

    //事件绑定
    $("body").on("click", ".layui-tab-title li i.tab_refresh", function () {
        alert(123123);
        //加载动画 layui-icon-loading
        $(this).addClass('layui-icon-loading layui-anim layui-anim-rotate layui-anim-loop');
        $(".clildFrame .layui-tab-item.layui-show").find("iframe")[0].contentWindow.location.reload();
        $(this).removeClass('layui-icon-loading layui-anim layui-anim-rotate layui-anim-loop');
    })

    /********************************************参数设置******************************************************/
    obj.prototype.set = function (option) {
        let _this = this;
        $.extend(true, _this.tabConfig, option);
        return _this;
    };
    let bodyTab = new obj();
    exports("bodyTab", function (option) {
        return bodyTab.set(option);
    });
});    

