<?php
require_once "./functions/main.php";

$id = (isset($_GET['id'])) ? $_GET['id'] : 0;
$id = clean_data($id);

//Requerimos TODOS LOS DATOS para mostrarlos en el formulario
$contributor_data = connect();
$contributor_data = $contributor_data->query("SELECT * FROM contributors WHERE id='$id' ");
$data = $contributor_data->fetch();
$contributor_data = null;
$rif_type = substr($data['rif_cedula'], 0, 1);
?>

<div class="container-fluid">
    <?php include "./layouts/sidebar.php" ?>
    <div class="col px-0">
        <?php include "./layouts/navbar.php" ?>
        <?php
        if (isset($data['direccion']) && $data['direccion'] != null && $data['direccion'] != " " && $data['calle'] == '') {
            echo '<div class="alert alert-danger" role="alert">
            Debe añadir los datos del contribuyente antes de continuar.<br>' . $data['direccion'] .
                '</div>';
        }
        ?>
        <div class="form-rest">
            <div class="text-center loader"><img src="./assets/img/loader.gif" alt=""></div>
        </div>

        <h3 class="mt-5 text-center">Editar Contribuyente</h3>

        <form action="./controllers/contributors_update.php" class="FormularioAjax w-75 mx-auto mt-5" method="POST" autocomplete="off">

            <input type="hidden" name="contributor_id" value="<?php echo $id ?>">

            <h5 class="mb-4">Información Personal</h5>
            <div class="row mb-4">
                <div class="col-8">
                    <div class="form-outline">
                        <label class="form-label"><strong>Razón Social</strong></label>
                        <input type="text" class="form-control" required value="<?php echo str_replace('"', '', $data['razon_social'])  ?>" name="razon_social" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Rif/Cédula</strong></label>
                        <div class="input-group">
                            <select class="form-select" name="rif_tipo">
                                <option value="<?php echo $rif_type ?>"><?php echo $rif_type . '-' ?></option>
                                <option value="V">V-</option>
                                <option value="J">J-</option>
                                <option value="E">E-</option>
                            </select>
                            <input type="number" class="form-control w-75" required value="<?php echo substr($data['rif_cedula'], 1) ?>" name="rif" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">

                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Correo</strong></label>
                        <input type="text" class="form-control" required name="correo" value="<?php echo $data['email'] ?>" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Teléfono Móvil</strong></label>
                        <input type="number" class="form-control" required value="<?php echo $data['telefono_celular'] ?>" name="telefono_movil" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Teléfono Fijo</strong></label>
                        <input type="number" class="form-control" value="<?php echo $data['telefono_local'] ?>" name="telefono_local" />
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Licencia</strong></label>
                        <input type="text" class="form-control" value="<?php echo $data['licencia'] ?>" name="licencia" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Registro</strong></label>
                        <input type="text" class="form-control" value="<?php echo $data['registro'] ?>" name="registro" />
                    </div>
                </div>
            </div>

            <h5 class="mb-4">Dirección</h5>
            <div class="row">
                <div class="col">
                    <label class="form-label" name><strong>Estado</strong></label>
                    <input type="text" class="form-control" name="estado" value="Miranda" />
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Ciudad</strong></label>
                        <input type="text" class="form-control" name="ciudad" value="Cua" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label"><strong>Municipio</strong></label>
                        <input type="text" class="form-control" name="municipio" value="Urdaneta" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label"><strong>Parroquia</strong></label>
                        <select class="form-select" name="parroquia">
                            <option value="Cua">Cua</option>
                            <option value="Nva Cua">Nva Cua</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-outline mb-4">
                        <label class="form-label"><strong>Ejes</strong></label>
                        <select class="form-select" name="eje">
                            <option value="Eje 1">Eje 1</option>
                            <option value="Eje 2">Eje 2</option>
                            <option value="Eje 3">Eje 3</option>
                            <option value="Eje 4">Eje 4</option>
                            <option value="Eje 5">Eje 5</option>
                            <option value="Eje 6">Eje 6</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label"><strong>Sector</strong></label>
                        <input type="text" class="form-control" required value="<?php echo $data['sector'] ?>" name="sector" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label"><strong>Comunidad</strong></label>
                        <input type="text" class="form-control" value="<?php echo $data['comunidad'] ?>" name="comunidad" />
                    </div>
                </div>

            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Calle</strong></label>
                        <input type="text" class="form-control" required value="<?php echo $data['calle'] ?>" name="calle" />
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-outline mb-4">
                        <label class="form-label"><strong>Casa / Local</strong></label>
                        <input type="text" class="form-control" value="<?php echo $data['casa'] ?>" required name="casa" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Punto de Referencia</strong></label>
                        <input type="text" class="form-control" value="<?php echo $data['referencia'] ?>" name="referencia" />
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block mb-4 text-center ">Enviar</button>
            </div>
        </form>

    </div>

</div>

<?php
$type = null;
$cities = null
?>