<?php

require_once 'Reader.php';

class BasePilos {

    protected $reader;

    public function setReader($reader) {
        $this->reader = $reader;
    }
    
    public function getArrayAllEntities() {
        $sheet = $this->reader->getSheetObject();
        $entitiesArray = array();

        $i = 0;

        for ($file = 3; $file <= $sheet->getHighestRow(); $file++) {
            
            $ies = trim($sheet->getCellByColumnAndRow(0, $file)->getValue());
            $ciudad = trim($sheet->getCellByColumnAndRow(1, $file)->getValue());
            $departamento = trim($sheet->getCellByColumnAndRow(2, $file)->getValue());
            $tipo_ies = trim($sheet->getCellByColumnAndRow(3, $file)->getValue());
            $programa_academico = trim($sheet->getCellByColumnAndRow(4, $file)->getValue());
            $numero_periodo = trim($sheet->getCellByColumnAndRow(5, $file)->getValue());
            $costo_matricula = str_replace(',','.',number_format(trim($sheet->getCellByColumnAndRow(6, $file)->getValue())));
            $dateTimeObject = PHPExcel_Shared_Date::ExcelToPHPObject($sheet->getCellByColumnAndRow(7, $file)->getValue());
            $fecha_cierre = $dateTimeObject->format('d/m/Y');
            $link = trim($sheet->getCellByColumnAndRow(8, $file)->getValue());
            
            $entitiesArray[$i]['ies'] = $ies;
            $entitiesArray[$i]['ciudad'] = $ciudad;
            $entitiesArray[$i]['departamento'] = $departamento;
            $entitiesArray[$i]['tipo_ies'] = $tipo_ies;
            $entitiesArray[$i]['programa_academico'] = $programa_academico;
            $entitiesArray[$i]['numero_periodo'] = $numero_periodo;
            $entitiesArray[$i]['costo_matricula'] = $costo_matricula;
            $entitiesArray[$i]['fecha_cierre'] = $fecha_cierre;
            $entitiesArray[$i]['link'] = $link;
            
            $i++;
        }

        return $entitiesArray;
    }

}
