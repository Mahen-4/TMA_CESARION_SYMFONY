<?php

namespace App\Tests\Form;

use App\Entity\Comment;
use App\Form\CommentType;
use Symfony\Component\Form\Test\TypeTestCase;

class CommentTypeTest extends TypeTestCase
{
    public function testBuildForm()
    {
        $formData = [
            'content' => 'This is a comment',
        ];

        $objectToCompare = new Comment();

        $form = $this->factory->create(CommentType::class, $objectToCompare);

        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());

        $view = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }
    }
}
