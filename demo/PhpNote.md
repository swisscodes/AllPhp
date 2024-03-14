# PHP NOTE

`<h1>Hello <?= $name ?></h1>  // one way of rendering variable`

`<h1>Hello <? echo "{$name}" ?></h1>  // another way of rendering variable`

`<h1>Hello <? echo "{$name} ok" ?></h1> another way of rendering variable like iterpolation`

`<h1>Hello <? echo $name ?></h1> another way for just a single variable`

`<h1>Hello <? echo $name, "hi" ?></h1> another way lol like concatination`

```php
<?php foreach ($books as book) : ?>
    <li> whatever </li>
<?php endforeach; ?>
```

this is same as

```php
<?php foreach ($books as book) {

        <li> whatever </li>
        <li><?= $book ?> </li> //with a variable
    }
?>


Array $books = [
        "Do Androids",
        "blah blah",
        "blah blue",
      ];

Associative array  just like objects in js

$books1 = [
            [
              "name" => "do something",  
              "id" => 1,  
              "property" => "do something", 
            ],
            [
              "name" => "do something",  
              "id" => 1,  
              "property" => "do something", 
            ],
        
        ]; // to access we loop through and get the item we need with the key
```

e.g

```php
  <?php foreach (books1 as book) : ?>
                <li><?= $book["name"]
  <? endforeach; ?>
  ```

php equality check is 3 equall signs a === b

php function

```php
function thisIsAFunction($thisParams, $Params) {
  // everything else same;
}
```

no lamda in php only this one and the call it anonymous function

```php
$variable = function ($param) {
  //do something
}

// or e,g
function doSomething($param, $func) {
  //do something
  if("blah blah") {
    //call do $func
    func("anything")
  }
  // this is just an example could be anything
}

doSomething("string", function($arg) {
  // do what ever you want here
});

```

## In built methods

array_filter($the_array, function)

then we can call do something

var_dump  //to dump objects like console log to the html

Globals $_GET, $_SERVER
