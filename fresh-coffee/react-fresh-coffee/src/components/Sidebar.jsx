import Categoria from './Categoria'
import useQuiosco from '../hooks/useQuiosco'

export default function Sidebar() {
  const { categorias } = useQuiosco();

  return (
    <aside className="md:w-72">
      <div className="p-4">
        <img
          src="img/logo.svg"
          alt="Logotipo de la aplicación"
          className="w-32 mx-auto"
        />
      </div>
      <div className="mt-7">
        { categorias.map(categoria => (
          <Categoria
            key={categoria.id}
            categoria={categoria}
          />
        )) }
      </div>
      <div className="my-5 px-5">
          <button
            type="button"
            className="text-center bg-red-500 w-full p-3 font-bold text-white truncate rounded-md"
          >
            Cancelar orden
          </button>
      </div>
    </aside>
  )
}
