<?php

namespace App\Repository\Eloquent;

use App\Models\Video;
use App\Repository\VideoRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class VideoRepository extends BaseRepository implements VideoRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Video $model
     */
    public function __construct(Video $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $this->VideoStoreHandler($request, 'file');
        Video::create(array_merge($request->only('title'), ['file' => $file]));
    }

    /**
     *  Handle store video in database
     *
     * @param  \Illuminate\Http\Request  $request
     * @param $name
     * return File name
     */
    public function VideoStoreHandler($request, $name)
    {
        if ($request->has("$name")) {
            $file = $request->file("$name");
            $fileExtension = strtolower($file->getClientOriginalExtension());
            $fileName = date('Ymdhis') . '.' . $fileExtension;
            $file->move(storage_path('app/public/'), $fileName);
            return $fileName;
        }
    }


}
