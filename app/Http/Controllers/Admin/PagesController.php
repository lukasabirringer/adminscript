<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use DB;

class PagesController extends Controller
{
    public function index()
	 		{
 				$pages = Page::all();
 				return view('admin.pages.index', ['pages' => $pages]);
    	}
  	
  	public function store(Request $request)
			{
		    
		    DB::table('pages')->insert(
				    ['name' => $request->pageName,'description' => $request->pageDescription,'content' => $request->pageContent,]
				);
		    return redirect('/admin/pages');
			}
			public function create()
			{
		    return view('admin.pages.create');
			}


		public function show($id)
	 		{
 				$page = Page::findOrFail($id);
				return view('admin.pages.update', compact('page'));  
    	}

		public function update(Request $request, $id)
    {
			$name = $request->input('pageName');
    	$description = $request->input('pageDescription');
      $content = $request->input('pageContent');

      $page = Page::find($id);
			$page->name = $name;
			$page->description = $description;
			$page->content = $content;
			$page->save();

      return redirect('/admin/pages');
    }

		public function destroy($id)
    {
      $page = Page::findOrFail($id);
      $page->delete();
      return redirect('/admin/pages');
    }
}
