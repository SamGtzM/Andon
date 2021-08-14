<?php

    $url = Ruta::ctrRuta();

    if (@$_SESSION["validarSesion"] != "ok" ) {

        echo '
            <script>
                window.location = "error404";
            </script>
        ';

    } else if($_SESSION["validarSesion"] == "ok" ){

        if(($_SESSION["id_acceso"] == "1" && $_SESSION["id_departamento"] == "3") || ($_SESSION["id_acceso"] == "2" && $_SESSION["id_departamento"] == "5") || ($_SESSION["id_acceso"] == "3" && $_SESSION["id_departamento"] == "6")){

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
        <form action="" id="metricascal" class="metricascal" name="metricascal">
            <div class="row backcombos">
                <div class="col-md-12 form-group">
                    <select class="turnocal" name="turnocal" id="turnocal">
                        <option value="">Select a shift</option>
                        <option value="1">first turn</option>
                        <option value="2">second shift</option>
                        <option value="3">third shift</option>
                    </select>
                </div>
                <div class="col-md-12 form-group">
                    <select class="areacal" name="areacal" id="areacal">
                        <option value="">Select an area</option>
                        <option value="1">Wheels & tires assembly</option>
                        <option value="2">Rear axle assembly</option>
                        <option value="3">Crossmember</option>
                    </select>
                </div>
                <div class="col-md-12 form-group">
                    <select class="estacioncal" name="estacioncal" id="estacioncal">
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
                    <label id="desdelcal" for="desdecal">since</label>
                    <input type="date" name="desdecal" id="desdecal" class="desdecal form-input">
                </div>

                <div class="col-md-6 form-group">
                    <label id="hastalcal" for="hastacal">until</label>
                    <input type="date" name="hastacal" id="hastacal" class="hastacal form-input">
                </div>
               
            </div>

            <div class="row metrica">

                <div id="result2">
                    
                        <div class="unomet">
                            <!-- line chart canvas element -->
                            <h2>MTBF</h2>
                            <canvas id="buyerscal"></canvas>
                        </div>

                        <div class="dosmet">
                            <!-- line chart canvas element -->
                            <h2>MTTR</h2>
                            <canvas id="buyers2cal"></canvas>
                        </div>

                </div>

            </div>
        </form>
    </div>

</div>

<script>

    $("select.areacal").hide();
    $("select.estacioncal").hide();
    $("#desdecal").hide();
    $("#hastacal").hide();
    $("#desdelcal").hide();
    $("#hastalcal").hide();
    document.getElementById("areacal").value = "";
    document.getElementById("estacioncal").value = "";
    document.getElementById("desdecal").value = "";
    document.getElementById("hastacal").value = "";

</script>