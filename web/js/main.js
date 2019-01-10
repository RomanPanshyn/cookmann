$(document).ready(function() {
    $(".cart").click(function() {
        if ($(".cart-window").css('display') == 'none')
        {
            $(".cart-window").show();
        }
        else
        {
            $(".cart-window").hide();
        }
    });
    $(".fatimes").click(function() {
        $(".cart-window").hide();
    });
    $("#meal1").click(function() {
        $(".cart-content").append("<div class='cart-meal1'>"+$("#meal-pic1").attr('alt')+" <input type='number' class='meal-count' id='meal1-count' min='1' max='100' value='1' /> "+
            "<span id='meal1-sum'>"+parseInt($("#price1").text(), 10)+"</span> грн; "+"</div>");
        $("#meal1").hide();
        $("#meal-to-cart1").show();
        $("#meal1-fatimes").show();
    });
    $("#meal1-fatimes").click(function() {
        $("#meal1").show();
        $(".cart-meal1").remove();
        $("#meal1-fatimes").hide();
        $("#meal-to-cart1").hide();
    });
    $("#meal2").click(function() {
        $(".cart-content").append("<div class='cart-meal2'>"+$("#meal-pic2").attr('alt')+" <input type='number' class='meal-count' id='meal2-count' min='1' max='100' value='1' /> "+
            "<span id='meal2-sum'>"+parseInt($("#price2").text(), 10)+"</span> грн; "+"</div>");
        $("#meal2").hide();
        $("#meal-to-cart2").show();
        $("#meal2-fatimes").show();
    });
    $("#meal2-fatimes").click(function() {
        $("#meal2").show();
        $(".cart-meal2").remove();
        $("#meal2-fatimes").hide();
        $("#meal-to-cart2").hide();
    });
    $("#meal3").click(function() {
        $(".cart-content").append("<div class='cart-meal3'>"+$("#meal-pic3").attr('alt')+" <input type='number' class='meal-count' id='meal3-count' min='1' max='100' value='1' /> "+
            "<span id='meal3-sum'>"+parseInt($("#price3").text(), 10)+"</span> грн; "+"</div>");
        $("#meal3").hide();
        $("#meal-to-cart3").show();
        $("#meal3-fatimes").show();
    });
    $("#meal3-fatimes").click(function() {
        $("#meal3").show();
        $(".cart-meal3").remove();
        $("#meal3-fatimes").hide();
        $("#meal-to-cart3").hide();
    });
    $("#meal4").click(function() {
        $(".cart-content").append("<div class='cart-meal4'>"+$("#meal-pic4").attr('alt')+" <input type='number' class='meal-count' id='meal4-count' min='1' max='100' value='1' /> "+
            "<span id='meal4-sum'>"+parseInt($("#price4").text(), 10)+"</span> грн; "+"</div>");
        $("#meal4").hide();
        $("#meal-to-cart4").show();
        $("#meal4-fatimes").show();
    });
    $("#meal4-fatimes").click(function() {
        $("#meal4").show();
        $(".cart-meal4").remove();
        $("#meal4-fatimes").hide();
        $("#meal-to-cart4").hide();
    });
    $("#meal5").click(function() {
        $(".cart-content").append("<div class='cart-meal5'>"+$("#meal-pic5").attr('alt')+" <input type='number' class='meal-count' id='meal5-count' min='1' max='100' value='1' /> "+
            "<span id='meal5-sum'>"+parseInt($("#price5").text(), 10)+"</span> грн; "+"</div>");
        $("#meal5").hide();
        $("#meal-to-cart5").show();
        $("#meal5-fatimes").show();
    });
    $("#meal5-fatimes").click(function() {
        $("#meal5").show();
        $(".cart-meal5").remove();
        $("#meal5-fatimes").hide();
        $("#meal-to-cart5").hide();
    });
    $("#meal6").click(function() {
        $(".cart-content").append("<div class='cart-meal6'>"+$("#meal-pic6").attr('alt')+" <input type='number' class='meal-count' id='meal6-count' min='1' max='100' value='1' /> "+
            "<span id='meal6-sum'>"+parseInt($("#price6").text(), 10)+"</span> грн; "+"</div>");
        $("#meal6").hide();
        $("#meal-to-cart6").show();
        $("#meal6-fatimes").show();
    });
    $("#meal6-fatimes").click(function() {
        $("#meal6").show();
        $(".cart-meal6").remove();
        $("#meal6-fatimes").hide();
        $("#meal-to-cart6").hide();
    });
    $("#meal7").click(function() {
        $(".cart-content").append("<div class='cart-meal7'>"+$("#meal-pic7").attr('alt')+" <input type='number' class='meal-count' id='meal7-count' min='1' max='100' value='1' /> "+
            "<span id='meal7-sum'>"+parseInt($("#price7").text(), 10)+"</span> грн; "+"</div>");
        $("#meal7").hide();
        $("#meal-to-cart7").show();
        $("#meal7-fatimes").show();
    });
    $("#meal7-fatimes").click(function() {
        $("#meal7").show();
        $(".cart-meal7").remove();
        $("#meal7-fatimes").hide();
        $("#meal-to-cart7").hide();
    });
    $("#meal8").click(function() {
        $(".cart-content").append("<div class='cart-meal8'>"+$("#meal-pic8").attr('alt')+" <input type='number' class='meal-count' id='meal8-count' min='1' max='100' value='1' /> "+
            "<span id='meal8-sum'>"+parseInt($("#price8").text(), 10)+"</span> грн; "+"</div>");
        $("#meal8").hide();
        $("#meal-to-cart8").show();
        $("#meal8-fatimes").show();
    });
    $("#meal8-fatimes").click(function() {
        $("#meal8").show();
        $(".cart-meal8").remove();
        $("#meal8-fatimes").hide();
        $("#meal-to-cart8").hide();
    });
    $("#meal9").click(function() {
        $(".cart-content").append("<div class='cart-meal9'>"+$("#meal-pic9").attr('alt')+" <input type='number' class='meal-count' id='meal9-count' min='1' max='100' value='1' /> "+
            "<span id='meal9-sum'>"+parseInt($("#price9").text(), 10)+"</span> грн; "+"</div>");
        $("#meal9").hide();
        $("#meal-to-cart9").show();
        $("#meal9-fatimes").show();
    });
    $("#meal9-fatimes").click(function() {
        $("#meal9").show();
        $(".cart-meal9").remove();
        $("#meal9-fatimes").hide();
        $("#meal-to-cart9").hide();
    });
    $("#meal10").click(function() {
        $(".cart-content").append("<div class='cart-meal10'>"+$("#meal-pic10").attr('alt')+" <input type='number' class='meal-count' id='meal10-count' min='1' max='100' value='1' /> "+
            "<span id='meal10-sum'>"+parseInt($("#price10").text(), 10)+"</span> грн; "+"</div>");
        $("#meal10").hide();
        $("#meal-to-cart10").show();
        $("#meal10-fatimes").show();
    });
    $("#meal10-fatimes").click(function() {
        $("#meal10").show();
        $(".cart-meal10").remove();
        $("#meal10-fatimes").hide();
        $("#meal-to-cart10").hide();
    });
    $("#meal11").click(function() {
        $(".cart-content").append("<div class='cart-meal11'>"+$("#meal-pic11").attr('alt')+" <input type='number' class='meal-count' id='meal11-count' min='1' max='100' value='1' /> "+
            "<span id='meal11-sum'>"+parseInt($("#price11").text(), 10)+"</span> грн; "+"</div>");
        $("#meal11").hide();
        $("#meal-to-cart11").show();
        $("#meal11-fatimes").show();
    });
    $("#meal11-fatimes").click(function() {
        $("#meal11").show();
        $(".cart-meal11").remove();
        $("#meal11-fatimes").hide();
        $("#meal-to-cart11").hide();
    });
    $("#meal12").click(function() {
        $(".cart-content").append("<div class='cart-meal12'>"+$("#meal-pic12").attr('alt')+" <input type='number' class='meal-count' id='meal12-count' min='1' max='100' value='1' /> "+
            "<span id='meal12-sum'>"+parseInt($("#price12").text(), 10)+"</span> грн; "+"</div>");
        $("#meal12").hide();
        $("#meal-to-cart12").show();
        $("#meal12-fatimes").show();
    });
    $("#meal12-fatimes").click(function() {
        $("#meal12").show();
        $(".cart-meal12").remove();
        $("#meal12-fatimes").hide();
        $("#meal-to-cart12").hide();
    });
    $(".check-active").click(function() {
        if ($(".active-checkbox").attr('src') === '../web/images/checkmarkempty.png')
        {
            $(".active-checkbox").attr('src', '../web/images/checkmark.png');
            $("#active").val(1);
        }
        else
        {
            $(".active-checkbox").attr('src', '../web/images/checkmarkempty.png');
            $("#active").val(0);
        }
    });
    $(".active-checkbox").click(function() {
        if ($(".active-checkbox").attr('src') === '../web/images/checkmarkempty.png')
        {
            $(".active-checkbox").attr('src', '../web/images/checkmark.png');
            $("#active").val(1);
        }
        else
        {
            $(".active-checkbox").attr('src', '../web/images/checkmarkempty.png');
            $("#active").val(0);
        }
    });
    $(".total-sum").click(function() {
        var meal1sum = parseInt($("#price1").text(), 10) * $("#meal1-count").val();
        $("#meal1-sum").text($("#meal1-count").val()+"*"+$("#price1").text()+"="+meal1sum);
        var meal2sum = parseInt($("#price2").text(), 10) * $("#meal2-count").val();
        $("#meal2-sum").text($("#meal2-count").val()+"*"+$("#price2").text()+"="+meal2sum);
        var meal3sum = parseInt($("#price3").text(), 10) * $("#meal3-count").val();
        $("#meal3-sum").text($("#meal3-count").val()+"*"+$("#price3").text()+"="+meal3sum);
        var meal4sum = parseInt($("#price4").text(), 10) * $("#meal4-count").val();
        $("#meal4-sum").text($("#meal4-count").val()+"*"+$("#price4").text()+"="+meal4sum);
        var meal5sum = parseInt($("#price5").text(), 10) * $("#meal5-count").val();
        $("#meal5-sum").text($("#meal5-count").val()+"*"+$("#price5").text()+"="+meal5sum);
        var meal6sum = parseInt($("#price6").text(), 10) * $("#meal6-count").val();
        $("#meal6-sum").text($("#meal6-count").val()+"*"+$("#price6").text()+"="+meal6sum);
        var meal7sum = parseInt($("#price7").text(), 10) * $("#meal7-count").val();
        $("#meal7-sum").text($("#meal7-count").val()+"*"+$("#price7").text()+"="+meal7sum);
        var meal8sum = parseInt($("#price8").text(), 10) * $("#meal8-count").val();
        $("#meal8-sum").text($("#meal8-count").val()+"*"+$("#price8").text()+"="+meal8sum);
        var meal9sum = parseInt($("#price9").text(), 10) * $("#meal9-count").val();
        $("#meal9-sum").text($("#meal9-count").val()+"*"+$("#price9").text()+"="+meal9sum);
        var meal10sum = parseInt($("#price10").text(), 10) * $("#meal10-count").val();
        $("#meal10-sum").text($("#meal10-count").val()+"*"+$("#price10").text()+"="+meal10sum);
        var meal11sum = parseInt($("#price11").text(), 10) * $("#meal11-count").val();
        $("#meal11-sum").text($("#meal11-count").val()+"*"+$("#price11").text()+"="+meal11sum);
        var meal12sum = parseInt($("#price12").text(), 10) * $("#meal12-count").val();
        $("#meal12-sum").text($("#meal12-count").val()+"*"+$("#price12").text()+"="+meal12sum);
        var a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12;
        a1=a2=a3=a4=a5=a6=a7=a8=a9=a10=a11=a12=0;
        if ($.isNumeric(meal1sum))
        {
            a1 = meal1sum;
        }
        if ($.isNumeric(meal2sum))
        {
            a2 = meal2sum;
        }
        if ($.isNumeric(meal3sum))
        {
            a3 = meal3sum;
        }
        if ($.isNumeric(meal4sum))
        {
            a4 = meal4sum;
        }
        if ($.isNumeric(meal5sum))
        {
            a5 = meal5sum;
        }
        if ($.isNumeric(meal6sum))
        {
            a6 = meal6sum;
        }
        if ($.isNumeric(meal7sum))
        {
            a7 = meal7sum;
        }
        if ($.isNumeric(meal8sum))
        {
            a8 = meal8sum;
        }
        if ($.isNumeric(meal9sum))
        {
            a9 = meal9sum;
        }
        if ($.isNumeric(meal10sum))
        {
            a10 = meal10sum;
        }
        if ($.isNumeric(meal11sum))
        {
            a11 = meal11sum;
        }
        if ($.isNumeric(meal12sum))
        {
            a12 = meal12sum;
        }
        var sum = a1+a2+a3+a4+a5+a6+a7+a8+a9+a10+a11+a12;
        $(".money").text(sum);
        $("#meal").val($(".cart-content").text()+'Итого: '+$(".money").text()+' грн.');
    });
});