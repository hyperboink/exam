<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ItemRepository;
use App\Item;

class ItemController extends Controller
{
	protected $item;

    public function __construct(ItemRepository $item)
    {
        $this->item = $item;
    }

	public function create()
	{
		return view('create');
	}

    public function save(Request $request)
    {
		$this->item->save($request);

		return redirect()->route('home');
    }

    public function edit(Request $request, $id)
    {
    	$item = $this->item->findById($id);

    	return view('edit', compact('item'));
    }

    public function delete($id)
    {
    	$this->item->delete($id);

    	return redirect()->route('home');
    }
}
