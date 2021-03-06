<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 14/01/2019
 * Time: 14:17
 */

namespace SalarieBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Articles_Commande
 * @package SalarieBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="articles_commande")
 */
class Articles_Commande
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    public $id;

    /** @ORM\Column(type="integer") */
    public $commande;

    /** @ORM\Column(type="integer") */
    public $article;

    /** @ORM\Column(type="integer") */
    public $quantite;

    /** @ORM\Column(type="integer") */
    public $poidsTotal;

    /**
     * Articles_Commande constructor.
     * @param $commande
     * @param $article
     * @param $quantite
     * @param $poidsTotal
     */
    public function __construct($commande, $article, $quantite, $poidsTotal)
    {
        $this->setCommande($commande);
        $this->setArticle($article);
        $this->setQuantite($quantite);
        $this->setPoidsTotal($poidsTotal);
    }


    /**
     * @return mixed
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * @param mixed $commande
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param mixed $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getPoidsTotal()
    {
        return $this->poidsTotal;
    }

    /**
     * @param mixed $poidsTotal
     */
    public function setPoidsTotal($poidsTotal)
    {
        $this->poidsTotal = $poidsTotal;
    }


}