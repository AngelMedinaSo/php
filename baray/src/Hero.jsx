import Button from "./Button";
import Block from "./Block";

function Hero({ background = "bg-blue-400" }) {
  return (
    <div
      className={`w-screen h-100 ${background} flex flex-row items-center justify-center gap-4 p-6 border-2 border-pink-300`}
    >
      <Block />
      <div>
        <h1 className="text-4xl text-center">Baray's Hero</h1>
        <p className="text-center text-gray-500">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas,
          voluptate.
        </p>

        <div className="flex items-center justify-center">
          <Button Text="Button 1" />
          <Button Text="Button 2" />
          <Button Text="Button 3" />
          <Button Text="Button 4" />
        </div>
      </div>
      <Block />
    </div>
  );
}

export default Hero;
