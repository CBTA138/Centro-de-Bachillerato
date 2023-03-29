<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/EstiloR.css">
    <meta charset="utf-8">
</head>
   <header>
 <nav>
   <ul id="menu">
    <li><a href="index.html">INICIO</a></li>
      <li><a href="login.php"> LOGIN</a></li>
 </li>
   </ul>
   </nav>
   <br/>
</header>
<style type="text/css">
        li>a{
          background-color:#1b7743 ;
          color: white;
          padding: 10px;
          display: block;
          text-decoration: none;
          min-width: 100px;
          font-weight: bold;
          }
          
            h1 { margin-left: 80px;
              margin-top: 20px;
              font-size: 180%;
              color: black; }
            h2, h3 ¿¿{ font-family: Georgia, Times, serif;
              font-size: 150%;
              color: #1b7743;
              margin-top: 0;
              margin-left: 30px;}
            p {line-height: 1.5em;
              text-indent: 15px; 
              font-weight: bold;
              margin: 35px;}
              img { border: 2px solid #1b7743;
            margin: 10px;
            width: 98%;
            height: 100%;
          }
        *{
          margin: 0;
          padding: 0;
        }
        header{
          font-family: Helvetica;
          width: 1100px;
          margin: 0 auto;
        }
        ul{
          list-style: none;
          position: fixed;
        }
        #menu li>a{
          background-color:#1b7743 ;
          color: white;
          padding: 10px;
          display: block;
          text-decoration: none;
          min-width: 100px;
          font-weight: bold;
        }
        #menu li>a:hover{
          color: #000;
          background-color: #85fda9;
        }
        #menu>li{
          float: left;
          text-align:center;
        }
        #menu>li>ul{
          display: none;
        }
        #menu>li:hover>ul {
          display:block;
        }
        
        a{
         color: #1b7743;
          text-decoration:none;
          display: block;     
          padding: 2px;
          }
          div{
          font-size: 80%;
          text-align: center;
          }
        
        
        .container-bar{
          width: 100%;
          max-width: 50px;
          position: fixed;
          left: 0;
          top: 25%;
        }
        .container-bar a{
          display: block;
          width: 20px;
          height: 20px;
          line-height: 20px;
          text-align: center;
          text-decoration: none;
          font-size: 18px;
          position: relative;
          transition: all 500ms ease;
          color: #fff;
        }
        .container-bar .fa-facebook{
          background: blue;
          border-radius: 0px 5px 0px 0px;
        }
        
        
        .container-bar #title{
          position: absolute;
          background: #1c1c1c;
          padding: 0px 8px;
          height: 30px;
          line-height: 30px;
          text-align: center;
          border-radius: 3px;
          font-size: 15px;
          top:12px; left: 0px;
          transition: all 500ms ease;
          opacity: 0;
          visibility: hidden;
          z-index: -1;
        }
        
        .container-bar #title:after{
          position: absolute;
          content: '';
          border-left: 7px solid transparent;
          border-right: 6px solid #1c1c1c;
          border-top: 7px solid transparent;
          border-bottom: 7px solid transparent;
          right: 100%;
          top: 8px;
        }
        </style>

	<body background="imagenes/logo.jpg">
        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>Iniciar Sesion</h3>
                        <p>Iniciar Sesion</p>
                        <button id="btn__iniciar-sesion">Aceptar</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>Iniciar Sesion</h3>
                        <br><br><br><br><br><br><br>
                        <button id="btn__registrarse">Aceptar</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/acceso.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesion</h2>
                       <input type="text" placeholder="Usuario" name="nombreUsuario" required>
                        <input type="text" placeholder="Contraseña" name="clave" required>
                        <button>Aceptar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_visitas.php" method="POST" class="formulario__register">
                        <h2>Iniciar Sesion</h2>
                       <input type="text" placeholder="Usuario" name="nombreUsuario" required>
                        <input type="text" placeholder="Contraseña" name="clave" required>
                        <button>Aceptar</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="js/script.js"></script>
        <style>
            body{
  margin-top: 20px;
  margin-bottom: 20px;
  background-image: url('imagenes/logo.jpg');
  background-size: 100vw;
  background-attachment: fixed;
}
main{
  width: 100;
  padding: 20px;
  margin: auto;
  margin-top: 100px;
}
.contenedor__todo{
  width: 100%;
  max-width: 800px;
  margin: auto;
  position: relative;
}
.caja__trasera{
  width: 100%;
  padding: 10px 20px;
  display: flex;
  justify-content: center;
  backdrop-filter: blur(10px);
  background-color: rgba(24, 217, 97);
}
.caja__trasera div{
  margin: 100px 40px;
  color: white;
  transition: all 500ms;
}
.caja__trasera div p,
.caja__trasera div button{
   margin-top: 30px;
}
.caja__trasera div h3{
  font-weight: 400;
  font-size: 26px;
}
.caja__trasera button{
  padding: 10px 40px;
  border: 2px solid #fff;
  background: transparent;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  color: white;
  outline: none;
  transition: all 300ms;
}
.caja__trasera button:hover{
  background:#fff ;
  color: #18D961;
}
/*Formularios*/
.contenedor__login-register{
  display: flex;
  align-items: center;
  width: 100%;
  max-width: 380px;
  position: relative;
  top: -185px;
  left: 10px;

}
.contenedor__login-register form{
  width: 100%;
  padding: 80px 20px;
  background: #fff;
  position: absolute;
  border-radius: 20px;
}
.contenedor__login-register form h2{
  font-size: 30px;
  text-align: center;
  margin-bottom: 20px;
  color:#1b7743;
}
.contenedor__login-register form input{
  width: 100%;
  margin-top: 20px;
  padding: 10px;
  border: none;
  background: #F2F2F2;
  font-size: 16px;
  outline: none;
}
.contenedor__login-register form button{
  padding: 10px 40px;
  margin-top: 40px;
  border: none;
  font-size: 14px;
  background: #18D961;
  color: white;
  cursor: pointer;
  outline: none;
}
.formulario__login{
  opacity: 1;
  display: block;
}
.formulario__register{
  display: none;
}
/*Responsive Design*/


header{
  font-family: Helvetica;
  width: 1100px;
  margin: 0 auto;
}
ul{
  list-style: none;
  position: static;
}
#menu li>a{
  background-color:#1b7743;
  color: white;
  padding: 10px;
  display: block;
  text-decoration: none;
  min-width: 100px;
  font-weight: bold;
}
#menu li>a:hover{
  color: #000;
  background-color: #85fda9;
}
#menu>li{
  float: left;
  text-align:center;
}
#menu>li>ul{
  display: none;
}
#menu>li:hover>ul {
  display:block;
}

        </style>

</body>
</html>