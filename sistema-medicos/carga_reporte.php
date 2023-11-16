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
                                <div class="bg-secondary rounded h-100 p-4">
                                        <h6 class="mb-4">Carga de Reporte</h6>
                                        <form>
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example">
                                                    <option selected>Zonas</option>
                                                    <option value="1">Zona ejemplo 1</option>
                                                    <option value="2">Zona ejemplo 2</option>
                                                    <option value="3">Zona ejemplo 3</option>
                                                </select>
                                                <label for="floatingSelect">Pacientes</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea type="text" class="form-control" id="floatingTextarea"
                                                    placeholder="Reporte" style="height: 200px;"></textarea>
                                                <label for="floatingTextarea">Reporte</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">Cargar</button>
                                        </form>
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