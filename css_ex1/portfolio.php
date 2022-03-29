<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        body{
            margin:auto;
            line-height: 2em;
            text-align:center;
            font-family: Muli, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        }

        .resume{
            padding:20px;
            height:600px;
        }

        .menu-items{
            list-style: none;
            font: 20px bold;
            color: #fff;
            text-shadow: 8px 8px #000;
            line-height: 2.5em !important;
        }


        #sideNavigationMenu{
            text-decoration: none;
            margin-top: 200px;
        }

        #sidebar-container{
            height:100%;
            position:fixed;
            width:20%;
            background: #565656;
        }

        #resume-container{
            display:flex;
            border: 1px solid black;
            flex-direction: column;
            width: 80%;
            margin-left:auto;
        }

        #resume-item1{
            padding-top:350px;
        }

        #resume-item1 h3{
            font-size: 70px;
            text-align:left !important;
            margin: 70px 70px 20px 0px;
        }

        #family-name{
            color: #DC3545;
        }

        #sideNavigationMenu img{
            height:200px;
            width:200px;
            border-radius: 50%;
            border: 5px solid gray;
        }

        #sideNavigationMenu ul{
            padding-left:0px;
        }

        #address{
            text-align:left;
        }


    </style>
    <title>Portfolio</title>
</head>
<body>

<div class="main-container">

    <div id="sidebar-container">
        <div id="sideNavigationMenu">
            <img src="\FDCI_WEBDEV\css_ex1\assets\img\ayanokoji.jpg">
                <ul>
                    <li id="about" class="menu-items">ABOUT</li>
                    <li id="experience" class="menu-items">EXPERIENCE</li>
                    <li id="portfolio" class="menu-items">PORTFOLIO</li>
                    <li id="awards" class="menu-items">AWARDS</li>
                    <li id="skills" class="menu-items">SKILLS</li>
                    <li id="education" class="menu-items">EDUCATION</li>
                    <li id="interests" class="menu-items">INTERESTS</li>
                </ul>
        </div>
    </div>


    <div id="resume-container">
        <div id="resume-item1" class="resume">
            <h3> ANTONIO <span id="family-name"> SALAMANES JR. </span> </h3>
                <p id="address">CEBU CITY, CEBU 6000 (+63) 9760402593 • antonio.salamanes.jr@gmail.com</p>
        </div>

        <div id="resume-item2" class="resume">
            <h3> EXPERIENCE </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, nesciunt minus ex excepturi est voluptatibus, aperiam suscipit animi necessitatibus, vero dolor similique exercitationem quis optio itaque soluta. Quibusdam, alias delectus!
                </p>
        </div>

        <div id="resume-item3" class="resume">
            <h3> PORTFOLIO </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, nesciunt minus ex excepturi est voluptatibus, aperiam suscipit animi necessitatibus, vero dolor similique exercitationem quis optio itaque soluta. Quibusdam, alias delectus!
                </p>
        </div>

        <div id="resume-item4" class="resume">
            <h3> AWARDS </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, nesciunt minus ex excepturi est voluptatibus, aperiam suscipit animi necessitatibus, vero dolor similique exercitationem quis optio itaque soluta. Quibusdam, alias delectus!
                </p>
        </div>

        <div id="resume-item5" class="resume">
            <h3>  SKILLS </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, nesciunt minus ex excepturi est voluptatibus, aperiam suscipit animi necessitatibus, vero dolor similique exercitationem quis optio itaque soluta. Quibusdam, alias delectus!
                </p>
        </div>

        <div id="resume-item6" class="resume">
            <h3>  EDUCATION </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, nesciunt minus ex excepturi est voluptatibus, aperiam suscipit animi necessitatibus, vero dolor similique exercitationem quis optio itaque soluta. Quibusdam, alias delectus!
                </p>
        </div>

        <div id="resume-item7" class="resume">
            <h3>  INTERESTS </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, nesciunt minus ex excepturi est voluptatibus, aperiam suscipit animi necessitatibus, vero dolor similique exercitationem quis optio itaque soluta. Quibusdam, alias delectus!
                </p>
        </div>
    </div>

</div>
    
</body>
</html>