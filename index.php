<?php

// creat function hello

function hello()
{
    echo "hello, world!";
}

hello();

$current_user="mike";

function is_mike()
{
    global $current_user;

    if($current_user=="mike")
    {
        echo "you is mike";
    }else
    {
        echo "Nope, you mike";
    }
}
echo PHP_EOL;

function helloname($name)
{
    if(is_array($name) && !empty($name))
    {
        foreach($name as $key)
        {
            echo "hello,$key\n";
        }
    }else
    {
        echo "hello, friend !";
    }
}

helloname(["Mike","mohede","hompton"]);


function get_info($name,$title=Null)
{
    if($title)
    {
        echo "$name was arived,and came as $title";
    }else
    {
        echo "$name was arived,welcome";
    }
}
get_info("mike","frong");

function helloword()
{
    return "\nHello word, $word";
}

function addUp($a,$b)
{
    return [$a,$b,$a+$b]; ///////////////Array
}
print_r(addUp(2,4));

function sumArray($data)
{
    $result=0;
    foreach($data as $key);
    {
        $result+$key;
    }
    return $result;
}

echo sumArray([1,4,5,5]);

function  answer()
{
    return "you answer question";
}

$answer=answer();

echo PHP_EOL;

//colback function

$answer_cal="answer";

echo $answer_cal()."!!"; //call function

echo PHP_EOL;

// anonymous function

echo PHP_EOL;

$ask=function()
{
    return "ask the question";
};
echo $ask();



echo PHP_EOL;

$askName="What Is Your Name";
$name="Budy";

echo PHP_EOL;

$ask=function()use($askName,$name)
{
    return "ask the question,$askName $name ?";
};

echo $ask();

echo PHP_ROUND_HALF_EVEN;

function br()
{
    echo PHP_EOL;
}

br();

// built-in string function

$magang="Magang TOP jos";

echo strlen($magang); // 14

br();

echo substr($magang,7); // top jos

br();

echo substr($magang,7,6); // top jo

br();

echo strpos($magang,"jos"); // 11

br();

echo $magang[11]; // j

$team=["Mike"=>"Developer","Crish"=>"Designer","Hompton"=>"Manager"];

print_r(array_keys($team));

var_dump(array_key_exists("John",$team));


if(array_key_exists("Jhon",$team))
{
    echo "mike found in \$team";
}else
{
    echo "key not fond in \$team";
}

br();

array_walk($team,function($value,$key){

    echo "$key is a $value \n";
});