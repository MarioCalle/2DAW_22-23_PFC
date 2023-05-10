const ajax = "http://localhost:3000/ofertas";
fetch(ajax)
  .then((response) => response.json())
  .then((ofertas) => {
    for (let i = 0; i < ofertas.length; i++) {
      let oferta = ofertas[i];
      let option = document.createElement("option");
      document.querySelector("#cliente").appendChild(option); // Cambiar el selector por ID
      option.innerHTML = `<option value="${oferta.nombre}">${oferta.nombre}</option>`;
    }
    console.log(ofertas.length);
    // Obtener el formulario y agregar un evento de escucha para cuando se envía
    const form = document.querySelector("#formularioAñadir");
    const form2 = document.querySelector("#formularioEliminar");

    //Añadir una oferta
    form.addEventListener("submit", function (e) {
      e.preventDefault(); // Prevenir que se envíe el formulario de manera predeterminada

      // Obtener los valores de los campos del formulario
      const nombre = document.querySelector("#nombre").value;
      const descripcion = document.querySelector("#descripcion").value;
      const codigo = document.querySelector("#codigo").value;
      const imagen = document.querySelector("#imagen").files[0].name;
      console.log(imagen);

      // Obtener el JSON actual
      let actual = ofertas.length;
      const nuevoId = actual + 1;

      // Crear un nuevo objeto de oferta con los datos del formulario
      const nuevaOferta = {
        id: nuevoId,
        nombre: nombre,
        descripcion: descripcion,
        codigo: codigo,
        imagen: "/pfc/img/ofertas/nuevasOfertas/" + imagen,
      };

      // Enviar una solicitud POST al servidor para guardar los datos en la base de datos
      fetch("http://localhost:3000/ofertas", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(nuevaOferta),
      })
        .then((response) => response.json())
        .then((data) => {
          console.log("Se ha añadido la oferta:", data);
          form.reset(); // Resetear los valores del formulario
        })
        .catch((error) => {
          console.error("Se produjo un error al agregar la oferta:", error);
        });
    });
    //Eliminar una oferta
    form2.addEventListener("submit", function (e) {
      e.preventDefault(); // Prevenir que se envíe el formulario de manera predeterminada

      // Obtener el valor del campo de selección de la oferta a eliminar
      const nombre2 = document.querySelector("#cliente").value;
      const ofertaSeleccionada = ofertas.find(o => o.nombre === nombre2);
      const idOfertaSeleccionada = ofertaSeleccionada.id;
      console.log(nombre2)

      // Enviar una solicitud DELETE al servidor para eliminar la oferta seleccionada por nombre
      fetch(`http://localhost:3000/ofertas/${idOfertaSeleccionada}`, {
        method: "DELETE",
      })
        .then((response) => response.json())
        .then((data) => {
          console.log("Se ha eliminado la oferta:", data);
          form2.reset(); // Resetear los valores del formulario
        })
        .catch((error) => {
          console.error("Se produjo un error al eliminar la oferta:", error);
        });
    });
  });