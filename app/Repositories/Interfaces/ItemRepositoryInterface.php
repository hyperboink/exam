<?php

namespace App\Repositories\Interfaces;

interface ItemRepositoryInterface
{
	public function all();

	public function findById(int $id);

	public function save(object $data);

	public function delete(int $id);
}