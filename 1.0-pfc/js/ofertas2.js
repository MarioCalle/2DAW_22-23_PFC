const ajax2 = "http://localhost:3000/ofertas";
fetch(ajax2)
    .then(response => response.json())
    .then(ofertas2 => {
        ofertas2.forEach((e, j) => {
                if (j >= 10) {
                    return false;
                } else {
                    let contenedorOferta = document.createElement("div");
                    contenedorOferta.setAttribute("class", "contenedorOferta");
                    contenedorOferta.setAttribute("id", "contenedorOferta"+j);
                    document.querySelector("#ofertasDisponibles").appendChild(contenedorOferta);
                    if (j % 2 == 0) {
                        contenedorOferta.innerHTML=`
                            <div class="producto" id="producto${j}" data-modal="modal${j}" data-aos="fade-down">
                                <img src="${e.imagen}" width="150px" height="150px">
                                <p>${e.nombre}</p>
                            </div>
                            <div id="modal${j}" class="ventana-modal">
                                <div class="contenido-ventana-modal">
                                    <div id="cabezeraModal">
                                        <span class="cerrar" id="cerrar${j}">&times;</span>
                                        <h3>${e.nombre}</h3>
                                    </div>
                                    <img src="${e.imagen}" width="150px" height="150px">
                                    <p>${e.descripcion}</p>
                                    <div id="codigo">
                                        <h3>Código:</h3>
                                        <h3>${e.codigo}</h3>
                                    </div>
                                </div>
                            </div>
                        `;
                    } else {
                        contenedorOferta.innerHTML=`
                            <div class="producto" id="producto${j}" data-modal="modal${j}" data-aos="fade-up">
                                <img src="${e.imagen}" width="150px" height="150px">
                                <p>${e.nombre}</p>
                            </div>
                            <div id="modal${j}" class="ventana-modal">
                                <div class="contenido-ventana-modal">
                                    <div id="cabezeraModal">
                                        <span class="cerrar" id="cerrar${j}">&times;</span>
                                        <h3>${e.nombre}</h3>
                                    </div>
                                    <img src="${e.imagen}" width="150px" height="150px">
                                    <p>${e.descripcion}</p>
                                    <div id="codigo">
                                        <h3>Código:</h3>
                                        <h3>${e.codigo}</h3>
                                    </div>
                                </div>
                            </div>
                        `;
                    }
                } 
            })
        });