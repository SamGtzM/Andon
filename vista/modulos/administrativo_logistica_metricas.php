<?php

    $url = Ruta::ctrRuta();

    if (@$_SESSION["validarSesion"] != "ok" ) {

        echo '
            <script>
                window.location = "error404";
            </script>
        ';

    } else if($_SESSION["validarSesion"] == "ok" ){

        if(($_SESSION["id_acceso"] == "1" && $_SESSION["id_departamento"] == "4") || ($_SESSION["id_acceso"] == "2" && $_SESSION["id_departamento"] == "5") || ($_SESSION["id_acceso"] == "3" && $_SESSION["id_departamento"] == "6")){

        } else {

            echo '
                <script>
                    window.location = "error404";
                </script>
            ';

        }
    }

?>


<div class="back_administrativo_tables met " width="100%" height="100%">

    <div class="container">
        <form action="" id="metricaslog" class="metricaslog" name="metricaslog">
            <div class="row backcombos">
                <div class="col-md-12 form-group">
                    <select class="turnolog" name="turnolog" id="turnolog">
                        <option value="">Select a shift</option>
                        <option value="1">first turn</option>
                        <option value="2">second shift</option>
                        <option value="3">third shift</option>
                    </select>
                </div>
                <div class="col-md-12 form-group">
                    <select class="arealog" name="arealog" id="arealog">
                        <option value="">Select an area</option>
                        <option value="1">Wheels & tires assembly</option>
                        <option value="2">Rear axle assembly</option>
                        <option value="3">Crossmember</option>
                    </select>
                </div>
                <div class="col-md-12 form-group">
                    <select class="estacionlog" name="estacionlog" id="estacionlog">
                        <option value=""> Select station </option>
                        <option value="1"> Wheels & Tires Assembly - 50 </option>
                        <option value="2"> Rear Axle Assembly - 60 </option>
                        <option value="3"> Rear Axle Assembly - 65 </option>
						<option value="4"> Rear Axle Assembly - 70 </option>
                        <option value="5"> Crossmember - 10 </option>
                        <option value="6"> Crossmember - 20 </option>
						<option value="7"> Crossmember - 30 </option>
                        <option value="8"> Crossmember - 40 </option>
                        <option value="9"> Crossmember - 50 </option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label id="desdellog" for="desdelog">since</label>
                    <input type="date" name="desdelog" id="desdelog" class="desdelog form-input">
                </div>

                <div class="col-md-6 form-group">
                    <label id="hastallog" for="hastalog">until</label>
                    <input type="date" name="hastalog" id="hastalog" class="hastalog form-input">
                </div>
               
            </div>

            <div class="row metrica">

                <div id="result2">
                    
                        <div class="unomet">
                            <!-- line chart canvas element -->
                            <h2>MTBF</h2>
                            <canvas id="buyerslog"></canvas>
                        </div>

                        <div class="dosmet">
                            <!-- line chart canvas element -->
                            <h2>MTTR</h2>
                            <canvas id="buyers2log"></canvas>
                        </div>

                </div>

            </div>
        </form>
    </div>

</div>

<script>

    $("select.arealog").hide();
    $("select.estacionlog").hide();
    $("#desdelog").hide();
    $("#hastalog").hide();
    $("#desdellog").hide();
    $("#hastallog").hide();
    document.getElementById("arealog").value = "";
    document.getElementById("estacionlog").value = "";
    document.getElementById("desdelog").value = "";
    document.getElementById("hastalog").value = "";

</script>