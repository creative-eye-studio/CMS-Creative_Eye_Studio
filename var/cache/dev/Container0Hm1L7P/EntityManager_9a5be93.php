<?php

namespace Container0Hm1L7P;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder59977 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer05a27 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6eaa4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getConnection', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getMetadataFactory', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getExpressionBuilder', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'beginTransaction', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getCache', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getCache();
    }

    public function transactional($func)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'transactional', array('func' => $func), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->transactional($func);
    }

    public function commit()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'commit', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->commit();
    }

    public function rollback()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'rollback', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getClassMetadata', array('className' => $className), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'createQuery', array('dql' => $dql), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'createNamedQuery', array('name' => $name), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'createQueryBuilder', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'flush', array('entity' => $entity), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'clear', array('entityName' => $entityName), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->clear($entityName);
    }

    public function close()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'close', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->close();
    }

    public function persist($entity)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'persist', array('entity' => $entity), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'remove', array('entity' => $entity), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'refresh', array('entity' => $entity), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'detach', array('entity' => $entity), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'merge', array('entity' => $entity), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getRepository', array('entityName' => $entityName), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'contains', array('entity' => $entity), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getEventManager', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getConfiguration', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'isOpen', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getUnitOfWork', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getProxyFactory', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'initializeObject', array('obj' => $obj), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'getFilters', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'isFiltersStateClean', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'hasFilters', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return $this->valueHolder59977->hasFilters();
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

        $instance->initializer05a27 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder59977) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder59977 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder59977->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, '__get', ['name' => $name], $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        if (isset(self::$publicProperties6eaa4[$name])) {
            return $this->valueHolder59977->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59977;

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

        $targetObject = $this->valueHolder59977;
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
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59977;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder59977;
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
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, '__isset', array('name' => $name), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59977;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder59977;
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
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, '__unset', array('name' => $name), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59977;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder59977;
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
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, '__clone', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        $this->valueHolder59977 = clone $this->valueHolder59977;
    }

    public function __sleep()
    {
        $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, '__sleep', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;

        return array('valueHolder59977');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer05a27 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer05a27;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer05a27 && ($this->initializer05a27->__invoke($valueHolder59977, $this, 'initializeProxy', array(), $this->initializer05a27) || 1) && $this->valueHolder59977 = $valueHolder59977;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59977;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59977;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
