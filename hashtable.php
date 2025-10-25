<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$bookInfo = [
    "Harry Potter" => [
        "author" => "J.K. Rowling",
        "year" => 1997,
        "genre" => "Fantasy"
    ],
    "The Hobbit" => [
        "author" => "J.R.R. Tolkien",
        "year" => 1937,
        "genre" => "Fantasy"
    ],
    "A Brief History of Time" => [
        "author" => "Stephen Hawking",
        "year" => 1988,
        "genre" => "Science"
    ],
    "The Selfish Gene" => [
        "author" => "Richard Dawkins",
        "year" => 1976,
        "genre" => "Science"
    ],
    "Sherlock Holmes" => [
        "author" => "Arthur Conan Doyle",
        "year" => 1892,
        "genre" => "Mystery"
    ],
    "Gone Girl" => [
        "author" => "Gillian Flynn",
        "year" => 2012,
        "genre" => "Mystery"
    ],
    "Steve Jobs" => [
        "author" => "Walter Isaacson",
        "year" => 2011,
        "genre" => "Biography"
    ],
    "Becoming" => [
        "author" => "Michelle Obama",
        "year" => 2018,
        "genre" => "Biography"
    ]
];

function getBookInfo($title, $bookInfo) {
    if (isset($bookInfo[$title])) {
        $info = $bookInfo[$title];
        echo "Title: $title<br>";
        echo "Author: " . $info['author'] . "<br>";
        echo "Year: " . $info['year'] . "<br>";
        echo "Genre: " . $info['genre'] . "<br>";
    } else {
        echo "<i>Book not found</i>";
    }
}


$title = "Harry Potter";

getBookInfo($title, $bookInfo);
?>
</body>
</html>