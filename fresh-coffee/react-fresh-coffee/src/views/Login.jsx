import { Link } from "react-router-dom";

export default function Login() {
  return (
    <>
      <h1 className="text-4xl font-black">Iniciar sesión</h1>
      <p>Debes iniciar sesión para crear un pedido</p>

      <div className="bg-white shadow-md rounded-md mt-10 px-5 py-10">
        <form>
          <div className="mb-4">
            <label
              htmlFor="email"
              className="text-slate-800"
            >Correo</label>
            <input
              type="email"
              id="email"
              className="mt-2 w-full p-3 bg-gray-100 rounded-md shadow-md"
              name="email"
              placeholder="Correo"
            />
          </div>
          <div className="mb-4">
            <label
              htmlFor="password"
              className="text-slate-800"
            >Contraseña</label>
            <input
              type="password"
              id="password"
              className="mt-2 w-full p-3 bg-gray-100 rounded-md shadow-md"
              name="password"
              placeholder="Contraseña"
            />
          </div>
          <nav className="mt-5">
            <Link
              to="/auth/registro"
              className="text-gray-500 hover:text-gray-800 underline transition ease-in-out duration-150"
            >
              ¿No tienes cuenta? Crea una
            </Link>
          </nav>
          <input
            type="submit"
            value="Iniciar sesión"
            className="bg-indigo-600 hover:bg-indigo-800 text-white w-full mt-5 p-3 font-bold cursor-pointer rounded-md transition ease-in-out duration-150"
          />
        </form>
      </div>
    </>
  )
}
