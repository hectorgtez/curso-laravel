import { createRef, useState } from "react"
import { Link } from "react-router-dom"

import Alerta from "../components/Alerta";
import { useAuth } from "../hooks/useAuth";

export default function Login() {
  const emailRef = createRef();
  const passwordRef = createRef();

  const [errores, setErrores] = useState([]);
  const { login } = useAuth({
    middleware: 'guest',
    url: '/'
  });

  const handleSubmit = async e => {
    e.preventDefault();

    const datos = {
      email: emailRef.current.value,
      password: passwordRef.current.value
    }

    login(datos, setErrores);
  }

  return (
    <>
      <h1 className="text-4xl font-black">Iniciar sesión</h1>
      <p>Debes iniciar sesión para crear un pedido</p>

      <div className="bg-white shadow-md rounded-md mt-10 px-5 py-10">
        <form
          onSubmit={ handleSubmit }
          noValidate
        >
          {
            errores ? 
            errores.map((error, i) => <Alerta key={i}>{error}</Alerta>) 
            : null
          }
          <div className="mb-4">
            <label
              htmlFor="email"
              className="text-slate-800 font-semibold"
            >Correo</label>
            <input
              type="email"
              id="email"
              className="mt-2 w-full p-3 bg-gray-50 rounded-md shadow-md"
              name="email"
              placeholder="Correo"
              ref={ emailRef }
            />
          </div>
          <div className="mb-4">
            <label
              htmlFor="password"
              className="text-slate-800 font-semibold"
            >Contraseña</label>
            <input
              type="password"
              id="password"
              className="mt-2 w-full p-3 bg-gray-50 rounded-md shadow-md"
              name="password"
              placeholder="Contraseña"
              ref={ passwordRef }
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
