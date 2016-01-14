<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Articles extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index($id = null) {
      if ($id == null) {
          return Article::orderBy('id', 'asc')->get();
      } else {
          return $this->show($id);
      }
  }

  /**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return Response
 */
  public function show($id) {
      return Article::find($id);
  }

}
