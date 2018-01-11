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
        <link href="{{ URL::to('css/css_1.css') }}" rel="stylesheet" type="text/css">
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
        </div>
        <img id="avatar" alt="" class="img-circle">
        <p>peace_data</p>
    </div>

    <!-- header end -->

    <!-- About Me section start -->
    <div class="section">
        <h1><span>About Me</span></h1>
        <div class="accordion">
            <p>
                <h3>
                    Hey! I'm <strong><span class="name"></span></strong>. Coding has changed my world. It's not just about apps. Learning to code gave me <i>problem-solving skills</i> and a way to communicate with others on a technical level. I can also develop
                    websites and use my coding skills to get a better job. And I learned it all at <strong>IT-Academy</strong> where they build your self-esteem and keep you motivated. These courses are for <span id="about_courses"></span>. Join me in this rewarding
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

    </div>
    <!-- About Me section end -->

    <!-- About Courses section start -->
    <div class="section">
        <h1><span>About Courses</span></h1>
        <div class="accordion">
            <p>
                <h3>
                    <strong><span id="modules"></span></strong>
                </h3>
            </p>
        </div>
    </div>
    <!-- About Courses section end -->

    <!-- My Schedule section start -->
    <div class="section">
        <h1><span>My Coding Schedule</span></h1>
        <div class="accordion">
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
    </div>
    <!-- My Schedule section end -->


    <!-- My Skills section start -->
    <div class="section">
        <h1><span>My Skills</span></h1>
        <div class="accordion">
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
                    <progress min="0" max="100" value="10"></progress>
                </li>
                <li>Python <br/>
                    <progress min="0" max="100" value="5"></progress>
                </li>
                <li>C/C++ <br/>
                    <progress min="0" max="100" value="20"></progress>
                </li>
                <li>Java <br/>
                    <progress min="0" max="100" value="5"></progress>
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
    </div>
    <!-- My Skills section end -->


    <!-- Media section start -->
    <div class="section">
        <h1><span>My Media</span></h1>
        <div class="accordion">
            <iframe width="854" height="480" src="https://www.youtube.com/embed/q15hJ3EWqZY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <iframe width="854" height="480" src="https://www.youtube.com/embed/xuJdq11lMZ0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
    <!-- Media section end -->

    <!-- Form section start -->
    <div class="section">
        <h1><span>Leave Me a Message</span></h1>

        <div class="accordion">
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
    </div>
    <!-- Form section end -->

    <!-- Contacts section start -->
    <div class="section" id="contacts">
        <h1><span>Contact Or Follow Me</span></h1>
        <div class="accordion">
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
        &copy; 2018 peace_data. All rights reserved.
    </div>

    <script src="{{URL::to('js/js_1.js')}}" type="text/javascript"></script>
        <!-- </div> -->
    </body>
</html>
