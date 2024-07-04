<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if candidate was selected
    if (isset($_POST['candidate'])) {
        $selected_candidate = $_POST['candidate'];
        
        // Save vote to a file or database (here we simulate saving to a file)
        $file = 'votes.txt';
        $current = file_get_contents($file);
        $current .= $selected_candidate . "\n";
        file_put_contents($file, $current);
        
        echo "<h2>Thank you for voting!</h2>";
        echo "<p>You voted for: <strong>$selected_candidate</strong></p>";
    } else {
        echo "<h2>Error: No candidate selected!</h2>";
    }
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Online Voting System</h2>
        <form action="vote.php" method="post">
            <p>Select your candidate:</p>
            <input type="radio" id="candidate1" name="candidate" value="Candidate 1">
            <label for="candidate1">Candidate 1</label><br>
            <input type="radio" id="candidate2" name="candidate" value="Candidate 2">
            <label for="candidate2">Candidate 2</label><br>
            <input type="radio" id="candidate3" name="candidate" value="Candidate 3">
            <label for="candidate3">Candidate 3</label><br><br>
            <input type="submit" value="Vote">
        </form>
    </div>
</body>

</html>