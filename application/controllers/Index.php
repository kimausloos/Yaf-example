<?php
class IndexController extends Yaf_Controller_Abstract
{
   /* default action */
   public function indexAction()
   {
       $this->_view->word = "hello world";
   }
}