/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//en header
function anadirelemento(){
    document.getElementById('nuevo_mensaje').innerHTML='Elemento párrafo modificado';
}


function fobjeto(){
    const x = {
        firstName: "John",
        lastName: "Doe"
    };
    
    document.getElementById('idobjeto').innerHTML=x.firstName+" "+x.lastName;
}



function imprimirArreglo(){
    
    var meses = new Array();
    meses[0]="Enero";
    meses[1]="Febrero";
    meses[2]="Marzo";
   //var meses = ['Enero', 'Febrero', 'Marzo'];
    document.getElementById('mostrar').value = meses.toString();
}




