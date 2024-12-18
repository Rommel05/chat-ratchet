<?php

namespace ContainerOzu1MX7;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5bfbb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer81ddf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9a650 = [
        
    ];

    public function getConnection()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getConnection', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getMetadataFactory', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getExpressionBuilder', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'beginTransaction', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getCache', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'transactional', array('func' => $func), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'commit', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->commit();
    }

    public function rollback()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'rollback', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getClassMetadata', array('className' => $className), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'createQuery', array('dql' => $dql), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'createNamedQuery', array('name' => $name), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'createQueryBuilder', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'flush', array('entity' => $entity), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'clear', array('entityName' => $entityName), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->clear($entityName);
    }

    public function close()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'close', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->close();
    }

    public function persist($entity)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'persist', array('entity' => $entity), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'remove', array('entity' => $entity), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'detach', array('entity' => $entity), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'merge', array('entity' => $entity), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'contains', array('entity' => $entity), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getEventManager', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getConfiguration', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'isOpen', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getUnitOfWork', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getProxyFactory', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'initializeObject', array('obj' => $obj), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'getFilters', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'isFiltersStateClean', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'hasFilters', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return $this->valueHolder5bfbb->hasFilters();
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

        $instance->initializer81ddf = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder5bfbb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5bfbb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5bfbb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, '__get', ['name' => $name], $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        if (isset(self::$publicProperties9a650[$name])) {
            return $this->valueHolder5bfbb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5bfbb;

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

        $targetObject = $this->valueHolder5bfbb;
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
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5bfbb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5bfbb;
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
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, '__isset', array('name' => $name), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5bfbb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5bfbb;
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
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, '__unset', array('name' => $name), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5bfbb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5bfbb;
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
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, '__clone', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        $this->valueHolder5bfbb = clone $this->valueHolder5bfbb;
    }

    public function __sleep()
    {
        $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, '__sleep', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;

        return array('valueHolder5bfbb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer81ddf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer81ddf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer81ddf && ($this->initializer81ddf->__invoke($valueHolder5bfbb, $this, 'initializeProxy', array(), $this->initializer81ddf) || 1) && $this->valueHolder5bfbb = $valueHolder5bfbb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5bfbb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5bfbb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
