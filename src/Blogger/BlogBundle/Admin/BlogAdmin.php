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
use Blogger\BlogBundle\Image;

class BlogAdmin extends AbstractAdmin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper->add('title', 'text');
        $formMapper->add('author', 'entity', array(
            'class' => 'Application\Sonata\UserBundle\Entity\User',
            'property' => 'username',
        ))
        ;
        $formMapper->add('image', 'file');
        $formMapper->add('blog', 'textarea');
        //$formMapper->add('image', 'file', array('data_class' => 'Blogger\BlogBundle\Entity\Image'));
        $formMapper->add('tags', 'text');
//        $formMapper->add('comments', 'text');
//        $formMapper->add('created', 'datetime');
//        $formMapper->add('updated', 'datetime');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper->add('title');
        $datagridMapper->add('author');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('title');
        $listMapper->addIdentifier('author');
        //$listMapper->addIdentifier('image');
        $listMapper->addIdentifier('tags');
        $listMapper->addIdentifier('comments');
        $listMapper->addIdentifier('created');
        $listMapper->addIdentifier('updated');
    }

    public function prePersist($product) {
        $this->saveFile($product);
    }

    public function preUpdate($product) {
        $this->saveFile($product);
    }

    public function saveFile($product) {
        $basepath = $this->getRequest()->getBasePath();
        $product->upload($basepath);
    }

}
