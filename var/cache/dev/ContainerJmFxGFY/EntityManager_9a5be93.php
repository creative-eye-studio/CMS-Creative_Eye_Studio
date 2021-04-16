<?php

namespace ContainerJmFxGFY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder85866 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfb5ed = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9f121 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getConnection', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getMetadataFactory', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getExpressionBuilder', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'beginTransaction', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getCache', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'transactional', array('func' => $func), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->transactional($func);
    }

    public function commit()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'commit', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->commit();
    }

    public function rollback()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'rollback', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getClassMetadata', array('className' => $className), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'createQuery', array('dql' => $dql), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'createNamedQuery', array('name' => $name), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'createQueryBuilder', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'flush', array('entity' => $entity), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'clear', array('entityName' => $entityName), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->clear($entityName);
    }

    public function close()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'close', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->close();
    }

    public function persist($entity)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'persist', array('entity' => $entity), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'remove', array('entity' => $entity), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'refresh', array('entity' => $entity), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'detach', array('entity' => $entity), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'merge', array('entity' => $entity), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'contains', array('entity' => $entity), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getEventManager', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getConfiguration', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'isOpen', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getUnitOfWork', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getProxyFactory', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'initializeObject', array('obj' => $obj), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'getFilters', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'isFiltersStateClean', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'hasFilters', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return $this->valueHolder85866->hasFilters();
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

        $instance->initializerfb5ed = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder85866) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder85866 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder85866->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, '__get', ['name' => $name], $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        if (isset(self::$publicProperties9f121[$name])) {
            return $this->valueHolder85866->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85866;

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

        $targetObject = $this->valueHolder85866;
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
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85866;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder85866;
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
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, '__isset', array('name' => $name), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85866;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder85866;
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
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, '__unset', array('name' => $name), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85866;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder85866;
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
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, '__clone', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        $this->valueHolder85866 = clone $this->valueHolder85866;
    }

    public function __sleep()
    {
        $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, '__sleep', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;

        return array('valueHolder85866');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfb5ed = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfb5ed;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfb5ed && ($this->initializerfb5ed->__invoke($valueHolder85866, $this, 'initializeProxy', array(), $this->initializerfb5ed) || 1) && $this->valueHolder85866 = $valueHolder85866;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder85866;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder85866;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
