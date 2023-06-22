(function($){
    $(function(){
      
      $(document).ready(function(){
        $('.datepicker').datepicker();
      });
  
      $(document).ready(function(){
        $('select').formSelect();
      });
      $(document).ready(function(){
        $('input.autocomplete').autocomplete({
          data: {
            "Aguascalientes": 'https://i.ibb.co/N2gQRZk/ags.jpg',
            "Baja California Norte": 'https://i.ibb.co/3YPgNv4/BCN.jpg',
            "Baja California Sur": 'https://i.ibb.co/y86xtBR/BCS.png',
            "Campeche":'https://i.ibb.co/k15GW4z/Campeche.jpg',
            "Chiapas": 'https://i.ibb.co/G2LCbVY/Chiapas.jpg',
            "Chihuahua": 'https://i.ibb.co/18S7rnB/Chihuahua.png',
            "Ciudad de México": 'https://i.ibb.co/K9VyjB5/CDMX.png',
            "Coahuila": 'https://i.ibb.co/VS0Wd7t/Coahuila.jpg',
            "Colima": 'https://i.ibb.co/pPkN3fJ/colima.jpg',
            "Durango": 'https://i.ibb.co/kXwpJ6V/durango.png',
            "Estado de México": 'https://i.ibb.co/TLFgxBM/EDOMEX.png',
            "Guanajuato": 'https://i.ibb.co/Kq5qfDm/Guanajuato.png',
            "Guerrero": 'https://i.ibb.co/Kwt81p8/guerrero.jpg',
            "Hidalgo": 'https://i.ibb.co/YLVmjR7/Hidalgo.png',
            "Jalisco": 'https://i.ibb.co/wJXy4Jv/Jalisco.png',
            "Michoacán": 'https://i.ibb.co/qrMt6PZ/Mich.jpg',
            "Morelos": 'https://i.ibb.co/XbmCvL1/Morelos.png',
            "Nayarit": 'https://i.ibb.co/RNjnFJQ/Nayarit.jpg',
            "Nuevo León": 'https://i.ibb.co/P4ZxFJS/NL.png',
            "Oaxaca": 'https://i.ibb.co/dPJnPB9/Oaxaca.png',
            "Puebla": 'https://i.ibb.co/yd80Gtd/Puebla.png',
            "Querétaro": 'https://i.ibb.co/MRjSJTZ/Queretaro.jpg',
            "Quintana Roo": 'https://i.ibb.co/4mFnJBq/QRO.jpg',
            "San Luis Potosí": 'https://i.ibb.co/XC5pt20/SLP.jpg',
            "Sinaloa": 'https://i.ibb.co/fQCxd5K/Sinaloa.png',
            "Sonora": 'https://i.ibb.co/t8nj5Fk/Sonora.png',
            "Tabasco": 'https://i.ibb.co/25ghFgS/Tabasco.png',
            "Tamaulipas": 'https://i.ibb.co/kBJxL0j/Tamaulipas.png',
            "Tlaxcala": 'https://i.ibb.co/hgLwqnN/Tlaxcala.jpg',
            "Veracruz": 'https://i.ibb.co/jhmD0mY/Veracruz.png',
            "Yucatán": 'https://i.ibb.co/nf3XKGg/Yucatan.png',
            "Zacatecas": 'https://i.ibb.co/gdds3q2/Zacatecas.png'
          },
          limit: 10,
  
        });
  
        $('input.estados').autocomplete({
          data: {
            "Azcapotzalco": 'https://i.ibb.co/GPFkvPB/Azcapotzalco.jpg',
            "Álvaro Obregón": 'https://i.ibb.co/1dHm2J7/Alvaro-Obregon.jpg',
            "Benito Juarez": 'https://i.ibb.co/JdHry5P/Benito-Juarez.jpg',
            "Coyoacán": 'https://i.ibb.co/kHzNJbt/Coyoacan.jpg',
            "Cuajimalpa": 'https://i.ibb.co/pfn0dZM/cuajimalpa.jpg',
            "Cuahtémoc": 'https://i.ibb.co/zsrK5pM/Del-Cuauhtemoc.png',
            "Gustavo A. Madero": 'https://i.ibb.co/3S22JQR/avatar-400x400.png',
            "Iztacalco": 'https://i.ibb.co/BNnwyjp/Iztacalco.jpg',
            "Iztapalapa": 'https://i.ibb.co/9WqWLGW/iztapalapa.jpg',
            "Magdalena Contreras": 'https://i.ibb.co/vcMqMm2/Magdalena-Contreras.png',
            "Miguel Hidalgo": 'https://i.ibb.co/TqnJw9y/Miguel-Hidalgo.jpg',
            "Milpa Alta": 'https://i.ibb.co/tKmmK3V/Milpa-Alta.png',
            "Tlahuac": 'https://i.ibb.co/fk2X7gs/Tlahuac.png',
            "Tlalpan": 'https://www.archivo.cdmx.gob.mx/storage/app/uploads/public/57c/7a3/bf5/thumb_42_148_148_0_0_crop.png',
            "Venustiano Carranza": 'https://www.archivo.cdmx.gob.mx/storage/app/uploads/public/57c/7a4/313/thumb_45_148_148_0_0_crop.png',
            "Xochimilco": 'https://www.archivo.cdmx.gob.mx/storage/app/uploads/public/57c/de6/e5b/thumb_299_148_148_0_0_crop.png',
          },
          limit: 10,
  
        });
      });
      $(document).ready(function(){
        $('.timepicker').timepicker();
      });
    }); // end of document ready
  })(jQuery); // end of jQuery name space

  function hasClass(ele,cls) {
    return !!ele.className.match(new RegExp('(\\s|^)'+cls+'(\\s|$)'));
  }
  function esVocal(v){
    if(v=='A' || v=='E' || v=='I' || v=='O' || v=='U'){
      return true;
    }
    return false;
  }
  function esLetra(v){
    return (v>='A' && v<='Z');
  }
  function esNumero(v){
    return (v>='0' && v<='9');
  }

  function muestraContacto(){
    var off = document.getElementById('contenedorContacto');
    off.style.display="block";
    
    var off = document.getElementById('contenedorEvento');
    off.style.display="none";
    
    var off = document.getElementById('botonMostrarContacto');
    off.className+=" "+"disabled";
    var off = document.getElementById('botonMostrarEvento');
    var reg = new RegExp('(\\s|^)'+"disabled"+'(\\s|$)');
    off.className=off.className.replace(reg,' ');
  }

  function muestraEvento(){
    var off = document.getElementById('contenedorContacto');
    off.style.display = "none";
    
    var off = document.getElementById('contenedorEvento');
    off.style.display = "block";

    var off = document.getElementById('botonMostrarEvento');
    off.className+=" "+"disabled";
    var off = document.getElementById('botonMostrarContacto');
    var reg = new RegExp('(\\s|^)'+"disabled"+'(\\s|$)');
    off.className=off.className.replace(reg,' ');
  }

  function activarBoton(){
    var CURP = document.getElementById("helperCURP").innerHTML;
    var Tel = document.getElementById("helperTelefono").innerHTML.substring(0,8);
    var Email = document.getElementById("helperEmail").innerHTML;
    var Estado = document.getElementById("estados").value;
    var Delegacion = document.getElementById("seleccionDelegacion").value;
    var Evento = document.getElementById("eventosTipo").value;
    var DJ = document.getElementById("DJ").value;
    var Lugar =  document.getElementById("Lugar").value;
    var Boton = document.getElementById("MandarForm");
    /*console.log(CURP+","+Tel+","+Email+","+Estado+","+Delegacion+","+Evento+","+DJ+","+Lugar+"\n");
    console.log(CURP=='Correcto');
    console.log(Tel=='Correcto');
    console.log(Email=="Correcto");
    console.log(Estado!="" && Evento!="" && DJ!="" && Lugar!="");*/
    if(CURP=='Correcto' && Tel=="Correcto" && Email=="Correcto" && Estado!="" && Evento!="" && DJ!="" && Lugar!=""){
      if(Estado=="Ciudad de Mexico"){
        if(Delegacion!=""){
          Boton.disabled=false;
          return;
        }else{
          Boton.disabled=true;
        }
      }else{
        Boton.disabled=false;
        return;
      }
    }
    Boton.disabled=true;
    return;
  }



  function evaluaCURP(){
    var clavesEstado = ['AS','BC','BS','CC','CS','CH','DF','CL','CM','DG','GT','GR','HG','JC','MC','MN','MS','NT','NL','OC','PL','QO','QR','SP','SL','SR','TC','TS','TL','VZ','YN','ZS'];
    const existencia = new Set(clavesEstado);
    var dia,mes,ano;
    var ele = document.getElementById("CURP").value;
    var aux=true;
    var mensaje = "";
    var tam = ele.length;
    var limite;
    
    if(tam == 0){
      var veredicto = document.getElementById("helperCURP");
      veredicto.innerHTML='Esperando...';
      veredicto.style.color='black';
      return;
    }
    
    if(tam!=18){
      var veredicto = document.getElementById("helperCURP");
      veredicto.innerHTML="Deben ser 18 caracteres";
      veredicto.style.color='red';
      return;
    }
    if(!esLetra(ele[0])){
      aux=false;
      mensaje="Debe inicar con letra";
    }
    if(!esVocal(ele[1]) && aux){
      aux=false;
      mensaje="2do caracter incorrecto";
    }

    if(!esLetra(ele[2]) && aux){
      aux=false;
      mensaje="3er caracter incorrecto";
    }

    if(!esLetra(ele[3]) && aux){
      aux=false;
      mensaje="4to caracter incorrecto";
    }
    ano = (parseInt(ele[4],10)-'0')*10+parseInt(ele[5],10)-'0';
    mes = (parseInt(ele[6],10)-'0')*10+parseInt(ele[7],10)-'0';
    dia = (parseInt(ele[8],10)-'0')*10+parseInt(ele[9],10)-'0';

    for(var i=4;i<=9;i++){
      if(!esNumero(ele[i])){
        aux=0;
        mensaje="fecha incorrecta";
      }
    }

    if(mes>12){
      aux = 0;
      mensaje="fecha incorrecta";
    }

    if(((mes%2==1 && mes<=7) || (mes%2==0 && mes>=8)) && aux){
      limite=31;
    }else{
      if(mes!=2){
        limite=30;
      }else{
        limite=28;
        if(ano%4==0)limite++;
      }
    }

    if(dia > limite && aux){
      aux=0;
      mensaje="fecha incorrecta";
    }

    if(ele[10]!='H' && ele[10]!='M' && aux){
      aux=0;
      mensaje="Sexo mal puesto";
    }

    if((!esLetra(ele[11]) || !esLetra(ele[12])) && aux){
      alert(":/");
      aux=0;
      mensaje="El codigo de estado no existe";
    }
    
    var muestra = ele[11]+ele[12];

    if(!existencia.has(muestra) && aux){
      aux=0;
      mensaje="El codigo de estado no existe";
    }

    for(i=13;i<=15;i++){
      if((!esLetra(ele[i]) || esVocal([ele[i]]) && aux)){
        aux=0;
        mensaje=(i+1).toString()+"° Caracter incorrecto";
      }
    }

    if(!esLetra(ele[16]) && !esNumero(ele[16]) && aux){
      aux=0;
      mensaje="Homoclave incorrecta";
    }

    if(!esNumero(ele[17]) &&aux){
      aux=0;
      mensaje="Homoclave incorrecta";
    }
    if(aux){
      var veredicto = document.getElementById("helperCURP");
      veredicto.innerHTML='Correcto';
      veredicto.style.color='green';
      activarBoton();
    }else{
      var veredicto = document.getElementById("helperCURP");
      veredicto.innerHTML=mensaje;
      veredicto.style.color='red';
    }
  }

  function evalTelefono(){
    const LadasDeDosDigitos = new Map();
    const LadasDeTresDigitos = new Map();
    LadasDeDosDigitos.set("81","Monterrey, N.L.");
    LadasDeDosDigitos.set("55","Ciudad de México, D.F.");
    LadasDeDosDigitos.set("33","Guadalajara, Jal.");
    
    LadasDeTresDigitos.set("744","Acapulco, Gro.");
    LadasDeTresDigitos.set("449","Aguascalientes, Ags.");
    LadasDeTresDigitos.set("241","Apizaco, Tlax.");
    LadasDeTresDigitos.set("244","Atlixco, Pue.");
    LadasDeTresDigitos.set("981","Campeche, Camp.");
    LadasDeTresDigitos.set("998","Cancún, Camp");
    LadasDeTresDigitos.set("461","Celaya, Gto.");
    LadasDeTresDigitos.set("625","Ciudad Cuahtémoc, Chih.");
    LadasDeTresDigitos.set("938","Ciudad del Carmen, Camp.");
    LadasDeTresDigitos.set("639","Ciudad Delicias, Chih.");
    LadasDeTresDigitos.set("341","Ciudad Guzmán, Jal.");
    LadasDeTresDigitos.set("656","Ciudad Juárez, Chih.");
    LadasDeTresDigitos.set("753","Ciudad Lázaro Cárdenas, Mich.");
    LadasDeTresDigitos.set("831","Ciudad Mante, Tamps.");
    LadasDeTresDigitos.set("644","Ciudad Obregón, Son.");
    LadasDeTresDigitos.set("481","Ciudad Valles, S.L.P.");
    LadasDeTresDigitos.set("834","Ciudad Victoria, Tamps.");
    LadasDeTresDigitos.set("921","Coatzacoalcos, Ver.");
    LadasDeTresDigitos.set("312","Colima, Col.");
    LadasDeTresDigitos.set("271","Córdoba, Ver.");
    LadasDeTresDigitos.set("735","Cuautla, Mor.");
    LadasDeTresDigitos.set("777","Cuernavaca, Mor.");
    LadasDeTresDigitos.set("667","Culiacán, Sin.");
    LadasDeTresDigitos.set("983","Chetumal, Q.ROO.");
    LadasDeTresDigitos.set("614","Chihuahua, Chih.");
    LadasDeTresDigitos.set("747","Chilpancingo, Gro.");
    LadasDeTresDigitos.set("922","Chinameca, Ver.");
    LadasDeTresDigitos.set("618","Durango, Dgo.");
    LadasDeTresDigitos.set("646","Ensenada, B.C.");
    LadasDeTresDigitos.set("493","Fresnillo, Zac.");
    LadasDeTresDigitos.set("473","Guanajuato, Gto.");
    LadasDeTresDigitos.set("622","Guaymas, Son.");
    LadasDeTresDigitos.set("662","Hermosillo, Son.");
    LadasDeTresDigitos.set("462","Irapuato, Gto.");
    LadasDeTresDigitos.set("971","Ixtepec, Oax");
    LadasDeTresDigitos.set("228","Xalapa, Ver");
    LadasDeTresDigitos.set("878","Jiménez, Coah.");
    LadasDeTresDigitos.set("612","La Paz, B.C.S.");
    LadasDeTresDigitos.set("352","La Piedad, Mich.");
    LadasDeTresDigitos.set("474","Lagos de Moreno, Jal.");
    LadasDeTresDigitos.set("477","León, Gto.");
    LadasDeTresDigitos.set("728","Lerma, EDOMEX");
    LadasDeTresDigitos.set("668","Los Mochis, Sin.");
    LadasDeTresDigitos.set("314","Manzanillo, Col.");
    LadasDeTresDigitos.set("868","Matamoros, Tamps.");
    LadasDeTresDigitos.set("733","Mayanalán, Gro.");
    LadasDeTresDigitos.set("669","Mazatlán, Sin.");
    LadasDeTresDigitos.set("999","Mérida, Yuc.");
    LadasDeTresDigitos.set("686","Maxicali, B.C.");
    LadasDeTresDigitos.set("866","Monclovaa, Coah.");
    LadasDeTresDigitos.set("443","Morelia, Mich.");
    LadasDeTresDigitos.set("445","Moroleón, Gto.");
    LadasDeTresDigitos.set("642","Navajoa, Son.");
    LadasDeTresDigitos.set("631","Nogales, Son.");
    LadasDeTresDigitos.set("867","Nuevo Laredo, Tamps.");
    LadasDeTresDigitos.set("951","Oaxaca, Oax.");
    LadasDeTresDigitos.set("392","Ocotlán, Jal.");
    LadasDeTresDigitos.set("272","Orizaba, Ver.");
    LadasDeTresDigitos.set("771","Pachuca, Hgo.");
    LadasDeTresDigitos.set("627","Parral, Chih.");
    LadasDeTresDigitos.set("427","Polotitlán, EDOMEX");
    LadasDeTresDigitos.set("782","Poza Rica, Ver.");
    LadasDeTresDigitos.set("222","Puebla, Pue.");
    LadasDeTresDigitos.set("322","Puerto Vallarta, Jal.");
    LadasDeTresDigitos.set("442","Querétaro, Qro.");
    LadasDeTresDigitos.set("899","Reynosa, Tamps.");
    LadasDeTresDigitos.set("861","Sabinas, Coah.");
    LadasDeTresDigitos.set("353","Sahuayo, Mich.");
    LadasDeTresDigitos.set("464","Salamanca, Gto.");
    LadasDeTresDigitos.set("844","Saltillo, Coah.");
    LadasDeTresDigitos.set("624","San Jose del Cabo, B.C.S.");
    LadasDeTresDigitos.set("444","San Luis Potosí, S.L.P.");
    LadasDeTresDigitos.set("653","San Luis Río Colorado, Son.");
    LadasDeTresDigitos.set("594","San Marcos Nepantla, EDOMEX");
    LadasDeTresDigitos.set("248","San Martín Texmelucan, Pue.");
    LadasDeTresDigitos.set("415","San Miguel de Allende, Gto.");
    LadasDeTresDigitos.set("775","Singuilucan, Hgo.");
    LadasDeTresDigitos.set("833","Tampico, Tamps.");
    LadasDeTresDigitos.set("962","Tapachula, Chis.");
    LadasDeTresDigitos.set("238","Tehuacán, Pue.");
    LadasDeTresDigitos.set("378","Tepatitlan, Jal.");
    LadasDeTresDigitos.set("773","Tepeji del Rio, Hgo.");
    LadasDeTresDigitos.set("311","Tepic, Nay.");
    LadasDeTresDigitos.set("595","Texcoco, EDOMEX");
    LadasDeTresDigitos.set("664","Tijuana B.C.");
    LadasDeTresDigitos.set("246","Tlaxcala, Tlax.");
    LadasDeTresDigitos.set("722","Toluca, EDOMEX");
    LadasDeTresDigitos.set("871","Torreón, Coah.");
    LadasDeTresDigitos.set("783","Tuxpan, Ver.");
    LadasDeTresDigitos.set("961","Tuxtla Gutiérrez, Chis.");
    LadasDeTresDigitos.set("452","Uruapan, Mich.");
    LadasDeTresDigitos.set("229","Veracruz, Ver.");
    LadasDeTresDigitos.set("993","Villahermosa, Tab.");
    LadasDeTresDigitos.set("492","Zacatecas, Zac.");
    LadasDeTresDigitos.set("734","Zacatepec, Mor.");
    LadasDeTresDigitos.set("351","Zamora, Mich.");
    LadasDeTresDigitos.set("755","Zihuatanejo, Gro.");

    var elemento = document.getElementById("telefono").value;
    var aux = 1;
    var mens = "";
    var lada = "";
    if(elemento.length==0){
      var veredicto = document.getElementById("helperTelefono");
      veredicto.innerHTML='Esperando...';
      veredicto.style.color='black';
      return;
    }
    if(elemento.length!=10){
      var veredicto = document.getElementById("helperTelefono");
      veredicto.innerHTML="Deben ser 10 dígitos";
      veredicto.style.color='red';
      return;
    }
    
    lada = elemento[0]+elemento[1];
    if(LadasDeDosDigitos.has(lada)){
      mens = LadasDeDosDigitos.get(lada);
    }else{
      lada+=elemento[2];
      if(LadasDeTresDigitos.has(lada)){
        mens=LadasDeTresDigitos.get(lada);
      }else{
        aux=0;
        mens="Lada incorrecta";
      }
    }

    if(aux){
      var veredicto = document.getElementById("helperTelefono");
      mens = "Correcto: " +mens;
      veredicto.innerHTML=mens;
      veredicto.style.color='green';
      activarBoton();
    }else{
      var veredicto = document.getElementById("helperTelefono");
      veredicto.innerHTML=mens;
      veredicto.style.color='red';
    }

  }

  function evalEmail(){
    var elemento = document.getElementById("email").value;
    let arroba=false;
    let puntoAlgo = false;
    if(elemento.length==0){
      var veredicto = document.getElementById("helperEmail");
      veredicto.innerHTML="Esperando...";
      veredicto.style.color='black';
    }
    for(i=1;i<elemento.length;i++){
      if(elemento[i]=='@' && i<elemento.length-1 && elemento[i+1]!='.')arroba=true;
      if(elemento[i]=='.' && arroba && i<elemento.length-1)puntoAlgo=true;
    }
    if(puntoAlgo && arroba){
      var veredicto = document.getElementById("helperEmail");
      veredicto.innerHTML="Correcto";
      veredicto.style.color='green';
      activarBoton();
    }else{
      var veredicto = document.getElementById("helperEmail");
      veredicto.innerHTML="Correo inválido";
      veredicto.style.color='red';
    }
  }

  function delegacionVisual(){
    var valor = document.getElementById("estados").value;
    if(valor == "Ciudad de Mexico"){
      var off = document.getElementById('delegaciones');
      off.style.display = "block";
    }else{
      var off = document.getElementById('delegaciones');
      off.style.display = "none";
      document.getElementById('seleccionDelegacion').value="";
    }
    activarBoton();
  }



  function fechaMueve(){
    var fechas = document.getElementById("fechaEvento");
    var x = fechas.value;
    var horas = document.getElementById("Hora");
    var DJs = document.getElementById("DJ");
    var lugares = document.getElementById("Lugar");

    var mhoras = document.getElementById("muestraHora");
    var mDJs = document.getElementById("muestraDJ");
    var mlugares = document.getElementById("muestraLugar");

    let correcto = true;
    if(x.length!=12){
      correcto=false;
    }

    let aux = x[0]+x[1]+x[2];
    if(aux!='Jan' &&aux!='Feb' &&aux!='Mar' &&aux!='Apr' &&aux!='May' &&aux!='Jun' &&aux!='Jul' &&aux!='Aug' &&aux!='Sep' &&aux!='Oct' &&aux!='Nov' &&aux!='Dec'){
      correcto = false;
    }
    
    let limite =0;
    if(aux =='Jan' || aux=='Mar' || aux=='May' || aux=='Jul' || aux=='Aug' || aux=='Oct' || aux=='Dec'){
      limite=31;
    }else if(aux=='Apr' || aux=='Jun' ||aux=='Sep' || aux=='Nov'){
      limite=30;
    }else{
      limite=28;
    }

    let mes= aux;
    
    if(x[3]!=' ' || x[6]!=',' || x[7]!=' '){
      correcto=false;
    }
    let anio = "";
    for(let i=8;i<12;i++){
      if(x[i]<'0' || x[i]>'9'){
        correcto=false;
      }
      anio+=x[i];
    }

    let dia = "";
    for(let i=4;i<6;i++){
      if(x[i]<'0' || x[i]>'9'){
        correcto=false;
      }
      dia+=x[i];
    }
    if(correcto && mes=='Feb'){
      let numanio = parseInt(anio);
      let numdia = parseInt(dia);
      if(numanio%4==0 && numanio%100!=0){
        limite++;
      }else if(numanio%100==0 && (numanio/100)%4==0){
        limite++;
      }
      if(numdia>limite)correcto=false;
    }

    if(correcto==false){
      horas.value="";
      mhoras.style.display = "none";
      DJs.value="";
      mDJs.style.display="none";
      lugares.value="";
      mlugares.style.display="none";
    }else{
      mhoras.style.display ="block";
    }
  }
  
  function horaMueve(){
    var horas = document.getElementById("Hora");
    var x = horas.value;
    var DJs = document.getElementById("DJ");
    var lugares = document.getElementById("Lugar");

    var mDJs = document.getElementById("muestraDJ");
    var mlugares = document.getElementById("muestraLugar");
    if(x==""){
      DJs.value="";
      mDJs.style.display="none";
      lugares.value="";
      mlugares.style.display="none";
    }else{
      mDJs.style.display ="block";
      mlugares.style.display="block";
    }
  }
  function cambiaInvitados(){
    var valor = document.getElementById("invitados").value;
    var mod = document.getElementById("numInv");
    mod.innerHTML=valor;
  }