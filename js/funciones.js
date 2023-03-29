 function verSubmenu(){
    document.getElementById('sub_flores').style.visibility='visible';
  }
  function ocultarSubmenu(){
    document.getElementById('sub_flores').style.visibility='hidden';
  }
  function verImagen (nombre, imagen){
    carpeta='imagenes/';
    codigo = '<html>\n<head>\n<title>'+nombre+'</title>\n'+
             '<link rel="stylesheet" href="../estilo.css" type="text/css" />\n'+
             '\n</head>\n<body>\n'+
    		 '<div style="text-align:center;"><h2>'+nombre+'</h2>'+
             '\n<img src="'+carpeta+imagen+'" alt="'+nombre+'" title="'+nombre+'" />\n'+
    		 '<p><a href="#" onclick="window.close();">[Cerrar]</a></p>'+
             '</div></body>\n</html>';
    ventana = window.open();
    ventana.document.write(codigo);
    ventana.document.close();
  }
  function cargarMenu(pagina, sub) {
    document.write('<ul id="menu">\n'+
      '<li'+((pagina=='index'&&sub==null) ? ' class="activa"':'')+'><a href="'+((sub!=null) ? '../':'')+'index.html">Inicio</a></li>\n'+
      '<li'+((sub!=null) ? ' class="activa"':'')+' onmouseover="verSubmenu();" onmouseout="ocultarSubmenu();"><a href="'+((sub!=null) ? '../':'')+'flores/index.html">Flores</a>\n'+
      '<ul id="sub_flores">\n'+
      '<li'+((pagina=='exoticas') ? ' class="activa"':'')+'><a href="'+((sub!=null) ? '../':'')+'flores/exoticas.html">Ex&oacute;ticas</a></li>\n'+
      '<li'+((pagina=='ornamentales') ? ' class="activa"':'')+'><a href="'+((sub!=null) ? '../':'')+'flores/ornamentales.html">Ornamentales</a></li>\n'+
      '<li'+((pagina=='plantas') ? ' class="activa"':'')+'><a href="'+((sub!=null) ? '../':'')+'flores/plantas.html">Plantas</a></li>\n'+
      '<li'+((pagina=='silvestres') ? ' class="activa"':'')+'><a href="'+((sub!=null) ? '../':'')+'flores/silvestres.html">Silvestres</a></li>\n'+
      '</ul>\n'+
      '</li>\n'+
      '<li'+((pagina=='nosotros') ? ' class="activa"':'')+'><a href="'+((sub!=null) ? '../':'')+'nosotros.html">Nosotros</a></li>\n'+
      '<li'+((pagina=='contacto') ? ' class="activa"':'')+'><a href="'+((sub!=null) ? '../':'')+'contacto.html">Contacto</a></li>\n'+
      '<li'+((pagina=='noticias') ? ' class="activa"':'')+'><a href="'+((sub!=null) ? '../':'')+'noticias.html">Noticias</a></li>\n'+
      '</ul>\n');
    
  }