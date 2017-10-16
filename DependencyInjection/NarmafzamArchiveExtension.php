<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/8
 */

namespace Narmafzam\ArchiveBundle\DependencyInjection;

use Narmafzam\ArchiveBundle\Controller\Back\ContractController as BackContractController;
use Narmafzam\ArchiveBundle\Controller\Back\DocumentController as BackDocumentController;
use Narmafzam\ArchiveBundle\Controller\Back\LetterController as BackLetterController;
use Narmafzam\ArchiveBundle\Controller\Front\ContractController as FrontContractController;
use Narmafzam\ArchiveBundle\Controller\Front\DocumentController as FrontDocumentController;
use Narmafzam\ArchiveBundle\Controller\Front\LetterController as FrontLetterController;
use Narmafzam\ArchiveBundle\Form\Common\ContractType;
use Narmafzam\ArchiveBundle\Form\Common\DocumentType;
use Narmafzam\ArchiveBundle\Form\Common\LetterType;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

class NarmafzamArchiveExtension extends ConfigurableExtension implements ExtensionInterface
{
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(dirname(__DIR__ ) . '/Resources/config'));
        $loader->load('services.yml');

        // Contract

        if ($mergedConfig['contract']['entity']) {

            $def = $container->getDefinition(ContractType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['entity']);

            $def = $container->getDefinition(BackContractController::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['entity']);

            $def = $container->getDefinition(FrontContractController::class);
            $def->replaceArgument('$dataClass', $mergedConfig['contract']['entity']);
        }

        if ($mergedConfig['contract']['form']['back']) {

            $def = $container->getDefinition(BackContractController::class);
            $def->replaceArgument('$formTypeClass', $mergedConfig['contract']['form']['back']);
        }

        if ($mergedConfig['contract']['form']['front']) {

            $def = $container->getDefinition(FrontContractController::class);
            $def->replaceArgument('$formTypeClass', $mergedConfig['contract']['form']['front']);
        }

        // Document

        if ($mergedConfig['document']['entity']) {

            $def = $container->getDefinition(DocumentType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['document']['entity']);

            $def = $container->getDefinition(BackDocumentController::class);
            $def->replaceArgument('$dataClass', $mergedConfig['document']['entity']);

            $def = $container->getDefinition(FrontDocumentController::class);
            $def->replaceArgument('$dataClass', $mergedConfig['document']['entity']);
        }

        if ($mergedConfig['document']['form']['back']) {

            $def = $container->getDefinition(BackDocumentController::class);
            $def->replaceArgument('$formTypeClass', $mergedConfig['document']['form']['back']);
        }

        if ($mergedConfig['document']['form']['front']) {

            $def = $container->getDefinition(FrontDocumentController::class);
            $def->replaceArgument('$formTypeClass', $mergedConfig['document']['form']['front']);
        }

        // Letter

        if ($mergedConfig['letter']['entity']) {

            $def = $container->getDefinition(LetterType::class);
            $def->replaceArgument('$dataClass', $mergedConfig['letter']['entity']);

            $def = $container->getDefinition(BackLetterController::class);
            $def->replaceArgument('$dataClass', $mergedConfig['letter']['entity']);

            $def = $container->getDefinition(FrontLetterController::class);
            $def->replaceArgument('$dataClass', $mergedConfig['letter']['entity']);
        }

        if ($mergedConfig['letter']['form']['back']) {

            $def = $container->getDefinition(BackLetterController::class);
            $def->replaceArgument('$formTypeClass', $mergedConfig['letter']['form']['back']);
        }

        if ($mergedConfig['letter']['form']['front']) {

            $def = $container->getDefinition(FrontLetterController::class);
            $def->replaceArgument('$formTypeClass', $mergedConfig['letter']['form']['front']);
        }

    }
}