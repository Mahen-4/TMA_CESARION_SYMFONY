<?php

namespace App\Tests\Unit\Form;

use App\Form\UserType;
use Symfony\Component\Form\Test\TypeTestCase;
use App\Entity\User;

class UserTypeTest extends TypeTestCase
{
    public function testSubmitValidData()
    {
        $formData = [
            'fullName' => 'John Doe',
            'email' => 'johndoe@example.com',
        ];

        $user = new User();
        $form = $this->factory->create(UserType::class, $user);
        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertSame('John Doe', $user->getFullName());
        $this->assertSame('johndoe@example.com', $user->getEmail());
    }
}
