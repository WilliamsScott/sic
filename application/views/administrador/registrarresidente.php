<div id="modalvr" class="modal black white-text">
    <div class="modal-content">
        <p>
        <form method="post">
            <h5 class="center">Agregar Vehiculo</h5>
            <label for="rutrev" class="white-text">Rut</label>
            <input type="text" id="rutrev" class="white-text"/>
            <label for="patenter" class="white-text">Patente</label>
            <input type="text" id="patenter"/>
            <label for="marcavr" class="white-text">Marca</label>
            <input type="text" id="marcavr"/>
            <label for="modelor" class="white-text">Modelo</label>
            <input type="text" id="modelor"/>
            <label for="numeroer" class="white-text">Numero Estacionamiento</label>
            <input type="text" id="numeroer"/>
            <button type="submit" id="agregarvr" class="btn light-blue darken-4">Agregar</button>
        </form>
        </p>
    </div>
</div>


<div class="row">
    <div class="col s12">
        <div class="container">
            <h3 class="center white-text">Registro Residente</h3>
            <form >
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Rut" id="rutres" type="text" class="validate white-text" required>
                </div>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Nombre" id="nombreres" type="text" class="validate white-text" required>
                </div>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Apellido" id="apellidores" type="text" class="validate white-text" required>
                </div>

                <div class="input-field col s6 offset-s3 ">
                    <select id="edificiores" class="white-text">
                        
                    </select>
                    <label class="white-text">Edificio</label>
                </div>
                <div class="input-field col s6 offset-s3 ">
                    <select id="departamentores" class="white-text">
                        
                    </select>
                    <label class="white-text">Departamento</label>
                </div>
                <div class="input-field col s6 offset-s3">
                    <input placeholder="Telefono" id="telefonores" type="number" class="validate white-text" required>
                </div>
                <div class="col s6 offset-s3 right">
                    <button class="btn waves-effect blue" id="bt_registrarres">Registrar</button>
                </div>
                 <div class="input-field col s6 offset-s3 ">
                    <h6 class="white-text">Vehiculo</h6>

                    <a id="vehiculoresidente" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">directions_car</i></a>
                </div>

            </form>
        </div>

    </div>
</div>

