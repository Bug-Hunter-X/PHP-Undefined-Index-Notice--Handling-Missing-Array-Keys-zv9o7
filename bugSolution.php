Several ways exist to handle missing array keys safely in PHP to prevent undefined index notices:

**1. Using `isset()`:**

```php
<?php
$myArray = [];
$myArray["key1"] = "value1";

if (isset($myArray["key2"])) {
  echo $myArray["key2"];
} else {
  echo "Key 'key2' not found";
}
?>
```

**2. Using the null coalescing operator (`??`):**

```php
<?php
$myArray = [];
$myArray["key1"] = "value1";

echo $myArray["key2"] ?? "Key 'key2' not found";
?>
```

The null coalescing operator provides a more concise and readable solution. If `$myArray["key2"]` is not set or is NULL, it returns "Key 'key2' not found"; otherwise, it returns the value of `$myArray["key2"]`.