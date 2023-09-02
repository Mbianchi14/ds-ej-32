<?php

require_once '../../modelo/operador.php';
require_once '../../modelo/satelite.php';
require_once 'responses/consultarResponse.php';
header('Content-Type: application/json');

$cresp = new ConsultarResponse();
$idSatelite = $_GET['id'];

$op=new Operador();
$op->Nombre = "ARSAT";
$op->TipoEmpresa = "Publica";
$op->FormaLegal = "Sociedad anónima";

$s=new Satelite();
$s->Id = $idSatelite;
$s->Nombre = "Arsat-1";
$s->Operador = $op;
$s->TipoMision = "comunicaciones";
$s->DuracionEnAnios = "15";

$cresp->Satelite = $s;

echo json_encode($cresp);
