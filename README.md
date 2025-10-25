# php-foundations-datastructures--ChristianJayC.Reyes-
This repository contains a PHP project that demonstrates:
- Recursion (displaying nested library categories)
- Hash tables (associative arrays) for book metadata
- Binary Search Tree (BST) for organizing/searching book titles alphabetically


## Files
- recursion.php — recursive display of library categories
- hashtable.php — associative array storing book details and a lookup function
- bst.php — Node and BinarySearchTree implementation with insert/search/inorder
- main.php — integrated demo that uses the above files


## How to run
1. Place all files in the same directory on a machine with PHP installed (PHP 7+ recommended).
2. From the command line run:


```bash
php main.php
```


Or put the files in a web server document root and open `main.php` in a browser; wrap outputs in `<pre>` tags for readable indentation.


## Notes
- The BST is case-insensitive for insertion/searching.
- Duplicated titles are ignored by the BST insertion.
- 
