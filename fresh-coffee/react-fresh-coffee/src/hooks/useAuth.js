/* eslint-disable no-unused-vars */
import clienteAxios from "../config/axios";

export const useAuth = ({ middleware, url }) => {
  const registro = () => {
  
  }

  const login = async (datos, setErrores) => {
    try {
      const { data } = await clienteAxios.post('/api/login', datos);
      localStorage.setItem('AUTH_TOKEN', data.token);
      setErrores([]);
    } catch (error) {
      console.log(error);
      setErrores(Object.values(error.response.data.errors));
    }
  }

  const logout = () => {

  }

  return {
    registro,
    login,
    logout
  }
}