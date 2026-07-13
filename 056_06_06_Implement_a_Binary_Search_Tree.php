<?php
class Node {
    public $value;
    public $left = null;
    public $right = null;

    public function __construct($value) {
        $this->value = $value;
    }
}

class BinaryTree {
    public $root = null;

    public function insert($value) {
        if ($this->root === null) {
            $this->root = new Node($value);
        } else {
            $this->_insert_recursive($this->root, $value);
        }
    }

    private function _insert_recursive($node, $value) {
        if ($value < $node->value) {
            if ($node->left === null) {
                $node->left = new Node($value);
            } else {
                $this->_insert_recursive($node->left, $value);
            }
        } elseif ($value > $node->value) {
            if ($node->right === null) {
                $node->right = new Node($value);
            } else {
                $this->_insert_recursive($node->right, $value);
            }
        }
    }
}
$tree = new BinaryTree();
$tree->insert(5);
$tree->insert(3);
$tree->insert(7);
echo "Binary Search Tree created with root: " . $tree->root->value . "\n";
