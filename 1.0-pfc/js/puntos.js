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