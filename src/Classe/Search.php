<?php

namespace  App\Classe;


use App\Entity\Category;

class Search
{
//Pour pouvoir créer un form créé à cette classe + simplicité de manip la recherche pour nous sous forme d'objet
    /**
     * @var string
     */
    public $string = '';

    /**
     * @var Category[]
     */
    public $categories = [];

}