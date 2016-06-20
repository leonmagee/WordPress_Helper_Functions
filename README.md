# WordPress Helper Functions

##### Generate Excerpt
Create an excerpt from `the_content()` and customize length and suffix.

###### Usage
```php
$text = 'First words Etiam rhoncus. Phasellus a est. Vivamus laoreet. Praesent adipiscing. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Ut a nisl id ante tempus hendrerit. Nam eget dui. Fusce a quam. Nunc sed turpis. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Curabitur vestibulum aliquam leo. Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus a est. Vivamus laoreet. Praesent adipiscing. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Ut a nisl id ante tempus hendrerit. Nam eget dui. Fusce a quam. Nunc sed turpis. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Curabitur vestibulum aliquam leo. Morbi mattis ullamcorper velit. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Phasellus viverra nulla ut metus varius laoreet. Ut a nisl id ante tempus hendrerit.';

$new = content_excerpt($text, 26);
echo $new;
```