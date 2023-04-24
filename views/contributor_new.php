<?php
require_once "./php/main.php";
require_once "./inc/session.php";

//Requerimos datos de la ciudad y tipos
$cities = connect();
$cities = $cities->query("SELECT * FROM city");

$type = connect();
$type = $type->query("SELECT * FROM type");
?>

<div class="container-fluid">
    <?php include "./layouts/sidebar.php" ?>
    <div class="col px-0">
        <?php include "./layouts/navbar.php" ?>
        <div class="form-rest">
            <div class="text-center loader"><img src="./img/loader.gif" alt=""></div>
        </div>

        <h3 class="mt-5 text-center">Nuevo Contribuyente</h3>

        <form action="../controllers/employee_new.php" class="FormularioAjax w-75 mx-auto mt-5" method="POST" autocomplete="off">
            <h5 class="mb-4">Información Personal</h5>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Razón Social</strong></label>
                        <input type="text" class="form-control" required name="first_name" />
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Rif</strong></label>
                        <div class="input-group">
                            <select class="form-select" name="state">
                                <option value="Amazonas">V-</option>
                                <option value="Apure">J-</option>
                                <option value="Aragua">E-</option>
                            </select>
                            <input type="number" class="form-control w-75" required name="identification" />
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Teléfono</strong></label>
                        <input type="text" class="form-control" required name="phone" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Correo</strong></label>
                        <input type="text" class="form-control" required name="email" />
                    </div>
                </div>
            </div>

            <h5 class="mb-4">Dirección</h5>
            <div class="row mb-4">
                <div class="col">
                    <label class="form-label" name><strong>Estado</strong></label>
                    <select class="form-select" name="state">
                        <option value="Amazonas">Amazonas</option>
                        <option value="Anzoátegui">Anzoátegui</option>
                        <option value="Apure">Apure</option>
                        <option value="Aragua">Aragua</option>
                        <option value="Barinas">Barinas</option>
                        <option value="Bolívar">Bolívar</option>
                        <option value="Carabobo">Carabobo</option>
                        <option value="Cojedes">Cojedes</option>
                        <option value="Delta Amacuro">Delta Amacuro</option>
                        <option value="Distrito Capital">Distrito Capital</option>
                        <option value="Falcón">Falcón</option>
                        <option value="Guárico">Guárico</option>
                        <option value="Lara">Lara</option>
                        <option value="Mérida">Mérida</option>
                        <option value="Miranda">Miranda</option>
                        <option value="Monagas">Monagas</option>
                        <option value="Nueva Esparta">Nueva Esparta</option>
                        <option value="Portuguesa">Portuguesa</option>
                        <option value="Sucre">Sucre</option>
                        <option value="Táchira">Táchira</option>
                        <option value="Trujillo">Trujillo</option>
                        <option value="Vargas">Vargas</option>
                        <option value="Yaracuy">Yaracuy</option>
                        <option value="Zulia">Zulia</option>
                    </select>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"><strong>Ciudad</strong></label>
                        <input type="text" class="form-control" required name="city" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label"><strong>Sector</strong></label>
                        <input type="text" class="form-control" required name="city" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label"><strong>Calle</strong></label>
                        <input type="text" class="form-control" required name="city" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label"><strong>Casa</strong></label>
                        <input type="text" class="form-control" required name="city" />
                    </div>
                </div>
                <!--                 <div class="form-outline ">
                    <label class="form-label"><strong>Dirección</strong></label>
                    <textarea class="form-control" name="address" required rows="6"></textarea>
                </div> -->
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label"><strong>Parroquia</strong></label>
                        <input type="text" class="form-control" required name="city" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label"><strong>Municipio</strong></label>
                        <input type="text" class="form-control" required name="city" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label"><strong>Ejes</strong></label>
                        <input type="text" class="form-control" required name="city" />
                    </div>
                </div>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="opcion" id="opcion1" value="opcion1" onclick="mostrarInput()">
                <label class="form-check-label" for="opcion1">
                    Opción 1
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="opcion" id="opcion2" value="opcion2" onclick="mostrarInput()">
                <label class="form-check-label" for="opcion2">
                    Opción 2
                </label>
            </div>

            <div id="inputOpcion" style="display:none;">
                <div class="form-outline mb-4">
                    <label class="form-label"><strong>Ejes</strong></label>
                    <input type="text" class="form-control" required name="city" />
                </div>
            </div>


            <input type="number" name="num1" id="num1" oninput="sumar()">
            <input type="number" name="num2" id="num2" oninput="sumar()">
            <input type="number" name="num3" id="num3" oninput="sumar()">
            <input type="number" name="resultado" id="resultado" disabled>

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

<script>
    function mostrarInput() {
        var inputOpcion = document.getElementById("inputOpcion");
        if (document.getElementById("opcion1").checked || document.getElementById("opcion2").checked) {
            inputOpcion.style.display = "block";
        } else {
            inputOpcion.style.display = "none";
        }
    }


    function sumar() {
			// Obtenemos los valores de los tres inputs
			var num1 = Number(document.getElementById("num1").value);
			var num2 = Number(document.getElementById("num2").value);
			var num3 = Number(document.getElementById("num3").value);


			// Realizamos la suma de los tres valores
			var suma = num1 + num2 + num3;

			// Asignamos el resultado de la suma al cuarto input
			document.getElementById("resultado").value = suma;
		}
</script>