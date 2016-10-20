var app = "";

app = angular.module('pilo', ['angularUtils.directives.dirPagination']);

app.controller('piloController', function($scope, $http) {
    var obj = '';
    $http.get('service/Resources/Base-pilos.json').success(function(data) {
        obj = data;
    });

    $scope.ies = [];
    $http.get('service/Resources/Base-ies.json').success(function(data) {
        var arrayObject = '';
        angular.forEach(data, function(data) {
            arrayObject = {
                name: data.name.trim()
            };
            $scope.ies.push(arrayObject);
        });
    });
    
    $scope.ciudades = [];
    $http.get('service/Resources/Base-ciudades.json').success(function(data) {
        var arrayObject = '';
        angular.forEach(data, function(data) {
           arrayObject = {
                name: data.name.trim()
           };
           $scope.ciudades.push(arrayObject);
        });
    });
    
    $scope.departamentos = [];
    $http.get('service/Resources/Base-departamentos.json').success(function(data) {
        var arrayObject = '';
        angular.forEach(data, function(data) {
            arrayObject = {
                name: data.name.trim()
            };
            $scope.departamentos.push(arrayObject);
        });
    });
    
    $scope.programas = [];
    $http.get('service/Resources/Base-programas.json').success(function(data) {
        var arrayObject = '';
        angular.forEach(data, function(data) {
           arrayObject = {
                name: data.name.trim()
           };
           $scope.programas.push(arrayObject);
        });
    });

    $scope.search = function() {
        
        var filterSearch = 0;
        var arrayObject = '';
        var numberFilterActive = 0;
        $scope.pilos = [];
        
        var ies = document.getElementById('ies').value;
        var municipality = document.getElementById('municipality').value;
        var deparment = document.getElementById('deparment').value;
        var academicProgram = document.getElementById('academicProgram').value;

        if(ies == "" && municipality == "" && deparment == "" && academicProgram == ""){
            alert("Favor seleccione al menos un criterio de busqueda.");
            return false;
        }

        if(ies)
            numberFilterActive += 1;
        if(municipality)
            numberFilterActive += 1;
        if(deparment)
            numberFilterActive += 1;
        if(academicProgram)
            numberFilterActive += 1;

        angular.forEach(obj, function(pilo) {
            filterSearch = 0;
            arrayObject = {
                tipo_ies: pilo.tipo_ies.trim(),
                numero_periodo: pilo.numero_periodo.trim(),
                costo_matricula: pilo.costo_matricula.trim(),
                fecha_cierre: pilo.fecha_cierre.trim(),
                link: pilo.link.trim()
            };

            if(ies){
                if(ies == pilo.ies.trim())
                    filterSearch += 1;
            }

            if(municipality){
                if(municipality == pilo.ciudad.trim())
                    filterSearch += 1;
               }

            if(deparment){
                if(deparment == pilo.departamento.trim())
                    filterSearch += 1;
            }

            if(academicProgram){
                if(academicProgram == pilo.programa_academico.trim())
                    filterSearch = 1;
            }

            if(filterSearch == numberFilterActive){
                $scope.pilos.push(arrayObject);
            }

        });
        
    };
    
});