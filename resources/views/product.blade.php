@extends('layout')

@section('content')
   <!--breadcrumbs area start-->
   <div class="breadcrumbs_area">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index-2.html">home</a></li>
                        <li>Product details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->

<!--product details start-->
<div class="product_details mt-60 mb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
               <div class="product-details-tab">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="javascript:void(0)">
                            <img id="zoom1" src="{{$product->p_img}}" data-zoom-image="{{$product->p_img}}" alt="big-1">
                        </a>
                    </div>
                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                           @foreach ($products_img as $product_img)
                           @if ($product_img->p_img!=$product->p_img)
                               
                          
                           <li>
                            <a href="javascript:void(0)" class="elevatezoom-gallery active" data-update="" data-image="{{$product_img->p_img}}" data-zoom-image="{{$product_img->p_img}}">
                                <img src="{{$product_img->p_img}}" alt="zo-th-1"/>
                            </a>

                        </li> @endif
                           @endforeach
                            {{-- <li >
                                <a href="javascript:void(0)" class="elevatezoom-gallery active" data-update="" data-image="/assets/img/product/details-3.jpg" data-zoom-image="/assets/img/product/details-3.jpg">
                                    <img src="/assets/img/product/details-3.jpg" alt="zo-th-1"/>
                                </a>

                            </li>
                            <li >
                                <a href="javascript:void(0)" class="elevatezoom-gallery active" data-update="" data-image="/assets/img/product/details-4.jpg" data-zoom-image="/assets/img/product/details-4.jpg">
                                    <img src="/assets/img/product/details-4.jpg" alt="zo-th-1"/>
                                </a>

                            </li> --}}
                            <li >
                                <a href="javascript:void(0)" class="elevatezoom-gallery active" data-update="" data-image="{{$product->p_img}}" data-zoom-image="{{$product->p_img}}">
                                    <img src="{{$product->p_img}}" alt="zo-th-1"/>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">
                   <form action="/cart_add" method="post">
                    @csrf
                        <h1>{{$product->p_name}}</h1>
                      
                        <div class=" product_ratting">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                <li class="review"><a href="javascript:void(0)"> (250 reviews) </a></li>
                            </ul>
                            
                        </div>
                        <div class="price_box">
                            <span class="current_price">${{$product->p_price}}</span>
                            <span class="old_price">${{$product->p_price+50}}</span>
                            
                        </div>
                        <div class="product_desc">
                            <ul>
                                <li>In Stock</li>
                                <li>Free delivery available*</li>
                                <li>Sale 30% Off Use Code : 'Drophut'</li>
                            </ul>
                            <p>{{$product->p_desc}}</p>
                        </div>
                        <div class="product_timing">
                            <div data-countdown="2023/12/15"></div>
                        </div>
                        <div class="product_variant color">
                            <h3>Available Options</h3>
                            <label>color</label>
                            <ul>
                                <li class="color1"><a href="javascript:void(0)"></a></li>
                                <li class="color2"><a href="javascript:void(0)"></a></li>
                                <li class="color3"><a href="javascript:void(0)"></a></li>
                                <li class="color4"><a href="javascript:void(0)"></a></li>
                            </ul>
                        </div>
                        <div class="product_variant quantity">
                            <label>quantity</label>
                            <input min="1" max="100" name="quantity"  value="1" type="number">  
                            <input type="hidden" name="product_id" value={{$product->id}}>
                            <button class="button" type="submit">add to cart</button>  
                            
                        </div>
                        <div class=" product_d_action">
                           <ul>
                               <li><a href="javascript:void(0)" title="Add to wishlist">+ Add to Wishlist</a></li>
                               <li><a href="javascript:void(0)" title="Add to wishlist">+ Compare</a></li>
                           </ul>
                        </div>
                        <div class="product_meta">
                            <span>Category: <a href="javascript:void(0)">{{$product->category}}</a></span>
                        </div>
                        
                    </form>
                    <div class="priduct_social">
                        <ul>
                            <li><a class="facebook" href="javascript:void(0)" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>           
                            <li><a class="twitter" href="javascript:void(0)" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>           
                            <li><a class="pinterest" href="javascript:void(0)" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>           
                            <li><a class="google-plus" href="javascript:void(0)" title="google +"><i class="fa fa-google-plus"></i> share</a></li>        
                            <li><a class="linkedin" href="javascript:void(0)" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>        
                        </ul>      
                    </div>

                </div>
            </div>
        </div>
    </div>    
</div>
<!--product details end-->

<!--product info start-->
<div class="product_d_info mb-60">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">   
                    <div class="product_info_button">    
                        <ul class="nav" role="tablist">
                            <li >
                                <a class="active" data-toggle="tab" href="javascript:void(0)info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                            </li>
                            <li>
                                 <a data-toggle="tab" href="javascript:void(0)sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                            </li>
                            <li>
                               <a data-toggle="tab" href="javascript:void(0)reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="info" role="tabpanel" >
                            <div class="product_info_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                            </div>    
                        </div>
                        <div class="tab-pane fade" id="sheet" role="tabpanel" >
                            <div class="product_d_table">
                               <form action="javascript:void(0)">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="first_child">Compositions</td>
                                                <td>Polyester</td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">Styles</td>
                                                <td>Girly</td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">Properties</td>
                                                <td>Short Dress</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <div class="product_info_content">
                                <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                            </div>    
                        </div>

                        <div class="tab-pane fade" id="reviews" role="tabpanel" >
                            <div class="reviews_wrapper">
                                <h2>1 review for Donec eu furniture</h2>
                                <div class="reviews_comment_box">
                                    <div class="comment_thmb">
                                        <img src="/assets/img/blog/comment2.jpg" alt="">
                                    </div>
                                    <div class="comment_text">
                                        <div class="reviews_meta">
                                            <div class="star_rating">
                                                <ul>
                                                    <li><a href="javascript:void(0)"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="ion-ios-star"></i></a></li>
                                                </ul>   
                                            </div>
                                            <p><strong>admin </strong>- September 12, 2018</p>
                                            <span>roadthemes</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="comment_title">
                                    <h2>Add a review </h2>
                                    <p>Your email address will not be published.  Required fields are marked </p>
                                </div>
                                <div class="product_ratting mb-10">
                                   <h3>Your rating</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_review_form">
                                    <form action="javascript:void(0)">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="review_comment">Your review </label>
                                                <textarea name="comment" id="review_comment" ></textarea>
                                            </div> 
                                            <div class="col-lg-6 col-md-6">
                                                <label for="author">Name</label>
                                                <input id="author"  type="text">

                                            </div> 
                                            <div class="col-lg-6 col-md-6">
                                                <label for="email">Email </label>
                                                <input id="email"  type="text">
                                            </div>  
                                        </div>
                                        <button type="submit">Submit</button>
                                     </form>   
                                </div> 
                            </div>     
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>    
</div>  
<!--product info end-->
@endsection