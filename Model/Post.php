<?php


class Post
{
    private $id = 0;
    private $name = "";
    private $description = "";

    public function __construct($id, $name, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;

    }

    /**
     * Магическая функция.
     * Устанавливает значения в соответствии с ранее указанным типом данных.
     * Примечание: $id менять нельзя.
     * @example item->status = "foo:bar"
     * @param $property
     * @param $value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property) && $property != "id") {
            if(gettype($value) == gettype($this->$property)){#$this->description
                $this->$property = $value;
            }
            else
                echo "Wrong type while assigment the variable.\n";
        }else{
            echo sprintf("Bad property! \nThis property '%s' doesn`t exist or can`t be changed.\n",$property);
        }
    }

    /**
     * Магическая функция.
     * Возвращает свойства объекта.
     * @example item->status
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
}