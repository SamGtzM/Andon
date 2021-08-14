<div class="back_general_tables">
    <form method="POST" id="llantas" name="llantas">
    <input type="hidden" id="turno" name="turno">
        <table id="table_id_generales" class="table table-striped table-bordered llantas" style="width:100%">
            <thead>
                <tr>
                    <th> OP </th>
                    <th> Hour </th>
                    <th> Produced </th>
                    <th> Rate </th>
                    <th> OEE </th>
                    <th> Status </th>
                    <th> Accumulated </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><input value="50" style="border-bottom: none; text-align: center; font-weight: bold;" id="first opcllantas" name="opllantas" class="form-input opcllantas" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first horallantas" name="horallantas" class="form-input horallantas" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first producidollantas" name="producidollantas" class="form-input producidollantas" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first ratellantas" name="ratellantas" class="form-input ratellantas" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first oeellantas" name="oeellantas" class="form-input oeellantas" type="text" autocomplete="off" readonly require/><a>%</a></td>
                    <td id="llantas_50_status"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first statusllantas" name="statusllantas" class="form-input statusllantas" onchange="cambio()" type="text" autocomplete="off" require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first acumuladasllantas" name="acumuladasllantas" class="form-input acumuladasllantas" type="text" autocomplete="off" readonly require/></td>
                </tr>

            </tbody>
        </table>

        <table id="llantasg1" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th> Hour </th>
                    <th> Produced </th>
                    <th> Rate </th>
                    <th> Status </th>
                    <th> Reason </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first turnoprodgeneral1" name="turnoprodgeneral1" class="form-input turnoprodgeneral1" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first producedgeneral1" name="producedgeneral1" class="form-input producedgeneral1" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first rategeneral1" name="rategeneral1" class="form-input rategeneral1" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_status_ok_1"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first statusgeneral1" name="statusgeneral1" class="form-input statusgeneral1" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_reson_1"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first reasongeneral1" name="reasongeneral1" class="form-input reasongeneral1" type="text" autocomplete="off" readonly require/></td>
                </tr>

                <tr>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first turnoprodgeneral2" name="turnoprodgeneral2" class="form-input turnoprodgeneral2" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first producedgeneral2" name="producedgeneral2" class="form-input producedgeneral2" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first rategeneral2" name="rategeneral2" class="form-input rategeneral2" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_status_ok_2"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first statusgeneral2" name="statusgeneral2" class="form-input statusgeneral2" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_reson_2"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first reasongeneral2" name="reasongeneral2" class="form-input reasongeneral2" type="text" autocomplete="off" readonly require/></td>
                </tr>

                <tr>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first turnoprodgeneral3" name="turnoprodgeneral3" class="form-input inputtableshen turnoprodgeneral3" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first producedgeneral3" name="producedgeneral3" class="form-input inputtableshen producedgeneral3" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first rategeneral3" name="rategeneral3" class="form-input inputtableshen rategeneral3" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_status_ok_3"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first statusgeneral3" name="statusgeneral3" class="form-input inputtableshen statusgeneral3" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_reson_3"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first reasongeneral3" name="reasongeneral3" class="form-input inputtableshen reasongeneral3" type="text" autocomplete="off" readonly require/></td>
                </tr>

                <tr>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first turnoprodgeneral4" name="turnoprodgeneral4" class="form-input inputtableshen turnoprodgeneral4" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first producedgeneral4" name="producedgeneral4" class="form-input inputtableshen producedgeneral4" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first rategeneral4" name="rategeneral4" class="form-input inputtableshen rategeneral4" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_status_ok_4"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first statusgeneral4" name="statusgeneral4" class="form-input inputtableshen statusgeneral4" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_reson_4"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first reasongeneral4" name="reasongeneral4" class="form-input inputtableshen reasongeneral4" type="text" autocomplete="off" readonly require/></td>
                </tr>

                <tr>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first turnoprodgeneral5" name="turnoprodgeneral5" class="form-input inputtableshen turnoprodgeneral5" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first producedgeneral5" name="producedgeneral5" class="form-input inputtableshen producedgeneral5" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first rategeneral5" name="rategeneral5" class="form-input inputtableshen rategeneral5" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_status_ok_5"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first statusgeneral5" name="statusgeneral5" class="form-input inputtableshen statusgeneral5" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_reson_5"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first reasongeneral5" name="reasongeneral5" class="form-input inputtableshen reasongeneral5" type="text" autocomplete="off" readonly require/></td>
                </tr>

                <tr>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first turnoprodgeneral6" name="turnoprodgeneral6" class="form-input turnoprodgeneral6" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first producedgeneral6" name="producedgeneral6" class="form-input producedgeneral6" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first rategeneral6" name="rategeneral6" class="form-input rategeneral6" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_status_ok_6"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first statusgeneral6" name="statusgeneral6" class="form-input statusgeneral6" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_reson_6"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first reasongeneral6" name="reasongeneral6" class="form-input reasongeneral6" type="text" autocomplete="off" readonly require/></td>
                </tr>

                <tr>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first turnoprodgeneral7" name="turnoprodgeneral7" class="form-input turnoprodgeneral7" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first producedgeneral7" name="producedgeneral7" class="form-input producedgeneral7" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first rategeneral7" name="rategeneral7" class="form-input rategeneral7" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_status_ok_7"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first statusgeneral7" name="statusgeneral7" class="form-input statusgeneral7" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_reson_7"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first reasongeneral7" name="reasongeneral7" class="form-input reasongeneral7" type="text" autocomplete="off" readonly require/></td>
                </tr>

                <tr>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first turnoprodgeneral8" name="turnoprodgeneral8" class="form-input turnoprodgeneral8" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first producedgeneral8" name="producedgeneral8" class="form-input producedgeneral8" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first rategeneral8" name="rategeneral8" class="form-input rategeneral8" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_status_ok_8"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first statusgeneral8" name="statusgeneral8" class="form-input statusgeneral8" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_reson_8"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first reasongeneral8" name="reasongeneral8" class="form-input reasongeneral8" type="text" autocomplete="off" readonly require/></td>
                </tr>

                <tr>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first turnoprodgeneral9" name="turnoprodgeneral9" class="form-input turnoprodgeneral9" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first producedgeneral9" name="producedgeneral9" class="form-input producedgeneral9" type="text" autocomplete="off" readonly require/></td>
                    <td><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first rategeneral9" name="rategeneral9" class="form-input rategeneral9" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_status_ok_9"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first statusgeneral9" name="statusgeneral9" class="form-input statusgeneral9" type="text" autocomplete="off" readonly require/></td>
                    <td id="llantas_50_reson_9"><input style="border-bottom: none; text-align: center; font-weight: bold;" id="first reasongeneral9" name="reasongeneral9" class="form-input reasongeneral9" type="text" autocomplete="off" readonly require/></td>
                </tr>

            </tbody>
        </table>
        </form>
    </div>
</div>

<form method="POST" id="slide" id="slide" name="slide">
    <!----- SLIDE --->

    <div class="slideshow-container">

    <div class="mySlides fade">
    <div class="text"> Op 50 </div>

        <ul>
            <li class="turno0" > Turn 01 &nbsp</li> <input style="font-size: 110%; font-weight: bold; position: relative; left:2%; top:2.6vh; height:3vh; background-color: transparent; color:#ffffff; text-align: center; width: 2.9%;" id="slideptimrturnoli1" name="slideptimrturnoli1" class="inpslidellantas slideptimrturnoli1" type="text"/> <span id="semaforo1" name="semaforo1" class="semaforo"></span>
            <li class="turno0" > Turn 02 &nbsp</li> <input style="font-size: 110%; font-weight: bold; position: relative; left:2%; top:2.6vh; height:3vh; background-color: transparent; color:#ffffff; text-align: center; width: 2.9%;" id="slidestimrturnoli2" name="slidestimrturnoli2" class="inpslidellantas slidestimrturnoli2" type="text"/> <span id="semaforo2" name="semaforo2" class="semaforo"></span>
            <li class="turno0" > Turn 03 &nbsp</li> <input style="font-size: 110%; font-weight: bold; position: relative; left:2%; top:2.6vh; height:3vh; background-color: transparent; color:#ffffff; text-align: center; width: 2.9%;" id="slidettimrturnoli3" name="slidettimrturnoli3" class="inpslidellantas slidettimrturnoli3" type="text"/> <span id="semaforo3" name="semaforo3" class="semaforo"></span>
        </ul>

    </div>

    <div class="mySlides fade">
    <div class="text"> Op 50 </div>

        <ul>
            <li class="turno0" > Turn 01 &nbsp</li> <input style="font-size: 110%; font-weight: bold; position: relative; left:2%; top:2.6vh; height:3vh; background-color: transparent; color:#ffffff; text-align: center; width: 2.9%;" id="slideptimrturnoli4" name="slideptimrturnoli4" class="inpslidellantas slideptimrturnoli4" type="text"/> <span id="semaforo4" name="semaforo4" class="semaforo"></span>
            <li class="turno0" > Turn 02 &nbsp</li> <input style="font-size: 110%; font-weight: bold; position: relative; left:2%; top:2.6vh; height:3vh; background-color: transparent; color:#ffffff; text-align: center; width: 2.9%;" id="slidestimrturnoli5" name="slidestimrturnoli5" class="inpslidellantas slidestimrturnoli5" type="text"/> <span id="semaforo5" name="semaforo5" class="semaforo"></span>
            <li class="turno0" > Turn 03 &nbsp</li> <input style="font-size: 110%; font-weight: bold; position: relative; left:2%; top:2.6vh; height:3vh; background-color: transparent; color:#ffffff; text-align: center; width: 2.9%;" id="slidettimrturnoli6" name="slidettimrturnoli6" class="inpslidellantas slidettimrturnoli6" type="text"/> <span id="semaforo6" name="semaforo6" class="semaforo"></span>
        </ul>

    </div>

    <div class="mySlides fade">
    <div class="text"> Op 50 </div>

        <ul>
            <li class="turno0" > Turn 01 &nbsp</li> <input style="font-size: 110%; font-weight: bold; position: relative; left:2%; top:2.6vh; height:3vh; background-color: transparent; color:#ffffff; text-align: center; width: 2.9%;" id="slideptimrturnoli7" name="slideptimrturnoli7" class="inpslidellantas slideptimrturnoli7" type="text"/> <span id="semaforo7" name="semaforo7" class="semaforo"></span>
            <li class="turno0" > Turn 02 &nbsp</li> <input style="font-size: 110%; font-weight: bold; position: relative; left:2%; top:2.6vh; height:3vh; background-color: transparent; color:#ffffff; text-align: center; width: 2.9%;" id="slidestimrturnoli8" name="slidestimrturnoli8" class="inpslidellantas slidestimrturnoli8" type="text"/> <span id="semaforo8" name="semaforo8" class="semaforo"></span>
            <li class="turno0" > Turn 03 &nbsp</li> <input style="font-size: 110%; font-weight: bold; position: relative; left:2%; top:2.6vh; height:3vh; background-color: transparent; color:#ffffff; text-align: center; width: 2.9%;" id="slidettimrturnoli9" name="slidettimrturnoli9" class="inpslidellantas slidettimrturnoli9" type="text"/> <span id="semaforo9" name="semaforo9" class="semaforo"></span>
        </ul>

    </div>

    </div>
    <br>

    <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    </div>
</form>
