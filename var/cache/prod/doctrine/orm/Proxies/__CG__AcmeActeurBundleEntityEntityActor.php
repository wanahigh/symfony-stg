<?php

namespace Proxies\__CG__\Acme\ActeurBundle\Entity\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Actor extends \Acme\ActeurBundle\Entity\Entity\Actor implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'id', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'entreprise', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'categories', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'dirigeant', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'adresse', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'tel', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'email', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'siteweb', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'facebook', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'linkedin', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'twitter', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'instagram'];
        }

        return ['__isInitialized__', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'id', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'entreprise', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'categories', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'dirigeant', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'adresse', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'tel', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'email', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'siteweb', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'facebook', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'linkedin', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'twitter', '' . "\0" . 'Acme\\ActeurBundle\\Entity\\Entity\\Actor' . "\0" . 'instagram'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Actor $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntreprise($entreprise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntreprise', [$entreprise]);

        return parent::setEntreprise($entreprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntreprise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntreprise', []);

        return parent::getEntreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategories($categories)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategories', [$categories]);

        return parent::setCategories($categories);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function setDirigeant($dirigeant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDirigeant', [$dirigeant]);

        return parent::setDirigeant($dirigeant);
    }

    /**
     * {@inheritDoc}
     */
    public function getDirigeant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDirigeant', []);

        return parent::getDirigeant();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel($tel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', [$tel]);

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', []);

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteweb($siteweb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteweb', [$siteweb]);

        return parent::setSiteweb($siteweb);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteweb()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteweb', []);

        return parent::getSiteweb();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacebook($facebook)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacebook', [$facebook]);

        return parent::setFacebook($facebook);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacebook()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacebook', []);

        return parent::getFacebook();
    }

    /**
     * {@inheritDoc}
     */
    public function setLinkedin($linkedin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLinkedin', [$linkedin]);

        return parent::setLinkedin($linkedin);
    }

    /**
     * {@inheritDoc}
     */
    public function getLinkedin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLinkedin', []);

        return parent::getLinkedin();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitter($twitter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitter', [$twitter]);

        return parent::setTwitter($twitter);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitter', []);

        return parent::getTwitter();
    }

    /**
     * {@inheritDoc}
     */
    public function setInstagram($instagram)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstagram', [$instagram]);

        return parent::setInstagram($instagram);
    }

    /**
     * {@inheritDoc}
     */
    public function getInstagram()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstagram', []);

        return parent::getInstagram();
    }

}
