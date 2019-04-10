<?php

Class Home_model extends CI_Model
{

    public function record_count($category_id = NULL, $author_id = NULL, $book_title=NULL) {
        if ($category_id) {
            $this->db->where('book_categories.category_id', $category_id);
        }
        if ($author_id) {
            $this->db->where('book_authors.author_id', $author_id);
        }
        if ($book_title) {
            $this->db->like('books.book_title', $book_title);
        }
        $this->db->select("*");
        $this->db->join('book_categories', 'books.id=book_categories.book_id', 'left');
        $this->db->join('book_authors', 'books.id=book_authors.book_id', 'left');
        $this->db->group_by('books.id');
        $q = $this->db->get("books");
        return $q->num_rows();
    }
    public function getBookList($limit, $start, $author_id = NULL, $category_id = NULL, $book_title = NULL)
    {
        $this->db->limit($limit, $start);
        if ($category_id) {
            $this->db->where('book_categories.category_id', $category_id);
        }
        if ($author_id) {
            $this->db->where('book_authors.author_id', $author_id);
        }
        if ($book_title) {
            $this->db->like('books.book_title', $book_title);
        }
        $this->db->select('*, book_copies - (SELECT Count(borrowdetails.borrow_id) FROM  borrowdetails WHERE books.id = borrowdetails.book_id AND borrow_status = "lost") as total_quantity, book_copies - (SELECT Count(borrowdetails.borrow_id) FROM borrowdetails WHERE books.id = borrowdetails.book_id AND (borrow_status = "pending" OR borrow_status = "lost")) as available');
        $this->db->join('book_categories', 'books.id=book_categories.book_id', 'left');
        $this->db->join('book_authors', 'books.id=book_authors.book_id', 'left');
        $this->db->order_by('books.id', 'desc');
        $this->db->group_by('books.id');
        $query = $this->db->get("books");
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    public function getBookByID($id)
    {
        $q = $this->db->get_where('books', array('id' => $id), 1);
        if ($q->num_rows() > 0) {
            return $q->row();
        }
        return FALSE;
    }
    
    public function getTopTenBooks($limit = 12)
    {

        $this->db->from('books');
        $this->db->select('book_title , description, image , (SELECT Count(borrowdetails.borrow_id) FROM borrowdetails WHERE books.id = borrowdetails.book_id) as sales, book_copies - (SELECT Count(borrowdetails.borrow_id) FROM  borrowdetails WHERE books.id = borrowdetails.book_id AND borrow_status = "lost") as total_quantity, book_copies - (SELECT Count(borrowdetails.borrow_id) FROM borrowdetails WHERE books.id = borrowdetails.book_id AND (borrow_status = "pending" OR borrow_status = "lost")) as available, digital_file');

        $this->db->order_by("sales", "desc");
        $this->db->limit($limit);
        $q = $this->db->get(); 

        if ($q->num_rows() > 0) {
            foreach (($q->result()) as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function getAllCategories(){
        $data = array();
        $query = $this->db->get("categories");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    public function getAllAuthors(){
        $data = array();
        $query = $this->db->get("authors");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    function count_category($id){

        $data = array();
        $this->db->select();
        $this->db->from('book_categories');
        $this->db->where('book_categories.category_id', $id);
        $data = $this->db->get();
        

        return $data->result();

       
    }

public function getBookDetByID($id)
    {
        $q = $this->db->query('SELECT books.*,(SELECT GROUP_CONCAT( DISTINCT authors.id ) FROM authors LEFT JOIN book_authors ON book_authors.author_id = authors.id WHERE book_authors.book_id =  `books`.id GROUP BY book_authors.book_id ) AS author_name, ( SELECT GROUP_CONCAT( DISTINCT categories.id ) FROM categories LEFT JOIN book_categories ON book_categories.category_id = categories.id WHERE book_categories.book_id =  `books`.id GROUP BY book_categories.book_id) AS category_name, book_copies - (SELECT Count(borrowdetails.borrow_id) FROM  borrowdetails WHERE books.id = borrowdetails.book_id AND borrow_status = "lost") as total_quantity, book_copies - (SELECT Count(borrowdetails.borrow_id) FROM borrowdetails WHERE books.id = borrowdetails.book_id AND borrow_status = "pending") as available FROM books WHERE books.id ='.$id);
        if ($q->num_rows() > 0) {
            return $q->row();
        }
        return FALSE;
    }

}

?>