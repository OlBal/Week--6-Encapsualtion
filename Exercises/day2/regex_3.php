<?php

require __DIR__ . "/vendor/autoload.php";

//Create a function, zOrQ, that returns true if the given string contains the letter q or z (uppercase and lowercase):

dump(zOrQ("blah")); // false
dump(zOrQ("blqh")); // true
dump(zOrQ("bZ3h5")); // true
dump(zOrQ("bz3h5")); // true