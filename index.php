<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>B3W1L4</title>
</head>
<body>

    <?php
        date_default_timezone_set('Europe/Amsterdam');
        $current_time = date('h:i');
        $hour = date('G');

        if($hour >= 6 && $hour < 12) { ?>
            <div class="container morning">
                    <h2>Goede morgen! </h2>
                    <h2>Het is nu </h2>
                    <?php echo $current_time; ?>
            </div>
        <?php } else if($hour >= 12 && $hour < 18) { ?>
            <div class="container afternoon">
                    <h2>Goede middag! </h2>
                    <h2>Het is nu </h2>
                    <?php echo $current_time; ?>
            </div>
        <?php } else if($hour >= 18 && $hour < 0) { ?>
            <div class="container evening">
                    <h2>Goede avond! </h2>
                    <h2>Het is nu </h2>
                    <?php echo $current_time; ?>
            </div>
        <?php } else if($hour >= 0 && $hour < 6) { ?>
            <div class="container night">
                    <h2>Goede nacht! </h2>
                    <h2>Het is nu </h2>
                    <?php echo $current_time; ?>
            </div>
        <?php } ?>
</body>
</html>