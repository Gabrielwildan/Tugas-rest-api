import { useEffect, useContext } from 'react';
import { Link } from 'react-router-dom';
import axios from "axios";
import SkillContext from '../../context/SkillContext';


export const ProductIndex = () => {

    let no = 1;

    const { products, getProducts, deleteProduct, prodcart } = useContext(SkillContext);
    useEffect(() => {
        getProducts();
    }, []);

    return (
        <div className='mt-12'>

            <div className='flex justify-end m-2 p-2'>
                <Link to="/product/create" className='px-2 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md' >
                    New Product
                </Link>
            </div>

            <table className="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" className="px-6 py-3">NO</th>
                        <th scope="col" className="px-6 py-3">CATEGORY</th>
                        <th scope="col" className="px-6 py-3">TITLE</th>
                        <th scope="col" className="px-6 py-3">DESCRIPTION</th>
                        <th scope="col" className="px-6 py-3">PRICE</th>
                        <th scope="col" className="px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    {products.map((product) => {
                        return (
                            <tr key={product.id} className="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td className="px-6 py-4">{no++}</td>
                                <td className="px-6 py-4">{product.category}</td>
                                <td className="px-6 py-4">{product.title}</td>
                                <td className="px-6 py-4">{product.description}</td>
                                <td className="px-6 py-4">{product.price}</td>
                                <td className="px-6 py-4 space-x-2">
                                    <Link to={`/product/${product.id}/edit`} className="px-2 py-2 bg-green-500 hover:bg-green-700 text-white rounded-md">
                                        Edit
                                    </Link>
                                    <button onClick={() => deleteProduct(product.id)} className='px-2 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md'>Delete</button>
                                    <button onClick={() => prodcart(product.id)} className='px-2 py-2 bg-yellow-500 hover:bg-yellow-700 text-white rounded-md'>Cart</button>
                                </td>
                            </tr>
                        )
                    })}
                </tbody>
            </table>
        </div>
    )
}
