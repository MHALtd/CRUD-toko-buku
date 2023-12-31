<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\BookCategoryModel;

define('_TITLE', 'Buku');
class Book extends BaseController
{
    public function index()
    {
        $book_model = new BookModel();
        $data_book = $book_model -> findAll();
        $data = [
            'title' => _TITLE,
            'data_book' => $data_book,
        ];
        return view('book/index', $data);
    }

    private $_book_model, $_book_category_model;

    public function __construct()
    {
        $this->_book_model = new BookModel();
        $this->_book_category_model = new BookCategoryModel();
    }
        
    public function create()
    {
        $book_category_model = new BookCategoryModel();
        $data = [
        'title' => _TITLE,
        'book_category' => $book_category_model->orderby('name_category')->findAll(),
        ];

        //dd($book_category_model->findAll());

        return view('book/create', $data);

        //return view('book/index');
        //dd($data_book);
        //return view('beranda');
        //return view('welcome_message');
    }
        
    public function save()
    {
        //dd($this->request->getVar());
        $slug = url_title($this->request->getVar('title'), '-', true);
        //$this->_book_model->save([
        if (
            $this->_book_model->save([
                'title' => $this->request->getVar('title'),
                'slug' => $slug,
                'author' => $this->request->getVar('author'),
                'release_year' => $this->request->getVar('release_year'),
                'price' => $this->request->getVar('price'),
                'discount' => $this->request->getVar('discount'),
                'stock' => $this->request->getVar('stock'),
                'book_category_id' => $this->request->getVar('book_category_id'),
            ])
        ) { 
            session()->setFlashData('success', 'Data Berhasil ditambahkan');
        } else
            session()->setFlashData('error', 'Data Gagal ditambahkan');
        return redirect()->to('');
    }
}