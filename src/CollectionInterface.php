<?php

declare(strict_types=1);

namespace Lilith\Common;

use ArrayAccess;
use IteratorAggregate;
use Countable;

interface CollectionInterface extends ArrayAccess, IteratorAggregate, Countable
{
    public function add(mixed $item, null|int|string $key): static;
    public function addAll(array $items): static;
    public function get(Callable|int|string $key): static;
    public function filter(Callable $func, null|int $mode = null): static;
    public function map(Callable $func): static;
    public function forEach(Callable $func): static;
    public function values(): array;
    public function isEmpty(): bool;
    public function toArray(): array;
    public function unset(mixed $key): void;
    public function clear(): void;
}
