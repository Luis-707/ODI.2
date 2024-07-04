<div id = "vista_prueba" class="contenedor">
    <form id="id_formularioAlergias" > <!-- Todos los valores que se enviaran deben tener el atributo name, con este identificador llegara al servicio -->
        <input type="text" id="cod_alergia" name="cod_alergia" placeholder="Codigo alergia" pattern="[A-Za-z]+" required>
        <input type="text" id="alergia" name="alergiaa" placeholder="alergia" pattern="[A-Za-z]+" required>
        <button type="submit" onclick=" guardarAlergias() ">Guardar</button>
        <button type="submit" onclick=" alergias() ">Guardar</button>
    </form>
</div>



