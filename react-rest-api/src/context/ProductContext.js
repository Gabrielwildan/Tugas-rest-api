import { createContext, useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

const ProductContext = createContext();

export const ProductProvider = ({ children }) => {

    const [products, setproducts] = useState([]);


    const getProducts = async () => {
        const apiProduct = await axios.get("https://dummyjson.com/products");
        setproducts(apiProduct.data);
    };

    return <ProductContext.Provider value={{ products, setproducts, getProducts }}>{children}</ProductContext.Provider>

    // 
}

export default ProductContext;