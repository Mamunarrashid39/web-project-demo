<?php


namespace App\classes;


use DB\model\product;

class ProductUpload
{
    protected $name;
    protected $description;
    protected $price;
    protected $image;
    protected $value;
    protected $result;
    protected $data;
    protected $array;
    protected $array1;
    protected $array2;

    public function __construct($post = null, $file = null)
    {
        if ($post) {
            $this->name = $post['name'];
            $this->description = $post['description'];
            $this->price = $post['price'];
            $this->value = $post;
        }
        if ($file) {
            $this->image = $file['image'];

        }

    }


    public function index()
    {

        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->data = "$this->userName,$this->password";
        fwrite($this->file, $this->data);
        fclose($this->file);
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Saved Successfully!</strong>
</div>';
    }


    public function getAllProduct()
    {
        $this->filePath = "db/product.txt";
        $this->data = file_get_contents($this->filePath);

        $this->array = explode("**", $this->data);

        foreach ($this->array as $key => $value) {

            $this->array2 = explode(',', $value);

            if ($this->array2[0]) {
                $this->array1[$key]['name'] = $this->array2[0];
                $this->array1[$key]['description'] = $this->array2[1];
                $this->array1[$key]['price'] = $this->array2[2];
                $this->array1[$key]['image'] = $this->array2[3];
            }

        }

        return $this->array1;

    }

    public function addProduct()
    {
        $imageUrl = "http://localhost/mamun/web-project/" . $this->imageUpload();
//        $this->filePath = 'db/product.txt';
//        $this->file = fopen($this->filePath, 'a');
//        $this->data = "$this->name,$this->description,$this->price,$imageUrl**";
//        fwrite($this->file, $this->data);
//        fclose($this->file);
        $product = new product();
        $status = $product->create($this->name, $this->description, $this->price, $imageUrl);
        if ($status) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Saved Successfully!</strong>
</div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data Saved Successfully!</strong>
</div>';
        }


    }

    protected function imageUpload()
    {
        $imageName = date("h_i_s_d_m_y_a") . $this->image['name'];
        $imageDirectory = 'assets/img/upload/' . $imageName;
        move_uploaded_file($this->image['tmp_name'], $imageDirectory);
        return $imageDirectory;
    }

}