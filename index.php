<?php
    // Obtener la IP local del usuario
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'Desconocida';

    // Verificar si es la IP loopback (::1 o 127.0.0.1)
    if ($ip == '::1' || $ip == '127.0.0.1') {
        // Si la IP es de loopback, mostrar un mensaje adecuado
        $ip = 'Servidor';
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Plataforma de Sistemas Hospital Penco Lirquén. Accede a sistemas internos de gestión y servicios.">
        <meta name="author" content="Hospital Penco Lirquén">
        <title>Hospital Penco Lirquén - Plataforma de Sistemas</title>

        <link rel="icon" href="img/logo.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    </head>

    <body>
        <?php include './navbar.php' ?>
        <?php include './sidebar/open.php'?>

            <div id="sistemas" class="container d-flex flex-column align-items-center justify-content-center">
                <h2 class="my-4 text-center text-gradient">Plataforma de Sistemas</h2>

                <!-- Barra de búsqueda -->
                <div class="row input-group gap-4 mb-3">
                    <input type="text" class="form-control" id="query-sistema" placeholder="Buscar sistemas">
                    <select class="form-control" id="categoria-sistema">
                        <option value="3">Todas</option>
                        <option value="2">Médicas</option>
                        <option value="1">Administrativas</option>
                    </select>
                </div>

                <!-- Contenedor de sistemas generados dinámicamente -->
                <div class="row justify-content-center" id="sistemas-list">
                    <!-- Tarjetas de sistemas serán generadas aquí por JavaScript -->
                </div>
            </div>

        <?php include './sidebar/close.php' ?>
    </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js" integrity="sha512-6BTOlkauINO65nLhXhthZMtepgJSghyimIalb+crKRPhvhmsCdnIuGcVbR5/aQY2A+260iC1OPy1oCdB6pSSwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css");
</style>

<script type="text/javascript">
    $(() => {
        $.ajax({
            url: './api/php/sistemas.php',
            method: 'GET',
            dataType: 'json',
            success: (obj) => {
                console.table(obj);
                document
                    .querySelector('input[type="text"]')
                    .addEventListener('input', () => {
                        const query    = document.querySelector('input[type="text"]').value;
                        const filtered = filterSistemas(obj, query);
                        renderSistemas(filtered);
                    });
            },
        });
    });

    const filterSistemas = (sistemas, query) =>
        sistemas.filter(({ id_sistema, id_tipo, nombre, descripcion, etiquetas }) => {
            const k = parseInt($('#categoria-sistema').val());
            if (k === 3)
                return (
                    nombre.toLowerCase().includes(query)
                        || descripcion.toLowerCase().includes(query)
                        || id_sistema.toString().includes(query)
                );
            else
                return (
                    k === id_tipo &&
                    (nombre.toLowerCase().includes(query)
                        || descripcion.toLowerCase().includes(query)
                        || id_sistema.toLowerCase().includes(query))
                );
        });

    const renderSistemas = (sistemas) => {
        const sistemasList = $('#sistemas-list');
    }
</script>
