<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;

class CategoryController extends Controller
{
	public function detailById( $id )
	{
		$cat = Category::findorFail($id);

		return view( 'category', [ 'cat' => $cat ] );
	}

	public function detailBySlug( $cSlug )
	{
		$cat = Category::where( 'slug', $cSlug )->first();
		if( ! $cat )
			return view( '404' );

		$perPage = 1;
		$articles = Article::where('category_id', $cat->id)->paginate($perPage);

		return view( 'category', [ 'cat' => $cat, 'articles' => $articles ] );
	}

}
