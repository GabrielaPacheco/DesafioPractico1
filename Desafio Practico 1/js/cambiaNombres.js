
function cambiaNombres() {
    var x = document.getElementById("periodo").value;
    document.getElementById("lblPeriodo").innerHTML = x; 
    
    if(x=='diario')
        document.getElementById("lblPlazo").innerHTML = 'días';   
    else if(x=='semanal')
        document.getElementById("lblPlazo").innerHTML = 'semanas';   
    else if(x=='quincenal')
        document.getElementById("lblPlazo").innerHTML = 'quincenas';   
    else if(x=='mensual')
        document.getElementById("lblPlazo").innerHTML = 'meses';   
    else
        document.getElementById("lblPlazo").innerHTML = 'años';   
}

function validacion() {      
	//valida fecha
	mes = document.getElementById("mes").value; 
	dia = document.getElementById("dia").value; 
	if ( (dia>28 && mes==2) || (dia>30 && (mes==4 || mes==6 || mes==9 || mes==11)) ) { 
      alert("La fecha no coincide con el mes adecuado."); 
	  document.getElementById("dia").focus();
	  return false; 
    }
}
