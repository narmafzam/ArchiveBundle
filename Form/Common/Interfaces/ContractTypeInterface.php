<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/9
 */

namespace Narmafzam\ArchiveBundle\Form\Common\Interfaces;


interface ContractTypeInterface
{
    public function buildForm();

    public function configureOptions();
}