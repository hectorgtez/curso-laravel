import { Link } from 'react-router-dom';

import { useAuth } from '../hooks/useAuth';

export default function AdminSidebar() {
  const { logout, user } = useAuth({ middleware: 'auth' });

  return (
    <aside className="md:w-72 h-screen">
      <div className="p-4">
        <img
          src="img/logo.svg"
          alt="Logotipo de la aplicación"
          className="w-32 mx-auto"
        />
      </div>

      <p className="my-5 text-lg text-center font-semibold">Hola, { user?.name }</p>

      <nav className="flex flex-col p-4">
        <Link
          to="/admin"
          className="flex items-center bg-white text-md font-semibold border-t border-b w-full
            p-3 hover:bg-amber-400 cursor-pointer transition ease-in-out duration-150"
        >
          Órdenes
        </Link>
        <Link
          to="/admin/productos"
          className="flex items-center bg-white text-md font-semibold border-t border-b w-full
            p-3 hover:bg-amber-400 cursor-pointer transition ease-in-out duration-150"
        >
          Productos
        </Link>
      </nav>

      <div className="my-5 px-5">
          <button
            type="button"
            onClick={ logout }
            className="text-center bg-red-500 w-full p-3 font-bold text-white truncate rounded-md"
          >
            Cerrar sesión
          </button>
      </div>
    </aside>
  )
}
