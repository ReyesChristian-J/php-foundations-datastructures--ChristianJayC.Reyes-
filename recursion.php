<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$library = [
    "Fiction" => [
        "Fantasy" => ["Harry Potter", "The Hobbit"],
        "Mystery" => ["Sherlock Holmes", "Gone Girl"]
    ],
    "Non-Fiction" => [
        "Science" => ["A Brief History of Time", "The Selfish Gene"],
        "Biography" => ["Steve Jobs", "Becoming"]
    ]
];

function displayLibrary($library, $indent = 0)
{
    foreach ($library as $key => $value) {
        if (is_array($value)) {
            
            echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;", $indent) . "<b>$key</b><br>";
            
            displayLibrary($value, $indent + 1);
        } else {
            
            echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;", $indent) . $value . "<br>";
        }
    }
}


echo "<pre>";
displayLibrary($library);
echo "</pre>";
?>
</body>
</html>