<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sistema Codigo Azul</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
<?php 
include("header_medicos.php");
?>
                    <div class="content open">
                        <div class="container-fluid pt-4 px-4">
                            <div class="row g-4 justify-content-center">
                                <div class="col-sm-6 align-self-center">
                                    <a href="carga_reporte.php">
                                        <button class="btn btn-primary w-100" type="button">Cargar reporte</button>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row g-4 justify-content-center">
                                <div class="col-sm-6 align-self-center">
                                    <div class="alert alert-info" role="alert">
                                        Se requiere presencia en la zona "zona ejemplo 1" con el paciente "paciente ejmplo 1"
                                    </div>
                                    <button class="btn btn-outline-primary w-100" type="button">Avisar llegada</button>
                                </div>
                                <div class="col-sm-6 align-self-center">
                                    <div class="alert alert-info" role="alert">
                                        Se requiere presencia en la zona "zona ejemplo 2" con el paciente "paciente ejmplo 2"
                                    </div>
                                    <button class="btn btn-outline-primary w-100" type="button">Avisar llegada</button>
                                </div>
                                <div class="col-sm-6 align-self-center">
                                    <div class="alert alert-info" role="alert">
                                        Se requiere presencia en la zona "zona ejemplo 3" con el paciente "paciente ejmplo 3"
                                    </div>
                                    <button class="btn btn-outline-primary w-100" type="button">Avisar llegada</button>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/chart/chart.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>