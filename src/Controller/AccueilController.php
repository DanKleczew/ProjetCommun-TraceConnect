<?php
require_once 'BaseController.php';

class AccueilController extends BaseController {
    public function index() {
        $this->render('accueil.html.twig');
    }

    public function contact() {
        $this->render('contact.html.twig');
    }

    public function about() {
        $this->render('about.html.twig');
    }

    public function page2() {
        $this->render('page2.html.twig');
    }
}
?>
