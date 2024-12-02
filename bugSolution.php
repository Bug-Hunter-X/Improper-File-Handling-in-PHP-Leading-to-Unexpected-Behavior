```php
$file = @fopen("nonexistent_file.txt", "r");
if ($file === false) {
    // Handle the error robustly
    $error = error_get_last();
    echo "Error opening file: " . $error['message'];
    // Log the error for debugging or monitoring.
    error_log("Error opening file: " . $error['message']);
} else {
    // Process the file
    while (($line = fgets($file)) !== false) {
        // Process each line of the file
        echo $line;
    }
    fclose($file);
}
```