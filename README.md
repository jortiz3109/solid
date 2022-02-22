# SOLID principles

## Open-Closed Principle

In this example you can use the `computeArea()` method to calculate shape's areas in the client code.

```php
class Client
{
    public static function compute(Figure $figure)
    {
        echo 'The area is ' . $figure->computeArea();
    }
}
```

You can create a new class for any shape without modifying the related code. For instance,
you can create the `Circle` class and the client should keep working.

```php
class Circle extends Figure
{
    protected float $radio = 0;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    public function computeArea(): float
    {
        return pi() * pow($this->radio, 2);
    }
}
```