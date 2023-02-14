<?php
namespace App\Form\Test;

use App\Entity\Test\test;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;

// ...

class TestType extends AbstractType
{
    // ...

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => test::class,
        ]);
    }
}