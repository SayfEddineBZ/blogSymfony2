<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnquiryTest
 *
 * @author sayfeddine
 */

namespace Blogger\BlogBundle\Tests\Entity;

use Blogger\BlogBundle\Entity\Enquiry;

class BlogTest extends \PHPUnit_Framework_TestCase {
    public function testEmail() {
        $enquiry = new Enquiry();
        $enquiry->setEmail("seifeddine.bouzidi@dhm-it.fr");
        $this->assertEquals('seifeddine.bouzidi@dhm-it.com', $enquiry->getEmail());
    }

}
