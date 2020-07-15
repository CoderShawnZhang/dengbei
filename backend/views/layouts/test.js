
alert(3333);
layui.use(['element'], function(){
var element = layui.element;

    //监听Tab切换
    element.on('tab(test)', function(data){
        layer.tips('切换了 '+ data.index +'：'+ this.innerHTML, this, {
            tips: 1
        });
    });

});
