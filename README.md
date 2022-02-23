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

## Liskov Substitution Principle

In this example you can use the `printContent()` method to calculate shape's areas in the client code. You can also
interchange the type by any subtype without affecting the client code.

```php
class Client
{
    public static function printContent(Parser $parser)
    {
        echo $parser->output();
    }
}
```

In this case, you can use any parser that extends the main `Parser` class.

```php
$parser = new Parser([
    [1, 'Steave', 'Developer'],
    [2, 'Andreas', 'Tester'],
]);

// subtype CSV
$csv = new CSVParser([
    [1, 'Steave', 'Developer'],
    [2, 'Andreas', 'Tester'],
]);

// subtype MarkdownTable
$marrkdown = new MarkdownParser([
    [1, 'Steave', 'Developer'],
    [2, 'Andreas', 'Tester'],
]);

Client::printContent($parser);
Client::printContent($csv);
Client::printContent($markdown);
```