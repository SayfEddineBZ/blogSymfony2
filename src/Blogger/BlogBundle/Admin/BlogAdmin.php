<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BlogAdmin
 *
 * @author sayfeddine
 */

namespace Blogger\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlogAdmin extends AbstractAdmin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper->add('title', 'text');
        $formMapper->add('author', 'text');
        $formMapper->add('blog', 'textarea');
        $formMapper->add('image', 'text');
        $formMapper->add('tags', 'text');
        $formMapper->add('comments', 'text');
        $formMapper->add('created', 'datetime');
        $formMapper->add('updated', 'datetime');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper->add('name');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('name');
    }

}
