<?php
class Stack {
    private $items = [];

    public function push($item) {
        array_push($this->items, $item);
    }

    public function pop() {
        return array_pop($this->items);
    }

    public function is_empty() {
        return empty($this->items);
    }
}
$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
echo "Popped item: " . $stack->pop() . "\n";
echo "Stack is empty: " . ($stack->is_empty() ? "true" : "false") . "\n";
