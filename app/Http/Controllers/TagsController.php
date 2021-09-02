<?php

namespace App\Http\Controllers;
use Session;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{

    public function index()
    {
        return view('admin.tags.index')->with('tags',Tag::all());
    }


    public function create()
    {
         return view('admin.tags.create');
    }


    public function store(Request $request)
    {
        // $this->validate($request ,[
                    
        //             'tag' => 'required'

        // ]);
        // Tag::create([
        //         'tag' => $request->tag
        // ]);
        // Session::flash('success','Tag created successfully');
        // return redirect()->back();

        $this->validate($request,[

                'tag' => 'required'


        ]);

        $tag = new Tag;
        $tag->tag = $request->tag;
        $tag->save();
        Session::flash('success', 'You succesfully created a tag.');
        return redirect()->route('tags');


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tags.edit')->with('tag', $tag);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'tag' => 'required'

        ]);
        $tag = Tag::find($id);
        $tag->tag = $request->tag;
        $tag->save();
        Session::flash('success','Tag Updated successfully');
        return redirect()->route('tags');
    }


    public function destroy($id)
    {
        Tag::destroy($id);
        Session::flash('success', 'Tag deleted');
        return redirect()->back();
    }
}
