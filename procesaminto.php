<?php
function escapar(string $valor): string
{
    return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}

$nombre = htmlspecialchars((string) ($_POST['nombre'] ?? ''), ENT_QUOTES, 'UTF-8');
$correo = htmlspecialchars((string) ($_POST['correo'] ?? ''), ENT_QUOTES, 'UTF-8');

$destinos = is_array($_POST['destinos'] ?? null) ? $_POST['destinos'] : [];
$actividades = is_array($_POST['actividades'] ?? null) ? $_POST['actividades'] : [];
$servicios = is_array($_POST['servicios'] ?? null) ? $_POST['servicios'] : [];

$totalDestinos = count($destinos);
$totalActividades = count($actividades);
$totalServicios = count($servicios);
$totalGeneral = $totalDestinos + $totalActividades + $totalServicios;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de tu paquete</title>
</head>
<body>
    <h1>Resumen del paquete turístico</h1>

    <h2>Datos del cliente</h2>
    <p><strong>Nombre:</strong> <?= $nombre ?></p>
    <p><strong>Correo electrónico:</strong> <?= $correo ?></p>

    <h2>Destinos seleccionados</h2>
    <?php if (!empty($destinos)): ?>
        <ul>
            <?php foreach ($destinos as $destino): ?>
                <li><?= escapar(is_string($destino) ? $destino : '') ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No seleccionaste ningún elemento</p>
    <?php endif; ?>
    <p>Total de destinos: <?= $totalDestinos ?></p>

    <h2>Actividades seleccionadas</h2>
    <?php if (!empty($actividades)): ?>
        <ul>
            <?php foreach ($actividades as $actividad): ?>
                <li><?= escapar(is_string($actividad) ? $actividad : '') ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No seleccionaste ningún elemento</p>
    <?php endif; ?>
    <p>Total de actividades: <?= $totalActividades ?></p>

    <h2>Servicios adicionales seleccionados</h2>
    <?php if (!empty($servicios)): ?>
        <ul>
            <?php foreach ($servicios as $servicio): ?>
                <li><?= escapar(is_string($servicio) ? $servicio : '') ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No seleccionaste ningún elemento</p>
    <?php endif; ?>
    <p>Total de servicios adicionales: <?= $totalServicios ?></p>

    <h2>Totales</h2>
    <p><strong>Total general de elementos seleccionados:</strong> <?= $totalGeneral ?></p>

    <p><a href="formulario.php">Volver al formulario</a></p>
</body>
</html>