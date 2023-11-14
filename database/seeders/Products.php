<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'ProductId'=>1,
            'ProductName'=>'ss',
            'Description'=>'windsc',
            'Price'=>19,
            'QuantityInStock'=>900
        ]);
        DB::table('suppliers')->insert([
            'SupplierId'=>10,
            'SupplierName'=>'kalvin',
            'ContactNo'=>69,
            'Address'=>'samal'
        ]);
        DB::table('categories')->insert([
            'SupplierID'=>41,
            'Supplier_Name'=>'ss',
        ]);
        DB::table('orders')->insert([
            'OrderID'=>41,
            'OrderDate'=>'June 91 7054',
            'TotalAmount'=>99,
            'Status'=>'Out of stock'
        ]);
        DB::table('customers')->insert([
            'CustomerID'=>12,
            'FirstName'=>'June',
            'LastName'=>'asds',
            'Email'=>'123@mail.com',
            'Phone'=>112233
        ]);
        DB::table('order_details')->insert([
            'OrderDetailID'=>121,
            'OrderID'=>41,
            'ProductID'=>1,
            'Quantity'=>12923,
            'Subtotal'=>112
        ]);


        \App\Models\User::factory()->create([
            'name'=>'staff',
            'username'=>'staff'
        ]);
    }
}
