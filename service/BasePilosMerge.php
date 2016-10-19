<?php

class BasePilosMerge {
    
    /**
     * @type Reader
     * @type Level
     * @type Word 
     */
    
    protected $reader;
    protected $basePilos;
    
    
    public function setReader($reader) {
        $this->reader = $reader;
    }
    
    public function setBaseMide($basePilos) {
        $this->basePilos = $basePilos;
    }
    
    public function getArrayAllEntitiesToBuildJson() {
        $entitiesArray = $this->basePilos->getArrayAllEntities();
        $dataArray = array();
        
        foreach ($entitiesArray as $i => $entities) {
            $dataArray[$i]['ies'] = $entities['ies'];
            $dataArray[$i]['ciudad'] = $entities['ciudad'];
            $dataArray[$i]['departamento'] = $entities['departamento'];
            $dataArray[$i]['tipo_ies'] = $entities['tipo_ies'];
            $dataArray[$i]['programa_academico'] = $entities['programa_academico'];
            $dataArray[$i]['numero_periodo'] = $entities['numero_periodo'];
            $dataArray[$i]['costo_matricula'] = $entities['costo_matricula'];
            $dataArray[$i]['fecha_cierre'] = $entities['fecha_cierre'];
            $dataArray[$i]['link'] = $entities['link'];
        }
        
        return $dataArray;
    }
    
}
