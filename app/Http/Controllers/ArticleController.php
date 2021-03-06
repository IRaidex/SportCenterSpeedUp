<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use App\Coment;
use Illuminate\Support\Facades\Auth;



class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articulos = Article::select()
            ->orderBy('idArticle', 'DESC')
            ->paginate(3);

        for($i = 0 ; $i<count($articulos) ; $i++){
            $user = User::find($articulos[$i]->userId);
            $articulos[$i]->datosUser = $user;

        }   

        return view('/articulos')
            ->with('articulos',$articulos);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function todos()
    {
        $articulos = Article::all();

        for($i = 0 ; $i<count($articulos) ; $i++){
            $user = User::find($articulos[$i]->userId);
            $articulos[$i]->datosUser = $user;

        }   

        return view('/adminArticulos')
            ->with('articulos',$articulos);
    }


    /**
     * Devuelve los 3 ultimos articulos
     *
     * @return \Illuminate\Http\Response
     */
    public function ultimos()
    {

        $articulos = Article::select()
            ->orderBy('idArticle', 'DESC')
            ->take(3)
            ->get();

        for($i = 0 ; $i<count($articulos) ; $i++){
            $user = User::find($articulos[$i]->userId);
            $articulos[$i]->datosUser = $user;

        }   

        return $articulos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ultimo = Article::all();
        //        
        if(count($ultimo) == 0){
            $ultimo = 1;
        }else{
            $ultimo = $ultimo->last()->idArticle+1;
        }

        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->tag1 = $request->tag1;
        $article->tag2 = $request->tag2;
        $article->tag3 = $request->tag3;
        $article->userId = Auth::user()->idUser;

        $imagen = $request->imgArticulo;
        $imagen->move('articulos','articulo'.$ultimo.'.'.$imagen->getClientOriginalExtension());
        $article->picture = 'articulo'.$ultimo.'.'.$imagen->getClientOriginalExtension();
        $article->save();

        return redirect('/articulos/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $articulo = Article::select()
            ->where('idArticle',$id)
            ->get();

        $user = User::select()
            ->where('idUser',$articulo[0]->userId)
            ->get();

        $articulo->datosUser = $user;

        $coments = Coment::select()
            ->where('articleId',$id)
            ->orderBy('date', 'DESC')
            ->get();


        for($i = 0 ; $i<count($coments) ; $i++){
            $users = User::find($coments[$i]->userId);
            $coments[$i]->users = $users;

        }   

        return view('articulo')
            ->with('articulo',$articulo)
            ->with('user',$user)
            ->with('coments',$coments);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Article::select()
            ->where('idArticle',$id)
            ->get();

        return view('editArticle')
            ->with('articulo',$articulo);
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
        $article = Article::find($id);

        $article->title = $request->title;
        $article->content = $request->content;
        $article->tag1 = $request->tag1;
        $article->tag2 = $request->tag2;
        $article->tag3 = $request->tag3;

        if($request->picture != null){
            $imagen = $request->picture;
            $imagen->move('articulos','articulo'. $id.'.'.$imagen->getClientOriginalExtension());
            $article->picture = 'articulo'. $id.'.'.$imagen->getClientOriginalExtension();
        }

        return $article->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAdmin($id)
    {
        $article = Article::find($id);
        unlink('articulos/'.$article->picture);
        $article->delete();

        return redirect('/articulos/admin');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        unlink('articulos/'.$article->picture);
        $article->delete();

        return redirect('/articulos/all');
    }
}
