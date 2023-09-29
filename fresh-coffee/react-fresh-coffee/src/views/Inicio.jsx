import useSWR from 'swr'

import Producto from "../components/Producto"
import useQuiosco from "../hooks/useQuiosco"
import clienteAxios from '../config/axios'

export default function Inicio() {
  const { categoriaActual } = useQuiosco()

  // Consulta SWR
  const fetcher = () => clienteAxios('/api/productos').then(data => data.data);
  const { data, error, isLoading } = useSWR('/api/productos', fetcher, {
    refreshInterval: 1000
  });

  if (error) return console.log(error);
  if (isLoading) return 'Cargando...';

  const productos = data.data.filter(producto => producto.categoria_id === categoriaActual.id);

  return (
    <>
      <h1 className="text-4xl font-black mx-2">{ categoriaActual.nombre }</h1>
      <p className="text-2xl mt-1 mb-10 mx-2">
        Elige y personaliza tu pedido a continuación
      </p>

      <div className="grid gap-4 grid-cols-2 md:grid-cols-2 xl:grid-cols-3">
        { productos.map(producto => (
          <Producto
            key={producto.imagen}
            producto={producto}
          />
        )) }
      </div>
    </>
  )
}
