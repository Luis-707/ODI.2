var boton=document.getElementById('agregar_obj');
var guardar=document.getElementById('guardar_obj');
var lista_obj=document.getElementById("lista_obj");

var data_obj=[];
boton.addEventListener("click",agregar_obj);
guardar.addEventListener("click",save_obj);

var cant=0;

function agregar_obj(){
    var nombre_obj=document.querySelector('#nombre_obj').value;
    var peso_obj=parseInt(document.querySelector('#peso_obj').value);
    var rango_obj=parseInt(document.querySelector('#rango_obj').value);
    var total_obj=peso_obj*rango_obj;

    //agrega elementos al arreglo
    data_obj.push(
        {"id":cant,"nombre_obj":nombre_obj,"peso_obj":peso_obj,"rango_obj":rango_obj,"total_obj":total_obj}
    );
   
   //convertir el arreglo a json
  // console.log(JSON.stringify(data));
  var id_row='row'+cant;
  var fila='<tr id='+id_row+'><td>'+nombre_obj+'</td><td>'+peso_obj+'</td><td>'+rango_obj+'</td><td>'+total_obj+'</td><td><a href="#" class="btn btn-danger" onclick="eliminar_obj('+cant+')";>Eliminar</a></td></tr>';
  //agregar fila a la tabla
  $("#lista_obj").append(fila);
  $("#nombre_obj").val('');
  $("#peso_obj").val('');
  $("#rango_obj").val('');
  $("#nombre_obj").focus();
  cant++;
  sumar_obj();
  sumar_todos();
  eliminar_obj(row);
}
function eliminar_obj(row) {
  return new Promise((resolve, reject) => {
    // Elimina la fila de la tabla
    $("#row" + row).remove();
    // Encuentra el elemento en el arreglo de datos que coincide con el ID de la fila
    var i = 0;
    var pos = -1;
    for (i of data_obj) {
      if (i.id == row) {
        pos = i;
      }
      i++;
    }
    // Elimina el elemento del arreglo de datos
    data_obj.splice(pos, 1);
    // Resuelve la promesa
    resolve();
  }).then(() => {
    // Ejecuta las funciones sumar_comp() y sumar_todos()
    sumar_comp();
    sumar_todos();
  });
}


function sumar_obj(){
    return new Promise((resolve, reject) => {
      let tot_obj = 0;
      for (x of data_obj) {
        tot_obj += x.total_obj;
      }
      document.querySelector("#total_obj").innerHTML = ": " + tot_obj;
      resolve(tot_obj);
    });
  }
  
function save_obj(){
    var json=JSON.stringify(data_obj);
    $.ajax({
        type: "POST",
        url: "api.php",
        data_obj: "json="+json,
        success:function(respo){
           location.reload();
        }
        
    });
}


//Elementos para la tabla de competencias

var boton=document.getElementById('agregar_comp');
var guardar_2=document.getElementById('guardar_comp');
var lista_obj=document.getElementById("lista_comp");

boton.addEventListener("click",agregar_comp);
guardar_2.addEventListener("click",save_comp);

var data=[];
var cant2=0;

function agregar_comp(){
    var nombre_comp=document.querySelector('#nombre_comp').value;
    var peso_comp=parseInt(document.querySelector('#peso_comp').value);
    var rango_comp=parseInt(document.querySelector('#rango_comp').value);
    var total_comp=peso_comp*rango_comp;

    //agrega elementos al arreglo
    data.push(
        {"id":cant2,"nombre_comp":nombre_comp,"peso_comp":peso_comp,"rango_comp":rango_comp,"total_comp":total_comp}
    );
   
   //convertir el arreglo a json
  // console.log(JSON.stringify(data));
  var id_row2='row2'+cant2;
  var fila_comp='<tr id='+id_row2+'><td>'+nombre_comp+'</td><td>'+peso_comp+'</td><td>'+rango_comp+'</td><td>'+total_comp+'</td><td><a href="#" class="btn btn-danger" onclick="eliminar_comp('+cant2+')";>Eliminar</a></td></tr>';
  //agregar fila a la tabla
  $("#lista_comp").append(fila_comp);
  $("#nombre_comp").val('');
  $("#peso_comp").val('');
  $("#rango_comp").val('');
  $("#nombre_comp").focus();
  cant2++;
 
    sumar_comp();
    sumar_todos();
    eliminar_comp(row);
  }
  function eliminar_comp(row) {
    return new Promise((resolve, reject) => {
      // Elimina la fila de la tabla
      $("#row2" + row).remove();
      // Encuentra el elemento en el arreglo de datos que coincide con el ID de la fila
      var i = 0;
      var pos = -1;
      for (i of data) {
        if (i.id == row) {
          pos = i;
        }
        i++;
      }
      // Elimina el elemento del arreglo de datos
      data.splice(pos, 1);
      // Resuelve la promesa
      resolve();
    }).then(() => {
      // Ejecuta las funciones sumar_comp() y sumar_todos()
      sumar_comp();
      sumar_todos();
    });
  }

function sumar_comp() {
    return new Promise((resolve, reject) => {
      let tot_comp = 0;
      for (y of data) {
        tot_comp += y.total_comp;
      }
      document.querySelector("#total_comp").innerHTML = ": " + tot_comp;
      resolve(tot_comp);
    });
  }
function save_comp(){
    var json=JSON.stringify(data);
    $.ajax({
        type: "POST",
        url: "api.php",
        data: "json="+json,
        success:function(respo){
           location.reload();
        }
        
    });
}

const rendimientos = {
  "AÚN NO HA SIDO EVALUADO": [0],
  "ACTUACIÓN MUY POR DEBAJO DE LO ESPERADO": [1, 179],
  "ACTUACIÓN POR DEBAJO DE LO ESPERADO": [180, 259],
  "ACTUACIÓN DENTRO DE LO ESPERADO": [260, 339],
  "ACTUACIÓN SOBRE LO ESPERADO": [340, 419],
  "DESEMPEÑO EXCEPCIONAL": [420, 500],
  "Valor fuera de rango": [501, Infinity]
};

async function sumar_todos() {
  try {
    const tot_obj = await sumar_obj();
    const tot_comp = await sumar_comp();
    const total = tot_obj + tot_comp;
    document.querySelector("#total").innerHTML = ": " + total;
    const rendimiento = await evaluarRendimiento(total);
    document.querySelector("#rendimiento").innerHTML = rendimiento;
  } catch (error) {
    console.error("Error al calcular el total:", error);
  }
}

async function evaluarRendimiento(total) {
  return new Promise((resolve, reject) => {
    for (const [rendimiento, rangos] of Object.entries(rendimientos)) {
      if (rangos[0] <= total && total <= rangos[1]) {
        resolve(rendimiento);
      }
    }
    resolve("Valor fuera de rango");
  });
}

sumar_todos().catch((error) => {
  console.error("Error al mostrar el total:", error);
});



/*function evaluarRendimiento(total) {
    if (total === 0) {
        return "AÚN NO HA SIDO EVALUADO";
    } else if (total <= 179) {
        return "ACTUACIÓN MUY POR DEBAJO DE LO ESPERADO";
    } else if (total <= 259) {
        return "ACTUACIÓN POR DEBAJO DE LO ESPERADO";
    } else if (total <= 339) {
        return "ACTUACIÓN DENTRO DE LO ESPERADO";
    } else if (total <= 419) {
        return "ACTUACIÓN SOBRE LO ESPERADO";
    } else if (total <= 500) {
        return "DESEMPEÑO EXCEPCIONAL";
    } else if(total > 500){
        return "Valor fuera de rango";
    }
  }
  
  /* Función para actualizar los totales de la tercera tabla
  function updateTotalScores() {
    const totalTable1 = parseFloat(total_obj.textContent);
    const totalTable2 = parseFloat(total_comp.textContent);
    const total_AB = totalTable1 + totalTable2;
  
    puntuacionSeccionB.textContent = totalTable1.toFixed(2);
    puntuacionSeccionC.textContent = totalTable2.toFixed(2);
    puntuacionTotal.textContent = total_AB.toFixed(2);
  
    const rendimientoText = evaluarRendimiento(total_AB);
    rendimiento.textContent = rendimientoText;
  }*/

