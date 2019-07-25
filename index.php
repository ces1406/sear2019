 <?php
    // define('HOST_DB','localhost');
    // define('USUARIO_DB','searAdmin');
    // define('PASS_DB','sear123');
    // define('NOMBRE_DB','searlogbd');
    error_reporting(0);
    $dir = dirname(__FILE__,1);
    $url = filter_input(INPUT_GET,'args',FILTER_SANITIZE_URL);
    $url = explode ('/',$url);
    $destino = array_slice($url,2);
    echo $url[0];
    echo $url[1];
    echo count($url);
    if($url[0]=='listar') {
        //conectarse a la bd
        // $unMysqli=new mysqli(HOST_DB,USUARIO_DB,PASS_DB,NOMBRE_DB);
        // if($unMysqli->connect_error){
        //     die('error('.$unMysqli->connect_errno.'):'.$unMysqli->error);
        // }else {
        //     $unMysqli->set_charset("utf8");
        //     $vecRegistros=null;
        //     if($unMysqli==false){return null;}
        //     $sql="SELECT * FROM searlogbd.logDeUso ORDER BY horaRegistro DESC";
        //     $resultado=$unMysqli->query($sql);
        
        //     for ($numFila=$resultado->num_rows-1;$numFila>=0;$numFila--){
        //         $resultado->data_seek($numFila);
        //         $vecRegistros[$numFila-1]=$resultado->fetch_assoc();
        //     }
        //     $resultado->close();
        //     mysqli_close($unMysqli);
        // };
        // $i=1;
        echo("
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
	        <link href='https://fonts.googleapis.com/css?family=Martel+Sans:200,300,400,600,700,800,900' rel='stylesheet'> 
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
	        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js' integrity='sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut' crossorigin='anonymous'></script>
            <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js' integrity='sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k' crossorigin='anonymous'></script>
            <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' integrity='sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS' crossorigin='anonymous'>
            <title>Log o Registro de uso</title>
        </head>
        <body>
        <nav class='navbar sticky-top navbar-dark bg-dark'> <a class='navbar-brand' href='#'>Log o Registro del uso de dispositivo de iluminaci&oacute;n</a></nav>
        "); 
        echo '<table class="table table-dark"> 
                        <thead class="thead-dark">
                            <tr> 
                                <th scope="col">#</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Modo</th>
                                <th scope="col">Valor R</th>
                                <th scope="col">Valor G</th>
                                <th scope="col">Valor B</th>
                                <th scope="col">Hora seteada</th>
                                <th scope="col">Temperatura</th>
                                <th scope="col">Hora de registro</th>
                            </tr>
                        </thead>
                        <tbody>' ;                           
        // foreach($vecRegistros as $registro){
        //             echo '<tr><th scope="row">'.$i.'</th><td>'.$registro['estado'].'</td><td>'.$registro['modo'].'</td><td>'.$registro['colorRed']
        //                 .'</td><td>'.$registro['colorGreen'].'</td><td>'.$registro['colorBlue'].'</td><td>'.$registro['horaDispo'].'</td><td>'
        //                 .$registro['tempDispo'].'</td><td>'.$registro['horaRegistro'].'</td></tr>';
        //             $i++;
        // }; 
        echo '</tbody></table>';                    
        echo("  
        </body>
        </html>");

    }else if($url[0]=='save'&&(count($url)==8)){
        //conectarse a la bd
        // $unMysqli=new mysqli(HOST_DB,USUARIO_DB,PASS_DB,NOMBRE_DB);
        // if($unMysqli->connect_error){
        //     die('error('.$unMysqli->connect_errno.'):'.$unMysqli->error);
        // }else {
        //     $unMysqli->set_charset("utf8");
        //     $vecRegistros=null;
        //     if($unMysqli==false){return null;}
             $sql="INSERT INTO searlogbd.logDeUso (estado,modo,colorRed,colorGreen,colorBlue,horaDispo,tempDispo,horaRegistro)";
             $sql.=" VALUES ('".$url[1]."','".$url[2]."',".$url[3].",".$url[4].",".$url[5];
             $sql .= ",'".$url[6]."',".$url[7].",CURRENT_TIMESTAMP())";
             echo $sql;
        //     $resultado=$unMysqli->query($sql);        
        //     mysqli_close($unMysqli);
        // };
    }    
?> 
