

<div class="row">
    <div class="col s12">
        <div class="container">
            <h3 class="center white-text">Registrar Visita</h3>
            <form id="regvis" >
                <div class="col s12">
                    <div class="input-field col s6 offset-s3">
                        <input placeholder="Rut" id="rutvis" type="text" class="validate white-text" required>

                    </div>
                    <a  id="limpiarrutv" ><i class="material-icons white-text">close</i></a>
                    <label for="limpiarrutv" class="white-text">Limpiar campo</label>
                </div>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Nombre" id="nombrevis" type="text" class="validate white-text" required>
                </div>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Apellido" id="apellidovis" type="text" class="validate white-text" required>
                </div>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Telefono" id="telefonovis" type="number" class="validate white-text" required>
                </div>
                <div class="input-field col s6 offset-s3 ">
                    <select id="edificiovis" class="white-text">

                    </select>
                    <label class="white-text">Edificio</label>
                </div>
                <div class="input-field col s6 offset-s3 ">
                    <select id="departamentovis" class="white-text">

                    </select>
                    <label class="white-text">Departamento</label>
                </div>

                <div class="col s6 offset-s3">
                    <h6 class="white-text">Vehiculo</h6>
                    <div class="switch">
                        <label>
                            No
                            <input type="checkbox" id="vehiculov">
                            <span class="lever"></span>
                            Si
                        </label>
                    </div>
                </div>
                <div class="col s6 offset-s3" style="display:none" id="agregarvehiculov">
                    <h5 class="center white-text">Agregar Vehiculo</h5>
                    <label for="patentev" class="white-text">Patente</label>
                    <input type="text" id="patentev"/>
                    <label for="marcavv" class="white-text">Marca</label>
                    <input type="text" id="marcavv"/>
                    <label for="numeroev" class="white-text">Numero Estacionamiento</label>
                    <input type="text" id="numeroev"/>
                    
                </div>


                <div class="col s6 offset-s3 right">
                    <button class="btn waves-effect blue" id="bt_registrarvis">Registrar</button>
                </div>



                

            </form>
        </div>

    </div>
</div>

