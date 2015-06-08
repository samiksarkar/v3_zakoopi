<?php if(@$isHome): ?>
<header class="header">
    <div class="logo_menu">
        <div class="page">
            <div class="navbar" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed click_event_menu" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a href="#" class="header-share-img visible-xs">
                            <img src="/images/share-img.png" alt="" />
                        </a> 
                        <a class="logo" href="#"> 
                            <img src="/images/logo.png" alt="logo" />
                        </a> 
                    </div>
                    <div class="header-margin hidden">
                        <div class="header-search-main">
                            <div class="header-search">
                                <div class="selct-cont select-drop-icon">
                                    <select id="zk-ord-sr" name="">
                                        <option value="all">All Products</option>
                                        <optgroup label="Women">
                                            <option value="Skirts &amp; Shorts">Skirts &amp; Shorts</option>
                                            <option value="Sarees">Sarees</option>
                                            <option value="Salwar Suits &amp; Anarkalis">Salwar Suits &amp; Anarkalis</option>
                                            <option value="Lehengas">Lehengas</option>
                                            <option value="Kurtis &amp; Suits">Kurtis &amp; Suits</option>
                                            <option value="Jeans &amp; Jeggings">Jeans &amp; Jeggings</option>
                                            <option value="Indowesterns">Indowesterns</option>
                                            <option value="Formal Trousers">Formal Trousers</option>
                                            <option value="Formal Shirts &amp; Tops">Formal Shirts &amp; Tops</option>
                                            <option value="Dresses &amp; Gowns">Dresses &amp; Gowns</option>
                                            <option value="Casual Wear">Casual Wear</option>
                                            <option value="Casual Tops &amp; Tees">Casual Tops &amp; Tees</option>
                                            <option value="Business Suits">Business Suits</option>
                                        </optgroup>
                                        <optgroup label="Men">
                                            <option value="Trousers / Jeans">Trousers / Jeans</option>
                                            <option value="Trousers &amp; Chinos">Trousers &amp; Chinos</option>
                                            <option value="T-Shirts &amp; Collared Tees">T-Shirts &amp; Collared Tees</option>
                                            <option value="Shorts">Shorts</option>
                                            <option value="Shirts">Shirts</option>
                                            <option value="Sherwanis">Sherwanis</option>
                                            <option value="Kurta Pyjamas">Kurta Pyjamas</option>
                                            <option value="Jeans">Jeans</option>
                                            <option value="Jackets &amp; Blazers">Jackets &amp; Blazers</option>
                                            <option value="Indowesterns">Indowesterns</option>
                                            <option value="Formal Shirts">Formal Shirts</option>
                                            <option value="Casual Shirts">Casual Shirts</option>
                                            <option value="Business Suits">Business Suits</option>
                                        </optgroup>
                                        <optgroup label="Kids">
                                            <option value="Kidswear">Kidswear</option>
                                            <option value="Girls">Girls</option>
                                            <option value="Boys">Boys</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="selct-cont selct-cont2 select-drop-icon">
                                    <select id="zk-loc-sr" name="">
                                        <option value="all">In All Areas</option>
                                        <?php foreach($markets as $market){ ?>
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
                            <li><a href="#" class="login-btn">Log In</a></li>
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
                                    <option value="Skirts &amp; Shorts">Skirts &amp; Shorts</option>
                                    <option value="Sarees">Sarees</option>
                                    <option value="Salwar Suits &amp; Anarkalis">Salwar Suits &amp; Anarkalis</option>
                                    <option value="Lehengas">Lehengas</option>
                                    <option value="Kurtis &amp; Suits">Kurtis &amp; Suits</option>
                                    <option value="Jeans &amp; Jeggings">Jeans &amp; Jeggings</option>
                                    <option value="Indowesterns">Indowesterns</option>
                                    <option value="Formal Trousers">Formal Trousers</option>
                                    <option value="Formal Shirts &amp; Tops">Formal Shirts &amp; Tops</option>
                                    <option value="Dresses &amp; Gowns">Dresses &amp; Gowns</option>
                                    <option value="Casual Wear">Casual Wear</option>
                                    <option value="Casual Tops &amp; Tees">Casual Tops &amp; Tees</option>
                                    <option value="Business Suits">Business Suits</option>
                                </optgroup>
                                <optgroup label="Men">
                                    <option value="Trousers / Jeans">Trousers / Jeans</option>
                                    <option value="Trousers &amp; Chinos">Trousers &amp; Chinos</option>
                                    <option value="T-Shirts &amp; Collared Tees">T-Shirts &amp; Collared Tees</option>
                                    <option value="Shorts">Shorts</option>
                                    <option value="Shirts">Shirts</option>
                                    <option value="Sherwanis">Sherwanis</option>
                                    <option value="Kurta Pyjamas">Kurta Pyjamas</option>
                                    <option value="Jeans">Jeans</option>
                                    <option value="Jackets &amp; Blazers">Jackets &amp; Blazers</option>
                                    <option value="Indowesterns">Indowesterns</option>
                                    <option value="Formal Shirts">Formal Shirts</option>
                                    <option value="Casual Shirts">Casual Shirts</option>
                                    <option value="Business Suits">Business Suits</option>
                                </optgroup>
                                <optgroup label="Kids">
                                    <option value="Kidswear">Kidswear</option>
                                    <option value="Girls">Girls</option>
                                    <option value="Boys">Boys</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="selct-cont selct-cont2 select-drop-icon">
                            <select id="zk-loc-sr" name="">
                                <option value="all">In All Areas</option>
                                <?php foreach($markets as $market){ ?>
                                <option value="<?= $market->market_name ?>"><?= $market->market_name ?></option>
                                <?php } ?>
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
                    <li role="presentation" class="active"><a href="#topmarket" aria-controls="topmarket" role="tab" data-toggle="tab" onclick="setTimeout(function(){zakoopiApp.marketsSlider.reloadSlider()},500);">Top markets</a></li>
                    <li role="presentation"><a href="#toptrends" aria-controls="toptrends" role="tab" data-toggle="tab" onclick="setTimeout(function(){zakoopiApp.trendsSlider.reloadSlider()},500);">Top trends</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="row1 tab-pane fade in active"  id="topmarket">
                        <div class="col-md-16 col-sm-16 ">
                            <ul class="bxslider" id="bx-slider-markets">
                                <?php foreach($markets as $market): ?>
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
                                <?php foreach($trends as $trend): ?>
                                <li>
                                    <a href="<?= $this->App->trendSlug($trend->trend_name); ?>">
                                        <div class="dbx-caption"><span><?= $trend->trend_name ?></span></div>
                                        <img src="images/slider-img.jpg" alt="<?= $trend->trend_name ?>" title="<?= $trend->trend_name ?>" />
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
            <a class="logo" href="#"> 
                <img src="/images/logo.png" alt="logo" alt="" />
            </a> 
          </div>
          <div class="header-margin hidden-xs">
            <div class="header-search-main">
              <div class="header-search">
                <div class="selct-cont select-drop-icon">
                  <select id="zk-ord-sr" name="">
                    <option value="all">All Products</option>
                    <optgroup label="Women">
                    <option value="Skirts &amp; Shorts">Skirts &amp; Shorts</option>
                    <option value="Sarees">Sarees</option>
                    <option value="Salwar Suits &amp; Anarkalis">Salwar Suits &amp; Anarkalis</option>
                    <option value="Lehengas">Lehengas</option>
                    <option value="Kurtis &amp; Suits">Kurtis &amp; Suits</option>
                    <option value="Jeans &amp; Jeggings">Jeans &amp; Jeggings</option>
                    <option value="Indowesterns">Indowesterns</option>
                    <option value="Formal Trousers">Formal Trousers</option>
                    <option value="Formal Shirts &amp; Tops">Formal Shirts &amp; Tops</option>
                    <option value="Dresses &amp; Gowns">Dresses &amp; Gowns</option>
                    <option value="Casual Wear">Casual Wear</option>
                    <option value="Casual Tops &amp; Tees">Casual Tops &amp; Tees</option>
                    <option value="Business Suits">Business Suits</option>
                    </optgroup>
                    <optgroup label="Men">
                    <option value="Trousers / Jeans">Trousers / Jeans</option>
                    <option value="Trousers &amp; Chinos">Trousers &amp; Chinos</option>
                    <option value="T-Shirts &amp; Collared Tees">T-Shirts &amp; Collared Tees</option>
                    <option value="Shorts">Shorts</option>
                    <option value="Shirts">Shirts</option>
                    <option value="Sherwanis">Sherwanis</option>
                    <option value="Kurta Pyjamas">Kurta Pyjamas</option>
                    <option value="Jeans">Jeans</option>
                    <option value="Jackets &amp; Blazers">Jackets &amp; Blazers</option>
                    <option value="Indowesterns">Indowesterns</option>
                    <option value="Formal Shirts">Formal Shirts</option>
                    <option value="Casual Shirts">Casual Shirts</option>
                    <option value="Business Suits">Business Suits</option>
                    </optgroup>
                    <optgroup label="Kids">
                    <option value="Kidswear">Kidswear</option>
                    <option value="Girls">Girls</option>
                    <option value="Boys">Boys</option>
                    </optgroup>
                  </select>
                </div>
                <div class="selct-cont selct-cont2 select-drop-icon">
                  <select id="zk-loc-sr" name="">
                    <option value="all">In All Areas</option>
                    <?php foreach($markets as $market){ ?>
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
              <li><a href="#" class="login-btn">Log In</a></li>
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