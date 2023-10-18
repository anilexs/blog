<?php

namespace App\Form;

use Symfony\Component\Validator\Constraints\NotBlank;
use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname_lastname', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champ ne peut pas être vide.',
                    ]),
                ],
            ])
            ->add('email', null, [
                'constraints' => [
                    new Assert\Email([
                        'message' => 'Veuillez entrer une adresse e-mail valide.',
                    ]),
                ],
            ])
            ->add('subject', null, [
                'constraints' => [
                    new Assert\Email([
                        'message' => 'Veuillez entrer un suject',
                    ]),
                ],
            ])
            ->add('description', null, [
                'constraints' => [
                    new Assert\Email([
                        'message' => 'Veuillez entrer une description',
                    ]),
                ],
            ])
            ->add('send', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
