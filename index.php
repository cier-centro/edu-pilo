<script type="text/javascript" src="js/angular.js"></script>
<script type="text/javascript" src="js/angular.ng-modules.js"></script>
<script type="text/javascript" src="js/dirPagination.js"></script>
<script type="text/javascript" src="js/piloController.js"></script>

<div ng-module="pilo" >
    <div ng-controller="piloController">

        <div id="dvSearchNameUniversities">
            <label>Listado de universidades: </label>
            <input type="text" id="nameUniversity" ng-model="fieldSearch.nameUniversity">
            <button id="btnSearch" ng-click="searchByNameUniversities();">Buscar</button>
        </div>

        <div id="dvSearchOther">
            <table class="tbSearchPilos">

                <tr>
                    <td>
                        <label>Ies: </label>
                        <select id="slcIes" ng-model="fieldSearch.ies">
                            <option value="">-- Seleccione --</option>
                            <option value="SI">IES acreditadas</option>
                            <option value="NO">IES no acreditada</option>
                        </select>
                    </td>

                    <td>
                        <label>Ciudad: </label>
                        <select id="slcMunicipality" ng-model="fieldSearch.municipality">
                            
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Departamento: </label>
                        <select id="slcDeparment" ng-model="fieldSearch.deparment">
                            <option value="">-- Seleccione --</option>
                            <option value="OFICIAL">IES públicas</option>
                            <option value="PRIVADA">IES no públicas</option>
                        </select>
                    </td>
                    <td>
                        <label>Programa académico: </label>
                        <select id="slcProgramaAcademico" ng-model="fieldSearch.classificationGroup">
                            <option value="">-- Seleccione --</option> 
                            <option value="Pregrado">Pregrado</option>
                            <option value="Maestria">Maestria</option>
                            <option value="Doctorado">Doctorado</option>
                            <option value="Especializadas">Especializadas</option>
                        </select>
                    </td>
                </tr>

            </table>

            <button id="btnSearch" ng-click="searchByOtherFields();">Buscar</button>

        </div>

        <table class="tbUniversities">
            <thead>
                <tr>
                    <th>Puesto</th>
                    <th>Nombre de Institución Educativa</th>
                    <th>Sector</th>
                    <th>Tipo de Institución</th>
                    <th>Acreditación</th>
                </tr>

                <tr>
                    <th></th>
                    <th><input type="text" ng-model="filters.nameUniversity"></th>
                    <th><input type="text" ng-model="filters.sector"></th>
                    <th><input type="text" ng-model="filters.typeUniversity"></th>
                    <th><input type="text" ng-model="filters.isAccredited"></th>
                </tr>
            </thead>

            <tbody>
                <tr dir-paginate="arrayUniversities in universities| filter:filters |itemsPerPage:10">
                    <td>{{arrayUniversities.position}}</td>
                    <td>{{arrayUniversities.nameUniversity}}</td>
                    <td>{{arrayUniversities.sector}}</td>
                    <td>{{arrayUniversities.typeUniversity}}</td>
                    <td>{{arrayUniversities.isAccredited}}</td>
                </tr>
            </tbody>
        </table>
        
        <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true" ></dir-pagination-controls>

    </div>
</div>

