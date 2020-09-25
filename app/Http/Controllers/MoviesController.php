<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movie;

class MoviesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = DB::table('movies')->get();

        return view('admin.list_movies',['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add_movies');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
          ]);

          $data = $request->input();
  
          if ($request->hasFile('file')) {
              //get filename with extension
            $imagenameWithExt = $request->file('file')->getClientOriginalName();
            //get just filename
            $imageName = pathinfo($imagenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('file')->getClientOriginalExtension();
            //filename to store
            $imageNameToStore = $imageName .".".$extension;
            //upload image
            $path = $request->file('file')->storeAs('public/movie_poster', $imageNameToStore);

          }
          
          $movie = new Movie;
          //$movie->movie_poster = $imageName;
          $movie->movie_poster = $imageNameToStore;
          $movie->movie_poster_path = '/storage/'.$path;
          $movie->movie_title = $data['movie_title'];
          $movie->movie_year = $data['movie_year'];
          $movie->movie_genre = $data['movie_genre'];
          $movie->movie_synopsis = $data['movie_synopsis'];
          $movie->save();
  
          return back()->with('success', 'Movie Added Successfully.');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($movieId)
    {
      $movie = Movie::find($movieId);

      return view('admin.view_movies')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($movieId)
    {
        $movie = Movie::find($movieId);


        return view('admin.edit_movies')->with('movie', $movie);
        // return view('admin.edit_movies');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $movieId)
    {

          $data = request()->all();

          $request->validate([
            'file' => 'image|mimes:jpeg,png,jpg|max:2048',
          ]);

          if ($request->hasfile('file')) {
            //get filename with extension
          $imagenameWithExt = $request->file('file')->getClientOriginalName();
          //get just filename
          $imageName = pathinfo($imagenameWithExt, PATHINFO_FILENAME);
          //get just extension
          $extension = $request->file('file')->getClientOriginalExtension();
          //filename to store
          $imageNameToStore = $imageName .".".$extension;
          //upload image
          $path = $request->file('file')->storeAs('public/movie_poster', $imageNameToStore);

        }else {
          $movie = Movie::find($movieId);
          //$movie->movie_poster = $imageNameToStore;
          //$movie->movie_poster_path = '/storage/'.$path;
          $movie->movie_title = $data['movie_title'];
          $movie->movie_year = $data['movie_year'];
          $movie->movie_genre = $data['movie_genre'];
          $movie->movie_synopsis = $data['movie_synopsis'];
          $movie->save();

          return back()->with('success', 'Movie Updated Successfully.');
        }

          $movie = Movie::find($movieId);
          $movie->movie_poster = $imageNameToStore;
          $movie->movie_poster_path = '/storage/'.$path;
          $movie->movie_title = $data['movie_title'];
          $movie->movie_year = $data['movie_year'];
          $movie->movie_genre = $data['movie_genre'];
          $movie->movie_synopsis = $data['movie_synopsis'];
          $movie->save();

          return back()->with('success', 'Movie Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($movieId)
    {
        //DB::table('movies')->delete();
        DB::table('movies')->where('id','=',$movieId)->delete();
        return back()->with('success', 'Movie Deleted Successfully.');
    }
}
