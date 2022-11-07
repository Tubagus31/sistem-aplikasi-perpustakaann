<?php

namespace App\Http\Controllers;

use Illuminate\Http\Posts;
use Illuminate\Http\Request;

use PDF;

class PostController extends Controller
{
    public function downloadPDF(){
        // $posts = Posts::all();
        // $data [
        //     'title' => 'All Posts Data',
        //     'date' => date('d/m/y'),
        //     'posts' => $posts 
        // ];

        // $pdf = PDF::loadView('postspdf', $data);
        // return $pdf->download('posts.pdf');

        $query = Posts::all();
        $pdf = DOM_PDF::loadview('postspdf', ['query' => $query]);
        // $pdf = DOM_PDF::loadview('menu.product.print_dom_pdf');
        return $pdf->download('posts.pdf');

        // return redirect('master/product');

        return view('menu.member.create');
    } 
}


