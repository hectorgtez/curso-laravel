/* eslint-disable react/prop-types */
import useQuiosco from "../hooks/useQuiosco"

export default function Categoria({categoria}) {
  const { handleClickCategoria, categoriaActual } = useQuiosco();
  const { icono, id, nombre } = categoria

  return (
    <button
      type="button"
      onClick={ () => handleClickCategoria(id) }
      className={`${categoriaActual.id === id ? 'bg-amber-400' : 'bg-white'}
        flex items-center gap-4 border-t border-b w-full p-3 hover:bg-amber-400
        cursor-pointer transition ease-in-out duration-150`}
    >
      <img
        src={`/img/icono_${icono}.svg`}
        alt="Icono categoria"
        className="w-10"
      />
      <p className="text-md font-semibold cursor-pointer truncate">
        { nombre }
      </p>
    </button>
  )
}
