<?php

    $url = Ruta::ctrRuta();

    if (@$_SESSION["validarSesion"] != "ok" ) {

        echo '
            <script>
                window.location = "error404";
            </script>
        ';

    } else if($_SESSION["validarSesion"] == "ok" ){

        if(($_SESSION["id_acceso"] == "2" && $_SESSION["id_departamento"] == "5") || ($_SESSION["id_acceso"] == "3" && $_SESSION["id_departamento"] == "6")){

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
        <form action="" id="metricasgerencia" class="metricasgerencia" name="metricasgerencia">
            <div class="row backcombos">
                <div class="col-md-12 form-group">
                    <select class="turnogerencia" name="turnogerencia" id="turnogerencia">
                        <option value="">Select a shift</option>
                        <option value="1">first turn</option>
                        <option value="2">second shift</option>
                        <option value="3">third shift</option>
                    </select>
                </div>
                <div class="col-md-12 form-group">
                    <select class="areagerencia" name="areagerencia" id="areagerencia">
                        <option value="">Select an area</option>
                        <option value="1">Wheels & tires assembly</option>
                        <option value="2">Rear axle assembly</option>
                        <option value="3">Crossmember</option>
                    </select>
                </div>
                <div class="col-md-12 form-group">
                    <select class="estaciongerencia" name="estaciongerencia" id="estaciongerencia">
                        <option value="">Select Station</option>
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
               
            </div>

            <div class="row metrica">

                <div class="col-md-12 form-group" id="result2">
                    
                        <div class="unomet">
                            <!-- line chart canvas element -->
                            <h2>top 10 stoppages</h2>
                            <canvas id="buyersgerencia"></canvas>
                        </div>

                </div>

            </div>
        </form>
    </div>

</div>

<script>

    $("select.areagerencia").hide();
    $("select.estaciongerencia").hide();
    $("#desdegerencia").hide();
    $("#hastagerencia").hide();
    $("#desdelgerencia").hide();
    $("#hastalgerencia").hide();
    document.getElementById("areagerencia").value = "";
    document.getElementById("estaciongerencia").value = "";
    document.getElementById("desdegerencia").value = "";
    document.getElementById("hastagerencia").value = "";

</script>