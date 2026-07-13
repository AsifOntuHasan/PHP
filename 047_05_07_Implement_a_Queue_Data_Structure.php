<?php
class Queue {
    private $items = [];

    public function enqueue($item) {
        array_unshift($this->items, $item);
    }

    public function dequeue() {
        return array_pop($this->items);
    }

    public function is_empty() {
        return empty($this->items);
    }
}
$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
echo "Dequeued item: " . $queue->dequeue() . "\n";
echo "Queue is empty: " . ($queue->is_empty() ? "true" : "false") . "\n";
