<?php if (@$isHome): ?>
    <header class="header home">
        <div class="logo_menu">
            <div class="page">
                <div class="navbar" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed click_event_menu" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <a href="#" class="header-share-img visible-xs"><img src="/images/share-img.png" alt="" /></a> <a class="logo" href="/"> <img src="/images/logo.png" alt="logo" /></a> </div>
                        <div class="header-margin hidden">
                            <div class="header-search-main">
                                <div class="header-search">
                                    <div class="selct-cont select-drop-icon">
                                        <select id="zk-ord-sr" name="">
                                            <option value="all">All Products</option>
                                            <optgroup label="Women">
                                                <?php
                                                $srch_ofrs = Cake\ORM\TableRegistry::get('Offerings');
                                                $srch_ofr = $srch_ofrs->find()->where(['Offerings.category' => 'Women']);
                                                foreach ($srch_ofr as $ofr) {
                                                    ?>
                                                    <option value="<?= strtolower(Cake\Utility\Inflector::slug($ofr->name)) ?>"><?= $ofr->name ?></option>
                                                <?php } ?>
                                            </optgroup>
                                            <optgroup label="Men">
                                                <?php
                                                $srch_ofr = $srch_ofrs->find()->where(['Offerings.category' => 'Men']);
                                                foreach ($srch_ofr as $ofr) {
                                                    ?>
                                                    <option value="<?= strtolower(Cake\Utility\Inflector::slug($ofr->name)) ?>"><?= $ofr->name ?></option>
                                                <?php } ?>
                                            </optgroup>
                                            <optgroup label="Kids">
                                                <?php
                                                $srch_ofr = $srch_ofrs->find()->where(['Offerings.category' => 'Kids']);
                                                foreach ($srch_ofr as $ofr) {
                                                    ?>
                                                    <option value="<?= strtolower(Cake\Utility\Inflector::slug($ofr->name)) ?>"><?= $ofr->name ?></option>
                                                <?php } ?>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="selct-cont selct-cont2 select-drop-icon">
                                        <select id="zk-loc-sr" name="">
                                            <option value="all">In All Areas</option>
                                            <option value="Airport">Airport</option>
                                            <option value="Alaknanda">Alaknanda</option>
                                            <option value="Ansal Plaza">Ansal Plaza</option>
                                            <option value="Chanakyapuri">Chanakyapuri</option>
                                            <option value="Chandni Chowk">Chandni Chowk</option>
                                            <option value="Connaught Place">Connaught Place</option>
                                            <option value="Defence Colony">Defence Colony</option>
                                            <option value="Delhi Cantt">Delhi Cantt</option>
                                            <option value="Dilshad Garden">Dilshad Garden</option>
                                            <option value="Dwarka">Dwarka</option>
                                            <option value="Faridabad">Faridabad</option>
                                            <option value="Gandhi Nagar">Gandhi Nagar</option>
                                            <option value="Ghaziabad">Ghaziabad</option>
                                            <option value="Greater Kailash">Greater Kailash</option>
                                            <option value="Green Park">Green Park</option>
                                            <option value="Gurgaon">Gurgaon</option>
                                            <option value="Hari Nagar">Hari Nagar</option>
                                            <option value="Hauz Khas">Hauz Khas</option>
                                            <option value="Indirapuram">Indirapuram</option>
                                            <option value="IP Extension">IP Extension</option>
                                            <option value="Janakpuri">Janakpuri</option>
                                            <option value="Kalindi Kunj">Kalindi Kunj</option>
                                            <option value="Kamla Nagar">Kamla Nagar</option>
                                            <option value="Karkardooma">Karkardooma</option>
                                            <option value="Karol Bagh">Karol Bagh</option>
                                            <option value="Kaushambi">Kaushambi</option>
                                            <option value="Khan Market">Khan Market</option>
                                            <option value="Kirti Nagar">Kirti Nagar</option>
                                            <option value="Lajpat Nagar">Lajpat Nagar</option>
                                            <option value="Lal Quarter">Lal Quarter</option>
                                            <option value="Laxmi Nagar">Laxmi Nagar</option>
                                            <option value="Madangir">Madangir</option>
                                            <option value="Malviya Nagar">Malviya Nagar</option>
                                            <option value="Mayur Vihar">Mayur Vihar</option>
                                            <option value="Meharchand Market">Meharchand Market</option>
                                            <option value="Model Town">Model Town</option>
                                            <option value="Mukherjee Nagar">Mukherjee Nagar</option>
                                            <option value="Naraina Vihar">Naraina Vihar</option>
                                            <option value="Noida">Noida</option>
                                            <option value="Paschim Vihar">Paschim Vihar</option>
                                            <option value="Patel Nagar">Patel Nagar</option>
                                            <option value="Pitampura">Pitampura</option>
                                            <option value="Punjabi Bagh">Punjabi Bagh</option>
                                            <option value="Rajouri Garden">Rajouri Garden</option>
                                            <option value="Rani Bagh">Rani Bagh</option>
                                            <option value="Rohini">Rohini</option>
                                            <option value="Saket">Saket</option>
                                            <option value="Sarojini Nagar">Sarojini Nagar</option>
                                            <option value="Seelampur">Seelampur</option>
                                            <option value="Shahdara">Shahdara</option>
                                            <option value="Shahpur Jat">Shahpur Jat</option>
                                            <option value="Shalimar Bagh">Shalimar Bagh</option>
                                            <option value="South Extension">South Extension</option>
                                            <option value="Subhash Nagar">Subhash Nagar</option>
                                            <option value="Sukhdev Vihar">Sukhdev Vihar</option>
                                            <option value="Tagore Garden">Tagore Garden</option>
                                            <option value="Tilak Nagar">Tilak Nagar</option>
                                            <option value="Vasant Kunj">Vasant Kunj</option>
                                            <option value="Vikas Puri">Vikas Puri</option>
                                        </select>
                                    </div>
                                    <input type="submit" name="">
                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse collapse right_menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Delhi / Ncr <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="login-btn" data-toggle="modal" data-target="#myModal">Log In</a></li>
                                <li class="visible-xs"><a href="#">Hot Deals</a></li>
                            </ul>
                        </div>
                        <div class="top-btn hidden-xs"> <a href="#" class="hot-btn" title="Hot Deals">Hot Deals</a> </div>
                        <!--/.nav-collapse -->
                    </div>
                    <!--/.container-fluid -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="home-discover-sec">
                    <h2>Discover amazing places to shop around you...</h2>
                    <div class="col-md-7 col-sm-7">
                        <div class="header-search">
                            <div class="selct-cont select-drop-icon">
                                <select id="zk-ord-sr" name="">
                                    <option value="all">All Products</option>
                                    <optgroup label="Women">
                                        <?php
                                        $srch_ofrs = Cake\ORM\TableRegistry::get('Offerings');
                                        $srch_ofr = $srch_ofrs->find()->where(['Offerings.category' => 'Women']);
                                        foreach ($srch_ofr as $ofr) {
                                            ?>
                                            <option value="<?= strtolower(Cake\Utility\Inflector::slug($ofr->name)) ?>"><?= $ofr->name ?></option>
                                        <?php } ?>
                                    </optgroup>
                                    <optgroup label="Men">
                                        <?php
                                        $srch_ofr = $srch_ofrs->find()->where(['Offerings.category' => 'Men']);
                                        foreach ($srch_ofr as $ofr) {
                                            ?>
                                            <option value="<?= strtolower(Cake\Utility\Inflector::slug($ofr->name)) ?>"><?= $ofr->name ?></option>
                                        <?php } ?>
                                    </optgroup>
                                    <optgroup label="Kids">
                                        <?php
                                        $srch_ofr = $srch_ofrs->find()->where(['Offerings.category' => 'Kids']);
                                        foreach ($srch_ofr as $ofr) {
                                            ?>
                                            <option value="<?= strtolower(Cake\Utility\Inflector::slug($ofr->name)) ?>"><?= $ofr->name ?></option>
                                        <?php } ?>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="selct-cont selct-cont2 select-drop-icon">
                                <select id="zk-loc-sr" name="">
                                    <option value="all">In All Areas</option>
                                    <option value="Airport">Airport</option>
                                    <option value="Alaknanda">Alaknanda</option>
                                    <option value="Ansal Plaza">Ansal Plaza</option>
                                    <option value="Chanakyapuri">Chanakyapuri</option>
                                    <option value="Chandni Chowk">Chandni Chowk</option>
                                    <option value="Connaught Place">Connaught Place</option>
                                    <option value="Defence Colony">Defence Colony</option>
                                    <option value="Delhi Cantt">Delhi Cantt</option>
                                    <option value="Dilshad Garden">Dilshad Garden</option>
                                    <option value="Dwarka">Dwarka</option>
                                    <option value="Faridabad">Faridabad</option>
                                    <option value="Gandhi Nagar">Gandhi Nagar</option>
                                    <option value="Ghaziabad">Ghaziabad</option>
                                    <option value="Greater Kailash">Greater Kailash</option>
                                    <option value="Green Park">Green Park</option>
                                    <option value="Gurgaon">Gurgaon</option>
                                    <option value="Hari Nagar">Hari Nagar</option>
                                    <option value="Hauz Khas">Hauz Khas</option>
                                    <option value="Indirapuram">Indirapuram</option>
                                    <option value="IP Extension">IP Extension</option>
                                    <option value="Janakpuri">Janakpuri</option>
                                    <option value="Kalindi Kunj">Kalindi Kunj</option>
                                    <option value="Kamla Nagar">Kamla Nagar</option>
                                    <option value="Karkardooma">Karkardooma</option>
                                    <option value="Karol Bagh">Karol Bagh</option>
                                    <option value="Kaushambi">Kaushambi</option>
                                    <option value="Khan Market">Khan Market</option>
                                    <option value="Kirti Nagar">Kirti Nagar</option>
                                    <option value="Lajpat Nagar">Lajpat Nagar</option>
                                    <option value="Lal Quarter">Lal Quarter</option>
                                    <option value="Laxmi Nagar">Laxmi Nagar</option>
                                    <option value="Madangir">Madangir</option>
                                    <option value="Malviya Nagar">Malviya Nagar</option>
                                    <option value="Mayur Vihar">Mayur Vihar</option>
                                    <option value="Meharchand Market">Meharchand Market</option>
                                    <option value="Model Town">Model Town</option>
                                    <option value="Mukherjee Nagar">Mukherjee Nagar</option>
                                    <option value="Naraina Vihar">Naraina Vihar</option>
                                    <option value="Noida">Noida</option>
                                    <option value="Paschim Vihar">Paschim Vihar</option>
                                    <option value="Patel Nagar">Patel Nagar</option>
                                    <option value="Pitampura">Pitampura</option>
                                    <option value="Punjabi Bagh">Punjabi Bagh</option>
                                    <option value="Rajouri Garden">Rajouri Garden</option>
                                    <option value="Rani Bagh">Rani Bagh</option>
                                    <option value="Rohini">Rohini</option>
                                    <option value="Saket">Saket</option>
                                    <option value="Sarojini Nagar">Sarojini Nagar</option>
                                    <option value="Seelampur">Seelampur</option>
                                    <option value="Shahdara">Shahdara</option>
                                    <option value="Shahpur Jat">Shahpur Jat</option>
                                    <option value="Shalimar Bagh">Shalimar Bagh</option>
                                    <option value="South Extension">South Extension</option>
                                    <option value="Subhash Nagar">Subhash Nagar</option>
                                    <option value="Sukhdev Vihar">Sukhdev Vihar</option>
                                    <option value="Tagore Garden">Tagore Garden</option>
                                    <option value="Tilak Nagar">Tilak Nagar</option>
                                    <option value="Vasant Kunj">Vasant Kunj</option>
                                    <option value="Vikas Puri">Vikas Puri</option>
                                </select>
                            </div>
                            <input type="submit" name="">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="or-txt">Or</div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="header-search  header-search1">
                            <input type="text" name="" placeholder="Search by store name" />
                            <input type="submit" name="">
                        </div>
                    </div>
                    <ul class="banner-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#topmarket" aria-controls="topmarket" role="tab" data-toggle="tab" onclick="setTimeout(function () {
                            zakoopiApp.marketsSlider.reloadSlider()
                        }, 500);">Top markets</a></li>
                        <li role="presentation"><a href="#toptrends" aria-controls="toptrends" role="tab" data-toggle="tab" onclick="setTimeout(function () {
                            zakoopiApp.trendsSlider.reloadSlider()
                        }, 500);">Top trends</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="row1 tab-pane fade in active"  id="topmarket">
                            <div class="col-md-16 col-sm-16 ">
                                <ul class="bxslider" id="bx-slider-markets">
                                    <?php foreach ($markets as $market): ?>
                                        <li>
                                            <a href="<?= $this->App->marketSlug($market->url_slug); ?>">
                                                <div class="dbx-caption"><span><?= $market->city->city_name; ?></span></div>
                                                <img src="/uploads/markets/<?= $market->img ?>-220x0.jpg" alt="<?= $market->market_name ?>" title="<?= $market->market_name ?>" />
                                            </a> 
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div role="tabpanel" class="row tab-pane fade"  id="toptrends">
                            <div class="col-md-16 col-sm-16">
                                <ul class="bxslider1" id="bx-slider-trends">
                                    <?php foreach ($trends as $trend): ?>
                                        <li>
                                            <a href="<?= $this->App->trendSlug($trend->trend_name); ?>">
                                                <div class="dbx-caption"><span><?= $trend->trend_name ?></span></div>
                                                <img src="/uploads/trends/<?= $trend->img ?>-220x0.jpg" alt="<?= $trend->trend_name ?>" title="<?= $trend->trend_name ?>" />
                                            </a> 
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php else: ?>
    <header class="remove-bg">
        <div class="logo_menu">
            <div class="page">
                <div class="navbar" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed click_event_menu" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <a href="#" class="header-share-img visible-xs">
                                <img src="/images/share-img.png" alt="" />
                            </a> 
                            <a class="logo" href="/"> 
                                <img src="/images/logo.png" alt="logo" alt="" />
                            </a> 
                        </div>
                        <div class="header-margin hidden-xs">
                            <div class="header-search-main">
                                <div class="header-search">
                                    <div class="selct-cont select-drop-icon">
                                        <select id="zk-ord-sr" name="">
                                            <option value="all">All Products-2</option>
                                            <optgroup label="Women">
                                                <?php
                                                $srch_ofrs = Cake\ORM\TableRegistry::get('Offerings');
                                                $srch_ofr = $srch_ofrs->find()->where(['Offerings.category' => 'Women']);
                                                foreach ($srch_ofr as $ofr) {
                                                    ?>
                                                    <option value="<?= strtolower(Cake\Utility\Inflector::slug($ofr->name)) ?>"><?= $ofr->name ?></option>
                                                <?php } ?>
                                            </optgroup>
                                            <optgroup label="Men">
                                                <?php
                                                $srch_ofr = $srch_ofrs->find()->where(['Offerings.category' => 'Men']);
                                                foreach ($srch_ofr as $ofr) {
                                                    ?>
                                                    <option value="<?= strtolower(Cake\Utility\Inflector::slug($ofr->name)) ?>"><?= $ofr->name ?></option>
                                                <?php } ?>
                                            </optgroup>
                                            <optgroup label="Kids">
                                                <?php
                                                $srch_ofr = $srch_ofrs->find()->where(['Offerings.category' => 'Kids']);
                                                foreach ($srch_ofr as $ofr) {
                                                    ?>
                                                    <option value="<?= strtolower(Cake\Utility\Inflector::slug($ofr->name)) ?>"><?= $ofr->name ?></option>
                                                <?php } ?>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="selct-cont selct-cont2 select-drop-icon">
                                        <select id="zk-loc-sr" name="">
                                            <option value="all">In All Areas</option>
                                            <?php foreach ($markets as $market) { ?>
                                                <option value="<?= $market->market_name ?>"><?= $market->market_name ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <input type="submit" name="">
                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse collapse right_menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Delhi / Ncr <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="login-btn" data-toggle="modal" data-target="#myModal">Log In</a></li>

                                <li class="visible-xs"><a href="#">Hot Deals</a></li>
                            </ul>
                        </div>
                        <div class="top-btn hidden-xs"> <a href="#" class="hot-btn" title="Hot Deals">Hot Deals</a> </div>
                        <!--/.nav-collapse -->
                    </div>
                    <!--/.container-fluid -->
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>

<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop='static'>
    <div class="modal-dialog modal_dial">
        <div class="modal-content">
            <div class="modal-header modal_header_bg" id="_closebtn">


                <h4 class="modal-title" id="myModalLabel">Login to Zakoopi</h4>
            </div>
            <div class="modal-body">
                <ul class="login_share">
                    <li class="login_facebook"><fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button></li>
                    <li class="login_google"><a href="#" onclick="login();" id="signInButton" class="mylink"><img class="fb_login" src="/images/google.png"></a></a></li>
                    <li>
                        <p>We will never post/share anything without permission.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery("a[data-target='#myModal']").bind('click', function (e) {
        jQuery('#_closebtn').html('<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><h4 class="modal-title" id="myModalLabel">Login to Zakoopi</h4>');
    });


</script>
<script type="text/javascript">

    function logout()
    {
        gapi.auth.signOut();
        location.reload();
    }
    function login()
    {
        var myParams = {
            'clientid': '216585866753-jemq010jlqbs60g144j3sv7juis4olm0.apps.googleusercontent.com',
            'cookiepolicy': 'single_host_origin',
            'callback': 'loginCallback',
            'approvalprompt': 'force',
            'scope': 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
        };
        gapi.auth.signIn(myParams);
    }

    function loginCallback(result)
    {

        if (result['status']['signed_in'])
        {
            var request = gapi.client.plus.people.get(
                    {
                        'userId': 'me'
                    });
            request.execute(function (resp)
            {
                var email = '';
                if (resp['emails'])
                {
                    for (i = 0; i < resp['emails'].length; i++)
                    {
                        if (resp['emails'][i]['type'] == 'account')
                        {
                            email = resp['emails'][i]['value'];
                        }
                    }
                }
                var uniq_id = resp['id'];
                var name = resp['displayName'];
                var image = resp['image']['url'];
                var email = email;
                console.log(result);

                $.ajax({
                    url: "/users/google_login",
                    type: "post",
                    data: "uid=" + uniq_id + "&image=" + image + "&name=" + name + "&email=" + email,
                    success: function () {
                        alert("success");
                        $("#result").html('Submitted successfully');
                    },
                });
            });



        }

    }



    function onLoadCallback()
    {
        gapi.client.setApiKey(null);
        gapi.client.load('plus', 'v1', function () {
        });
    }

</script>

<script type="text/javascript">
    (function () {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = 'https://apis.google.com/js/client.js?onload=onLoadCallback';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
</script>
<script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
            // Logged into your app and Facebook.
            testAPI();
        } else if (response.status === 'not_authorized') {
            // The person is logged into Facebook, but not your app.
            document.getElementById('status').innerHTML = 'Please log ' +
                    'into this app.';
        } else {
            // The person is not logged into Facebook, so we're not sure if
            // they are logged into this app or not.
            document.getElementById('status').innerHTML = 'Please log ' +
                    'into Facebook.';
        }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });
    }

    window.fbAsyncInit = function () {
        FB.init({
            appId: '{1597283787212059}',
            cookie: true, // enable cookies to allow the server to access 
            // the session
            xfbml: true, // parse social plugins on this page
            version: 'v2.2' // use version 2.2
        });

        // Now that we've initialized the JavaScript SDK, we call 
        // FB.getLoginStatus().  This function gets the state of the
        // person visiting this page and can return one of three states to
        // the callback you provide.  They can be:
        //
        // 1. Logged into your app ('connected')
        // 2. Logged into Facebook, but not your app ('not_authorized')
        // 3. Not logged into Facebook and can't tell if they are logged into
        //    your app or not.
        //
        // These three cases are handled in the callback function.

        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });

    };

    // Load the SDK asynchronously
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function (response) {
            console.log('Successful login for: ' + response.name);
            document.getElementById('status').innerHTML =
                    'Thanks for logging in, ' + response.name + '!';
        });
    }
</script> 
