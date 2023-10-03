/* eslint-disable react/prop-types */
import { formatearDinero } from "../helpers"
import useQuiosco from "../hooks/useQuiosco"

export default function Producto({producto, botonAgregar = false, botonDisponible = false}) {
  const { nombre, imagen, precio } = producto
  const { handleClickModal, handleSetProducto, handleClickProductoAgotado } = useQuiosco();

  return (
    <div className="border p-3 shadow bg-white rounded-md">
      <img
        src={`/img/${imagen}.jpg`}
        alt={`Imagen ${nombre}`}
        className="w-full rounded-sm"
      />

      <div className="p-5">
        <h3 className="text-xl font-bold">{ nombre }</h3>
        <p className="mt-5 font-black text-2xl text-amber-500">
          { formatearDinero(precio) }
        </p>

        { botonAgregar && (
          <button
            type="button"
            onClick={ () => {
              handleSetProducto(producto);
              handleClickModal();
            }}
            className="bg-indigo-600 hover:bg-indigo-800 text-white w-full
              mt-5 p-3 font-bold rounded-md transition ease-in-out duration-150"
          >
            Agregar
          </button>
        ) }

        { botonDisponible && (
          <button
            type="button"
            onClick={ () => handleClickProductoAgotado(producto.id) }
            className="bg-indigo-600 hover:bg-indigo-800 text-white w-full
              mt-5 p-3 font-bold rounded-md transition ease-in-out duration-150"
          >
            Producto agotado
          </button>
        ) }
      </div>
    </div>
  )
}
