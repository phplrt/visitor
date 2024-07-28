<?php

declare(strict_types=1);

namespace Phplrt\Visitor\Tests\Unit\Stub;

use Phplrt\Contracts\Ast\NodeInterface;

class Node implements NodeInterface
{
    /**
     * @var array|NodeInterface[]
     */
    public array $children;

    private int $id;

    public function __construct(int $id, array $children = [])
    {
        $this->id = $id;
        $this->children = $children;
    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return \Traversable|NodeInterface[]
     */
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator(['children' => $this->children]);
    }

    public function getOffset(): int
    {
        return 0;
    }
}
