@extends('layout.headerAndFooter')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Shop</span></p>
            <h1 class="mb-0 bread">Shop</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-lg-10 order-md-last">
    				<div class="row">
						<!-- start:: In Tất cả Sản Phẩm Và Phân Trang-->
						<?php 
							$totalProduct = $countProduct / 8; // Tổng Số Trang 
							$totalPage = ceil($totalProduct);
							foreach($arrProductOfPages as $valueProduct)
							{
						?>
						<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
							<div class="product d-flex flex-column">
								<a href="#" class="img-prod"><img class="img-fluid" src="imagesProduct/{{$valueProduct->img}}" alt="Colorlib Template"> <!-- Chèn Hình Ảnh Ở Đây  -->
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3">
									<div class="d-flex">
										<div class="cat">
											<span>Lifestyle</span>
										</div>
										<div class="rating">
											<p class="text-right mb-0">
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
												<a href="#"><span class="ion-ios-star-outline"></span></a>
											</p>
										</div>
									</div>
									<h3><a href="#">{{$valueProduct->name}}</a></h3>
									<div class="pricing">
										<p><span class="price-sale">{{$valueProduct->unit_price}} VNĐ</span></p>
									</div>
									<p class="bottom-area d-flex px-3">
										<a href="#" class="add-to-cart text-center py-1 mr-1"><span>Add <i class="ion-ios-add ml-1"></i></span></a>
										<a href="#" class="buy-now text-center py-1">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
									</p>
								</div>	
    						</div>
						</div>
						<?php }?>
						<div class="row mt-5">
						<div class="col text-center">
						<div class="block-27">
							<ul>
							<?php for($i = 1; $i <= $totalPage;$i++){?>
							<li><a href="shop?page={{$i}}">{{$i}}</a></li>
							<?php }?>
							</ul>
						</div>
					</div>
		        </div>
		    	</div>
				</div>
				<!-- end:: In Tất cả Sản Phẩm Và Phân Trang-->
		    	<div class="col-md-4 col-lg-2">
		    		<div class="sidebar">
							<div class="sidebar-box-2">
								<h2 class="heading">Categories</h2>
								<div class="fancy-collapse-panel">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingOne">
                             <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Men's Shoes
                                 </a>
                             </h4>
                         </div>
                         <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                             <div class="panel-body">
                                 <ul>
                                 	<li><a href="#">Sport</a></li>
                                 	<li><a href="#">Casual</a></li>
                                 	<li><a href="#">Running</a></li>
                                 	<li><a href="#">Jordan</a></li>
                                 	<li><a href="#">Soccer</a></li>
                                 	<li><a href="#">Football</a></li>
                                 	<li><a href="#">Lifestyle</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingTwo">
                             <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Women's Shoes
                                 </a>
                             </h4>
                         </div>
                         <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                             <div class="panel-body">
                                <ul>
                                 	<li><a href="#">Sport</a></li>
                                 	<li><a href="#">Casual</a></li>
                                 	<li><a href="#">Running</a></li>
                                 	<li><a href="#">Jordan</a></li>
                                 	<li><a href="#">Soccer</a></li>
                                 	<li><a href="#">Football</a></li>
                                 	<li><a href="#">Lifestyle</a></li>
                                </ul>
                             </div>
                         </div>
                     </div>
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingThree">
                             <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Accessories
                                 </a>
                             </h4>
                         </div>
                         <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                             <div class="panel-body">
                                <ul>
                                 	<li><a href="#">Jeans</a></li>
                                 	<li><a href="#">T-Shirt</a></li>
                                 	<li><a href="#">Jacket</a></li>
                                 	<li><a href="#">Shoes</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingFour">
                             <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">Clothing
                                 </a>
                             </h4>
                         </div>
                         <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                             <div class="panel-body">
                                <ul>
                                 	<li><a href="#">Jeans</a></li>
                                 	<li><a href="#">T-Shirt</a></li>
                                 	<li><a href="#">Jacket</a></li>
                                 	<li><a href="#">Shoes</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                  </div>
               </div>
							</div>
							<div class="sidebar-box-2">
								<h2 class="heading">Price Range</h2>
								<form method="post" class="colorlib-form-2">
		              <div class="row">
		                <div class="col-md-12">
		                  <div class="form-group">
		                    <label for="guests">Price from:</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="people" id="people" class="form-control">
		                        <option value="#">1</option>
		                        <option value="#">200</option>
		                        <option value="#">300</option>
		                        <option value="#">400</option>
		                        <option value="#">1000</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-12">
		                  <div class="form-group">
		                    <label for="guests">Price to:</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="people" id="people" class="form-control">
		                        <option value="#">2000</option>
		                        <option value="#">4000</option>
		                        <option value="#">6000</option>
		                        <option value="#">8000</option>
		                        <option value="#">10000</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		              </div>
		            </form>
							</div>
						</div>
    			</div>
    		</div>
    	</div>
    </section>
		
		<section class="ftco-gallery">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
            <h2 class="mb-4">Follow Us On Instagram</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
    		</div>
    	</div>
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-5.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-6.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>
@endsectionrow