$(document).ready(function(){
    $("button").click(function(){
        $.ajax({
            url:"/ajax.php",
            type: "get",
            dataType:"json",
            data: {
                id:2
            },
            success: function (data) {
                $.each(data,function (key,val) {
                    $("div").append("<p>"+val.content+"</p>")
                })
            }
        });
    });
});