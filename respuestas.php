<?php
    $v=[0, 0, 0];
    $v1=['a', 'b', 'c'];
    $v2=[0, 0, 0];
    $v3=[0, 0, 0];
    $ca=0;
    $cb=0;
    $cc=0;
    if(isset($_POST['enviar'])){
        for($i=0; $i<7; $i++){
            $var;
            if($i==0){
                $var=$_POST['r1'];
            }
            if($i==1){
                $var=$_POST['r2'];
            }
            if($i==2){
                $var=$_POST['r3'];
            }
            if($i==3){
                $var=$_POST['r4'];
            }
            if($i==4){
                $var=$_POST['r5'];
            }
            if($i==5){
                $var=$_POST['r6'];
            }
            if($i==6){
                $var=$_POST['r7'];
            }
            
            switch($var){
                case 'a':{
                    $ca++;
                break;}
                case 'b':{
                    $cb++;
                break;}
                case 'c':{
                    $cc++;
                break;}
            }
        }
    }
    $v[0]=$ca;   
    $v[1]=$cb;   
    $v[2]=$cc; 

    $v2[0]=$ca;   
    $v2[1]=$cb;   
    $v2[2]=$cc; 

    $v3[0]=$ca*0;   
    $v3[1]=$cb*2;   
    $v3[2]=$cc*4;

    $suma=$v3[0]+$v3[1]+$v3[2];

    ?>

    <!DOCTYPE html>
    <html>
        <head>
        <link rel="icon" href="img/logo.ico">
        <title>¿Su aire es puro?</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        </head>
        <body>
        <div class="pantalla-resultados" id="pantalla-resultados">
            <h1>RESULTADOS DE LA ENCUESTA DE LA CALIDAD DE AIRE EN TU ZONA</h1>
            <h3><?php
                    for($i=0; $i<3; $i++){
                        echo "Usted eligió la respuesta (".$v1[$i].") ".$v2[$i]." veces"."<br>";
                    }
                    echo"Su puntaje fue de ".$suma;
                    echo"<br><br>";
                 ?>

            </h3>

            <h1><?php 
            if(0<=$suma && $suma<10){
                echo "SU ZONA ESTÁ MUY CONTAMINADA :(";
            }
            if(10<=$suma && $suma<19){
                echo "SU ZONA ESTÁ DENTROS DE LOS PARAMETROS DE UNA ZONA SALUDABLE, PERO PUEDE MEJORAR";
            }
            if(19<=$suma && $suma<29){
                echo "SU ZONA ES MUY SALUDABLE :)";
            }
            ?></h1>

            <h3>Tu puedes ayudar a mejorar la calidad del aire en tu localidad</h3>
            <p1>A continuación te compartimos 10 pequeñas acciones con las que desde la comodidad de tu hogar 
                contribuyes a generar grandes cambios para mejorar la calidad del aire de tu ciudad:</p1><br>
            <p2>1) Evita comprar artículos desechables y plásticos no biodegradables</p2><br>    
            <p3>2) Aplica el poder de las tres Erres: Reduce-Reutiliza-Recicla. </p3><br>
            <p4>3) Un menor consumo siempre derivará en menos contaminación atmosférica de cualquier tipo</p4><br>  
            <p5>4) Trata de consumir alimentos orgánicos o al menos aquellos que no hayan sido sometidos intensivamente a 
                productos agroquímicos (y porqué no, también puedes cultivarlos en la azotea o en algún espacio que tengas en tu casa con composta hecha por ti mismo)</p5><br>    
            <p6>5) Restringe la limpieza en seco</p6><br>
            <p7>6) Evita usar pinturas, aceites y solventes, más aún en días de alta concentración de ozono</p7><br>
            <p8>7) Reduce el consumo de electricidad. Con ello contribuyes a disminuir emisiones de contaminantes y partículas
                 (adicionalmente al ahorro que tendrás en luz)</p8><br>       
            <p9>8) Ten en tu hogar plantas purificadoras de aire (ya sea que las tengas en pequeñas macetas y por qué no, un muro o azotea verde)</p9><br>
            <p10>9) Usa racionalmente los plaguicidas y pospón las tareas de jardinería que requieran el uso de herramientas a gasolina en días de alto nivel de de ozono</p10><br>
            <p11>10) Separa y recicla la basura, la orgánica es excelente abono para tus plantas</p11><br>  
            <br><br>

            <h3>Te invito a que puedas leer e interpretar este cuadro:</h3><br><br>
            <img src="/img/cuafdrro.jpg" alt="" id="imgtraf"><br><br>
            <h3>Tomemos conciencia de toda la contaminacion que generamos, y ayudemos a mejorar la CALIDAD DEL AIRE para preservar nuestro hogar, y para las futuras generaciones</h3>
          <h1>MUCHAS GRACIAS, ESPERO QUE ESTA PAGINA HAYA SERVIDO DE AYUDA :)</h1>
        </div>
        </body>
    </html>
