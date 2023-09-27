import { formatearDinero } from "../helpers"

// eslint-disable-next-line react/prop-types
export default function Producto({producto}) {
  // eslint-disable-next-line react/prop-types
  const { nombre, imagen, precio } = producto

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
        <button
          type="button"
          className="bg-indigo-600 hover:bg-indigo-800 text-white w-full mt-5 p-3 font-bold rounded-md transition ease-in-out duration-150"
        >
          Agregar
        </button>
      </div>
    </div>
  )
}
