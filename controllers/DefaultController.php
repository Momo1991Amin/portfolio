<?php


class DefaultController extends AbstractController
{
    public function index()
    {
        $this->renderView("index_view",
            [
                "projets" => Projet::list()
            ]
        );
    }
}