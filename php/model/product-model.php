<?php
namespace model;
class ProductModel
{
    private $id;
    private $title;
    private $desc;
    private $quantity;
    private $category;
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getDesc()
    {
        return $this->desc;
    }
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function __toString()
    {
        return "Producdt Details:[id=" . $this->id . ",title=" . $this->title . "]";
    }
}

?>