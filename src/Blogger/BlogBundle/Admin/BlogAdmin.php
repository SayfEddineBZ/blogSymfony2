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
//         $formMapper->add('linkedImage1', 'sonata_type_admin', array(
//                'delete' => false
//            ));
        $formMapper->add('blog', 'textarea');
        $formMapper->add('image', 'file');
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
        $listMapper->addIdentifier('image');
        $listMapper->addIdentifier('tags');
        $listMapper->addIdentifier('comments');
    }

    public function prePersist($page) {
        $this->manageEmbeddedImageAdmins($page);
    }

    public function preUpdate($page) {
        $this->manageEmbeddedImageAdmins($page);
    }

    private function manageEmbeddedImageAdmins($page) {
        // Cycle through each field
        foreach ($this->getFormFieldDescriptions() as $fieldName => $fieldDescription) {
            // detect embedded Admins that manage Images
            if ($fieldDescription->getType() === 'sonata_type_admin' &&
                    ($associationMapping = $fieldDescription->getAssociationMapping()) &&
                    $associationMapping['targetEntity'] === 'Blogger\BlogBundle\Entity\Image'
            ) {
                $getter = 'get' . $fieldName;
                $setter = 'set' . $fieldName;

                /** @var Image $image */
                $image = $page->$getter();

                if ($image) {
                    if ($image->getFile()) {
                        // update the Image to trigger file management
                        $image->refreshUpdated();
                    } elseif (!$image->getFile() && !$image->getFilename()) {
                        // prevent Sf/Sonata trying to create and persist an empty Image
                        $page->$setter(null);
                    }
                }
            }
        }
    }

}
