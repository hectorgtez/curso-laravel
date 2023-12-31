import { formatearDinero } from '../helpers';
import ResumenProducto from './ResumenProducto';

import useQuiosco from '../hooks/useQuiosco';
import { useAuth } from '../hooks/useAuth';

export default function Resumen() {
  const { pedido, total, handleSubmitNuevaOrden } = useQuiosco();
  const { logout } = useAuth({});

  const comprobarPedido = () => pedido.length === 0;

  const handleSubmit = e => {
    e.preventDefault();
    handleSubmitNuevaOrden(logout);
  }

  return (
    <aside className="w-72 h-screen overflow-y-scroll p-5">
      <h1 className="text-3xl font-black text-center">Pedido actual</h1>
      <p className="text-md mt-2 mb-5 text-center font-semibold">
        Aquí se visualiza el resumen y totales de tu pedido
      </p>

      <div className="py-10">
        {pedido.length === 0 ? (
          <p className="text-center text-lg">No hay elementos en tu pedido aún...</p>
        ) : (
          pedido.map(producto => (
            <ResumenProducto
              key={ producto.id }
              producto={ producto }
            />
          ))
        )}

        <p className="text-xl mt-10 font-semibold">
          Total: { formatearDinero(total) }
        </p>

        <form
          onSubmit={ handleSubmit }
          className="w-full"
        >
          <div className="mt-5">
            <input type="submit"
              value="Confirmar pedido"
              disabled={ comprobarPedido() }
              className={`${comprobarPedido() ? 
                'bg-gray-300' : 'bg-green-600 hover:bg-green-700'}
                text-white p-3 font-bold text-center w-full rounded cursor-pointer
                transition ease-in-out duration-150`}
            />
          </div>
        </form>
      </div>
    </aside>
  )
}
