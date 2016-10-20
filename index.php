<script type="text/javascript" src="js/angular.js"></script>
<script type="text/javascript" src="js/angular.ng-modules.js"></script>
<script type="text/javascript" src="js/dirPagination.js"></script>
<script type="text/javascript" src="js/piloController.js"></script>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<div ng-module="pilo" >
    <div ng-controller="piloController">

        <div class="row">
            <div class="container">

                <div id="dvSearch">
                    <table class="table table-responsive tbSearchPilos">

                        <tr>
                            <td>
                                <label>Ies: </label>
                                <select id="ies" >
                                    <option value="">-- Seleccione --</option> 
                                    <option ng-repeat="arrayIes in ies" value="{{arrayIes.name}}">{{arrayIes.name}}</option> 
                                </select>
                            </td>

                            <td>
                                <label>Ciudad: </label>
                                <select id="municipality" >
                                    <option value="">-- Seleccione --</option> 
                                    <option ng-repeat="arrayCiudades in ciudades" value="{{arrayCiudades.name}}">{{arrayCiudades.name}}</option> 
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Departamento: </label>
                                <select id="deparment" >
                                    <option value="">-- Seleccione --</option> 
                                    <option ng-repeat="arrayDepartamentos in departamentos" value="{{arrayDepartamentos.name}}">{{arrayDepartamentos.name}}</option> 
                                </select>
                            </td>
                            <td>
                                <label>Programa académico: </label>
                                <select id="academicProgram" >
                                    <option value="">-- Seleccione --</option> 
                                    <option ng-repeat="arrayProgramas in programas" value="{{arrayProgramas.name}}">{{arrayProgramas.name}}</option> 
                                </select>
                            </td>
                        </tr>

                    </table>

                    <button id="btnSearch" ng-click="search();">Buscar</button>

                </div>

                <table class="table table-responsive tbPilos">
                    <thead>
                        <tr>
                            <th>Tipo Ies</th>
                            <th>Número de periodos</th>
                            <th>Costo matricula x periodo</th>
                            <th>Fecha de cierre</th>
                            <th>Enlace</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr dir-paginate="arrayPilos in pilos| filter:filters |itemsPerPage:10">
                            <td>{{arrayPilos.tipo_ies}}</td>
                            <td>{{arrayPilos.numero_periodo}}</td>
                            <td>{{arrayPilos.costo_matricula}}</td>
                            <td>{{arrayPilos.fecha_cierre}}</td>
                            <td><a href="{{arrayPilos.link}}" target="_back">{{arrayPilos.link}}</a></td>
                        </tr>
                    </tbody>
                </table>

                <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true" ></dir-pagination-controls>

            </div>
        </div>

    </div>

</div>