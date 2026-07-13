<?php
class Counter {
    public $count = 0;

    public function increment() {
        $this->count++;
    }

    public function decrement() {
        $this->count--;
    }

    public function reset() {
        $this->count = 0;
    }
}
$counter = new Counter();
$counter->increment();
$counter->increment();
echo "Count: " . $counter->count . "\n";
$counter->decrement();
echo "Count: " . $counter->count . "\n";
$counter->reset();
echo "Count: " . $counter->count . "\n";
