
<div id="modalrv" class="modal black white-text" >
    <div class="modal-content">
        <p>
        <form method="post">
            <h5 class="center">Editar Residente</h5>
            <input type="hidden" id='rut_rv'/>
            <input id='nombre_rv' type="text"  readonly="">
            <input id='apellido_rv' type="text" readonly="" >
            <label>Edificio</label>
            <select id="edificio_rv">
                
            </select>
            <label>Departamento</label>
            <select id="departamento_rv">
                
            </select>
            <input id='vehiculo_rv' type="text"  >
            <input id='telefono_rv' type="text"  >
            
            

            <button type="submit" id='bt_erv' class='btn light-blue darken-4'>
                Editar
            </button>
            <button type="submit" id='bt_drv' class='btn red darken-4 right'>
                Eliminar
            </button>
        </form>
        </p>
    </div>   
</div>


<div class='container'>

    <div class="row">
        <div class="col s12">
            <h4 class="center-align white-text">Editar Residente</h4>

            <!-- Modal Trigger -->
            <div class="col s12">
                    <div class="input-field col s4 offset-s4">
                        <label for="resib">Buscar por Rut</label>
                        <input placeholder="Residente" id="resib" type="text" class="validate white-text" >
                    </div>
                    <a id="buscarreseditar" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">search</i></a>
                </div>
            <table class="bordered white-text">
                <thead>
                    <tr>
                        <th>RUT</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edificio</th>
                        <th>Departamento</th>
                        <th>Telefono</th>
                        <th>Fecha de Registro</th>
                        <th>Modificar</th>
                    </tr>
                </thead>
                <tbody id='bodyrv'>

                </tbody>
            </table>
        </div>
    </div>
</div>

