<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Admin\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Http\Response|View
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.modules.categories.index', [
            'head' => 'Gestão de Categorias',
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Http\Response|View
     */
    public function create()
    {
        return view('admin.modules.categories.create', ['head' => 'Cadastro de Categoria']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->setSlug();
        $category->save();

        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();

        return view('admin.modules.categories.edit', ['head' => 'Editar Categoria', 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::where('id', $id)->first();
        $category->name = $request->name;
        $category->setSlug();

        if(!$category->save()){
            return redirect()->back()->withInput()->withErrors();
        }

        return redirect()->route('admin.categories.edit', ['head' => 'Editar Categoria', 'category' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $category = Category::where('id', $id)->first();


        if(!$category->delete()){
            $json['message'] = 'Ooops, você não tem permissão para estar aqui!';
            return response()->json($json);
        }

        $json['redirect'] = route('admin.categories.edit', ['head' => 'Editar Categoria', 'category' => $id]);
        return response()->json($json);

//        return redirect()->route('admin.categories.index');
    }
}
