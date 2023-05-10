const ajax = "http://localhost:3000/ofertas";
fetch(ajax)
    .then(response => response.json())
    .then(ofertas => {
        for (let i = ofertas.length - 1; i>=10; i--) {
            let ofertasExclusivas = document.createElement("div");
            ofertasExclusivas.setAttribute("class", "contenedorOfertasExclusivas");
            ofertasExclusivas.setAttribute("id", "contenedorOfertasExclusivas"+i);
            document.querySelector("#ofertasExclusivas").appendChild(ofertasExclusivas);
            if (i % 2 == 0) {
                ofertasExclusivas.innerHTML=`
                    <div class="producto" id="producto${i}" data-modal="modal${i}" data-aos="fade-down">
                        <img src="${ofertas[i].imagen}" width="150px" height="150px">
                        <p>${ofertas[i].nombre}</p>
                    </div>
                    <div id="modal${i}" class="ventana-modal">
                        <div class="contenido-ventana-modal">
                            <div id="cabezeraModal">
                                <span class="cerrar" id="cerrar${i}">&times;</span>
                                <h3>${ofertas[i].nombre}</h3>
                            </div>
                            <img src="${ofertas[i].imagen}" width="150px" height="150px">
                            <p>${ofertas[i].descripcion}</p>
                            <div id="codigo">
                                <h3>Código:</h3>
                                <h3>${ofertas[i].codigo}</h3>
                            </div>
                        </div>
                    </div>
                `;
            } else {
                ofertasExclusivas.innerHTML=`
                    <div class="producto" id="producto${i}" data-modal="modal${i}" data-aos="fade-up">
                        <img src="${ofertas[i].imagen}" width="150px" height="150px">
                        <p>${ofertas[i].nombre}</p>
                    </div>
                    <div id="modal${i}" class="ventana-modal">
                        <div class="contenido-ventana-modal">
                            <div id="cabezeraModal">
                                <span class="cerrar" id="cerrar${i}">&times;</span>
                                <h3>${ofertas[i].nombre}</h3>
                            </div>
                            <img src="${ofertas[i].imagen}" width="150px" height="150px">
                            <p>${ofertas[i].descripcion}</p>
                            <div id="codigo">
                                <h3>Código:</h3>
                                <h3>${ofertas[i].codigo}</h3>
                            </div>
                        </div>
                    </div>
                `;
            }
        }
        const productos = document.querySelectorAll('.producto');

        productos.forEach((producto)=> {
            producto.addEventListener('click', () => {
                const modal = document.getElementById(producto.dataset.modal);
                modal.style.display = 'block';

                const btnClose = modal.querySelector('.cerrar');
                btnClose.addEventListener('click', () => {
                    modal.style.display = 'none';
                });
            });
        });
    })
    .catch(err => {
        document.getElementById("ofertasDisponibles").innerHTML="El Servidor JSON está teniendo fallos, intentaremos volver lo antes posible";
    });