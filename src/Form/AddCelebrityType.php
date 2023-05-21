<?php

namespace App\Form;

use App\Entity\Celebrities;
use App\Form\Type\DateTimePickerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class AddCelebrityType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options):void
    {
        $builder
            ->add('fullName', TextType::class,[
                'attr' => ['autofocus' => true],
                'label' => 'label.fullname',

            ])
            ->add('dateDeNaissance', DateTimePickerType::class, [
                'label' => 'Date de Naissance'
            ])
            ->add('dateDeMort', DateTimePickerType::class, [
                'label' => 'Date de Mort'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description'
            ])
            ->add('celebrityImage', FileType::class, [
                'label' => 'Celebrity Image (Image file only)',
                // unmapped means that this field is not associated to any entity property
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpg',
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid Image',
                    ])
                ],
            ])
            ->add('Add', SubmitType::class)
            ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Celebrities::class,
        ]);
    }
}

?>
