<?php
namespace App\Repositories;

use Image;

class  ProjectsRepository
{
  public function newproject($request)
  {
  $request->user()->projects()->create([
    'name'=>$request->name,
    'thumbnail'=>$this->thumbnails($request)
  ]);
  }

  public function thumbnails($request)
  {
  if($request->hasFile('thumbnail')){
    $file = $request->thumbnail;
    $name = str_random(10).'.jpg';
    $path = public_path().'/thumbnails/'.$name;
    Image::make($file)->resize(261,98)->save($path);
    return $name;
  }

  }
}
