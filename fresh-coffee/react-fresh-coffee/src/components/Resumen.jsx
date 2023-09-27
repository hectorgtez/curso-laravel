import useQuiosco from '../hooks/useQuiosco'

export default function Resumen() {
  const { pedido } = useQuiosco();

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
          <p>Si hay algo...</p>
        )}

        <p className="text-xl mt-10 font-semibold">
          Total: { '' }
        </p>

        <form className="w-full">
          <div className="mt-5">
            <input type="submit"
              value="Confirmar pedido"
              className="bg-green-600 hover:bg-green-700 text-white px-5 py-2 font-bold
                text-center w-full rounded cursor-pointer transition ease-in-out duration-150"
            />
          </div>
        </form>
      </div>
    </aside>
  )
}
