<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Article;

class ArticlesController extends Controller {

    protected $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = $this->article->all();

        return view('articles.index', compact('articles'));
	}

	public function show($id)
    {
        $article = $this->article->find($id);

        return view('article.show', compact('article'));
    }

}
