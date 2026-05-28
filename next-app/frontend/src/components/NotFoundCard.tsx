import Link from "next/link";

const NotFoundCard = () => {
  return (
    <div className="w-screen h-screen flex flex-col justify-center items-center gap-2 text-center">
      <h2 className="text-2xl font-semibold">404 | Not Found</h2>
      <p>Could not find requested resource</p>
      <Link href="/" className="bg-gray-700 py-1 px-3 rounded-lg">Return Home</Link>
    </div>
  );
};

export default NotFoundCard;
