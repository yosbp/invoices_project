<div class="form-rest">
    <div class="text-center loader"><img src="./assets/img/loader.gif" alt=""></div>
</div>

<h1 class="app-page-title text-center">Nuevo Contribuyente</h1>

<form action="./controllers/contributors_store.php" class="FormularioAjax mx-auto mt-5" method="POST" autocomplete="off">

    <input type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>">

    <h5 class="mb-4">Información Personal</h5>
    <div class="row mb-4">
        <div class="col-8">
            <div class="form-outline">
                <label class="form-label"><strong>Razón Social</strong></label>
                <input type="text" class="form-control" required name="razon_social" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Rif/Cédula</strong></label>
                <div class="input-group">
                    <select class="form-select" name="rif_tipo">
                        <option value="V">V-</option>
                        <option value="J">J-</option>
                        <option value="E">E-</option>
                    </select>
                    <input type="number" class="form-control w-75" required name="rif" />
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">

        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Correo</strong></label>
                <input type="text" class="form-control" required name="correo" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Teléfono Móvil</strong></label>
                <input type="number" class="form-control" required name="telefono_movil" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Teléfono Fijo</strong></label>
                <input type="number" class="form-control" name="telefono_local" />
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Licencia</strong></label>
                <input type="text" class="form-control" name="licencia" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Registro</strong></label>
                <input type="text" class="form-control" name="registro" />
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
                    <option value="1">Eje 1</option>
                    <option value="2">Eje 2</option>
                    <option value="3">Eje 3</option>
                    <option value="4">Eje 4</option>
                    <option value="5">Eje 5</option>
                    <option value="6">Eje 6</option>
                    <option value="7">Eje 7</option>
                    <option value="8">Eje 8</option>
                    <option value="9">Eje 9</option>
                    <option value="10">Eje 10</option>
                    <option value="11">Eje 11</option>
                    <option value="12">Eje 12</option>
                    <option value="13">Eje 13</option>
                    <option value="14">Eje 14</option>
                    <option value="15">Eje 15</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-outline mb-4">
                <label class="form-label"><strong>Sector</strong></label>
                <input type="text" class="form-control" required name="sector" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline mb-4">
                <label class="form-label"><strong>Comunidad</strong></label>
                <input type="text" class="form-control" name="comunidad" />
            </div>
        </div>

    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Calle</strong></label>
                <input type="text" class="form-control" required name="calle" />
            </div>
        </div>
        <div class="col-2">
            <div class="form-outline mb-4">
                <label class="form-label"><strong>Casa / Local</strong></label>
                <input type="text" class="form-control" required name="casa" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label"><strong>Punto de Referencia</strong></label>
                <input type="text" class="form-control" name="referencia" />
            </div>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-block mb-4 text-center ">Enviar</button>
    </div>
</form>
