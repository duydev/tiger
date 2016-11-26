<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
	public function detailById($id)
	{
		$article = Article::findorFail($id);

		return view( 'single', [ 'article' => $article ] );
	}

	public function detailBySlug($cSlug, $aSlug)
	{
		$article = Article::where('slug', $aSlug)->first();

		if( ! $article )
			return view( '404' );

		return view( 'single', [ 'article' => $article ] );
	}

}
