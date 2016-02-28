Quicksort
-------------------------

![](https://travis-ci.org/MaurizioBrioschi/quicksort.svg?branch=dev)

PHP implementation of **Quicksort** algorithm:
Quicksort is an efficient sorting algorithm base on the paradigm divide et impera
 - Is the best algorithm base on comparison
 - Best case: Θ (n log n)
 - Bad case: Θ (n^2)

# Install
Install using composer:
```
"require": {
        "ridesoft/quicksort: "~1.0.0"
    }
```

# Use
```
<?php

use Ridesoft\Algorithm\Quicksort\QuicksortArray;

$quicksortArray = new QuicksortArray([5, 7, 200, 300, 1, 2, 90, 7, 2000, 69, 50, 30, 9, 11]);
$sortedArray = $quicksortArray->getSortedArray()

```

$sortedArray is now: [1, 2, 5, 7, 7, 9, 11, 30, 50, 69, 90, 200, 300, 2000]
