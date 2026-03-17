import Button from "./Button";

function Block() {
    return <div className="bg-gray-500 dark:bg-amber-950 h-80 w-80 rounded-lg flex flex-col items-center justify-center p-6 border-2 border-pink-300">
        <h1 className="text-2xl text-white">Baray's Block</h1>
        <p className="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquid fugit ipsum molestiae fuga repellendus eaque voluptatem quaerat aperiam, maiores enim, accusamus dolorum quia in veniam aliquam officiis nulla repellat?</p>
        <div>
        <Button /> <Button />
        </div>
    </div>;
}

export default Block;