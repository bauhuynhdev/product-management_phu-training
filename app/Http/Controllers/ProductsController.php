<?php

namespace App\Http\Controllers;
use App\Http\Requests\AddRequest;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    public function viewAddpage()
    {
        return view('add');
    }
    public function viewProducts(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != ""){
            $pro = Products::where('name', 'LIKE', "%$search%")->orWhere('code', 'LIKE', "%$search%")->get();
        }else{
            $pro = Products::all();
        }
        $data = compact('pro','search');
        return view('admin')->with($data);
    }
    public function addProducts(Request $request)
    {
        $newPro = new Products();
        $newPro->name = $request->name;
        $newPro->code = $request->code;
        $newPro->price = $request->price;
        // Upload image
        if ($request->has('image')) {
            $get_image = $request->image;
            $path = 'frontend/Images/';
            $name_image = $get_image->getClientOriginalName();
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
        }
        $newPro->image = $new_image;
        $newPro->save();

        return redirect()->route('get.admin');
    }
    public function deleteProducts($id)
    {
        $pro = Products::find($id);
        $destination = 'frontend/Images/' . $pro->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $pro->delete();
        return redirect()->route('get.admin');
    }
    public function editProducts($id)
    {
        $pro = Products::find($id);
        return view('edit',compact('pro'));
    }
    public function updateProducts(Request $request, $id)
    {
        $pro = Products::find($id);
        $pro->name = $request->name;
        $pro->code = $request->code;
        $pro->price = $request->price;
        // Upload image
        if ($request->has('image')) {
            $destination = 'frontend/Images/' . $pro->image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $get_image = $request->image;
            $path = 'frontend/Images/';
            $name_image = $get_image->getClientOriginalName();
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $pro->image = $new_image;
        }
        $pro->update();

        return redirect()->route('get.admin');
    }
}
