<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grocery;
use Excel;


class MaatwebsiteDemoController extends Controller
{

  public function importExport()
  {
    return view('maatwebsitedemo.importExport');
  }

  public function downloadExcel($type)
  {

  }
}

//    https://laracasts.com/discuss/channels/general-discussion/the-best-way-to-create-and-export-a-csv-from-a-model?page=1

//    https://www.cloudways.com/blog/import-export-csv-using-php-and-mysql/

//    http://www.maatwebsite.nl/laravel-excel/docs
