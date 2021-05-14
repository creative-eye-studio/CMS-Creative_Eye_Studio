<?php

namespace ContainerPiNFziS;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9067a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2ea30 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6e873 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getConnection', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getMetadataFactory', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getExpressionBuilder', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'beginTransaction', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getCache', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'transactional', array('func' => $func), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->transactional($func);
    }

    public function commit()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'commit', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->commit();
    }

    public function rollback()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'rollback', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getClassMetadata', array('className' => $className), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'createQuery', array('dql' => $dql), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'createNamedQuery', array('name' => $name), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'createQueryBuilder', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'flush', array('entity' => $entity), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'clear', array('entityName' => $entityName), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->clear($entityName);
    }

    public function close()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'close', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->close();
    }

    public function persist($entity)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'persist', array('entity' => $entity), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'remove', array('entity' => $entity), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'refresh', array('entity' => $entity), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'detach', array('entity' => $entity), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'merge', array('entity' => $entity), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'contains', array('entity' => $entity), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getEventManager', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getConfiguration', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'isOpen', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getUnitOfWork', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getProxyFactory', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'initializeObject', array('obj' => $obj), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'getFilters', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'isFiltersStateClean', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'hasFilters', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return $this->valueHolder9067a->hasFilters();
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

        $instance->initializer2ea30 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9067a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9067a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9067a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, '__get', ['name' => $name], $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        if (isset(self::$publicProperties6e873[$name])) {
            return $this->valueHolder9067a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9067a;

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

        $targetObject = $this->valueHolder9067a;
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
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9067a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9067a;
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
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, '__isset', array('name' => $name), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9067a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9067a;
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
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, '__unset', array('name' => $name), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9067a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9067a;
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
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, '__clone', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        $this->valueHolder9067a = clone $this->valueHolder9067a;
    }

    public function __sleep()
    {
        $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, '__sleep', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;

        return array('valueHolder9067a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2ea30 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2ea30;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2ea30 && ($this->initializer2ea30->__invoke($valueHolder9067a, $this, 'initializeProxy', array(), $this->initializer2ea30) || 1) && $this->valueHolder9067a = $valueHolder9067a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9067a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9067a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
