import React from "react";
import { Link } from "react-router";

const Header = () => {
  return (
    <header className="flex justify-between items-center shadow py-2 px-3">
      <h1 className="text-3xl font-bold font-serif">
        <Link to={"/"}>Docker Practice</Link>
      </h1>
      <nav>
        <ul className="flex gap-4">
          <li className="hover:text-blue-400 hover:underline">
            <Link to="/">Home</Link>
          </li>
          <li className="hover:text-blue-400 hover:underline">
            <Link to="/about">About</Link>
          </li>
          <li className="hover:text-blue-400 hover:underline">
            <Link to="/contact">Contact</Link>
          </li>
        </ul>
      </nav>
    </header>
  );
};

export default Header;
