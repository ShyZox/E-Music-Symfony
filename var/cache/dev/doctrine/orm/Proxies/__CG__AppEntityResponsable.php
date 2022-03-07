<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Responsable extends \App\Entity\Responsable implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'rue', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'codePostal', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'quotientFamilial', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'tel1', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'tel2', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'tel3', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'eleves'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'rue', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'codePostal', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'quotientFamilial', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'tel1', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'tel2', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'tel3', '' . "\0" . 'App\\Entity\\Responsable' . "\0" . 'eleves'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Responsable $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Responsable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): \App\Entity\Responsable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getRue(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRue', []);

        return parent::getRue();
    }

    /**
     * {@inheritDoc}
     */
    public function setRue(string $rue): \App\Entity\Responsable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRue', [$rue]);

        return parent::setRue($rue);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(string $ville): \App\Entity\Responsable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodePostal(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodePostal', []);

        return parent::getCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodePostal(int $codePostal): \App\Entity\Responsable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodePostal', [$codePostal]);

        return parent::setCodePostal($codePostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Responsable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuotientFamilial(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuotientFamilial', []);

        return parent::getQuotientFamilial();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuotientFamilial(int $quotientFamilial): \App\Entity\Responsable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuotientFamilial', [$quotientFamilial]);

        return parent::setQuotientFamilial($quotientFamilial);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel1(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel1', []);

        return parent::getTel1();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel1(string $tel1): \App\Entity\Responsable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel1', [$tel1]);

        return parent::setTel1($tel1);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel2(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel2', []);

        return parent::getTel2();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel2(string $tel2): \App\Entity\Responsable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel2', [$tel2]);

        return parent::setTel2($tel2);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel3(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel3', []);

        return parent::getTel3();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel3(string $tel3): \App\Entity\Responsable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel3', [$tel3]);

        return parent::setTel3($tel3);
    }

    /**
     * {@inheritDoc}
     */
    public function getEleves(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEleves', []);

        return parent::getEleves();
    }

    /**
     * {@inheritDoc}
     */
    public function addElefe(\App\Entity\Eleve $elefe): \App\Entity\Responsable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addElefe', [$elefe]);

        return parent::addElefe($elefe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeElefe(\App\Entity\Eleve $elefe): \App\Entity\Responsable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeElefe', [$elefe]);

        return parent::removeElefe($elefe);
    }

}
