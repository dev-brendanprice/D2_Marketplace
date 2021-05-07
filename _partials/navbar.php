<div class="topnav">
    <div class="navRow">

        <a href="./"><img src="./images/longtricon2.png" class="logo"></a> <!-- change dir relative to system setup -->

        <div id="navContainer">

            <div id="navColumn">
                <div id="searchColumn">
                    <div id="searchBox">
                        <form action="search">
                            <i class="fas fa-search gray"></i>
                            <input name="q" type="text" id="search" placeholder="Search" onblur="this.placeholder = 'Search'">
                            <button class="fas fa-arrow-right gray" style="background-color:none; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; outline:none;" id="searchBoxEnter" type="submit"></button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="navColumn">
                <div id="currencyColumn">

                    <span id="cFont">
                        <div class="nav-wrapper">
                            <div class="sl-nav">

                                <ul>
                                    <li><x id="cc" style="font-size:20px"><?php getCurrencyCode() ?></x> <i id="ca" style="font-size: 20px;" class="fas fa-angle-down gray"></i>‏‏‎‏‎‏‏‎
                                        <div class="triangle"></div>
                                        <ul>
                                            <li><i class="sl-flag flag-gb">
                                                    <div id="uk"></div>
                                                </i> <a href=""><button style="padding: 0;border: none;background: none;cursor:pointer" onclick="currencyGBP()"><span> Great British Pound (&#163;)</span></button></a></li>
                                            <li><i class="sl-flag flag-usa">
                                                    <div id="usa"></div>
                                                </i> <a href=""><button style="padding: 0;border: none;background: none;cursor:pointer" onclick="currencyUSD()"><span> United States Dollar (&#36;)</span></button></a></li>
                                            <li><i class="sl-flag flag-ru">
                                                    <div id="ru"></div>
                                                </i> <a href=""><button style="padding: 0;border: none;background: none;cursor:pointer" onclick="currencyRUB()"><span> Russian Ruble (&#8381;)</span></button></a></li>
                                            <li><i class="sl-flag flag-cn">
                                                    <div id="cn"></div>
                                                </i> <a href=""><button style="padding: 0;border: none;background: none;cursor:pointer" onclick="currencyRMB()"><span> Chinese Renminbi (&#165;)</span></a></button></li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </span>

                </div>
            </div>

            <div id="navColumn">
                <div id="userColumn">
                    <div class="nav-wrapper2">
                        <div class="sl-nav2">
                            <ul>
                                <li>

                                    <!-- Get User Icon -->
                                    <?php
                                    
                                    $encoded = md5('priceroan2@gmail.com'); // users email
                                    $default = urlencode('https://cdn.surge-networks.co.uk/assets/content/images/default.png'); // default image
                                    ?>
                                    <img id="userIcon" src="https://www.gravatar.com/avatar/<?php echo $encoded; ?>?default=<?php echo $default; ?>" />
                                    <!-- End -->

                                    <div class="userDropdown">
                                        <div class="triangle2"></div>
                                        <ul>
                                            <li>
                                                <button onclick="setCookie()" nclick="signOut();">Sign out (Google)</button>
                                            </li>
                                            <li>
                                                <div id="my-signin2"></div>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.bungie.net/en/oauth/authorize?client_id='35544'&response_type=code"><button>Sign In with Bungee</button></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>