<?php

use App\Models\Postulante;

$data = array();
$ci = Postulante::find($ci);

if($ci != null){
    return 'Hola';
}else{
    return 'mundo';
}

echo json_encode($data);

?>