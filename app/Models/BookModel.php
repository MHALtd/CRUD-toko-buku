<?php 

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'book';
    protected $primaryKey = 'book_id';
    protected $usrTimeStamps = true;
    protected $allowedFields = ['title', 'slug', 'author', 'release_year', 'price', 'stock', 'discount', 'book_category_id'];
    
    public function getBook($slug = null)
    {
    // $query=$global->db->query("select * from book join book_category on book.book_category_id=book_category.boo_category_id);
    // return $query->getResultArray();
        if ($slug === null) {
            $this->join('book_category', 'book.book_category_id=book_category.book_category_id');
            return $this->get()->getResultArray();
        } else {
            $this->join('book_category', 'book.book_category_id=book_category.book_category_id');
            $this->where(['slug' => $slug]);
            return $this->first();
        }
    }
}
?>