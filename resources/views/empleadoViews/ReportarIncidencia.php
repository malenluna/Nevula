<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reportar incidencia</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/resources/css/sidebar.css">
</head>
<body>

<?php include __DIR__ . "/../layouts/sidebarEmpleado.php"; ?>

    <form action="<?= BASE_URL ?>/index.php?slug=GuardarReportarIncidencia" method="post" enctype="multipart/form-data">

        <header>
            <h2>Reportar incidencia</h2>
            <p>Registrá llegadas tarde, problemas operativos o situaciones que requieran atención del colíder.</p>
        </header>

        <fieldset>

            <legend>Tipo de incidencia</legend>

            <label>
                <input type="radio" name="tipo_incidencia" value="Llegada_Tarde" checked>
                Llegada tarde
            </label>

            <label>
                <input type="radio" name="tipo_incidencia" value="Problema_Operativo">
                Problema operativo
            </label>

            <label>
                <input type="radio" name="tipo_incidencia" value="Error_Sistema">
                Error de sistema
            </label>

            <label>
                <input type="radio" name="tipo_incidencia" value="Urgente">
                Urgente
            </label>

        </fieldset>

        <div>
            <div>
                <label for="fecha_hora_incidente">Fecha y hora del incidente</label>
                <input type="datetime-local" id="fecha_hora_incidente" name="fecha_hora_incidente" required>
            </div>

            <div>
                <label for="turno_curso">Turno en curso</label>
                <input type="text" id="turno_curso" name="turno_curso" value="Jueves 14/03 - 8:00 – 16:00" readonly>
            </div>
        </div>

        <fieldset>

            <legend>Severidad</legend>

            <label>
                <input type="radio" name="severidad" value="Baja" checked>
                Baja
            </label>

            <label>
                <input type="radio" name="severidad" value="Media">
                Media
            </label>

            <label>
                <input type="radio" name="severidad" value="Alta">
                Alta
            </label>

        </fieldset>

        <div>

            <label for="descripcion_detallada">Descripción detallada</label>

            <textarea
                id="descripcion_detallada"
                name="descripcion_detallada"
                rows="4"
                required>
            </textarea>

        </div>

        <div>

            <label for="evidencia">Adjuntar evidencia (opcional)</label>

            <input
                type="file"
                id="evidencia"
                name="evidencia"
                accept=".pdf,.jpg,.jpeg,.png">

        </div>

        <div>

            <button type="reset">Cancelar</button>

            <button type="submit">Enviar reporte</button>

        </div>

    </form>

</body>
</html>