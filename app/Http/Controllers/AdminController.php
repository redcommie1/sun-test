<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ImageInt;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $recipes = Recipe::all();
        return view('admin', [
            'recipes' => $recipes
        ]);
    }

    public function getCreateRecipe()
    {
        return view('create');
    }

    public function saveRecipe(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $path = public_path().'\img\\recipes\\';

        $data = $request->all();
        if(isset($data['prev_img'])){
            $filenamePrev = str_random(20) .'.' . $data['prev_img']->getClientOriginalExtension() ?: 'png';
            $imgPrev = ImageInt::make($data['prev_img']);
            $imgPrev->resize(554,377)->save($path . $filenamePrev);
            $data['prev_img'] = $filenamePrev;
        }
        if(isset($data['full_img'])){
            $filenameFull = str_random(20) .'.' . $data['full_img']->getClientOriginalExtension() ?: 'png';
            $imgFull = ImageInt::make($data['full_img']);
            $imgFull->save($path . $filenameFull);
            $data['full_img'] =  $filenameFull;
        }

        $recipe = new Recipe();
        $recipe->fill($data);
        $recipe->save();

        return redirect('admin');
    }

    public function getEditRecipe($id)
    {

        $recipe = Recipe::find($id);
        return view('edit', [
            'recipe' => $recipe
        ]);
    }

    public function saveEditRecipe(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $path = public_path().'\img\\recipes\\';
        $data = $request->all();
        $recipe = Recipe::find($id);

        if(isset($data['prev_img'])){
            $filenamePrev = str_random(20) .'.' . $data['prev_img']->getClientOriginalExtension() ?: 'png';
            $imgPrev = ImageInt::make($data['prev_img']);
            $imgPrev->resize(554,377)->save($path . $filenamePrev);
            $data['prev_img'] = $filenamePrev;
        }
        if(isset($data['full_img'])){
            $filenameFull = str_random(20) .'.' . $data['full_img']->getClientOriginalExtension() ?: 'png';
            $imgFull = ImageInt::make($data['full_img']);
            $imgFull->save($path . $filenameFull);
            $data['full_img'] =  $filenameFull;
        }
        $recipe->update($data);

        return redirect('admin');
    }

    public function deleteRecipe($id)
    {
        $recipe = Recipe::find($id)->delete();
        return redirect('admin');
    }

}
