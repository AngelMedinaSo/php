function Button({ Text = "Click Me" }) {
  return <button className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4 dark:bg-amber-600 dark:hover:bg-amber-900">{Text}</button>;
}

export default Button;
