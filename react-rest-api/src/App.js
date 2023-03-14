import { Routes, Route, Link } from "react-router-dom";
import { SkillProvider } from "./context/SkillContext";
import { ProductProvider } from "./context/ProductContext";

import { Home } from "./components/Home";

import { SkillIndex } from "./components/skills/SkillIndex"
import { SkillCreate } from "./components/skills/SkillCreate"
import { SkillEdit } from "./components/skills/SkillEdit"

import { ProductIndex } from "./components/product/ProductIndex";
import { PelangganIndex } from "./components/pelanggan/PelangganIndex";
import { ProductCreate } from "./components/product/ProductCreate";
import { CategoryIndex } from "./components/category/CategoryIndex";
import { CategoryCreate } from "./components/category/CategoryCreate";
import { PelangganCreate } from "./components/pelanggan/PelangganCreate";
import { CategoryEdit } from "./components/category/CategoryEdit";
import { ProductEdit } from "./components/product/ProductEdit";
import { PelangganEdit } from "./components/pelanggan/PelangganEdit";
import { CartIndex } from "./components/cart/CartIndex";

function App() {
  return (
    <SkillProvider>
      <div className="bg-slate-200">
        <div className="max-w-7xl mx-auto min-h-screen">
          <nav>
            <ul className="flex">
              <li className="m-2 p-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">
                <Link to="/">Home</Link>
              </li>
              <li className="m-2 p-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">
                <Link to="/skills">Skills</Link>
              </li>
              <li className="m-2 p-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">
                <Link to="/categories">Category</Link>
              </li>
              <li className="m-2 p-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">
                <Link to="/product">Product</Link>
              </li>
              <li className="m-2 p-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">
                <Link to="/pelanggan">Pelanggan</Link>
              </li>
              <li className="m-2 p-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">
                <Link to="/cart">Cart</Link>
              </li>
            </ul>
          </nav>
          <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/skills" element={<SkillIndex />} />
            <Route path="/skills/create" element={<SkillCreate />} />
            <Route path="/skills/:id/edit" element={<SkillEdit />} />

            <Route path="/categories" element={<CategoryIndex />} />
            <Route path="/categories/create" element={<CategoryCreate />} />
            <Route path="/categories/:id/edit" element={<CategoryEdit />} />


            <Route path="/product" element={<ProductIndex />} />
            <Route path="/product/create" element={<ProductCreate />} />
            <Route path="/product/:id/edit" element={<ProductEdit />} />


            <Route path="/pelanggan" element={<PelangganIndex />} />
            <Route path="/pelanggan/create" element={<PelangganCreate />} />
            <Route path="/pelanggan/:id/edit" element={<PelangganEdit />} />

            <Route path="/cart" element={<CartIndex />} />
          </Routes>
        </div>
      </div>
    </SkillProvider>

  );
}

export default App;
