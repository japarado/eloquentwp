<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use EloquentWP\Models\Post;

final class PostModelTest extends TestCase
{
    public function testCanCreateInstance()
    {
        $this->assertInstanceOf(Post::class, new Post);
    }

    public function testHasTableAttribute()
    {
        $this->assertObjectHasAttribute('table', new Post);
    }

    public function testHasPrimarykeyAttribute()
    {
        $this->assertObjectHasAttribute('primaryKey', new Post);
    }
}
