import useSWR from "swr";
import clienteAxios from "../config/axios";

import { formatearDinero } from "../helpers";

import useQuiosco from '../hooks/useQuiosco';

export default function Ordenes() {
  const token = localStorage.getItem('AUTH_TOKEN');
  const fetcher = () => clienteAxios('/api/pedidos', {
    headers: {
      Authorization: `Bearer ${ token }`
    }
  });

  const { data, isLoading } =
    useSWR('/api/pedidos', fetcher, { refreshInterval: 1000 });

  const { handleClickCompletarPedido } = useQuiosco();

  if(isLoading) return 'Cargando...';

  return (
    <div>
      <h1 className="text-4xl font-black mx-2">Órdenes</h1>
      <p className="text-2xl mt-1 mb-10 mx-2">
        Administra las órdenes desde aquí
      </p>

      <div className="grid grid-cols-2 gap-5">
        { data.data.data.map(pedido => (
          <div
            key={ pedido.id }
            className="p-5 bg-white shadow space-y-2 border-b rounded-lg"
          >
            <p className="text-xl font-bold text-slate-600">
              Contenido del producto...
            </p>

            { pedido.productos.map(producto => (
                <div
                  key={ producto.id }
                  className="border-b border-b-slate-200 last-of-type:border-none py-4"
                >
                  <p className="text-sm">ID: { producto.id }</p>
                  <p>{ producto.nombre }</p>
                  <p>Cantidad: {''}
                    <span className="font-semibold">{ producto.pivot.cantidad }</span>
                  </p>
                </div>
            )) }

            <p className="text-lg font-bold text-slate-600">
              Cliente: {''}
              <span className="font-normal">{ pedido.user.name }</span>
            </p>
            
            <p className="text-lg font-bold text-amber-500">
              Total a pagar: {''}
              <span className="font-normal text-slate-600">
                { formatearDinero(pedido.total) }
              </span>
            </p>

            <button
              type="button"
              onClick={ () => handleClickCompletarPedido(pedido.id) }
              className="bg-green-600 hover:bg-green-700 text-white p-3 font-bold
                text-center w-full rounded cursor-pointer transition ease-in-out duration-150"
            >
              Completar
            </button>
          </div>
        )) }
      </div>
    </div>
  )
}
