<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == 3 && $j == 3) {
            goto end; // Breaks out of both loops
        }
        echo "i = $i, j = $j<br>";
    }
}
end:
echo "Loop exited using goto.<br>";
?>
