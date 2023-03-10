# My notes

### Call parent's methods if you need them this way

```
    class Child extends Parent
    {
        public function methodName()
        {
            parent::methodName();
        }
    }
```

### If you override parent's methods
Then the child's signature of methods must the same as parent's

And better name parameters the same as parent's

```
    class Parent
    {
        public function uniqueMethodName(string $param): string
        {
            return $param;
        }
    }

    class Child extends Parent
    {
        public function uniqueMethodName(string $param): string
        {
            return toLowerCase($param);
        }
    }
```

## Do not forget to continue your notes...

