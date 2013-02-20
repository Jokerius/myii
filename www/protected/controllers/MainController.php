<?php

class MainController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
            $message = 'HEELLLLE';
		$this->render('index', array(
                    'info'    =>    $message,
                ));
	}
        
        public function actionTest()
        {
            echo 'here was test';
        }
}