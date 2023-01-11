<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Categorie;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if(isset($request->search)){
            $posts=Post::with('categorie')->where('titel','like','%'.$request->search.'%')->paginate(5);
        }else{
            $posts=Post::paginate(5);
        }
        //dd($posts);
        return view('posts.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        $categories=Categorie::all();
        return view('posts.create',['users'=>$users,'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$request->validate([
            'titel'=>'required'
        ]);*/
        $request->validate(
         $this->validationRules() );
       /*
        premier methode :

        $post=new Post();
        $post->titel=$request->titel;
        $post->save();*/

  //2 eme methode
        $post=Post::create([
            'titel'=>$request->titel,
            'body'=>$request->body,
            'user_id'=>$request->usesid,
            'categorie_id'=>$request->Categorieid
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post=Post::with('categorie','user')->findOrFail($id);
       return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function findbyid($id)
    {
        $post=Post::find($id);
        if($post){
            return view('posts.edit',compact('post'));
        }
        else{
            $posts=Post::paginate(5);
            return view('posts.index',compact('posts'));
        }
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
        $post=Post::find($id);
        //dd($post);
        if($post){
           $post->update(
            [
             "titel"=>$request->titel,
             "body"=>$request->body
            ],
        );
         $message="update mrigla";
         $posts=Post::paginate(5);
         return view('posts.index',['posts'=>$posts,'message'=>$message]);
        }
        else{
            $posts=Post::paginate(5);
            return view('posts.index',compact('posts'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $post=POST::find($id);
        if($post){
              $post->destroy($id);
              //$posts=Post::with('categorie')->get();
              $posts=Post::with('categorie')->get();
              return view('posts.index',['posts'=>$posts,'message'=>'delete mrigla']);
        }
    }


    public function delete($id)
    {
        $post=POST::find($id);
        if($post){
            $post->destroy($id);
            return redirect("/posts");
        }
    }

    private function validationRules(){
        return
             [
            "titel"=>'required|min:5|max:255',
            'body'=>'required|min:10|max:255',
            'user_id'=>"required",
            'categorie_id'=>"required",
             ];
    }


}
