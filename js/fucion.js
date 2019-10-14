function agregarlocal(datos){


d=datos.split('||');
$('#idpr').val(d[0]);
$('#codigo').val(d[1]);
$('#nombre').val(d[2]);
$('#estado').val(d[3]);
$('#caracterristica').val(d[4]);
$('#cantidad').val(d[5]);
$('#precio').val(d[6]);










}



function actulizarlocal(){
		id=$('#idpr').val();
		codigo=$('#codigo').val();
		nombre=$('#nombre').val();
		estado=$('#estado').val();
		caracterristica=$('#caracterristica').val();
		
		cantidad=$('#cantidad').val();
		
		precio=$('#precio').val();

	cadena= 
		"id=" + id

		"codigo=" + codigo +
		"nombre=" + nombre +
		"estado=" + estado +
		"caracterristica=" + caracterristica +
		
		"cantidad=" + cantidad +
		
"precio=" + precio ;

		



		


}


function admindatos(admin){


a=admin.split('||');
$('#idadmin').val(a[0]);
$('#nombre').val(a[1]);
$('#admin').val(a[2]);
$('#clave').val(a[3]);










}




function usuariosdatos(usuarm){


u=usuarm.split('||');
$('#idusu').val(u[0]);
$('#nombreu').val(u[1]);
$('#apelu').val(u[2]);
$('#cedulau').val(u[3]);
$('#claveu').val(u[4]);
$('#usuariou').val(u[5]);



}



function agregartota(datos){


p=datos.split('||');
$('#idt').val(p[0]);
$('#codigot').val(p[1]);
$('#nombret').val(p[2]);
$('#caracterristicat').val(p[3]);
$('#cantidadt').val(p[4]);
$('#preciot').val(p[5]);










}




function modificarotros(otros){



o=otros.split('||');
$('#idotr').val(o[0]);
$('#nombreotr').val(o[1]);
$('#cantidadotr').val(o[2]);
$('#caracterristicaotr').val(o[3]);
$('#preciootr').val(o[4]);








}




function agregartota(datos){


p=datos.split('||');
$('#idt').val(p[0]);
$('#codigot').val(p[1]);
$('#nombret').val(p[2]);
$('#caracterristicat').val(p[3]);
$('#cantidadt').val(p[4]);
$('#preciot').val(p[5]);
$('#preciocentat').val(p[6]);
$('#categoriat').val(p[7]);
$('#promociont').val(p[8]);
$('#fotot').val(p[9]);








}


function agregapromos(datosp){


p=datosp.split('||');
$('#idp').val(p[0]);
$('#codigop').val(p[1]);
$('#nombrep').val(p[2]);
$('#caracterristicap').val(p[3]);
$('#cantidadp').val(p[4]);
$('#preciop').val(p[5]);










}




function envios(envios){


e=envios.split('||');
$('#codigoe').val(e[0]);
$('#nombree').val(e[1]);
$('#promocione').val(e[2]);
$('#categoriae').val(e[3]);
$('#precioe').val(e[4]);
$('#cantidade').val(e[5]);







}



	
function agregaventas(ventas){

v=ventas.split('||');

$('#facturav').val(v[0]);
$('#fechav').val(v[1]);
$('#codigov').val(v[2]);
$('#nombrev').val(v[3]);
$('#estatudv').val(v[4]);
$('#categoriav').val(v[5]);
$('#precioVentav').val(v[6]);
$('#cantidadv').val(v[7]);
$('#totalv').val(v[8]);

}

	
function compras(compras){

c=compras.split('||');
$('#codigoc').val(c[1]);
$('#nombrec').val(c[2]);
$('#estockc').val(c[4]);
}




