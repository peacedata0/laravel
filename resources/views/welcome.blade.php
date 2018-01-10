<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>#peace_data, it's my first laravel page! \(^_^)/</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Handlee&effect=anaglyph|3d-float" rel="stylesheet">
        <script src="https://intita.com/api/dist/intita-api-client.min.js" type="text/javascript"></script>

        <!-- Styles -->
        <style>
            html {
            margin: 0;
            padding: 0;
            }

            body {
            font-family: 'Handlee', cursive;
            font-size: 18pt;
            color: #a89b9b;
            background-color: #e6e6e6;
            padding: 10px;
            margin: 0;
            }

            h1 {
            font-size: 15pt;
            color: #62d520;
            text-align: center;
            padding: 18px 0 18px 0;
            margin: 0 0 10px 0;
            }

            h1 span {
            border: 4px dashed #11ca1a;
            padding: 10px;
            }

            p {
            color: #e6e6e6;
            padding: 0;
            margin: 0;
            }

            .img-circle {
            border: 3px solid white;
            border-radius: 50%;
            }

            .section {
            background-color: rgb(58, 55, 55);
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
            }

            #header {
            /*background-image: url("http://assets2.bigthink.com/system/idea_thumbnails/50636/size_1024/shutterstock_132998150-1.jpg?1368541535");*/
            /*background-image: url("http://www.rxperformancemotors.com/wp-content/uploads/2015/09/cropped-header11.jpg");*/
            /*background-image: url("http://thisisstory.com/wp-content/uploads/2016/06/Access-Granted-Header.jpg");*/
            /*background-image: url("https://www.hastac.org/sites/default/files/upload/images/post/css_code.jpg");*/
            /*background-image: url("https://1.bp.blogspot.com/-qXEc_XBhbjo/UsmhP8CAiDI/AAAAAAAALhw/OFYSD4U7n9g/s1600/Screen+Shot+2014-01-05+at+19.14.12.png");*/
            /*background-image: url("https://3.bp.blogspot.com/-3ZV097iaNJo/UkMANq-imiI/AAAAAAAALd4/z1ohKEI6Ikk/s1600/Screen+Shot+2013-09-25+at+5.15.36+PM.png");*/
            /*background-image: url("https://www.hastac.org/sites/default/files/upload/images/post/css_code.jpg");*/
            background-image: url("https://3.bp.blogspot.com/-WdaQZTp_Drc/WCiBhDmJSbI/AAAAAAAABZ0/8E-fO0lyp2gkKN6817LNG0_diMO-5c0oACLcB/w1200-h630-p-k-no-nu/hack-like-pro-metasploit-for-aspiring-hacker-part-8-setting-up-fake-smb-server-capture-domain-passwords.1280x600.jpg");
            /*background-image: url("https://video-images.vice.com/articles/589b938d47f11020ddd723a8/lede/1486594966397-pl.jpeg?crop=1xw:0.8426966292134831xh;center,center&resize=0:*");*/
            /*background-image: url("http://www.galawool.ca/wp-content/uploads/2015/10/cropped-header1.jpg");*/
            /*background-image: url("https://www.elegantthemes.com/blog/wp-content/uploads/2014/02/security.jpg");*/
            /*background-image: url("http://www.yubico.com/wp-content/uploads/2012/09/YubiKey-+-computer-header1.jpg");*/
            /*background-image: url("https://www.sololearn.com/Uploads/header.jpg");*/
            /* background-image: url("https://cs9.pikabu.ru/post_img/big/2017/05/04/9/1493907718152429384.jpg"); */
            background-size: cover;
            border-radius: 10px;
            margin-bottom: 5px;
            //    position: fixed;
            }

            #header img {
            display: block;
            width: 120px;
            height: 120px;
            margin: auto;
            }

            #header p {
            font-size: 40pt;
            /*color: lightslategrey;*/
            /*color: #3b464c;*/
            color: #a89b9b;
            padding-top: 5px;
            margin: 0;
            font-weight: bold;
            text-align: center;
            }

            .quote {
            font-size: 15pt;
            text-align: right;
            margin-top: 10px;
            }

            table {
            width: 100%;
            }

            table,
            th,
            td {
            border: 2px solid #f16e22;
            /* border-collapse: 2px; */
            text-align: center;
            table-layout: fixed;
            }

            .selected {
            background-color: #11ca1a;
            font-weight: bold;
            color: white;
            }

            li {
            margin-bottom: 15px;
            font-weight: bold;
            }

            progress {
            width: 70%;
            height: 20px;
            color: #11ca1a;
            background: #efefef;
            }

            progress::-webkit-progress-bar {
            background: #afaaaa;
            }

            progress::-webkit-progress-value {
            background: #f16e22;
            }

            progress::-moz-progress-bar {
            color: #3fb6b2;
            background: #f16e22;
            }

            iframe,
            audio {
            display: block;
            margin: 0 auto;
            border: 3px solid #3fb6b2;
            }

            hr {
            border: 0;
            height: 1px;
            background: #f36f48;
            }

            form {
            text-align: center;
            margin-top: 0;
            }

            .submit {
            background-color: #f16e22;
            padding: 12px 45px;
            border-radius: 5px;
            cursor: pointer;
            color: #ffffff;
            border: none;
            outline: none;
            margin: 0;
            font-weight: bold;
            }

            .submit:hover {
            background-color: #7e3810;
            }

            textarea {
            height: 100px;
            }

            input,
            textarea {
            margin-bottom: 10px;
            font-size: 11pt;
            padding: 15px 10px 10px;
            border: 1px solid #cecece;
            background-color: #efefef;
            color: #787575;
            border-radius: 5px;
            width: 70%;
            outline: none;
            }

            .face {
            transform: scale(0.4);
            margin: 0 auto;
            display: block;
            margin-top: -35px;
            margin-bottom: -25px;
            }

            #contacts img {
            height: 50px;
            width: 50px;
            margin-left: 7px;
            margin-right: 7px;
            }

            #contacts a {
            text-decoration: none;
            }

            #contacts img:hover {
            opacity: 0.8;
            }

            #contacts {
            text-align: center;
            }

            .copyright {
            font-size: 8pt;
            text-align: right;
            padding-bottom: 10px;
            color: grey;
            }

            /* .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            } */
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            /* .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            } */
            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 22px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            /* .m-b-md {
                margin-bottom: 30px;
            } */
        </style>
    </head>
    <body>

            <!-- <div class="content"> -->
                <!-- <div class="title m-b-md">
                    peace_data
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->

                <!-- header start -->
    <div id="header" class="font-effect-anaglyph">
        <img id="avatar" alt="" class="img-circle">
        <p>peace_data</p>
    </div>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

    <!-- header end -->

    <!-- About Me section start -->
    <div class="section">
        <h1><span>About Me</span></h1>
        <p>
            <h3>
                Hey! I'm <strong><span class="name"></span></strong>. Coding has changed my world. It's not just about apps. Learning to code gave me <i>problem-solving skills</i> and a way to communicate with others on a technical level. I can also develop
                websites and use my coding skills to get a better job. And I learned it all at <strong>IT-Academy</strong> where they build your self-esteem and keep you motivated. This courses for <span id="about_courses"></span>. Join me in this rewarding
                journey. You'll have fun, get help, and learn along the way!<br>
                <br>
                <strong>My Interests: <span id="interests"></span></strong><br>

            </h3>
        </p>
        <h3>
            <p class="quote">
                "Declare variables, not war"
            </p>
        </h3>
    </div>
    <!-- About Me section end -->

    <!-- About Courses section start -->
    <div class="section">
        <h1><span>About Courses</span></h1>
        <p>
            <h3>
                <strong><span id="modules"></span></strong>
            </h3>
        </p>
    </div>
    <!-- About Courses section end -->

    <!-- My Schedule section start -->
    <div class="section">
        <h1><span>My Coding Schedule</span></h1>
        <table>
            <tr>
                <th>Day</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            <tr>
                <td>8:00-12:30</td>
                <td class="selected">Learn</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>13:00-16:00</td>
                <td></td>
                <td class="selected">Practice</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>17:00-17:30</td>
                <td></td>
                <td></td>
                <td class="selected">Play</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>17:45-21:15</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="selected">Code</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>21:30-23:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="selected">Discuss</td>
                <td></td>
            </tr>
            <tr>
                <td>23:15-06:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="selected">Code</td>
            </tr>

        </table>
    </div>
    <!-- My Schedule section end -->


    <!-- My Skills section start -->
    <div class="section">
        <h1><span>My Skills</span></h1>
        <ul>
            <li>HTML <br/>
                <progress min="0" max="100" value="20"></progress>
            </li>
            <li>CSS <br/>
                <progress min="0" max="100" value="10"></progress>
            </li>
            <li>JavaScript <br/>
                <progress min="0" max="100" value="15"></progress>
            </li>
            <li>PHP <br/>
                <progress min="0" max="100" value="5"></progress>
            </li>
            <li>Python <br/>
                <progress min="0" max="100" value="5"></progress>
            </li>
            <li>C/C++ <br/>
                <progress min="0" max="100" value="20"></progress>
            </li>
            <li>C# <br/>
                <progress min="0" max="100" value="5"></progress>
            </li>
            <li>SQL <br/>
                <progress min="0" max="100" value="10"></progress>
            </li>
            <li>Networks <br/>
                <progress min="0" max="100" value="30"></progress>
            </li>
            <li>Linux Debian/Arch <br/>
                <progress min="0" max="100" value="40"></progress>
            </li>
            <li>System Administrating <br/>
                <progress min="0" max="100" value="30"></progress>
            </li>
            <li>Penetration Testing <br/>
                <progress min="0" max="100" value="40"></progress>
            </li>
            <li>World Of Warcraft <br/>
                <progress min="0" max="100" value="130"></progress>
            </li>
        </ul>
    </div>
    <!-- My Skills section end -->


    <!-- Media section start -->
    <div class="section">
        <h1><span>My Media</span></h1>
        <iframe width="854" height="480" src="https://www.youtube.com/embed/jSJr3dXZfcg" frameborder="0" gesture="media" allowfullscreen></iframe>
    </div>
    <!-- Media section end -->

    <!-- Form section start -->
    <div class="section">
        <h1><span>Leave Me a Message</span></h1>

        <svg class="face" height="100" width="100">
                <circle cx="50" cy="50" r="50" fill="#FDD835"/>
                <circle cx="30" cy="30" r="10" fill="#FFFFFF"/>
                <circle cx="70" cy="30" r="10" fill="#FFFFFF"/>
                <circle cx="30" cy="30" r="5" fill="#000000"/>
                <circle cx="70" cy="30" r="5" fill="#000000"/>
            <path d="M 30 70 q 20 20 40 0" stroke="#FFFFFF" stroke-width="5" fill="none"/>
            </svg>
        <form>
            <input name="name" placeholder="Name" type="text" required /><br/>
            <input name="email" placeholder="Email" type="email" required /><br/>
            <textarea name="message" placeholder="Message" required></textarea>
            <input type="submit" value="SEND" class="submit" />
        </form>
    </div>
    <!-- Form section end -->

    <!-- Contacts section start -->
    <div class="section" id="contacts">
        <h1><span>Contact Or Follow Me</span></h1>
        <div>
            <h3>
                <strong><span class="name"></span></strong>
                <strong><span id="surname"></span></strong><br>
                <br/>
                <strong>e-mail: <span id="email"></span></strong><br>
                <strong>skype: <span id="skype"></span></strong><br>
                <strong>phone: <span id="phone"></span></strong><br>

            </h3>

            <a href="https://www.facebook.com/kishet.cyanide" target="_blank">
                <img alt="Facebook" src="https://cdn2.iconfinder.com/data/icons/hexagon-social-medias/462/Social_Hexagon_Icons-01-128.png" />
            </a>
            <a href="https://github.com/peacedata0" target="_blank">
                <img alt="GitHub" src="https://cdn2.iconfinder.com/data/icons/hexagon-social-medias/462/Social_Hexagon_Icons-17-128.png" />
            </a>
            <a href="https://twitter.com/KISHET_CYANIDE" target="_blank">
                <img alt="Twitter" src="https://cdn2.iconfinder.com/data/icons/hexagon-social-medias/462/Social_Hexagon_Icons-02-128.png" />
            </a>
            <a href="https://www.youtube.com/channel/UC1BZK_MdBseCeEIpqCwjrDA?view_as=subscriber" target="_blank">
                <img alt="YouTube" src="https://cdn2.iconfinder.com/data/icons/hexagon-social-medias/462/Social_Hexagon_Icons-08-128.png" />
            </a>
            <a href="https://www.twitch.tv/peace_data" target="_blank">
                <img alt="Twitch" src="https://cdn2.iconfinder.com/data/icons/hexagon-social-medias/462/Twitch-128.png" />
            </a>
            <a href="https://kishet.visualstudio.com/_projects" target="_blank">
                <img alt="VisualStudio" src="https://cdn2.iconfinder.com/data/icons/hexagon-social-medias/462/Social_Hexagon_Icons-29-128.png" />
            </a>
            <iframe src="https://www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fkishet.cyanide&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;"
                allowTransparency="true"></iframe>
        </div>
    </div>
    <!-- Contacts section end -->

    <div class="copyright">
        &copy; 2017 peace_data. All rights reserved.
    </div>

    <script src="js_1.js" type="text/javascript"></script>
            </div>
        <!-- </div> -->
    </body>
</html>
