<?php

namespace Acme\ActeurBundle\Entity\Entity;

/**
 * Actor
 */
class Actor
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $entreprise;

    /**
     * @var string
     */
    private $categories;

    /**
     * @var string
     */
    private $dirigeant;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var int
     */
    private $tel;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $siteweb;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $linkedin;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var string
     */
    private $instagram;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set entreprise.
     *
     * @param string $entreprise
     *
     * @return Actor
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise.
     *
     * @return string
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set categories.
     *
     * @param string $categories
     *
     * @return Actor
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories.
     *
     * @return string
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set dirigeant.
     *
     * @param string $dirigeant
     *
     * @return Actor
     */
    public function setDirigeant($dirigeant)
    {
        $this->dirigeant = $dirigeant;

        return $this;
    }

    /**
     * Get dirigeant.
     *
     * @return string
     */
    public function getDirigeant()
    {
        return $this->dirigeant;
    }

    /**
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return Actor
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel.
     *
     * @param int $tel
     *
     * @return Actor
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel.
     *
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Actor
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set siteweb.
     *
     * @param string $siteweb
     *
     * @return Actor
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb.
     *
     * @return string
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set facebook.
     *
     * @param string $facebook
     *
     * @return Actor
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook.
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set linkedin.
     *
     * @param string $linkedin
     *
     * @return Actor
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin.
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set twitter.
     *
     * @param string $twitter
     *
     * @return Actor
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter.
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set instagram.
     *
     * @param string $instagram
     *
     * @return Actor
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * Get instagram.
     *
     * @return string
     */
    public function getInstagram()
    {
        return $this->instagram;
    }
}
