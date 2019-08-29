<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 19/04/2019
 * Time: 12:23
 */

namespace App\service\twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('summarize', function($contenu) {
                // Suppression des balises HTML
                $string = strip_tags($contenu);

                if (strlen($string)>150) {
                    // La chaîne est coupée au 150ième caractère
                    $stringcut=substr($string,0,150);
                    // La chaîne est coupée au dernier espace précédent le 150ième caractère
                    $string=substr($stringcut,0,strrpos($stringcut, ' '));
                }

                return $string." ...";
            }, array('is_safe' => array('html')))
        ];
    }

}