import { Link } from "react-router-dom"

export default function Registro() {
  return (
    <>
      <h1 className="text-4xl font-black">Regístrate</h1>
      <p>Crea tu cuenta llenando el formulario</p>

      <div className="bg-white shadow-md rounded-md mt-10 px-5 py-10">
        <form>
          <div className="mb-4">
            <label
              htmlFor="name"
              className="text-slate-800"
            >Nombre</label>
            <input
              type="text"
              id="name"
              className="mt-2 w-full p-3 bg-gray-100 rounded-md shadow-md"
              name="name"
              placeholder="Nombre"
            />
          </div>
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
          <div className="mb-4">
            <label
              htmlFor="password_confirmation"
              className="text-slate-800"
            >Confirmar contraseña</label>
            <input
              type="password"
              id="password_confirmation"
              className="mt-2 w-full p-3 bg-gray-100 rounded-md shadow-md"
              name="password_confirmation"
              placeholder="Confirmar contraseña"
            />
          </div>
          <nav className="mt-5">
            <Link
              to="/auth/login"
              className="text-gray-500 hover:text-gray-800 underline transition ease-in-out duration-150"
            >
              ¿Ya tienes cuenta? Inicia sesión
            </Link>
          </nav>
          <input
            type="submit"
            value="Crear cuenta"
            className="bg-indigo-600 hover:bg-indigo-800 text-white w-full mt-5 p-3 font-bold cursor-pointer rounded-md transition ease-in-out duration-150"
          />
        </form>
      </div>
    </>
  )
}
