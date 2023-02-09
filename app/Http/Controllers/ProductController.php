<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;
use Symfony\Component\Console\Input\Input;

        class ProductController extends Controller
        {
            
            public function index()
            {
              
            }


            public function create()
            {
                return view('products.create');
            }

            public function store(Request $request)
            {
                 
                $request->validate([
                    'name' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'description' => 'required',
                    'price' => 'required',
                ]);
                $input = $request->all();
                if ($image = $request->file('image')) {
                    $destinationPath = 'images/';
                    $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $postImage);
                    $input['image'] = "$postImage";

                }
                Test::create($input);
                return redirect()->route('dashbord');
            }
            
            public function show()
            { 
                $menu = Test::all();
                return view('dashbord')->with('menu',$menu);
            }
        
            public function edit($id)
            {
                $menu = Test::find($id);
                return view('edit', compact('menu'));
            }
            
            public function update(Request $request, $id)
            {
            
                $menu = Test::find($id);
                $menu->name = $request->input('name');

                 if ($image = $request->file('image')) {
                    // dd($request);
                    // die();
                    $destinationPath = 'images/';
                    $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $postImage);
                    $menu->image = "$postImage";
                    //             dd($menu->image);
                    // die();
                   
                 }
                
                $menu->description = $request->input('description');
                $menu->price = $request->input('price');
                $menu->update();
                return redirect()->back()->with('message','Updated  successfuly');
            }
            
            public function destroy($id)
            {
                $post =Test::where('id',$id)->firstOrFail();
                $post->delete();
                return redirect()->back()->with('message','deleted  successfuly');
            }
           
            public function showTow()
            { 
                $menu = Test::all();
                return view('home')->with('menu',$menu);
            }
        }
       
        