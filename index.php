<?php ob_start();
try {
 include './includes/title.php';
 include './includes/random_image.php'; ?>

<?php include './includes/title.php';
      include './includes/random_image.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>DC<?php echo "&nbsp&nbsp{$title}"; ?></title>
    <link href="styles/journey.css" rel="stylesheet" type="text/css">
    
    <?php if (isset($imageSize)) { ?>
 <style>
 figcaption {
 width: <?= $imageSize[0]; ?>px;
 }
 </style>
 <?php } ?>
</head>

<body>
<header>
    <h1>DC Comics</h1>
</header>
<div id="wrapper">
    <?php $file = './includes/menu.php';
        if (file_exists($file) && is_readable($file)) {
            require $file;
        } else {
            throw new Exception("$file can't be found");
    }?>
    <main>
        <h2>DC Comics</h2>
	  <p>DC Comics, Inc. is an American comic book publisher. It is the publishing unit of DC Entertainment, a subsidiary of Warner Bros., a division of Time Warner. DC Comics is one of the largest, oldest, and most successful companies operating in American comic books, and produces material featuring numerous well-known heroic characters, including Superman, Batman, Wonder Woman, Green Lantern, The Flash, Aquaman, Cyborg, Shazam, Martian Manhunter, Hawkman and Green Arrow.</p>
		<?php if (isset($imageSize)) { ?>
            <figure>
                <img src="<?= $selectedImage; ?>" alt="Random image"
                <?= $imageSize[3]; ?>>
                <figcaption><?= $caption; ?></figcaption>
            </figure>
        <?php } ?>
        <p>The fictional DC universe also features teams such as the Justice League, the Justice Society of America, the Suicide Squad, and the Teen Titans, and well-known villains such as Joker, Lex Luthor, Darkseid, Catwoman, Harley Quinn, Ra's al Ghul, Deathstroke, General Zod, Professor Zoom, Sinestro, Black Adam and Brainiac.</p>
        <p>The initials "DC" came from the company's popular series Detective Comics, which featured Batman's debut and subsequently became part of the company's name.</p><p> Originally in Manhattan at 432 Fourth Avenue, the DC Comics offices have been located at 480 and later 575 Lexington Avenue; 909 Third Avenue; 75 Rockefeller Plaza; 666 Fifth Avenue; and 1325 Avenue of the Americas. DC has its headquarters at 1700 Broadway, Midtown Manhattan, New York City, but it was announced in October 2013 that DC Entertainment would relocate its headquarters from New York to Burbank, California in 2015.</p>

<p>Random House distributes DC Comics' books to the bookstore market, while Diamond Comic Distributors supplies the comics shop specialty market. DC Comics and its major, longtime competitor Marvel Comics (owned since 2009 by The Walt Disney Company, Time Warner's main rival) together shared 70% of the American comic book market in 2016.</p>
    </main>
    <footer>
        <?php include('includes/footer.php'); ?>
    </footer>
    
</div>
<div id="photos">
    <img src="<?= $selectedImage1; ?>" alt="Random image">
    <img src="<?= $selectedImage2; ?>" alt="Random image">
    <img src="<?= $selectedImage3; ?>" alt="Random image">
    <img src="<?= $selectedImage4; ?>" alt="Random image">
    <img src="<?= $selectedImage5; ?>" alt="Random image">
</div>
</body>
</html>
<?php } catch (Exception $e) {
    ob_end_clean();
 header('Location: http://localhost/phpsols/error.php');
 } 
ob_end_flush();
?>
