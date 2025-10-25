<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

class Node {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}


class BinarySearchTree {
    public $root;

    public function __construct() {
        $this->root = null;
    }

    public function insert($data) {
        $this->root = $this->insertRec($this->root, $data);
    }

    private function insertRec($node, $data) {
        if ($node === null) {
            return new Node($data);
        }
        if (strcasecmp($data, $node->data) < 0) {
            $node->left = $this->insertRec($node->left, $data);
        } else if (strcasecmp($data, $node->data) > 0) {
            $node->right = $this->insertRec($node->right, $data);
        }
        return $node;
    }

    public function search($data) {
        return $this->searchRec($this->root, $data);
    }

    private function searchRec($node, $data) {
        if ($node === null) return false;
        if (strcasecmp($node->data, $data) === 0) return true;
        if (strcasecmp($data, $node->data) < 0)
            return $this->searchRec($node->left, $data);
        else
            return $this->searchRec($node->right, $data);
    }

    public function inorderTraversal($node) {
        if ($node !== null) {
            $this->inorderTraversal($node->left);
            echo htmlspecialchars($node->data) . "<br>";
            $this->inorderTraversal($node->right);
        }
    }
}


$bst = new BinarySearchTree();

$books = [
    "Harry Potter",
    "The Hobbit",
    "Gone Girl",
    "Sherlock Holmes",
    "A Brief History of Time",
    "Becoming"
];

foreach ($books as $book) {
    $bst->insert($book);
}


echo "Inorder Traversal (Alphabetical):<br>";
$bst->inorderTraversal($bst->root);
echo "<br>";
echo "Searching for &quot;The Hobbit&quot;: " . ($bst->search("The Hobbit") ? "Found!" : "Not Found.") . "<br>";
echo "Searching for &quot;Inferno&quot;: " . ($bst->search("Inferno") ? "Found!" : "Not Found.") . "<br>";
?>

</body>
</html>