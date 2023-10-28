<?php

namespace App\Form;

use App\Entity\Proveedor;
use App\Enum\EnumTipoProveedor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;

class ProveedorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('correoElectronico',  EmailType::class, [
                'attr' => [
                    'placeholder' => 'ejemplo@dominio.com',
                ],
                'constraints' => [
                    new Email([
                        'message' => 'Por favor, introduce un correo electrónico válido.',
                    ]),
                ],
            ])
            ->add('telefonoContacto', null, [
                'attr' => [
                    'type' => 'tel',
                    'pattern' => '[0-9]{9}',
                    'placeholder' => '9774545669',
                ],
            ])
            ->add('tipoProveedor', ChoiceType::class, [
                'choices' => EnumTipoProveedor::getChoices(),
                'data' => EnumTipoProveedor::OPCION_2, // Valor por defecto seleccionado
            ])
        ;

        if (isset($options['editar_registro']) && $options['editar_registro'] === true) {
            $builder->add('estaActivo');
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Proveedor::class,
            'editar_registro' => false,
        ]);
    }
}
