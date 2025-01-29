# PHP Undefined Index Notice: Handling Missing Array Keys

This repository demonstrates a common PHP error: the "Undefined index" notice.  It shows how to safely access array elements without triggering this warning.

The `bug.php` file contains code that generates the notice. The `bugSolution.php` provides improved solutions using `isset()` and the null coalescing operator (`??`).