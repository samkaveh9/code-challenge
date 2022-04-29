<?php
namespace App\Repository;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface VideoRepositoryInterface
{
    public function all(): Collection;

    public function store(Request $request);
}
