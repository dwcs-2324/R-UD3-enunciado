<?php



function eliminar_tienda(int $id): bool
{
   
}

/**
 * Comprueba si existe en la tabla stocks un producto en una tienda dada
 * @param int $producto_id id del producto
 * @param int $tienda_id id de la tienda
 * @return bool true si existe, false en caso contrario
 */
function existeProducto(int $producto_id, int $tienda_id): bool
{
   


}
/**
 * Actualiza las unidades de stock de un producto en una tienda. 
 * @param int $producto_id id del producto
 * @param int $tienda_id id de la tienda
 * @param int $unidades unidades en las que se incrementa el stock actual.
 * @return bool true si se ha actualizado correctamente, false en caso contrario
 */
function updateStock(int $producto_id, int $tienda_id, int $unidades): bool
{
  



}
/**
 * Inserta un registro en tabla stocks
 * @param int $producto_id id del producto
 * @param int $tienda_id id de la tienda
 * @param int $unidades unidades de stock
 * @return bool true si se ha insertado correctamente, false en caso contrario
 */
function insertStock(int $producto_id, int $tienda_id, int $unidades): bool
{
    



}
