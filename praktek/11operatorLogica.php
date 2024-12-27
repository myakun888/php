<?php
#operator logika
# yaitu membandingkan kedua nilai boolean, dan akan mereturn nilai boolean lagi


# and / &&
var_dump(true && true); //true
var_dump(true and true); //true
var_dump(true and false); //false

# or atau ||
var_dump(true or false);//true
var_dump(true || false);//true
var_dump(true or true); //true
var_dump(false or false); //false


# ! not
var_dump(!true);//false
var_dump(!false);//true

# xor
var_dump(true xor false);//true
var_dump(true xor true);// false
var_dump(false xor false); // false


