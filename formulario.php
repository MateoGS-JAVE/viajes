<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Personalizar Paquete Turístico</title>
</head>
<body>
    <h1>Personaliza tu paquete turístico</h1>

    <form action="resultados.php" method="POST">
        <h2>Datos del cliente</h2>
        <p>,
            <label>Nombre completo:</label><br>
            <input type="text" name="nombre" required>
        </p>
        <p>
            <label>Correo electrónico:</label><br>
            <input type="email" name="correo" required>
        </p>

        <h2>Destinos turísticos (mantén Ctrl o Cmd para seleccionar varios)</h2>
        <select name="destinos[]" multiple size="7">
            <option value="Cancún">Cancún</option>
            <option value="Puerto Vallarta">Puerto Vallarta</option>
            <option value="Acapulco">Acapulco</option>
            <option value="Los Cabos">Los Cabos</option>
            <option value="Mazatlán">Mazatlán</option>
            <option value="Huatulco">Huatulco</option>
            <option value="Puerto Escondido">Puerto Escondido</option>
        </select>

        <h2>Actividades turísticas</h2>
        <label><input type="checkbox" name="actividades[]" value="Buceo"> Buceo</label><br>
        <label><input type="checkbox" name="actividades[]" value="Paseo en lancha"> Paseo en lancha</label><br>
        <label><input type="checkbox" name="actividades[]" value="Visita a zonas arqueológicas"> Visita a zonas arqueológicas</label><br>
        <label><input type="checkbox" name="actividades[]" value="Senderismo"> Senderismo</label><br>
        <label><input type="checkbox" name="actividades[]" value="Pesca deportiva"> Pesca deportiva</label><br>
        <label><input type="checkbox" name="actividades[]" value="Recorrido gastronómico"> Recorrido gastronómico</label><br>
        <label><input type="checkbox" name="actividades[]" value="Visita a museos"> Visita a museos</label>

        <h2>Servicios adicionales</h2>
        <label><input type="checkbox" name="servicios[]" value="Transporte al aeropuerto"> Transporte al aeropuerto</label><br>
        <label><input type="checkbox" name="servicios[]" value="Desayuno incluido"> Desayuno incluido</label><br>
        <label><input type="checkbox" name="servicios[]" value="Hospedaje de lujo"> Hospedaje de lujo</label><br>
        <label><input type="checkbox" name="servicios[]" value="Seguro de viajero"> Seguro de viajero</label><br>
        <label><input type="checkbox" name="servicios[]" value="Renta de automóvil"> Renta de automóvil</label><br>
        <label><input type="checkbox" name="servicios[]" value="Guía turístico"> Guía turístico</label>

        <p><button type="submit">Generar paquete</button></p>
    </form>
</body>
</html>