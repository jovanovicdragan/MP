
<?php

$objektivi = array();
  
$objektivi['Industar'] = array(
    "price" => 15, 
    "quantity" => 22,
    "description" => "The Soviet lens Industar 50-2 in a state of a new, with no traces of use.", 
    "condition" =>"Excellent condition, the lenses are clean, the mechanics work.",
);
  
    $objektivi['Helios'] = array(
        "price" => 25, 
        "quantity" => 13,
        "description"=>"Helios 44-2 58 mm f / 2 - copy of a famous Biotar 2/58 lens (Carl Zeiss Jena).",
        "condition"=>"Excellent condition, the lenses are clean, the mechanics work." 
        );
        $objektivi['Mir'] = array(
            "price" => 145, 
            "quantity" => 24, 
            "description" => "Wide-angle lens Mir 1B in a tube! Produced at VOMZ in 1990. Fastening - thread M42.",
            "condition" =>  "Good condition. Clean, without dust and fungus. Focus and aperture work properly."  
        );
            $objektivi['Zenitar'] = array(
                "price" => 35, 
                "quantity" => 4,
                "description" => "A fast, fixed focal length lens MC Zenitar - M2s f2 / 50mm in excellent, completely serviceable condition. Produced at KMZ in 1999.", 
                "condition" => "A fast, fixed focal length lens MC Zenitar - M2s f2 / 50mm.",
            );
                $objektivi['Jupiter'] = array(
                    "price" => 155, 
                    "quantity" => 5,
                    "description" => "Soviet lens Jupiter 37A. Launched by Kazan Optical and Mechanical Plant in 1987.", 
                    "condition" => "Good condition! Lens without any signs of explantation.",
                );
                    $objektivi['Petzval'] = array(
                        "price" => 68, 
                        "quantity" => 10, 
                        "description" => "A true monster of bokeh, the Petzval 1.9 / 58mm portrait lens is new. KMZ production, 2014.",
                        "condition" => "Brand new from the factory!",
                    );
                        $objektivi['Granit'] = array(
                            "price" => 230, 
                            "quantity" => 9, 
                            "description" => "AGranite-11M MS 4.5 / 80-200mm (USSR, 1988).",
                            "condition" => "Brand new from the factory!",
                        );
                                $objektivi['Fed'] = array(
                                    "price" => 168, 
                                    "quantity" => 20, 
                                    "description" => "Soviet folding lens FED 1: 3.5 F = 50. Fastening - M39 thread.
                                    The lens has excellent build quality.",
                                    "condition" => "Brand new from the factory!",
                            );
                                    $objektivi['MTO'] = array(
                                        "price" => 268, 
                                        "quantity" => 5, 
                                        "description" => "Meniscus body of Maksutov system lenses (MTOM), which later became known as MTO.",
                                        "condition" => "Brand new from the factory!",
                        );   
                                                            

    
function objaviOglase($a){
    echo "<div class=\"ponuda\">";
    foreach ($a as $key => $value) {
        echo "<div class=\"objektivi\">";
        echo "<a id=\"obj\"href=\"/MP/pages/$key.php\">$key <span class=\"red-star\">★</span><hr><img src=\"/MP/IMGs/$key.jpg\" alt=\"$key\" width=\"60%\"></a>";
        foreach ($value as $sub_key => $sub_val) { 
            echo "<div class=\"detalji\">$sub_key: $sub_val</div>";
        }   
        echo "<button class=\"button\"><a id=\"btn\" href=\"/MP/pages/$key.php\" >Find out more</a></button>";      
        echo "<button class=\"button\"><a id=\"btn\"href=\"/MP/pages/cart/php\" >Buy now</a></button>";
        echo "</div>";

    }echo "</div>";  
    
}
objaviOglase($objektivi);
?>

