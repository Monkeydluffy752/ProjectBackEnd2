<?php

namespace App\Http\Controllers;

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
                return $this->Top8Product();
                // return view($direct);
            }
            else if($direct == 'shop')
            {

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
    public function Top8Product()// in ra top 8 sản phẩm mới nhất -- INDEX
    {
        $arrTop8Product  = product::take(8)->orderBy('ID_product','Desc')->get();
        return view('index')->with('data',$arrTop8Product);
    }
}
