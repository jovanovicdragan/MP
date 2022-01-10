<?php 

class objektivi {
    protected $model;
    protected $image;
    protected $quantity;
    protected $price;
    protected $description;
    protected $condition;
    


    function __construct($model,$image,$quantity,$price, $description,$condition) {
        $this->model = $model;
        $this->image = $image;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->description = $description;
        $this->condition = $condition;
       
    }

    function getModel() {
        return $this->model;
    }

    function setModel($model) {
        $this->model = $model;
    }

    function getQuantity() {
        $this->quantity;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }
    function getPrice() {
        $this->price;
    }

    function setPrice($price) {
        $this->price = $price;
    }
    function getDescription() {
        $this->description;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function getCondition() {
        $this->condition;
    }

    function setCondition($condition) {
        $this->condition = $condition;
    }
    function getImage() {
        $this->image;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function __toString() {
        $toReturn = "<div class=\"ponuda1\">";
        $toReturn .= "<div class=\"objektivi1\">";
        $toReturn .= "<div class=\"detalji1\">Model: <a href=\"./Lenses/{$this->model}.php\">$this->model</a></div>";
        $toReturn .= "<div class=\"detalji1\"><img src=\"./IMGs/{$this->image}.jpg\" alt=\"img\" width=\"100%\";></div>";
        $toReturn .= "<div class=\"detalji1\">Price: $this->price</div>";
        $toReturn .= "<div class=\"detalji1\">Quantity available: $this->quantity</div>";
        $toReturn .= "<div class=\"detalji1\">Description: $this->description</div>";
        $toReturn .= "<div class=\"detalji1\">Condition: $this->condition</div>";
        $toReturn .= "<form action=\"#\" method=\"post\">
            <input type=\"hidden\" name=\"recid\" value=\"6\">
            <input type=\"image\" src=\"https://www.paypal.com/en_US/i/btn/x-click-butcc.gif\" border=\"0\" name=\"submit\" alt=\"Make payments with PayPal - it's fast, free and secure!\">
            </form>";
        $toReturn .= "</div>";
        $toReturn .= "</div>";
        return $toReturn;
    }
/*
    function prikaziObjektiv() {
        echo "<div class=\"ponuda\">";
        echo "<div class=\"detalji\">Model:<a href=\"./Lenses/{$this->model}.php\">$this->model</a></div>";
        echo "<div class=\"detalji\">Price: $this->price</div>";
        echo "<div class=\"detalji\">Quantity available: $this->quantity</div>";
        echo "<div class=\"detalji\">Description: $this->description</div>";
        echo "<div class=\"detalji\">Condition: $this->condition</div>"; 
        echo "<div class=\"detalji\"><img src=\"./IMGs/{$this->image}.jpg\" alt=\"img\"; width=\"50%\";></div>";
        echo "</div>"; 
        echo "<br>";
    } Ova ideja je trebalo da eskalira do neslucenih visina ali sam se smorio i odustao, sto se i vidi.. 
    
    */
}   



$industar = new objektivi("Industar", "Industar", 15,22,"The Soviet lens Industar 50-2 in a state of a new, with no traces of use.","Excellent condition, the lenses are clean, the mechanics work.");
$helios = new objektivi("Helios", "Helios", 25,13,"Helios 44-2 58 mm f / 2 - copy of a famous Biotar 2/58 lens (Carl Zeiss Jena).","Excellent condition, the lenses are clean, the mechanics work.");
$MTO = new objektivi("MTO","MTO",178,12,"Meniscus body of Maksutov system lenses (MTOM), which later became known as MTO. Production Krasnogorsk Mechanical Plant, 1964. Early version engraved with Grand Prix Brussels 1958 Made in USSR. Excellent condition, fully functional. The focal length of the lens is 500mm (on crop cameras it will generally be 800mm)! Allows you to shoot very distant subjects.","Good condition! The lenses are clean, the mechanics are working properly!");
echo "$industar";echo "$helios"; echo "$MTO";


?>

