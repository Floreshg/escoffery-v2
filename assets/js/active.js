$('a div.fecha-abajo').click( function (){
    borraActivos();
$(this).addClass("activos");
});
        
function borraActivos(){
$('a div.fecha-abajo').each( function (){
$(this).removeClass("activos");
});
}
      


$('a div span.flecha.').click( function (){
    borraActivos();
$(this).addClass("activos ");
});
        
function borraActivos(){
$('a div span.flecha').each( function (){
$(this).removeClass("activos");
});
}



$('div .selector').click( function (){
    borraActivos();
$(this).addClass("seleccionada");
});
        
function borraActivos(){
$('div .selector').each( function (){
$(this).removeClass("seleccionada");
});
}