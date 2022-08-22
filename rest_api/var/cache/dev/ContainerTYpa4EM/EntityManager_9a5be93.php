<?php

namespace ContainerTYpa4EM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderee8fc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8f68 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties965af = [
        
    ];

    public function getConnection()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getConnection', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getMetadataFactory', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getExpressionBuilder', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'beginTransaction', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getCache', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getCache();
    }

    public function transactional($func)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'transactional', array('func' => $func), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'wrapInTransaction', array('func' => $func), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'commit', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->commit();
    }

    public function rollback()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'rollback', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getClassMetadata', array('className' => $className), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'createQuery', array('dql' => $dql), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'createNamedQuery', array('name' => $name), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'createQueryBuilder', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'flush', array('entity' => $entity), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'clear', array('entityName' => $entityName), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->clear($entityName);
    }

    public function close()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'close', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->close();
    }

    public function persist($entity)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'persist', array('entity' => $entity), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'remove', array('entity' => $entity), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'refresh', array('entity' => $entity), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'detach', array('entity' => $entity), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'merge', array('entity' => $entity), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getRepository', array('entityName' => $entityName), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'contains', array('entity' => $entity), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getEventManager', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getConfiguration', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'isOpen', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getUnitOfWork', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getProxyFactory', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'initializeObject', array('obj' => $obj), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'getFilters', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'isFiltersStateClean', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'hasFilters', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return $this->valueHolderee8fc->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera8f68 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderee8fc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderee8fc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderee8fc->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, '__get', ['name' => $name], $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        if (isset(self::$publicProperties965af[$name])) {
            return $this->valueHolderee8fc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee8fc;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderee8fc;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee8fc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderee8fc;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, '__isset', array('name' => $name), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee8fc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderee8fc;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, '__unset', array('name' => $name), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee8fc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderee8fc;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, '__clone', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        $this->valueHolderee8fc = clone $this->valueHolderee8fc;
    }

    public function __sleep()
    {
        $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, '__sleep', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;

        return array('valueHolderee8fc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8f68 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8f68;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8f68 && ($this->initializera8f68->__invoke($valueHolderee8fc, $this, 'initializeProxy', array(), $this->initializera8f68) || 1) && $this->valueHolderee8fc = $valueHolderee8fc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderee8fc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderee8fc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
