<h4> Actualizar Proveedor </h4>
        <div class="row">
            <form method='post' enctype='multipart/form-data' class='col s12 m4 offset-m4 l6 offset-l3'>
                <div class="row">
                    <div class="input-field col s12  ">
                        <input id="nombre" type="text" name='nombre' class="validate" value='<?php print($proveedor->getNombre()) ?>' required/>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s12  ">
                        <input id="descripcion" type="text" name='correo'  class="validate" value='<?php print($proveedor->getCorreo()) ?>' required/>
                        <label for="descripcion">Correo</label>
                    </div>
                    <div class="input-field col s12  ">
                    <input id="telefono" type="number" name='telefono' class="validate" value='<?php print($proveedor->getTelefono()) ?>' required/>
                        <label for="telefono">Telefono</label>
                    </div>
                </div>
                <div class=" col s12 m4 l2 right">
                    <a href="index.php" data-tooltip='Cancelar' class="waves-effect waves-light btn  # ef5350 red aligera-2"><i class=" material-icons">cancel</i></a>
                    <button type='submit'  name='actualizar' data-tooltip='Actualizar' class=" waves-effect waves-light btn # 66bb6a green aligera-2 tooltipped"><i class=" material-icons">check_circle</i></button>
                </div>
            </form>
        </div>

        
                       