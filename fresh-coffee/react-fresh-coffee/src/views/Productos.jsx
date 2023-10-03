import useSWR from 'swr';

import Producto from '../components/Producto'

import clienteAxios from '../config/axios';

export default function Productos() {
  const token = localStorage.getItem('AUTH_TOKEN');
  const fetcher = () => clienteAxios('/api/productos', {
    headers: {
      Authorization: `Bearer ${ token }`
    }
  }).then(datos => datos.data);

  const { data, isLoading } = useSWR('/api/productos', fetcher, { refreshInterval: 10000 });

  if(isLoading) return 'Cargando...';

  return (
    <div>
      <h1 className="text-4xl font-black mx-2">Productos</h1>
      <p className="text-2xl mt-1 mb-10 mx-2">
        Administra la disponibilidad de los productos desde aquí
      </p>

      <div className="grid gap-4 grid-cols-2 md:grid-cols-2 xl:grid-cols-3">
        { data.data.map(producto => (
          <Producto
            key={ producto.imagen }
            producto={ producto }
            botonDisponible={ true }
          />
        )) }
      </div>
    </div>
  )
}
