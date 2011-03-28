<?php

/**
 * Class: PostsController
 * Date begin: Mar 16, 2011
 * 
 * Posts controller
 * 
 * @package blog
 * @author Azat Khuzhin
 */

namespace Blog\WebBundle\Controller;

use	Symfony\Bundle\FrameworkBundle\Controller\Controller,
	Symfony\Component\Security\Core\SecurityContext,
	Symfony\Component\HttpFoundation\RedirectResponse;

class PostsController extends Controller {
      /**
	 * @extra:Route("/blogs/", name="_posts")
	 * @extra:Template()
	 */
	public function indexAction() {
		return array();
	}
	
      /**
	 * @extra:Route("/blog/add", name="_posts_add")
	 * @extra:Template()
	 */
	public function addAction() {
		return array();
	}
	
	/**
	 * @extra:Route("/blog/edit/{id}", name="_posts_edit")
	 * @extra:Template()
	 */
	public function editAction() {
		return array();
	}
}
