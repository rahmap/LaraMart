@extends('layout.home-template')

@section('subTitle', 'Home')

@section('descTitle','Selamat datang di LaraMart')
@section('desc','Produk berkualitas dengan model terkini')

@section('content')
  <section class="shop-contents">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 pull-right">

            <div class="product-filter">
              <div class="row">
                <div class="col-md-4">
                  <span class="filter-text">Showing 1-9 of 36 Products</span>
                </div>

                <div class="col-md-8 text-right">
                  <div class="category-select">
                    <span class="filter-title">Sort by:</span><!-- /.filter-title -->
                    <select data-select-like-alignement="never" class="category drop-select">
                      <option value="">Name</option>
                      <option value="2">Size</option>
                      <option value="3">Color</option>
                      <option value="4">Brand</option>
                    </select>
                  </div><!-- /.category-select -->
                  <div class="show-item">
                    <span class="filter-title">Show:</span><!-- /.filter-title -->
                    <select id="item-number" data-select-like-alignement="never" class="item-number drop-select">
                      <option value="">12</option>
                      <option value="2">16</option>
                      <option value="3">20</option>
                      <option value="4">24</option>
                    </select>
                  </div><!-- /.show-item -->

                  <div class="filter-view">
                    <span class="filter-title">View:</span><!-- /.filter-title -->
                    <ul role="tablist">
                      <li class="grid-view active" id="grid-top"><a href="#grid" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                      <li id="list-top" class="list-view"><a href="#list" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                    </ul>
                  </div><!-- /.filter-view -->
                </div><!-- /.col-md-8 -->
              </div>
            </div><!-- /.product-filter -->

            <div class="shop-products">
              <div class="row">
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in text-center" id="grid">
                    <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail">
                          <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/1.jpg">
                            <img src="{{ asset('shopaholic') }}/images/home08/featured/1.jpg" alt="Item Thumbnail">
                          </a>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">$</span>
                            <span class="price">49.00</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail">
                          <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/2.jpg">
                            <img src="{{ asset('shopaholic') }}/images/home08/featured/2.jpg" alt="Item Thumbnail">
                          </a>
                          <span class="ribbon sale">Sale</span>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">$</span>
                            <span class="price">49.00</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail">
                          <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/3.jpg">
                            <img src="{{ asset('shopaholic') }}/images/home08/featured/3.jpg" alt="Item Thumbnail">
                          </a>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">$</span>
                            <span class="price">49.00</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail">
                          <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/4.jpg">
                            <img src="{{ asset('shopaholic') }}/images/home08/featured/4.jpg" alt="Item Thumbnail">
                          </a>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">$</span>
                            <span class="price">49.00</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail">
                          <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/5.jpg">
                            <img src="{{ asset('shopaholic') }}/images/home08/featured/5.jpg" alt="Item Thumbnail">
                          </a>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">$</span>
                            <span class="price">49.00</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail">
                          <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/6.jpg">
                            <img src="{{ asset('shopaholic') }}/images/home08/featured/6.jpg" alt="Item Thumbnail">
                          </a>
                          <span class="ribbon new">New</span>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">$</span>
                            <span class="price">49.00</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail">
                          <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/7.jpg">
                            <img src="{{ asset('shopaholic') }}/images/home08/featured/7.jpg" alt="Item Thumbnail">
                          </a>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">$</span>
                            <span class="price">49.00</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail">
                          <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/8.jpg">
                            <img src="{{ asset('shopaholic') }}/images/home08/featured/8.jpg" alt="Item Thumbnail">
                          </a>
                          <span class="ribbon sale">Sale</span>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">$</span>
                            <span class="price">49.00</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail">
                          <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/9.jpg">
                            <img src="{{ asset('shopaholic') }}/images/home08/featured/9.jpg" alt="Item Thumbnail">
                          </a>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">$</span>
                            <span class="price">49.00</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail">
                          <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/10.jpg">
                            <img src="{{ asset('shopaholic') }}/images/home08/featured/10.jpg" alt="Item Thumbnail">
                          </a>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">$</span>
                            <span class="price">49.00</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail">
                          <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/11.jpg">
                            <img src="{{ asset('shopaholic') }}/images/home08/featured/11.jpg" alt="Item Thumbnail">
                          </a>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">$</span>
                            <span class="price">49.00</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                      <div class="item">
                        <div class="item-thumbnail">
                          <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/3.jpg">
                            <img src="{{ asset('shopaholic') }}/images/home08/featured/3.jpg" alt="Item Thumbnail">
                          </a>
                          <span class="ribbon new">New</span>
                        </div><!-- /.item-thumbnail -->
                        
                        <div class="item-content">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                          </div><!-- /.buttons -->
                          <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                          <div class="item-price">
                            <span class="currency">$</span>
                            <span class="price">49.00</span>
                          </div><!-- /.item-price -->
                          <div class="rating">
                            <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                          </div><!-- /.rating -->

                        </div><!-- /.item-content -->
                      </div><!-- /.item -->
                    </div>

                  </div><!-- /.tab-pane -->

                  <div role="tabpanel" class="tab-pane fade text-left" id="list">
                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="{{ asset('shopaholic') }}/images/home08/featured/1.jpg" alt="Item Thumbnail">
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/1.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-details -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="{{ asset('shopaholic') }}/images/home08/featured/2.jpg" alt="Item Thumbnail">
                        <span class="ribbon sale">Sale</span>
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                          <div class="previous-price"><span class="currency">$</span><span class="price">85</span></div><!-- /.previous-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/2.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="{{ asset('shopaholic') }}/images/home08/featured/3.jpg" alt="Item Thumbnail">
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/3.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="{{ asset('shopaholic') }}/images/home08/featured/4.jpg" alt="Item Thumbnail">
                        <span class="ribbon new">new</span>
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/4.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="{{ asset('shopaholic') }}/images/home08/featured/5.jpg" alt="Item Thumbnail">
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/5.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="{{ asset('shopaholic') }}/images/home08/featured/6.jpg" alt="Item Thumbnail">
                        <span class="ribbon sale">Sale</span>
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                          <div class="previous-price"><span class="currency">$</span><span class="price">85</span></div><!-- /.previous-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/6.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="{{ asset('shopaholic') }}/images/home08/featured/7.jpg" alt="Item Thumbnail">
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/7.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item media">
                      <div class="item-thumbnail media-left">
                        <img src="{{ asset('shopaholic') }}/images/home08/featured/8.jpg" alt="Item Thumbnail">
                        <span class="ribbon new">new</span>
                      </div><!-- /.item-image -->

                      <div class="item-content media-body">
                        <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->
                        
                        <div class="item-price">
                          <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                        </div><!-- /.item-price -->
                        
                        <p class="description">
                          Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                        </p><!-- /.description -->

                        <div class="item-bottom">
                          <div class="buttons">
                            <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                            <button class="wish-list"><i class="fa fa-heart"></i></button>
                            <a class="fancybox" href="{{ asset('shopaholic') }}/images/home08/featured/8.jpg"><i class="fa fa-search"></i></a>
                            <button class="compare"><i class="fa fa-exchange"></i></button>
                          </div><!-- /.buttons -->

                          <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                        </div><!-- /.item-bottom -->
                      </div><!-- /.item-content -->
                    </div><!-- /.item -->

                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.row -->
            </div><!-- /.shop-products -->

            <div class="pagination pagination-02 text-center">
              <a href="#" class="prev"><i class="ti-angle-double-left"></i></a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#" class="next"><i class="ti-angle-double-right"></i></a>
            </div><!-- /.pagination -->
          </div>

          <div class="col-md-4">
            <aside class="sidebar right-sidebar pull-left">
              <h3 class="widget-title">Filter By <span></span></h3>
              <div class="widget widget_search_by_categories">
                <div class="heading">
                  <h3 class="heading-title">Categories</h3><!-- /.heading-title -->
                  <div class="widget-details">
                    <ul class="category-menu">
                      <li class="menu-item menu-item-has-children">
                        <a href="#">Cameras & Photography</a>
                        <ul>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">SLR Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Nikon</a></li>
                              <li><a href="#">Samsung</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">SLR Camera (Body Only)</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Nikon</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Compact Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Fuji</a></li>
                              <li><a href="#">Kodak</a></li>
                              <li><a href="#">Nikon</a></li>
                              <li><a href="#">Samsung</a></li>
                              <li><a href="#">Sony</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Video Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Genius</a></li>
                              <li><a href="#">Panasonic</a></li>
                              <li><a href="#">Sony</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Webcam</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">A4-Tech</a></li>
                              <li><a href="#">Creative</a></li>
                              <li><a href="#">Genius</a></li>
                              <li><a href="#">Logitech</a></li>
                              <li><a href="#">Mercury</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item menu-item-has-children">
                        <a href="#">Computer & Accessories</a>
                        <ul>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">SLR Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Nikon</a></li>
                              <li><a href="#">Samsung</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">SLR Camera (Body Only)</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Nikon</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Compact Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Fuji</a></li>
                              <li><a href="#">Kodak</a></li>
                              <li><a href="#">Nikon</a></li>
                              <li><a href="#">Samsung</a></li>
                              <li><a href="#">Sony</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Video Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Genius</a></li>
                              <li><a href="#">Panasonic</a></li>
                              <li><a href="#">Sony</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Webcam</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">A4-Tech</a></li>
                              <li><a href="#">Creative</a></li>
                              <li><a href="#">Genius</a></li>
                              <li><a href="#">Logitech</a></li>
                              <li><a href="#">Mercury</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item menu-item-has-children">
                        <a href="#">Tablets & Smartphones</a>
                        <ul>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">SLR Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Nikon</a></li>
                              <li><a href="#">Samsung</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">SLR Camera (Body Only)</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Nikon</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Compact Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Fuji</a></li>
                              <li><a href="#">Kodak</a></li>
                              <li><a href="#">Nikon</a></li>
                              <li><a href="#">Samsung</a></li>
                              <li><a href="#">Sony</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Video Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Genius</a></li>
                              <li><a href="#">Panasonic</a></li>
                              <li><a href="#">Sony</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Webcam</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">A4-Tech</a></li>
                              <li><a href="#">Creative</a></li>
                              <li><a href="#">Genius</a></li>
                              <li><a href="#">Logitech</a></li>
                              <li><a href="#">Mercury</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item menu-item-has-children">
                        <a href="#">Video Games & Consoles</a>
                        <ul>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">SLR Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Nikon</a></li>
                              <li><a href="#">Samsung</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">SLR Camera (Body Only)</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Nikon</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Compact Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Fuji</a></li>
                              <li><a href="#">Kodak</a></li>
                              <li><a href="#">Nikon</a></li>
                              <li><a href="#">Samsung</a></li>
                              <li><a href="#">Sony</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Video Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Genius</a></li>
                              <li><a href="#">Panasonic</a></li>
                              <li><a href="#">Sony</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Webcam</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">A4-Tech</a></li>
                              <li><a href="#">Creative</a></li>
                              <li><a href="#">Genius</a></li>
                              <li><a href="#">Logitech</a></li>
                              <li><a href="#">Mercury</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item menu-item-has-children">
                        <a href="#">Notebooks & Laptops</a>
                        <ul>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">SLR Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Nikon</a></li>
                              <li><a href="#">Samsung</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">SLR Camera (Body Only)</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Nikon</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Compact Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Fuji</a></li>
                              <li><a href="#">Kodak</a></li>
                              <li><a href="#">Nikon</a></li>
                              <li><a href="#">Samsung</a></li>
                              <li><a href="#">Sony</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Video Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Genius</a></li>
                              <li><a href="#">Panasonic</a></li>
                              <li><a href="#">Sony</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Webcam</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">A4-Tech</a></li>
                              <li><a href="#">Creative</a></li>
                              <li><a href="#">Genius</a></li>
                              <li><a href="#">Logitech</a></li>
                              <li><a href="#">Mercury</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item menu-item-has-children">
                        <a href="#">Gadgets & Components</a>
                        <ul>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">SLR Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Nikon</a></li>
                              <li><a href="#">Samsung</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">SLR Camera (Body Only)</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Nikon</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Compact Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Canon</a></li>
                              <li><a href="#">Fuji</a></li>
                              <li><a href="#">Kodak</a></li>
                              <li><a href="#">Nikon</a></li>
                              <li><a href="#">Samsung</a></li>
                              <li><a href="#">Sony</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Video Camera</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">Genius</a></li>
                              <li><a href="#">Panasonic</a></li>
                              <li><a href="#">Sony</a></li>
                            </ul>
                          </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">Webcam</a>
                            <ul>
                              <li><a href="#">All Brands</a></li>
                              <li><a href="#">A4-Tech</a></li>
                              <li><a href="#">Creative</a></li>
                              <li><a href="#">Genius</a></li>
                              <li><a href="#">Logitech</a></li>
                              <li><a href="#">Mercury</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                    </ul>
                  </div><!-- /.widget-details -->
                </div><!-- /.heading -->
              </div><!-- /.widget -->

              <div class="widget widget_brand_names">
                <h3 class="heading-title">Brands</h3><!-- /.heading-title -->
                <div class="widget-details">
                  <ul>
                    <li><a href="#">All Brands <span class="count pull-right">23</span></a></li>
                    <li><a href="#">Canon <span class="count pull-right">23</span></a></li>
                    <li><a href="#">Fuji <span class="count pull-right">23</span></a></li>
                    <li><a href="#">Kodak <span class="count pull-right">23</span></a></li>
                    <li><a href="#">Nikon <span class="count pull-right">23</span></a></li>
                    <li><a href="#">Samsung <span class="count pull-right">23</span></a></li>
                    <li><a href="#">Sony <span class="count pull-right">23</span></a></li>
                  </ul>
                </div><!-- /.widget-details -->
              </div><!-- /.widget -->

              <div class="widget widget_filter_price">
                <h3 class="heading-title">Price</h3><!-- /.heading-title -->
                <div class="widget-details">
                  <div id="slider-range"></div> 
                  <div class="price-range">
                    <input type="text" id="amount" readonly>
                  </div> 
                  <button class="btn btn-xs filter-btn">Filter</button>
                </div><!-- /.widget-details -->                               
              </div><!-- /.widget -->

              <div class="widget widget_filter_sizes">
                <h3 class="heading-title">Size</h3><!-- /.heading-title -->
                <div class="widget-details">
                  <button>sm</button>
                  <button>s</button>
                  <button>m</button>
                  <button>l</button>
                  <button>xl</button>
                  <button>xxl</button>   
                </div><!-- /.widget-details -->                            
              </div><!-- /.widget --> 

              <div class="widget widget_filter_color">
                <h3 class="heading-title">Color</h3><!-- /.heading-title -->
                <div class="widget-details">
                  <button class="black"></button>
                  <button class="white"></button>
                  <button class="gray"></button>
                  <button class="lime-red"></button>
                  <button class="light-blue"></button>
                  <button class="yellow"></button>  
                </div><!-- /.widget-details -->                             
              </div><!-- /.widget -->              

            </aside><!-- /.sidebar -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.shop-contents -->
@endsection



@section('footer')

@section('outJS')
<script type="text/javascript">

  jQuery(document).ready(function($) {
    "use strict";
    jQuery('.rating-tooltip-manual').rating({
      extendSymbol: function () {
        var title;
        $(this).tooltip({
          container: 'body',
          placement: 'bottom',
          trigger: 'manual',
          title: function () {
            return title;
          }
        });
        $(this).on('rating.rateenter', function (e, rate) {
          title = rate;
          $(this).tooltip('show');
        })
        .on('rating.rateleave', function () {
          $(this).tooltip('hide');
        });
      }
    });

    /*-------- Filter By Price -----------*/

    jQuery( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    jQuery( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );

  });

</script>
@endsection