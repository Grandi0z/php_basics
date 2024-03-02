class ProductOfNumbers {
    
    //private $numbers;

    function __construct() {
        $this->numbers = [];
    }
  
    /**
     * @param Integer $num
     * @return NULL
     */
    function add($num) {
        $this->numbers[] = $num;
    }
  
    /**
     * @param Integer $k
     * @return Integer
     */
    function getProduct($k) {
        $length = count($this->numbers);
        $interval = abs($length - $k);
        $product = 1;

        for($i = $interval; $i < $length; $i++) {
            $product *= $this->numbers[$i];
        }
        return $product;
    }
}

/**
 * Your ProductOfNumbers object will be instantiated and called as such:
 * $obj = ProductOfNumbers();
 * $obj->add($num);
 * $ret_2 = $obj->getProduct($k);
 */