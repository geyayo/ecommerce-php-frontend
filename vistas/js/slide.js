/* ========== VARIABLES ========== */

var item = 0;
var itemPaginacion = $("#paginacion li");

/* ========== PAGINACIÓN ========== */

$("#paginacion li").click(function(){
    item = $(this).attr("item")-1;
    movimientoSlide(item);
})

/* ========== AVANZAR ========== */
function avanzar(){
    if(item == 0){
        item = 3;
    }else{
        item--
    }
    movimientoSlide(item);
}
$("#slide #retroceder").click(function(){
    avanzar();
})

/* ========== RETROCEDER ========== */
$("#slide #avanzar").click(function(){
    if(item == 3){
        item = 0;
    }else{
        item++
    }
    movimientoSlide(item);
})


/* ========== MOVIMIENTO SLIDE ========== */

function movimientoSlide(item){
    $("#slide ul").animate({"left": item * -100 + "%"}, 300)

    $("#paginacion li").css({"opacity":.5})

    $(itemPaginacion[item]).css({"opacity":1})
}

/* ========== INTERVALO ========== */
setInterval(function(){
    avanzar();
},3000)