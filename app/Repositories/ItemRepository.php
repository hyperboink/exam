<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ItemRepositoryInterface;
use App\Item;
use Validator;

class ItemRepository implements ItemRepositoryInterface
{
	private $item;

	public function __construct(Item $item)
	{
		$this->item = $item;
	}

	public function all()
	{
		return $this->item
			->where('user_id', auth()->user()->id)
			->orderBy('created_at', 'DESC')
			->get();
	}

	public function findById(int $id)
	{
		return $this
			->item
			->findOrFail($id);
	}

	public function save(object $data)
	{
		$rules = [
			'title' => 'required'
		];

		$validator = Validator::make($data->except('_token'), $rules);

		if($validator->fails()){

			$errors = $validator->errors();

			return view('create', compact('errors'));
		}

		$item = Item::firstOrCreate(
			['id' => $data->id, 'user_id' => auth()->user()->id]
		);

		$item->title = $data->title;

		$item->save();

		return $this->all();

	}

	public function delete(int $id)
	{
		$post = $this
			->item
			->findOrFail($id);

		$post->delete();
	}

}