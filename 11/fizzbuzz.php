<!DOCTYPE html>
<html>
<head>
    <title>FizzBuzz</title>
</head>
<body>
    <h1>FizzBuzz</h1>

    <ul>
        <?php for ($i = 1; $i <= 100; $i++): ?>
            <?php
            $output = '';

            if ($i % 3 === 0) {
                $output .= 'Fizz';
            }
            if ($i % 5 === 0) {
                $output .= 'Buzz';
            }
            ?>

            <li>
                <?php echo $output === '' ? $i : $output; ?>
            </li>
        <?php endfor; ?>
    </ul>
</body>
</html>
