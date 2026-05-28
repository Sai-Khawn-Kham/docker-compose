import Link from "next/link"

const Header = () => {
  return (
    <header className="flex justify-between items-center shadow dark:shadow-gray-700 py-2 px-3">
      <h1 className="text-3xl font-bold font-serif">
        <Link href={"/"}>Docker Practice</Link>
      </h1>
      <nav>
        <ul className="flex gap-4">
          <li className="hover:text-blue-400 hover:underline">
            <Link href="/">Home</Link>
          </li>
          <li className="hover:text-blue-400 hover:underline">
            <Link href="/about-us">About Us</Link>
          </li>
          <li className="hover:text-blue-400 hover:underline">
            <Link href="/contact-us">Contact Us</Link>
          </li>
        </ul>
      </nav>
    </header>
  )
}

export default Header