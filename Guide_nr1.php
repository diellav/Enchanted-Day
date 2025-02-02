<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="guide_nr1.css">
    <link rel="stylesheet" href="media-query-homepage.css">
    <link rel="stylesheet" href="mediaGuide.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=WindSong&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <?php include_once 'header.php'?>
    </header>

    <?php
    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
        echo "<script>
            alert('Please sign up or log in to access this page.');
            window.location.href = 'SignUp.php';
        </script>";
        exit;
    }
    else {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
        username=document.getElementById('signup');
            username.textContent='".$_SESSION['username']."';});
        </script>";
    }
    
if (isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
    echo "<script>alert('You are the admin!');</script>";
    echo "<script>window.location.href='HomePage.php';</script>";
    exit; 
}
    ?>
       <main>
    <div class="hapsira">
        <div class="Titulli">
            Everything You Need to Know to Create a Wedding Budget: Breakdowns, Examples, & Pro Tips
        </div>
        <div class="shkrimi">
            <p>
                Getting engaged is one of the most exciting times of your life. 
                And as you share the happy news with your nearest and dearest, it is easy to get swept away in planning your dream wedding.
                But before you make any big decisions, first things first: setting your wedding budget.
            </p>
            <p>
                Determining your wedding budget is the most important part of wedding planning because it will affect every decision and purchase you make from now until your big day.
                Setting a wedding budget can feel overwhelming, and while there is certainly a lot to consider, it doesn't need to be stressful.
                Which is exactly why we've created this article. In it, we'll go over everything you need to know about wedding budgets, including typical wedding budget breakdowns, 
                what your wedding budget needs to account for, sample budget, and the best tips and strategies for stretching your budget as far as it will go. So pull up a spreadsheet and let's get started.
            </p>   
        </div>
        <div class="photo">
            <div class="ft"><img src="Guide/foto1.jpg" alt="foto1"></div>
            <div class="ft"><img src="Guide/foto2.jpg" alt="foto2"></div>
            <div class="ft"><img src="Guide/foto3.jpg" alt="foto3"></div>
        </div>
        <div class="pershkrim">
            <h3>What You Need to Know Before You Make Your Budget</h3>
            <p><strong>WHAT YOU CAN ACTUALLY AFFORD</strong></p>
            <p>
                When determining your budget, be sure to factor in both daily expenses such as rent or mortgage, car payments, or debt you might be paying off as well as costs on the horizon such as a down payment on a home,
                medical expenses, or even other weddings you'll be attending. Doing so will help you create a more realistic wedding budget, and will make sure you aren't overextending yourself where it really counts.
            </p>
            <div class="ph"><img src="Guide/foto4.jpg" alt="foto4"></div>
        </div>

        <div class="pershkrim">
            <p><strong>What is A Realistic Budget for a Wedding?</strong></p>
            <p>
                It should come as no surprise that wedding budgets vary wildly. Some couples spend well over $100,000 on ultra-glamorous big days, while others throw the wedding of their dreams for $5,000.
            </p>
            <p>
                That being said, the average cost of a wedding in the United States in 2024 is $33,000. 
                But just because that number is the average, doesn't necessarily mean it is a realistic budget for you.
                For example, weddings in states like Rhode Island, New York, and California typically cost more than the average, while weddings in states like Utah, Kentucky, and Alaska cost less.
                Furthermore, the type of wedding you want to throw, the time of year you're hoping to have it, and how many guests you'd like to include will all have an impact on what a “realistic” wedding budget might be.
            </p>
            <p>This is why it is so important to do the prep work we discussed in the section above to get clear about what you can spend making your dream wedding come to life.</p>
            <div class="ph"><img src="Guide/foto5.jpg" alt="foto5"></div>
            <p><strong>Wedding Budget Breakdown</strong></p>
            <p>To help you figure out how much you'll need to allocate for the various aspects of the celebration, such as catering, attire, flowers, music, etc., we're sharing the average wedding budget breakdown below.</p>
            <p>   Keep in mind, though, that these are just averages, which is why the percentages in this list don't add up to 100. How you choose to divvy up your own wedding budget is entirely up to you (along with whoever else is paying for the wedding). 
                You may choose to spend more or less in certain areas, and that's totally fine. Your wedding costs, and the amount of budget you allocate to each, will also vary depending on where you're getting married and the size of your guest list.</p>
            <p>But use these average wedding budget percentages as a starting point and then customize them to create your own.</p>
        </div>
    </div>
</main>




    <footer>
    <?php include_once 'footer.php'?>
    </footer>
</body>
</html>