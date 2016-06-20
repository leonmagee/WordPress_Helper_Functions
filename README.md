# WordPress Helper Functions

##### Generate Excerpt
Create an excerpt from `the_content()` and customize length and suffix.

###### Usage
```php
$text = 'First words Etiam rhoncus. Phasellus a est und raweg usasre';

$new = content_excerpt($text, 26);
echo $new;
```