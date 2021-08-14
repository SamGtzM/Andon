<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'Exception.php';
require_once 'PHPMailer.php';
require_once 'SMTP.php';

class ControladorCross_30{

    static public function ctr_cross_30(){

        $tabla = "tabla_status_crossmember_30";
        $respuesta = ModeloCross_30::mdl_cross_30($tabla);
        return $respuesta;

    }

    static public function ctrmostrarrateCross_30(){

        $tabla1 = "tabla_rate";
        $tabla2 = "tabla_turno";
        $tabla3 = "tabla_area";
        $tabla4 = "tabla_estacion";
        $respuesta = ModeloCross_30::mdlmostrarrateCross_30($tabla1, $tabla2, $tabla3, $tabla4);
        return $respuesta;

    }

    static public function ctr_cross_30_producido_contador(){

        $tabla = "tabla_status_crossmember_30";
        $respuesta = ModeloCross_30::mdl_cross_30_producido_contador($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_acumulado_contador(){

        $tabla = "tabla_status_crossmember_30";
        $respuesta = ModeloCross_30::mdl_cross_30_acumulado_contador($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_paros_6_7(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_paros_6_7($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_turno(){

        $tabla = "tabla_turno";
        $respuesta = ModeloCross_30::mdl_cross_30_turno($tabla);
        return $respuesta;

    }

    static public function ctr_insert_gen_cross_30($datos){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_insert_gen_cross_30($tabla, $datos);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_PrimerTurno_6_7(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_PrimerTurno_6_7($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_PrimerTurno_7_8(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_PrimerTurno_7_8($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_PrimerTurno_8_9(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_PrimerTurno_8_9($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_PrimerTurno_9_10(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_PrimerTurno_9_10($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_PrimerTurno_10_11(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_PrimerTurno_10_11($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_PrimerTurno_11_12(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_PrimerTurno_11_12($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_PrimerTurno_12_13(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_PrimerTurno_12_13($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_PrimerTurno_13_14(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_PrimerTurno_13_14($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_PrimerTurno_14_14_30(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_PrimerTurno_14_14_30($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_SegundoTurno_14_30_15(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_SegundoTurno_14_30_15($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_SegundoTurno_15_16(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_SegundoTurno_15_16($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_SegundoTurno_16_17(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_SegundoTurno_16_17($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_SegundoTurno_17_18(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_SegundoTurno_17_18($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_SegundoTurno_18_19(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_SegundoTurno_18_19($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_SegundoTurno_19_20(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_SegundoTurno_19_20($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_SegundoTurno_20_21(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_SegundoTurno_20_21($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_SegundoTurno_21_22(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_SegundoTurno_21_22($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_SegundoTurno_22_22_30(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_SegundoTurno_22_22_30($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_TercerTurno_22_30_23(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_TercerTurno_22_30_23($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_TercerTurno_23_00(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_TercerTurno_23_00($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_TercerTurno_00_01(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_TercerTurno_00_01($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_TercerTurno_01_02(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_TercerTurno_01_02($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_TercerTurno_02_03(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_TercerTurno_02_03($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_TercerTurno_03_04(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_TercerTurno_03_04($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_TercerTurno_04_05(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_TercerTurno_04_05($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_Prod_TercerTurno_05_05_59(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_cross_30_Prod_TercerTurno_05_05_59($tabla);
        return $respuesta;

    }

    static public function ctr_acumulado_slide_primer_turno_cross_30(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_acumulado_slide_primer_turno_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_acumulado_slide_segundo_turno_cross_30(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_acumulado_slide_segundo_turno_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_acumulado_slide_tercer_turno_cross_30(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloCross_30::mdl_acumulado_slide_tercer_turno_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_rateslide_primer_turno_cross_30(){

        $tabla = "tabla_rate";
        $respuesta = ModeloCross_30::mdl_rateslide_primer_turno_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_rateslide_segundo_turno_cross_30(){

        $tabla = "tabla_rate";
        $respuesta = ModeloCross_30::mdl_rateslide_segundo_turno_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_rateslide_tercer_turno_cross_30(){

        $tabla = "tabla_rate";
        $respuesta = ModeloCross_30::mdl_rateslide_tercer_turno_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_status_mtto_1_cross_30(){

        $tabla = "tabla_status_crossmember_30";
        $respuesta = ModeloCross_30::mdl_status_mtto_1_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_status_mtto_0_cross_30(){

        $tabla = "tabla_status_crossmember_30";
        $respuesta = ModeloCross_30::mdl_status_mtto_0_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_status_prod_1_cross_30(){

        $tabla = "tabla_status_crossmember_30";
        $respuesta = ModeloCross_30::mdl_status_prod_1_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_status_prod_0_cross_30(){

        $tabla = "tabla_status_crossmember_30";
        $respuesta = ModeloCross_30::mdl_status_prod_0_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_status_cal_1_cross_30(){

        $tabla = "tabla_status_crossmember_30";
        $respuesta = ModeloCross_30::mdl_status_cal_1_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_status_cal_0_cross_30(){

        $tabla = "tabla_status_crossmember_30";
        $respuesta = ModeloCross_30::mdl_status_cal_0_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_status_log_1_cross_30(){

        $tabla = "tabla_status_crossmember_30";
        $respuesta = ModeloCross_30::mdl_status_log_1_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_status_log_0_cross_30(){

        $tabla = "tabla_status_crossmember_30";
        $respuesta = ModeloCross_30::mdl_status_log_0_cross_30($tabla);
        return $respuesta;

    }

    static public function ctr_insert_paro_status_mtto_1_cross_30($datos){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_insert_paro_status_mtto_1_cross_30($tabla, $datos);
        return $respuesta;

    }

    static public function ctr_insert_paro_status_mtto_0_cross_30($datos){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_insert_paro_status_mtto_0_cross_30($tabla, $datos);
        return $respuesta;

    }

    static public function ctr_insert_paro_status_prod_1_cross_30($datos){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_insert_paro_status_prod_1_cross_30($tabla, $datos);
        return $respuesta;

    }

    static public function ctr_insert_paro_status_prod_0_cross_30($datos){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_insert_paro_status_prod_0_cross_30($tabla, $datos);
        return $respuesta;

    }

    static public function ctr_insert_paro_status_cal_1_cross_30($datos){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_insert_paro_status_cal_1_cross_30($tabla, $datos);
        return $respuesta;

    }

    static public function ctr_insert_paro_status_cal_0_cross_30($datos){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_insert_paro_status_cal_0_cross_30($tabla, $datos);
        return $respuesta;

    }

    static public function ctr_insert_paro_status_log_1_cross_30($datos){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_insert_paro_status_log_1_cross_30($tabla, $datos);
        return $respuesta;

    }

    static public function ctr_insert_paro_status_log_0_cross_30($datos){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_insert_paro_status_log_0_cross_30($tabla, $datos);
        return $respuesta;

    }

    static public function ctr_mtto_correo_inf_cross_30($datos, $fechaparo){

        $tabla = "tabla_usuario";
        $respuesta = ModeloCross_30::mdl_mtto_correo_inf_cross_30($tabla);

        if(@$respuesta != '' || @$respuesta != null){

          $i = 0;
          foreach (@$respuesta["correo_electronico"] as $value) {

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

            //Server settings
            $mail->SMTPDebug = 0;                                 // ver debug poner numero 2
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'SMTP.gmail.com';                   // Specify main and backup SMTP servers  Office365
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'sammygumu@gmail.com';                 // SMTP username
            $mail->Password = 'Ironmaiden12';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('sammygumu@gmail.com', 'MARELLI');
            $mail->addAddress($respuesta["correo_electronico"][$i], 'Dear');     // $correoJD

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'STOP DETECTION IN CROSSMEMBER / STATION 30.';
            $mail->Body    = 'Dear '.$respuesta["nombre_completo"][$i].','.
            '</br> A stop has been detected at station <b> 30 </b>, '.
            '</br> within the area <b>CROSSMEMBER</b>, '.
            '</br> by <b> MAINTENANCE </b>, '.
            '</br> Within  <b>'.$fechaparo.'</b>, '.
            '</br> please go to the same. '.

            '</br> </br> To view more information, and proceed to give better follow-up to it,</br>'.
            '</br> <b> Please enter the module <b> active stoppages to be able to see the corresponding information &nbsp<b> Thanks.</b>'.
            '</br> </br> <b> keep having an excellent shift.</b>'.

            '</br> <b> ANDON System MARELLI. </b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();

          $i++;

          }

        }

    }

    static public function ctr_prod_correo_inf_cross_30($datos, $fechaparo){

        $tabla = "tabla_usuario";
        $respuesta = ModeloCross_30::mdl_prod_correo_inf_cross_30($tabla);

        if(@$respuesta != '' || @$respuesta != null){

          $i = 0;
          foreach (@$respuesta["correo_electronico"] as $value) {

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

            //Server settings
            $mail->SMTPDebug = 0;                                 // ver debug poner numero 2
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'SMTP.gmail.com';                   // Specify main and backup SMTP servers  Office365
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'sammygumu@gmail.com';                 // SMTP username
            $mail->Password = 'Ironmaiden12';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('sammygumu@gmail.com', 'MARELLI');
            $mail->addAddress($respuesta["correo_electronico"][$i], 'Dear');     // $correoJD

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'STOP DETECTION IN CROSSMEMBER / STATION 30.';
            $mail->Body    = 'Dear '.$respuesta["nombre_completo"][$i].','.
            '</br> A stop has been detected at station <b> 30 </b>, '.
            '</br> within the area <b>CROSSMEMBER</b>, '.
            '</br> by <b> PRODUCTION </b>, '.
            '</br> Within  <b>'.$fechaparo.'</b>, '.
            '</br> please go to the same. '.

            '</br> </br> To view more information, and proceed to give better follow-up to it,</br>'.
            '</br> <b> Please enter the module <b> active stoppages to be able to see the corresponding information &nbsp<b> Thanks.</b>'.
            '</br> </br> <b> keep having an excellent shift.</b>'.

            '</br> <b> ANDON System MARELLI. </b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();

          $i++;

          }

        }

    }

    static public function ctr_cal_correo_inf_cross_30($datos, $fechaparo){

        $tabla = "tabla_usuario";
        $respuesta = ModeloCross_30::mdl_cal_correo_inf_cross_30($tabla);

        if(@$respuesta != '' || @$respuesta != null){

          $i = 0;
          foreach (@$respuesta["correo_electronico"] as $value) {

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

            //Server settings
            $mail->SMTPDebug = 0;                                 // ver debug poner numero 2
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'SMTP.gmail.com';                   // Specify main and backup SMTP servers  Office365
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'sammygumu@gmail.com';                 // SMTP username
            $mail->Password = 'Ironmaiden12';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('sammygumu@gmail.com', 'MARELLI');
            $mail->addAddress($respuesta["correo_electronico"][$i], 'Dear');     // $correoJD

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'STOP DETECTION IN CROSSMEMBER / STATION 30.';
            $mail->Body    = 'Dear '.$respuesta["nombre_completo"][$i].','.
            '</br> A stop has been detected at station <b> 30 </b>, '.
            '</br> within the area <b>CROSSMEMBER</b>, '.
            '</br> by <b> QUALITY </b>, '.
            '</br> Within  <b>'.$fechaparo.'</b>, '.
            '</br> please go to the same. '.

            '</br> </br> To view more information, and proceed to give better follow-up to it,</br>'.
            '</br> <b> Please enter the module <b> active stoppages to be able to see the corresponding information &nbsp<b> Thanks.</b>'.
            '</br> </br> <b> keep having an excellent shift.</b>'.

            '</br> <b> ANDON System MARELLI. </b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();

          $i++;

          }

        }

    }

    static public function ctr_log_correo_inf_cross_30($datos, $fechaparo){

        $tabla = "tabla_usuario";
        $respuesta = ModeloCross_30::mdl_log_correo_inf_cross_30($tabla);

        if(@$respuesta != '' || @$respuesta != null){

          $i = 0;
          foreach (@$respuesta["correo_electronico"] as $value) {

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

            //Server settings
            $mail->SMTPDebug = 0;                                 // ver debug poner numero 2
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'SMTP.gmail.com';                   // Specify main and backup SMTP servers  Office365
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'sammygumu@gmail.com';                 // SMTP username
            $mail->Password = 'Ironmaiden12';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('sammygumu@gmail.com', 'MARELLI');
            $mail->addAddress($respuesta["correo_electronico"][$i], 'Dear');     // $correoJD

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'STOP DETECTION IN CROSSMEMBER / STATION 30.';
            $mail->Body    = 'Dear '.$respuesta["nombre_completo"][$i].','.
            '</br> A stop has been detected at station <b> 30 </b>, '.
            '</br> within the area <b>CROSSMEMBER</b>, '.
            '</br> by <b> LOGISTICS </b>, '.
            '</br> Within  <b>'.$fechaparo.'</b>, '.
            '</br> please go to the same. '.

            '</br> </br> To view more information, and proceed to give better follow-up to it,</br>'.
            '</br> <b> Please enter the module <b> active stoppages to be able to see the corresponding information &nbsp<b> Thanks.</b>'.
            '</br> </br> <b> keep having an excellent shift.</b>'.

            '</br> <b> ANDON System MARELLI. </b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();

          $i++;

          }

        }

    }

    static public function ctr_cross_30_status_PrimerTurno_6_7(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_PrimerTurno_6_7($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_PrimerTurno_7_8(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_PrimerTurno_7_8($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_PrimerTurno_8_9(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_PrimerTurno_8_9($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_PrimerTurno_9_10(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_PrimerTurno_9_10($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_PrimerTurno_10_11(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_PrimerTurno_10_11($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_PrimerTurno_11_12(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_PrimerTurno_11_12($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_PrimerTurno_12_13(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_PrimerTurno_12_13($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_PrimerTurno_13_14(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_PrimerTurno_13_14($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_PrimerTurno_14_14_30(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_PrimerTurno_14_14_30($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_SegundoTurno_14_30_15(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_SegundoTurno_14_30_15($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_SegundoTurno_15_16(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_SegundoTurno_15_16($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_SegundoTurno_16_17(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_SegundoTurno_16_17($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_SegundoTurno_17_18(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_SegundoTurno_17_18($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_SegundoTurno_18_19(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_SegundoTurno_18_19($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_SegundoTurno_19_20(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_SegundoTurno_19_20($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_SegundoTurno_20_21(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_SegundoTurno_20_21($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_SegundoTurno_21_22(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_SegundoTurno_21_22($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_SegundoTurno_22_22_30(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_SegundoTurno_22_22_30($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_TercerTurno_22_30_23(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_TercerTurno_22_30_23($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_TercerTurno_23_00(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_TercerTurno_23_00($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_TercerTurno_00_01(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_TercerTurno_00_01($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_TercerTurno_01_02(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_TercerTurno_01_02($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_TercerTurno_02_03(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_TercerTurno_02_03($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_TercerTurno_03_04(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_TercerTurno_03_04($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_TercerTurno_04_05(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_TercerTurno_04_05($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_status_TercerTurno_05_06(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_status_TercerTurno_05_06($tabla);
        return $respuesta;

    }

    static public function ctr_cross_30_tiempo_paro_hora_oee(){

        $tabla = "tabla_paros";
        $respuesta = ModeloCross_30::mdl_cross_30_tiempo_paro_hora_oee($tabla);
        return $respuesta;

    }

}
