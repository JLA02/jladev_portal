<?php

namespace App\Form;

use Symfony\Component\Console\Input\Input;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, ['required' => false])
        ->add('from', EmailType::class, ['label' => 'Your email :', 'required' => true])
        ->add('body', TextareaType::class, ['label' => 'Your message :', 'required' => true])
        ->add('check', CheckboxType::class,['required' => true])
        ->add('send', SubmitType::class);
    }
}