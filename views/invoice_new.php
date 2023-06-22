<?php
require_once "./functions/main.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

//Consultando los datos del contribuyente en la BD
$contributor_data = connect();
$contributor_data = $contributor_data->query("SELECT * FROM contributors WHERE id='$id' ");
$data = $contributor_data->fetch();
$contributor_data = null;

//Determinando el siguiente ID para mostrarlo en Recibo
$proximoId = connect();
$proximoId = $proximoId->query("SELECT id FROM invoices ORDER BY id DESC LIMIT 1");
$proxID = $proximoId->fetchColumn() + 1;
?>

<div class="form-rest">
    <div class="text-center loader"><img src="./assets/img/loader.gif" alt=""></div>
</div>

<?php
if (isset($data['direccion']) && $data['direccion'] != null && $data['direccion'] != " " && $data['calle'] == '') {
    echo '<div id="alerta" class="app-card shadow-sm mb-4 text-danger bg-danger p-2 bg-opacity-10 fw-bold" role="alert">
    <div class="inner">
        <div class="app-card-body p-3 p-lg-4">
            <div class="row gx-5 gy-3">
                <div class="col-12 col-lg-9">
                    Debe añadir los datos del contribuyente antes de continuar.<br>' . $data['direccion'] .
        '<br>' . '<a class="alert-link" href="?view=contributor_edit&id=' . $id . '">Ir a Modificar</a>' .
        '</div>
            </div>
        </div>
    </div>
</div>';
}
?>

<h1 class="app-page-title text-center">Crear Factura Aseo</h1>

<form action="./controllers/invoice_store.php" class="FormularioAjax mt-5" method="POST" autocomplete="off">

    <input type="hidden" name="creado_por" value="<?php echo $_SESSION['user'] ?>">
    <input type="hidden" name="contribuyente_id" value="<?php echo $id ?>">

    <div class="row">
        <h5 class=" col-12 col-lg-4 mb-4">Información Básica</h5>
        <div class="col ">
            <div class="input-group mb-3 ms-auto" style="width: 180px;">
                <span class="input-group-text" id="basic-addon3">Fecha</span>
                <input type="text" class="form-control" disabled name="fecha" value="<?php echo date("d/m/Y"); ?>" />
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-4 col-lg-2">
            <div class="form-outline">
                <label class="form-label"><strong>Nro. de Recibo</strong></label>
                <input type="text" class="form-control" disabled name="recibo" value="<?php echo str_pad($proxID, 11, "0", STR_PAD_LEFT) ?>" />
            </div>
        </div>
        <div class="col-4 col-lg-2">
            <div class="form-outline">
                <label class="form-label"><strong>Tipo</strong></label>
                <div class="input-group">
                    <select class="form-select" name="tipo">
                        <option value="Aseo">Aseo</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-4 col-lg-2">
            <div class="form-outline">
                <label class="form-label"><strong>Licencia</strong></label>
                <input type="text" class="form-control" disabled name="licencia" value="<?php echo $data['licencia'] ?>" />
            </div>
        </div>
        <div class="col-4 col-lg-2">
            <div class="form-outline">
                <label class="form-label"><strong>Catastro</strong></label>
                <input type="text" class="form-control" name="catastro" value="<?php echo $data['catastro'] ?>" />
            </div>
        </div>
        <div class="col-4 col-lg-2">
            <div class="form-outline">
                <label class="form-label"><strong>Rif/Cédula</strong></label>
                <input type="text" class="form-control" disabled name="rif_cedula" value="<?php echo $data['rif_cedula'] ?>" />
            </div>
        </div>
        <div class="col-4 col-lg-2">
            <div class="form-outline">
                <label class="form-label"><strong>Nro de Registro</strong></label>
                <input type="text" class="form-control" disabled name="registro" value="<?php echo $data['registro'] ?>" />
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-12">
            <div class="form-outline">
                <label class="form-label"><strong>Razón Social</strong></label>
                <input type="text" class="form-control" disabled name="razon_social" value="<?php echo str_replace('"', '', $data['razon_social']) ?>" />
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Estado</strong></label>
                <input type="text" class="form-control" disabled name="estado" value="<?php echo $data['estado'] ?>" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Municipio</strong></label>
                <input type="text" class="form-control" disabled name="municipio" value="<?php echo $data['municipio'] ?>" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Parroquia</strong></label>
                <input type="text" class="form-control" disabled name="parroquia" value="<?php echo $data['parroquia'] ?>" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Eje</strong></label>
                <input type="text" class="form-control" disabled name="eje" value="<?php echo $data['eje'] ?>" />
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Sector</strong></label>
                <input type="text" class="form-control" disabled name="sector" value="<?php echo $data['sector'] ?>" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Comunidad</strong></label>
                <input type="text" class="form-control" disabled name="comunidad" value="<?php echo $data['comunidad'] ?>" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Calle</strong></label>
                <input type="text" class="form-control" disabled name="calle" value="<?php echo $data['calle'] ?>" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Casa / Local</strong></label>
                <input type="text" class="form-control" disabled name="casa" value="<?php echo $data['casa'] ?>" />
            </div>
        </div>
    </div>
    <div class="form-outline mb-4 col-4">
        <label class="form-label"><strong>Mes a pagar</strong></label>
        <input class="form-control" name="mes_pagado" required></input>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label"><strong>Observaciones</strong></label>
        <textarea class="form-control" name="nota" rows="3"></textarea>
    </div>

    <h5 class="mb-4">Imputación Presupuestaria</h5>

    <div id="form-container">
        <div class="form-outline">
            <div class="input-group">
                <select class="form-select w-75" name="item1">
                    <option value="3.01.03.54.00 Aseo Domiciliario">3.01.03.54.00 Aseo Domiciliario</option>
                    <option value="3.01.03.54.00 Aseo Comercial">3.01.03.54.00 Aseo Comercial</option>
                    <option value="3.01.03.54.00 Aseo Comercial">3.01.03.54.00 Aseo Industrial</option>
                </select>
                <input type="number" class="form-control" step="0.0001" min="0" required name="item1_valor" />
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <button id="enviar" type="submit" class="btn btn-primary btn-block mb-4 text-center ">Crear Factura</button>
    </div>
</form>



<script>

    // Obtener el botón de enviar
    var botonEnviar = document.getElementById("enviar");

    // Verificar si existe un elemento con id="alerta"
    if (document.getElementById("alerta")) {
        // Si existe, añadir el atributo "disabled" al botón
        botonEnviar.disabled = true;
    }
    
</script>