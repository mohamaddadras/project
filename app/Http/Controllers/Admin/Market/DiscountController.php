<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    |  copan discount
    |--------------------------------------------------------------------------
    */

    public function copan()
    {
        return view('admin.market.discount.copan.index');
    }

    public function copanCreate()
    {
        return view('admin.market.discount.copan.create');
    }

    /*
    |--------------------------------------------------------------------------
    |  common discount
    |--------------------------------------------------------------------------
    */

    public function commonDiscount()
    {
        return view('admin.market.discount.common-discount.index');
    }

    public function commonDiscountCreate()
    {
        return view('admin.market.discount.common-discount.create');
    }

    /*
    |--------------------------------------------------------------------------
    |  amazing sale
    |--------------------------------------------------------------------------
    */

    public function amazingSale()
    {
        return view('admin.market.discount.amazing-sale.index');
    }

    public function amazingSaleCreate()
    {
        return view('admin.market.discount.amazing-sale.create');
    }
}
