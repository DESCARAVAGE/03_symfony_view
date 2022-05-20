<?php

namespace ContainerNgZGy8x;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd265a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera0f24 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties326d6 = [
        
    ];

    public function getConnection()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getConnection', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getMetadataFactory', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getExpressionBuilder', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'beginTransaction', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getCache', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getCache();
    }

    public function transactional($func)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'transactional', array('func' => $func), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'wrapInTransaction', array('func' => $func), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'commit', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->commit();
    }

    public function rollback()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'rollback', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getClassMetadata', array('className' => $className), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'createQuery', array('dql' => $dql), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'createNamedQuery', array('name' => $name), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'createQueryBuilder', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'flush', array('entity' => $entity), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'clear', array('entityName' => $entityName), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->clear($entityName);
    }

    public function close()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'close', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->close();
    }

    public function persist($entity)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'persist', array('entity' => $entity), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'remove', array('entity' => $entity), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'refresh', array('entity' => $entity), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'detach', array('entity' => $entity), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'merge', array('entity' => $entity), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getRepository', array('entityName' => $entityName), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'contains', array('entity' => $entity), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getEventManager', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getConfiguration', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'isOpen', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getUnitOfWork', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getProxyFactory', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'initializeObject', array('obj' => $obj), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'getFilters', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'isFiltersStateClean', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'hasFilters', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return $this->valueHolderd265a->hasFilters();
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

        $instance->initializera0f24 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd265a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd265a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd265a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, '__get', ['name' => $name], $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        if (isset(self::$publicProperties326d6[$name])) {
            return $this->valueHolderd265a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd265a;

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

        $targetObject = $this->valueHolderd265a;
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
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd265a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd265a;
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
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, '__isset', array('name' => $name), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd265a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd265a;
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
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, '__unset', array('name' => $name), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd265a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd265a;
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
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, '__clone', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        $this->valueHolderd265a = clone $this->valueHolderd265a;
    }

    public function __sleep()
    {
        $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, '__sleep', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;

        return array('valueHolderd265a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera0f24 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera0f24;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera0f24 && ($this->initializera0f24->__invoke($valueHolderd265a, $this, 'initializeProxy', array(), $this->initializera0f24) || 1) && $this->valueHolderd265a = $valueHolderd265a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd265a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd265a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
