<?php

class Node312 {
    /** @var ?Node312 */
    public $next;
}

function test312(Node312 $head) {
  for ($node = $head; $node; $node = $next) {  // TODO emit different types in loops or fix false positive
    $next = $node->next;
    $node->next = null;
  }
}

function test312Buggy(Node312 $head) {
  for ($node = $head; $node; $node = strlen($next ?: 0)) {  // TODO emit different types in loops or fix false positive

    $next = $node->next;
    $node->next = null;
  }
}
