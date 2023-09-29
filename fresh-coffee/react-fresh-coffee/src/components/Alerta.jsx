/* eslint-disable react/prop-types */
export default function Alerta({ children }) {
  return (
    <div className="text-center text-sm my-2 border border-red-600
      bg-red-100 text-red-600 rounded-md font-semibold p-1">
      { children }
    </div>
  )
}
