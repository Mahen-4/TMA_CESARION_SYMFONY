<?php

namespace App\Tests\Entity;

use App\Entity\Tag;
use PHPUnit\Framework\TestCase;

class TagTest extends TestCase
{
    public function testGetName()
    {
        $tagName = 'Test Tag';
        $tag = new Tag($tagName);

        $this->assertEquals($tagName, $tag->getName());
    }

    public function testJsonSerialize()
    {
        $tagName = 'Test Tag';
        $tag = new Tag($tagName);

        $expectedJson = '"' . $tagName . '"';
        $this->assertEquals($expectedJson, json_encode($tag));
    }

    public function testToString()
    {
        $tagName = 'Test Tag';
        $tag = new Tag($tagName);

        $this->assertEquals($tagName, (string) $tag);
    }

    public function testIdIsNullOnConstruction()
    {
        $tagName = 'Test Tag';
        $tag = new Tag($tagName);

        $this->assertNull($tag->getId());
    }
}
