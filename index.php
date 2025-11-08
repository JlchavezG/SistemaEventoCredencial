<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Evento 2025</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
<!-- navbar del sistema  -->
 <nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a href="#" class="navbar-brand">
            <span> Evento Programacion 2025</span>
        </a>
        <div class="navbar-nav">
            <a href="index.php" class="nav-link">Registro</a>
            <a href="consulta.php" class="nav-link">Consulta</a>
        </div>
    </div>
 </nav>
<!-- formulario y activacion de camara  estructura -->
 <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
        <!-- formulario de registro  -->
        <div class="card p-4 shadow-sm">
            <h2 class="text-center mb-4">Registro de participantes</h2>
            <form action="save_participante" id="registroForm" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo Electronico</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo de participante</label>
                            <select name="tipo" id="tipo" class="form-select" require>
                                <option value="visitante">Visitante</option>
                                <option value="ponente">Ponente</option>
                                <option value="staff">Staff</option>
                            </select>
                        </div>
                        <div class="mb-3" id="invitacion-field" style="display:none;">
                            <label for="invitacion" class="form-label"">Codigo de invitacion (si aplica)</label>
                            <input type="text" name="invitacion" id="invitacion" class="form-control" placeholder="Ejemplo: Staff_2025">
                        </div>
                    </div>
             
                    <div class="col-md-6 text-center">
                        <label class="form-label d-block mb-2"> Toma la foto</label>
                        <div class="webcam-container mb-3">
                            <div id="my_camera" style="width:100%; height:240px"></div>
                        </div>
                        <input type="hidden" name="foto_base64" id="foto_base64">
                        <button type="button" class="btn btn-primary" onclick="take_snapshot()">Tomar fotografia</button>
                        <div id="result" class="mt-3"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success w-100 py-2 mt-3">Registrar y generar la credencial</button>
            </form>
        </div>
        </div>
    </div>
 </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script>
        // forzar la salida en jpg con un prefijo estandar 
        Webcam.set({
            width:260,
            height:180,
            image_format: 'jpeg',
            jpeg_quality: 80
        });
        Webcam.attach('#my_camera');


    </script>
</body>
</html>