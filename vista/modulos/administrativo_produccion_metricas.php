<?php

    $url = Ruta::ctrRuta();

    if (@$_SESSION["validarSesion"] != "ok" ) {

        echo '
            <script>
                window.location = "error404";
            </script>
        ';

    } else if($_SESSION["validarSesion"] == "ok" ){

        if(($_SESSION["id_acceso"] == "1" && $_SESSION["id_departamento"] == "2") || ($_SESSION["id_acceso"] == "2" && $_SESSION["id_departamento"] == "5") || ($_SESSION["id_acceso"] == "3" && $_SESSION["id_departamento"] == "6")){

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
        <form action="" id="metricasprod" class="metricasprod" name="metricasprod">
            <div class="row backcombos">
                <div class="col-md-12 form-group">
                    <select class="turnoprod" name="turnoprod" id="turnoprod">
                        <option value="">Select a shift</option>
                        <option value="1">first turn</option>
                        <option value="2">second shift</option>
                        <option value="3">third shift</option>
                    </select>
                </div>
                <div class="col-md-12 form-group">
                    <select class="areaprod" name="areaprod" id="areaprod">
                        <option value="">Select an area</option>
                        <option value="1">Wheels & tires assembly</option>
                        <option value="2">Rear axle assembly</option>
                        <option value="3">Crossmember</option>
                    </select>
                </div>
                <div class="col-md-12 form-group">
                    <select class="estacionprod" name="estacionprod" id="estacionprod">
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
                    <label id="desdelprod" for="desdeprod">since</label>
                    <input type="date" name="desdeprod" id="desdeprod" class="desdeprod form-input">
                </div>

                <div class="col-md-6 form-group">
                    <label id="hastalprod" for="hastaprod">until</label>
                    <input type="date" name="hastaprod" id="hastaprod" class="hastaprod form-input">
                </div>
               
            </div>

            <div class="row metrica">

                <div id="result2">
                    
                        <div class="unomet">
                            <!-- line chart canvas element -->
                            <h2>MTBF</h2>
                            <canvas id="buyersprod"></canvas>
                        </div>

                        <div class="dosmet">
                            <!-- line chart canvas element -->
                            <h2>MTTR</h2>
                            <canvas id="buyers2prod"></canvas>
                        </div>

                </div>

            </div>
        </form>
    </div>

</div>

<script>

    $("select.areaprod").hide();
    $("select.estacionprod").hide();
    $("#desdeprod").hide();
    $("#hastaprod").hide();
    $("#desdelprod").hide();
    $("#hastalprod").hide();
    document.getElementById("areaprod").value = "";
    document.getElementById("estacionprod").value = "";
    document.getElementById("desdeprod").value = "";
    document.getElementById("hastaprod").value = "";

</script>