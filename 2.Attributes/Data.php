<?php



/* This class is a PHP attribute that can be applied to a class or property. */
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]
class NotBlank
{
}


/* This class is an attribute that can be applied to a property. */
#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    public int $min;
    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}



/* The LoginRequest class has two properties, username and password, both of which are strings that are
not blank and have a minimum and maximum length. */
class LoginRequest
{
    #[Length(min: 4, max: 10)]
    #[NotBlank]
    public ?string $username;

    #[Length(min: 8, max: 10)]
    #[NotBlank]
    public ?string $password;
}



/**
 * It takes an object and validates it's properties
 * 
 * @param object object The object to validate
 */
function validate(object $object): void
{
    $class =  new ReflectionClass($object);
    $properties =  $class->getProperties();
    foreach ($properties as $property) {
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}





/**
 * If the property is not initialized, throw an exception. If the property is initialized, but is null,
 * throw an exception
 * 
 * @param ReflectionProperty property The property to validate
 * @param object object The object to validate
 */
function validateNotBlank(ReflectionProperty $property, object $object): void
{
    $attributes =  $property->getAttributes(NotBlank::class);
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object))
            throw new Exception("Property $property->name Is Null");
        if ($property->getValue($object) == null)
            throw new Exception("Property $property->name Is Null");
    }
}




/**
 * It checks if the property is initialized and not null, then it gets the value of the property, then
 * it gets the attributes of the property, then it loops through the attributes, then it creates a new
 * instance of the attribute, then it gets the length of the value, then it checks if the length of the
 * value is less than the minimum length, then it checks if the length of the value is greater than the
 * maximum length
 * 
 * @param ReflectionProperty property The property that is being validated
 * @param object object The object to validate
 * 
 * @return void The return type is a ReflectionProperty object.
 */
function validateLength(ReflectionProperty $property, object $object): void
{
    if (!$property->isInitialized($object) || $property->getValue($object) == null) {
        return;
    }


    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);
    foreach ($attributes as $attribute) {
        $length = $attribute->newInstance();
        $valuelength = strlen($value);

        if ($valuelength < $length->min)
            throw new Exception("Property $property->name Is Too Short");

        if ($valuelength > $length->max)
            throw new Exception("Property $property->name Is Too Long");
    }
}




/* It creates a new instance of the LoginRequest class, then it sets the username property to Thomas,
then it sets the password property to Alberto123, then it calls the validate function and passes the
request object to it. */
$request = new Loginrequest();
$request->username = "Thomas";
$request->password = "Alberto123";
validate($request);
