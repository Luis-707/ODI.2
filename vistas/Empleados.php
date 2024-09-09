<div id = "vista_prueba" class="contenedor">
    <form id="id_formularioEmpleado" > <!-- Todos los valores que se enviaran deben tener el atributo name, con este identificador llegara al servicio -->
        <input type="text" id="cod_empleado" name="cod_empleado" placeholder="Codigo empleado" pattern="[A-Za-z]+" required>
        <input type="text" id="empleado" name="empleado" placeholder="empleado" pattern="[A-Za-z]+" required>
        <button type="submit" onclick=" guardarEmpleado() ">Guardar</button>
        <button type="submit" onclick=" empleado() ">Buscar</button>
    </form>
</div>



