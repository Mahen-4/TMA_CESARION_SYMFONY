<?php

namespace App\Tests\Entity;

use App\Entity\Post;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    public function testSetTitle()
    {
        $post = new Post();
        $title = 'Test Title';

        $post->setTitle($title);

        $this->assertEquals($title, $post->getTitle());
    }

    public function testSetSlug()
    {
        $post = new Post();
        $slug = 'test-slug';

        $post->setSlug($slug);

        $this->assertEquals($slug, $post->getSlug());
    }

    public function testSetContent()
    {
        $post = new Post();
        $content = 'Test Content';

        $post->setContent($content);

        $this->assertEquals($content, $post->getContent());
    }

    public function testSetPublishedAt()
    {
        $post = new Post();
        $publishedAt = new \DateTime();

        $post->setPublishedAt($publishedAt);

        $this->assertEquals($publishedAt, $post->getPublishedAt());
    }

    public function testSetAuthor()
    {
        $post = new Post();
        $author = new User();

        $post->setAuthor($author);

        $this->assertEquals($author, $post->getAuthor());
    }



    public function testSetSummary()
    {
        $post = new Post();
        $summary = 'Test Summary';

        $post->setSummary($summary);

        $this->assertEquals($summary, $post->getSummary());
    }
}
