<?php  

require_once('rectangle.php');

class Square extends Rectangle
{
    public function __construct($height)
    {
        parent::__construct($height, $height);
    }

    public function perimeter()
    {
        $perimeter = (4 * $this->getHeight());
        return $perimeter;
    }

    public function area()
    {
        $area = $this->getHeight() * $this->getHeight();
        return $area;
    }



}


?>