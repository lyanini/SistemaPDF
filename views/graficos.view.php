<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Universidad de Playa Ancha</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos -->
  <link href="vendor/css/style.css" rel="stylesheet">
    
  <!-- FontAwesome -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- Google Web Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,300italic,400italic,500italic" rel="stylesheet" type="text/css">

  <!-- Menu CSS -->
  <link href="vendor/css/navslide.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">


</head>

<body>

  <!-- Menu -->
 <nav class="superior navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

    <!-- Barra lateral -->
    <nav class="menu-container" >
      <a href="#" class="menu-btn"><i class="fa fa-bars fa-lg"></i></a>
      <div class="menu-slide">

        <ul class="menu-list">
          <li class="menu-item">
            <a href="cerrar.php"><i class="fa fa-user-times" aria-hidden="true"></i> Cerrar Sesión</a>
          </li>
          <li class="menu-item">
            <a href="contenido.php"><i class="fa fa-archive" aria-hidden="true"></i> Inicio</a>
          </li>
          <li class="menu-item">
            <a href="check.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> Check</a>
          </li>
          <li class="menu-item">
            <a href="#"><i class="fa fa-file" aria-hidden="true"></i> Gestion documentos</a>
          </li>
          <li class="menu-item">
            <a href="ingresar.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Ingresar usuario</a>
          </li>
          <li class="menu-item">
            <a href="graficos.php"><i class="fa fa-pie-chart" aria-hidden="true"></i> Graficos</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- fin barra lateral -->

    <div class="container superior">
      <a href="#" class="navbar-brand">
          <img src="">
      </a>
       <a class="navbar-brand" href="#">
        <img src="img/logo_UPLA.png" width="auto" height="50" alt="">    
      </a>
      </div>
    </nav>

    <!-- Contenido -->
    <div class="container">
      <h1 class="mt-5">Graficos estadisticos</h1>
      <hr class="border">
     
     <?php
      $connect= mysqli_connect("localhost","root","","proyectomultimedia");
      $query="SELECT nombre, count(tipo_archivo) as number FROM archivos WHERE tipo_archivo='Certificados de estudiantes regulares y para egresados' GROUP BY nombre";
      $results =mysqli_query($connect,$query);

      

    ?>
    <div id="donut_single" style="width: 900px; height: 500px;"></div>
        <br>
        
    

    
    <!-- fin contenido -->
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>

    <!-- funcion tabla -->
    <script type="text/javascript" language="javascript" >
      $(document).ready(function() {
        var dataTable = $('#employee-grid').DataTable( {
          "processing": true,
          "serverSide": true,
          "ajax":{
            url :"employee-grid-data.php", // json datasource
            type: "post",  // method  , by default get
            error: function(){  // error handling
              $(".employee-grid-error").html("");
              $("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
              $("#employee-grid_processing").css("display","none");
              
            }
          }
        } );
      } );
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['nombre','number'],
          <?php

          while($row = mysqli_fetch_array($results))

                {
                  echo "['".$row["nombre"]."',".$row["number"]."],";

                }
          ?>
          
        ]);

        var options = {
          
          
        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
        chart.draw(data, options);
      }
    </script>

  </body>

</html>
