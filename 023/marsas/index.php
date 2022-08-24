<?php

require __DIR__ . '/MarsoPalydovas.php';
/* (STATIC) Sukurkite klasę MarsoPalydovas.  Kontroliuokite objekto kūrimą iš klasės naudodami statinį metodą. Padarykite taip, kad iš viso būtų galima sukurti tik du objektus iš šitos klasės. Pirmam sukuriamam objektui įrašykite privačią savybę title lygią stringui “Deimas”, o antram tokią pat savybę tik lygią stringui “Fobas”. Bandant sukurti trečią objektą, turėtų būti grąžinamas vienas iš anksčiau sukurtų objektų parinktas atsitiktine tvarka.
 */

 $palydovas1 = MarsoPalydovas::naujasPalydovas();
 $palydovas2 = MarsoPalydovas::naujasPalydovas();

 var_dump($palydovas1);
 var_dump($palydovas2);
