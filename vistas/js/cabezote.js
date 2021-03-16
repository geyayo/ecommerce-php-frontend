/* =========== CABEZOTE ==========*/

$("#btnCategorias").click(function(){
    if(window.matchMedia("(max-width:767px)").matches){
        $("#menuBuscador").after($("#categorias").slideToggle("fast"))
   }else{
        $("#cabezote").after($("#categorias").slideToggle("fast"))  
   }     
})