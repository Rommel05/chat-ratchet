<?php

namespace ContainerKUNBTdv;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder70516 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerebab0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a197 = [
        
    ];

    public function getConnection()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getConnection', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getMetadataFactory', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getExpressionBuilder', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'beginTransaction', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getCache', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getCache();
    }

    public function transactional($func)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'transactional', array('func' => $func), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'wrapInTransaction', array('func' => $func), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'commit', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->commit();
    }

    public function rollback()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'rollback', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getClassMetadata', array('className' => $className), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'createQuery', array('dql' => $dql), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'createNamedQuery', array('name' => $name), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'createQueryBuilder', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'flush', array('entity' => $entity), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'clear', array('entityName' => $entityName), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->clear($entityName);
    }

    public function close()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'close', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->close();
    }

    public function persist($entity)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'persist', array('entity' => $entity), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'remove', array('entity' => $entity), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'detach', array('entity' => $entity), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'merge', array('entity' => $entity), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getRepository', array('entityName' => $entityName), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'contains', array('entity' => $entity), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getEventManager', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getConfiguration', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'isOpen', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getUnitOfWork', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getProxyFactory', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'initializeObject', array('obj' => $obj), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'getFilters', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'isFiltersStateClean', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'hasFilters', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return $this->valueHolder70516->hasFilters();
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

        $instance->initializerebab0 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder70516) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder70516 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder70516->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, '__get', ['name' => $name], $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        if (isset(self::$publicProperties5a197[$name])) {
            return $this->valueHolder70516->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70516;

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

        $targetObject = $this->valueHolder70516;
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
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70516;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder70516;
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
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, '__isset', array('name' => $name), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70516;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder70516;
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
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, '__unset', array('name' => $name), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70516;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder70516;
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
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, '__clone', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        $this->valueHolder70516 = clone $this->valueHolder70516;
    }

    public function __sleep()
    {
        $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, '__sleep', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;

        return array('valueHolder70516');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializerebab0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerebab0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerebab0 && ($this->initializerebab0->__invoke($valueHolder70516, $this, 'initializeProxy', array(), $this->initializerebab0) || 1) && $this->valueHolder70516 = $valueHolder70516;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder70516;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder70516;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
