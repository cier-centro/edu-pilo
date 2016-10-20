<script type="text/javascript" src="js/angular.js"></script>
<script type="text/javascript" src="js/angular.ng-modules.js"></script>
<script type="text/javascript" src="js/dirPagination.js"></script>
<script type="text/javascript" src="js/piloController.js"></script>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="css/internas.css">

<div ng-module="pilo" class="study-place">
    <div ng-controller="piloController">
        <div class="row">
            <div class="container">
                <div id="dvSearch">
                    <form class="table table-responsive tbSearchPilos">
                            <div class="col-xs-12 col-sm-6 form-group">
                                <label class="control-label">Ies: </label>
                                <select id="ies" class="form-control">
                                    <option value="">-- Seleccione --</option>
                                    <option ng-repeat="arrayIes in ies" value="{{arrayIes.name}}">{{arrayIes.name}}</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-6 form-group">
                                <label class="control-label">Ciudad: </label>
                                <select id="municipality" class="form-control">
                                    <option value="">-- Seleccione --</option>
                                    <option ng-repeat="arrayCiudades in ciudades" value="{{arrayCiudades.name}}">{{arrayCiudades.name}}</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-6 form-group">
                                <label class="control-label">Departamento: </label>
                                <select id="deparment" class="form-control">
                                    <option value="">-- Seleccione --</option>
                                    <option ng-repeat="arrayDepartamentos in departamentos" value="{{arrayDepartamentos.name}}">{{arrayDepartamentos.name}}</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-6 form-group">
                                <label class="control-label">Programa académico: </label>
                                <select id="academicProgram" class="form-control">
                                    <option value="">-- Seleccione --</option>
                                    <option ng-repeat="arrayProgramas in programas" value="{{arrayProgramas.name}}">{{arrayProgramas.name}}</option>
                                </select>
                            </div>
                    <button id="btnSearch" class="btn btn-warning btn-lg" ng-click="search();">Buscar</button>
                  </form>
                </div>
                <div class="table-responsive">
                    <table class="table tbPilos">
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
                </div>
                <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true" ></dir-pagination-controls>
            </div>
        </div>
    </div>
</div>
