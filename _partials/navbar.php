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
                                    <li>
                                        <x id="cc" class="dropdownPre"><?php getCurrencyCode() ?></x> <i id="ca" style="font-size: 20px;" class="fas fa-angle-down gray"></i>‏‏‎‏‎‏‏‎
                                        <div class="triangle"></div>
                                        <ul>
                                            <li><i class="sl-flag flag-gb">
                                                    <div id="uk"></div>
                                                </i> <a href=""><button style="padding: 0;border: none;background: none;cursor:pointer" onclick="currencyGBP()"><span> Great British Pound (&pound;)</span></button></a></li>
                                            <li><i class="sl-flag flag-usa">
                                                    <div id="usa"></div>
                                                </i> <a href=""><button style="padding: 0;border: none;background: none;cursor:pointer" onclick="currencyUSD()"><span> United States Dollar (&dollar;)</span></button></a></li>
                                            <li><i class="sl-flag flag-eu">
                                                    <div id="eu"></div>
                                                </i> <a href=""><button style="padding: 0;border: none;background: none;cursor:pointer" onclick="currencyEUR()"><span> European Euro (&euro;)</span></button></a></li>
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

                                    <!-- Google Scripts -->
                                    <meta name="google-signin-client_id" content="912277455251-namalire3oaqq9vl35aid226t65l8mlb.apps.googleusercontent.com">
                                    <script src="https://apis.google.com/js/platform.js" async defer></script>

                                    <script>
                                        function onSignIn(googleUser) {
                                            var profile = googleUser.getBasicProfile();
                                            console.log('User is ' + JSON.stringify(profile));

                                            var element = document.querySelector('#content')
                                            element.innerText = "Signed as " + profile.getName(); // print google username and
                                            // Use profile.getEmail() to get users email

                                            document.getElementById('userIcon').src = profile.getImageUrl() // Turn circle icon on navbar into google pfp
                                        }

                                        function signOut() {
                                            gapi.auth2.getAuthInstance().signOut().then(function() { // signs out
                                                location.reload(); // reloads page after signout
                                            })
                                        }
                                    </script>
                                    <!-- End Google Scripts -->

                                    <!-- Get User Icon -->
                                    <img id="userIcon" src="https://cdn.surge-networks.co.uk/assets/content/uploads/noimg.png">

                                    <!-- End -->
                                    <div class="userDropdown">
                                        <div class="triangle2"></div>
                                        <ul>
                                            <li><button onclick="signOut()">Sign Out</button></li>
                                            <li>
                                                <!-- Google Login -->
                                                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                                            </li>
                                            <li>
                                                <div id="content"></div>
                                            </li>
                                            <!-- <li>
                                                <a target="_blank" href="https://www.bungie.net/en/oauth/authorize?client_id='35544'&response_type=code"><button>Sign In with Bungee</button></a>
                                            </li> -->
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