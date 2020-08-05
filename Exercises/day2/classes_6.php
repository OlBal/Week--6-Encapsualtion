<?php

require __DIR__ . "/vendor/autoload.php";


//Create a class that validates emails and postcodes.


$postcode = preg_match("//", $validator);
$email = preg_match("/!filter_var($email, FILTER_VALIDATE_EMAIL/"));

class Validate
{

    private $validator;

    public function __construct ($validator)
    {
        $this->validator;
    }
    
    public function validator()
    {

        if($postcode === 1||$email === 1){
            return true;
        }else return false;

    }
}

//You might want to use Regexr to test any regexes. Make sure you set it to use the PCRE engine.

// Here's the list of postcode test data:

// BS4 3UH
// S10 4GR
// BS14 9DI
// SW1A 1AA
// 12B DI9
// EST4 DD29
// blah blah BS5 8RJ blah blah






$validator = new Validator();

// it validates email addresses
echo "Email\n";
dump($validator->email("alfonso@example.com")); // true
dump($validator->email("wombat+12@spoons.plumbing")); // true
dump($validator->email("blah blah blah! alfonso@example.com")); // false
dump($validator->email("wombat@spoonsplumbing")); // false
dump($validator->email("wombatspoons")); // false
dump($validator->email("@wombatspoons")); // false

// it validates postcodes
echo "\nPostcode\n";
dump($validator->postcode("BS4 3UH")); // true
dump($validator->postcode("S10 4GR")); // true
dump($validator->postcode("BS14 9DI")); // true
dump($validator->postcode("SW1A 1AA")); // true
dump($validator->postcode("12B DI9")); // false
dump($validator->postcode("EST4 DD29")); // false
dump($validator->postcode("blah blah BS5 8RJ blah blah")); // false