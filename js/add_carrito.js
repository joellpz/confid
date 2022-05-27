function Añadir_Carrito(id,cant){
    $.post("/php/add_carrito.php",
    {
        ident: id,
        stock: cant
    });               
}