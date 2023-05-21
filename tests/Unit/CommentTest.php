<?php

namespace App\Tests\Entity;

use App\Entity\Comment;
use App\Entity\Post;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class CommentTest extends TestCase
{
    public function testIsLegitComment()
    {
        $comment = new Comment();
        $legitContent = 'This is a valid comment.';
        $spamContent = 'This is a spam comment @spam';

        $comment->setContent($legitContent);
        $this->assertTrue($comment->isLegitComment());

        $comment->setContent($spamContent);
        $this->assertFalse($comment->isLegitComment());
    }

    public function testSetAndGetPost()
    {
        $comment = new Comment();
        $post = new Post();

        $comment->setPost($post);

        $this->assertEquals($post, $comment->getPost());
    }
}
