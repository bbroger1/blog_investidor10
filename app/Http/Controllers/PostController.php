<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Requests\SearchRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        if (!Post::create($request->validated())) {
            return redirect()
                ->route('post.create')
                ->with('warning', 'Algo aconteceu e não foi possível salvar o item');
        }

        return redirect()
            ->route('post.create')
            ->with('message', 'Post cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $category = Category::where('id', $post->category_id)->get();
        $post['category_name'] = $category[0]->name;

        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(SearchRequest $request)
    {
        if ($request->search == '') {
            return redirect()
                ->back();
        }

        $posts = Post::where('title', 'like', "%$request->search%")->get();

        if (!isset($posts[0])) {
            $categories = Category::where('name', 'like', "%$request->search%")->get();

            if (!isset($categories[0])) {
                return redirect()
                    ->route('home')
                    ->with('warning', 'A pesquisa não retornou nenhum dado');;
            }
            $postsCategory = [];
            for ($i = 0; $i < count($categories); $i++) {
                $postsCategory[] = Post::where('category_id', '=', "{$categories[$i]->id}")->get();
            }

            $posts = $postsCategory;
        }

        return view('home', compact('posts'));
    }
}
