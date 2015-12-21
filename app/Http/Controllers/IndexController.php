<?php
/**
 * Created by PhpStorm.
 * User: LKBOY
 * Date: 2015/12/21
 * Time: 13:38
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class IndexController extends Controller
{

    public function index(){
        return  View('index.master');
    }

     public function detail(){
        return  View('index.detail');
    }

}