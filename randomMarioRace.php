<!DOCTYPE html>
<html>
<head>
    <title>Random race generator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<main>
    <h1>Random Mario Kart 8 Deluxe race</h1>
    <p>Press the button to get a random race!</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <button type="submit" name="submit">Random Race</button><br>
    </form><br>
</main>
</body>
</html>
<?php

function randomRace(){
    $races = array(
        "Amsterdam Drift",
        "Animal Crossing",
        "Athens Dash",
        "Neo Bowser City",
        "New York Minute",
        "Ninja Hideaway",
        "Baby Park",
        "Bangkok Rush",
        "Berlin Byways",
        "Big Blue",
        "Bone-Dry Dunes",
        "Boo Lake",
        "Bowser Castle 3 (SNES)",
        "Bowser's Castle (Wii U)",
        "Paris Promenade",
        "Peach Gardens",
        "Piranha Plant Cove",
        "Piranha Plant Slide",
        "Cheep Cheep Beach",
        "Cheese Land",
        "Choco Mountain",
        "City Tracks",
        "Cloudtop Cruise",
        "Coconut Mall",
        "Daisy Circuit",
        "Daisy Cruiser",
        "DK Jungle",
        "DK Mountain",
        "DK Summit",
        "Dolphin Shoals",
        "Donut Plains 3",
        "Dragon Driftway",
        "Dry Dry Desert",
        "Electrodrome",
        "Excitebike Arena",
        "Grumble Volcano",
        "Hyrule Circuit",
        "Ice Ice Outpost",
        "Kalimari Desert",
        "Koopa Cape",
        "London Loop",
        "Los Angeles Laps",
        "Madrid Drive",
        "Maple Treeway",
        "Mario Circuit (DS)",
        "Mario Circuit (GBA)",
        "Mario Circuit (Wii U)",
        "Mario Circuit 3",
        "Mario Kart Stadium",
        "Merry Mountain",
        "Moo Moo Meadows",
        "Moonview Highway",
        "Mount Wario",
        "Mushroom Gorge",
        "Music Park",
        "Mute City",
        "Rainbow Road (3DS)",
        "Rainbow Road (N64)",
        "Rainbow Road SNES",
        "Rainbow Road (Wii U)",
        "Rainbow Road (Wii)",
        "Ribbon Road",
        "Riverside Park",
        "Rock Rock Mountain",
        "Rome Avanti",
        "Rosalina's Ice World",
        "Royal Raceway",
        "Sherbet Land (GCN)",
        "Shroom Ridge",
        "Shy Guy Falls",
        "Singapore Speedway",
        "Sky Garden",
        "Sky-High Sundae",
        "Snow Land",
        "Squeaky Clean Sprint",
        "Sunset Wilds",
        "Sunshine Airport",
        "Super Bell Subway",
        "Sweet Sweet Canyon",
        "Sydney Sprint",
        "Thwomp Ruins",
        "Tick-Tock Clock",
        "Toad Circuit",
        "Toad Harbor",
        "Toad's Turnpike",
        "Tokyo Blur",
        "Twisted Mansion",
        "Vancouver Velocity",
        "Waluigi Pinball",
        "Waluigi Stadium (GCN)",
        "Wario Stadium (DS)",
        "Wario's Gold Mine",
        "Water Park",
        "Wild Woods",
        "Yoshi Circuit",
        "Yoshi Valley",
        "Yoshi's Island",
    );
    return $races[rand ( 0 , count($races) -1)];
}

if (isset($_POST['submit'])) {
    echo "<h3>" . randomRace() . "</h3>" ;
} else {
    echo "";
}
?>
