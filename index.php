<?php
  
//Ciclo con goto
  
  $con = (int) 0;
    
    saltar:
    $con++;
    print_r($con);
    echo "<br>";
    if($con<5){
        goto saltar;
    }
    

// Limpiar variable en ram con unset 

if(true){
    $variable = (string) 'Me van a borrar:(';
    unset($variable);
}

print_r($variable);


// Verificar existenica de una variable, array, objeto, etc  con isset

$con = null;
var_dump(isset($con));
// unset($con);
var_dump(isset($con));


// array NO asociativo

$lista = (array) ["Youtube","Netflix","Facebook"];
print_r($lista);


// array asociativo

$lista2 = array('Pasatiempo1' => "Netflix", 'Pasatiempo2' => "Youtube" );
print_r($lista2);

// object (objeto)


//cilo foreach

$lista = (array) ["Youtube","Netflix", function(){ return 'HI:3';}];
    
$lista2 = (array) ['Pasatiempo1' => "Youtube", 'Pasatiempo2' => "Netflix" ];

print_r($lista[2]());
echo "<br>";
foreach ($lista as $key => $value) {
    print_r($key);
    echo "<br>";
    print_r($value);
    echo "<br>";
}

//Obtener tipo de dato con gettype    

$dato = (string) "PHP";
print_r(gettype($dato));

// declarar número positivo con interger



// Ciclo con while

$papitas = 0;
while($papitas<10){
    $papitas++;
    $cadena = (string) <<<FIN
    Me comi $papitas <br>;
FIN;
    print_r($cadena);
}

?>