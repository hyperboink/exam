<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Repositories\ItemRepository;

class HomeController extends Controller
{
    protected $item;

    public function __construct(ItemRepository $item)
    {
        $this->item = $item;
        $this->middleware('auth');
    }

    public function index()
    {
        $items = $this->item->all();

        return view('home', compact('items'));
    }

}
