<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\product;
class BlogController extends Controller
{
    public function index($direct = 'index')
    {
        $direct = str_replace(".html","",$direct);
        if(file_exists("../resources/views/".$direct.".blade.php"))
        {
            if($direct == 'index')
            {
                // Nếu như là /index trỏ tới funtion có top 8
                return $this->indexMethods();
                // return view($direct);
            }
            else if($direct == 'shop')
            {
                return $this->shopMethods();
            }
            else 
            {
                return view($direct);
            }
        }
        else  
        {
            return view('error');
        }
    }
    public function indexMethods()
    {
        // in ra top 8 sản phẩm mới nhất -- INDEX
        $arrTop8Product  = product::take(8)->orderBy('ID_product','Desc')->get();
        return view('index')->with('data',$arrTop8Product);

    }
    public function shopMethods()
    {
        $arrAllProduct = product::all();
        $arrCountProduct = product::count();
        if(isset($_REQUEST['page'])==false)
        {
            $arrProductOfPages = DB::select('SELECT * FROM `products` ORDER BY ID_product DESC LIMIT ?',[8]);
        }
        else 
        {
                $numberPage = $_REQUEST['page'];
                $addQuery = ($numberPage -1) * 8;
                $arrProductOfPages = DB::select('SELECT * FROM `products` ORDER BY ID_product DESC LIMIT ?,?',[$addQuery,8]);
        }
        return view('shop')->with(['countProduct'=>$arrCountProduct,'data'=>$arrAllProduct,'arrProductOfPages'=>$arrProductOfPages]);
    }
}
