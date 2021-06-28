<?php

namespace Container9uUSJdq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder69031 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd7b6a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties260f4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getConnection', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getMetadataFactory', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getExpressionBuilder', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'beginTransaction', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getCache', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'transactional', array('func' => $func), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->transactional($func);
    }

    public function commit()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'commit', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->commit();
    }

    public function rollback()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'rollback', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getClassMetadata', array('className' => $className), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'createQuery', array('dql' => $dql), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'createNamedQuery', array('name' => $name), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'createQueryBuilder', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'flush', array('entity' => $entity), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'clear', array('entityName' => $entityName), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->clear($entityName);
    }

    public function close()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'close', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->close();
    }

    public function persist($entity)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'persist', array('entity' => $entity), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'remove', array('entity' => $entity), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'refresh', array('entity' => $entity), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'detach', array('entity' => $entity), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'merge', array('entity' => $entity), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'contains', array('entity' => $entity), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getEventManager', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getConfiguration', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'isOpen', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getUnitOfWork', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getProxyFactory', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'initializeObject', array('obj' => $obj), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'getFilters', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'isFiltersStateClean', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'hasFilters', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return $this->valueHolder69031->hasFilters();
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

        $instance->initializerd7b6a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder69031) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder69031 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder69031->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, '__get', ['name' => $name], $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        if (isset(self::$publicProperties260f4[$name])) {
            return $this->valueHolder69031->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69031;

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

        $targetObject = $this->valueHolder69031;
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
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69031;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder69031;
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
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, '__isset', array('name' => $name), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69031;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder69031;
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
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, '__unset', array('name' => $name), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder69031;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder69031;
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
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, '__clone', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        $this->valueHolder69031 = clone $this->valueHolder69031;
    }

    public function __sleep()
    {
        $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, '__sleep', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;

        return array('valueHolder69031');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd7b6a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd7b6a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd7b6a && ($this->initializerd7b6a->__invoke($valueHolder69031, $this, 'initializeProxy', array(), $this->initializerd7b6a) || 1) && $this->valueHolder69031 = $valueHolder69031;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder69031;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder69031;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
