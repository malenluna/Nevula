

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informar falta</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/resources/css/sidebar.css">
</head>
<body>

<?php include __DIR__ . "/../layouts/sidebarEmpleado.php"; ?>

    <form action="<?= BASE_URL ?>/index.php?slug=GuardarInformarFalta" method="post" enctype="multipart/form-data">

        <header>
            <h2>Informar falta</h2>
            <p>Notificá tu ausencia con anticipación. Quedará registrada y pendiente de aprobación por tu colíder.</p>
        </header>

        <div>
            <p>Tu colíder recibirá una notificación inmediata. Si no responde, el sistema escala la urgencia automáticamente. El motivo médico solo es visible para el jefe — tus compañeros solo ven "No disponible".</p>
        </div>

        <div>
            <div>
                <label for="fecha_ausencia">Fecha de ausencia</label>
                <input type="date" id="fecha_ausencia" name="fecha_ausencia" required>
            </div>

            <div>
                <label for="turno_afectado">Turno afectado</label>

                <select id="turno_afectado" name="turno_afectado" required>
                    <option value="">Seleccione un turno</option>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select>

            </div>

        </div>

        <fieldset>

            <legend>Tipo de falta</legend>

            <label>
                <input type="radio" name="tipo_falta" value="Medica" checked>
                Médica
            </label>

            <label>
                <input type="radio" name="tipo_falta" value="Personal">
                Personal
            </label>

            <label>
                <input type="radio" name="tipo_falta" value="Familiar">
                Familiar
            </label>

            <label>
                <input type="radio" name="tipo_falta" value="Licencia">
                Licencia
            </label>

            <label>
                <input type="radio" name="tipo_falta" value="Estudio">
                Estudio
            </label>

            <label>
                <input type="radio" name="tipo_falta" value="Otro">
                Otro
            </label>

        </fieldset>

        <div>

            <label for="descripcion_motivo">Descripción del motivo</label>

            <textarea
                id="descripcion_motivo"
                name="descripcion_motivo"
                rows="4"
                placeholder="Describí brevemente el motivo">
            </textarea>

        </div>

        <div>

            <label for="certificado_medico">Adjuntar certificado (opcional)</label>

            <input
                type="file"
                id="certificado_medico"
                name="certificado_medico"
                accept=".pdf,.jpg,.jpeg,.png">

        </div>

        <div>

            <label for="conseguir_reemplazo">¿Podés conseguir reemplazo?</label>

            <select id="conseguir_reemplazo" name="conseguir_reemplazo">

                <option value="No_Sabe" selected>No lo sé</option>

                <option value="Si">Sí</option>

                <option value="No">No</option>

            </select>

        </div>

        <div>

            <button type="reset">Cancelar</button>

            <button type="submit">Enviar solicitud</button>

        </div>

    </form>

</body>
</html>